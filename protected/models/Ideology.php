<?php

/**
 * This is the model class for table "ideology".
 *
 * The followings are the available columns in table 'ideology':
 * @property string $id
 * @property string $title_ru
 * @property string $title_uk
 * @property string $description_ru
 * @property string $description_uk
 * @property string $meta_title_ru
 * @property string $meta_title_uk
 * @property string $meta_description_ru
 * @property string $meta_description_uk
 */
class Ideology extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ideology';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('title_ru, title_uk, description_ru, description_uk', 'required'),
			array('title_ru, title_uk, meta_title_ru, meta_title_uk, meta_description_ru, meta_description_uk', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title_ru, title_uk, description_ru, description_uk, meta_title_ru, meta_title_uk, meta_description_ru, meta_description_uk', 'safe', 'on'=>'search'),
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
			'description_ru' => Yii::t('main', 'Описание Ru'),
			'description_uk' => Yii::t('main', 'Описание Uk'),
			'meta_title_ru' => Yii::t('main', 'Meta Title Ru'),
			'meta_title_uk' => Yii::t('main', 'Meta Title Uk'),
			'meta_description_ru' => Yii::t('main', 'Meta Description Ru'),
			'meta_description_uk' => Yii::t('main', 'Meta Description Uk'),
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('title_ru',$this->title_ru,true);
		$criteria->compare('title_uk',$this->title_uk,true);
		$criteria->compare('description_ru',$this->description_ru,true);
		$criteria->compare('description_uk',$this->description_uk,true);
		$criteria->compare('meta_title_ru',$this->meta_title_ru,true);
		$criteria->compare('meta_title_uk',$this->meta_title_uk,true);
		$criteria->compare('meta_description_ru',$this->meta_description_ru,true);
		$criteria->compare('meta_description_uk',$this->meta_description_uk,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ideology the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
