<?php

/**
 * This is the model class for table "regions".
 *
 * The followings are the available columns in table 'regions':
 * @property integer $id
 * @property string $title_ru
 * @property string $title_uk
 * @property string $image
 * @property string $description_ru
 * @property string $description_uk
 */
class Regions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'regions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('title_ru, title_uk', 'required'),
			array('title_ru, title_uk, image', 'length', 'max'=>255),
			array('description_ru, description_uk', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title_ru, title_uk, image, description_ru, description_uk', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('main', 'ID'),
			'title_ru' => Yii::t('main', 'Заглавие Ru'),
			'title_uk' => Yii::t('main', 'Заглавие Uk'),
			'image' => Yii::t('main', 'Изображение'),
			'description_ru' => Yii::t('main', 'Описание Ru'),
			'description_uk' => Yii::t('main', 'Описание Uk'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title_ru',$this->title_ru,true);
		$criteria->compare('title_uk',$this->title_uk,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('description_ru',$this->description_ru,true);
		$criteria->compare('description_uk',$this->description_uk,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Regions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
