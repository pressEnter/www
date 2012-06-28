<?php

/**
 * This is the model class for table "posts".
 *
 * The followings are the available columns in table 'posts':
 * @property integer $id
 * @property string $published_date
 * @property integer $category_id
 * @property string $title
 * @property string $slug
 * @property string $body
 * @property integer $published
 * @property integer $author_id
 *
 * The followings are the available model relations:
 * @property PostImages[] $postImages
 * @property PostCategories $category
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
			array('title, slug, body', 'required'),
			array('category_id, published, author_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max' => 99),
			array('slug', 'length', 'max' => 255),
			array('published_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('category_id, title, published, author_id', 'safe', 'on'=>'search'),
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
			'category' => array(self::BELONGS_TO, 'PostCategory', 'category_id'),
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
			'category_id' => 'Category',
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

		$criteria->compare('category_id',$this->category_id);
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
}
