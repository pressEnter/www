<?php

/**
 * This is the model class for table "post_categories".
 *
 * The followings are the available columns in table 'post_categories':
 * @property integer $id
 * @property string $description
 * @property string $slug
 *
 * The followings are the available model relations:
 * @property Posts[] $posts
 */
class PostCategory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PostCategory the static model class
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
		return 'post_categories';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('description, slug', 'required'),
			array('description, slug', 'length', 'max'=>99),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('description, slug', 'safe', 'on'=>'search'),
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
			'posts' => array(self::HAS_MANY, 'Post', 'category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'description' => 'Description',
			'slug' => 'Slug',
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

		$criteria->compare('description',$this->description,true);
		$criteria->compare('slug',$this->slug,true);

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
				'columns' => array('description'),
				'unique' => true,
				'update' => true,
			),
		);
	}
}
