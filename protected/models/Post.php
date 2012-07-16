<?php

/**
 * This is the model class for table "posts".
 *
 * The followings are the available columns in table 'posts':
 * @property integer $id
 * @property string $published_date
 * @property string $title
 * @property string $slug
 * @property string $body
 * @property integer $published
 * @property integer $author_id
 *
 * The followings are the available model relations:
 * @property PostImages[] $postImages
 * @property PostCategories[] $categories
 */
class Post extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Post the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'posts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, body', 'required'),
			array('published, author_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max' => 99),
			array('slug', 'length', 'max' => 255),
			array('published_date', 'type', 'type' => 'datetime', 'datetimeFormat' => 'yyyy-MM-dd hh:mm:ss', 'message' => 'La fecha parece inválida.'),
			array('published_date', 'default', 'value' => date('Y-m-d h:i:s')),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('title, published, author_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'images' => array(self::HAS_MANY, 'PostImage', 'post_id'),
			'author' => array(self::BELONGS_TO, 'User', 'author_id'),
			'categories' => array(self::MANY_MANY, 'PostCategory', 'posts_categories(post_id,category_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'published_date' => 'Published Date',
			'categories' => 'Categories',
			'title' => 'Title',
			'slug' => 'Slug',
			'body' => 'Body',
			'published' => 'Published',
			'author_id' => 'Author',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('title',$this->title,true);
		$criteria->compare('published',$this->published);
		$criteria->compare('author_id',$this->author_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	* Behaviors for this model
	*/
	public function behaviors(){
		return array(
			'sluggable' => array(
				'class'=>'ext.behaviors.SluggableBehavior.SluggableBehavior',
				'columns' => array('title'),
				'unique' => true,
				'update' => true,
			),
		);
	}
	
	/**
	 *  Method used to populate checkbox list while create/edit 
	 */ 
	public function getCategoriesIds(){
		$array = array();
		foreach($this->categories as $cat){
			$array[] = (int)$cat['id'];
		}
		return $array;
	}
	/**
	 * 
	 * Called manually after saving post in controller
	 * 
	 */ 
	public function saveCategories($ids){
		$insert_sql = "INSERT INTO posts_categories (post_id, category_id) VALUES (:post_id, :category_id);";
		$delete_sql = "DELETE FROM posts_categories WHERE post_id = :post_id AND category_id = :category_id;";
		
		$in_db = Post::model()->findByPk($this->id)->categories;
		$current_values = array();
		foreach($in_db as $tmp){
			$current_values[] = $tmp->id;
		}
		
		$delete_values = array_diff($current_values, $ids);
		$insert_values = array_diff($ids, $current_values);
		
		foreach($delete_values as $category_id){
			Yii::app()->db->createCommand($delete_sql)->bindValues(array(':post_id' => $this->id, ':category_id' => $category_id))->execute();
		}
		// passed values
		foreach($insert_values as $category_id){
			Yii::app()->db->createCommand($insert_sql)->bindValues(array(':post_id' => $this->id, ':category_id' => $category_id))->execute();
		}
	}
	
}
