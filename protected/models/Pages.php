<?php

/**
 * This is the model class for table "pages".
 *
 * The followings are the available columns in table 'pages':
 * @property integer $id
 * @property string $title_ru
 * @property string $title_uk
 * @property string $date
 * @property string $description_ru
 * @property string $description_uk
 * @property string $meta_title_ru
 * @property string $meta_title_uk
 * @property string $meta_description_ru
 * @property string $meta_description_uk
 * @property string $meta_keywords_ru
 * @property string $meta_keywords_uk
 */
class Pages extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pages';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('title_ru, title_uk', 'required'),
			array('title_ru, title_uk, meta_title_ru, meta_title_uk, meta_description_ru, meta_description_uk, meta_keywords_ru, meta_keywords_uk', 'length', 'max'=>255),
			array('date, description_ru, description_uk', 'safe'),
			// @todo Удалить ненужные для поиска поля.
			array('id, title_ru, title_uk, date, description_ru, description_uk, meta_title_ru, meta_title_uk, meta_description_ru, meta_description_uk, meta_keywords_ru, meta_keywords_uk', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array Связаные модели.
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
			'id' => 'ID',
			'title_ru' => Yii::t('main', 'Заглавие RU'),
			'title_uk' => Yii::t('main', 'Заглавие UK'),
			'date' => Yii::t('main', 'Дата'),
			'description_ru' => Yii::t('main', 'Описание RU'),
			'description_uk' => Yii::t('main', 'Описание UK'),
			'meta_title_ru' => Yii::t('main', 'Meta Title RU'),
			'meta_title_uk' => Yii::t('main', 'Meta Title UK'),
			'meta_description_ru' => Yii::t('main', 'Meta Description RU'),
			'meta_description_uk' => Yii::t('main', 'Meta Description UK'),
			'meta_keywords_ru' => Yii::t('main', 'Meta Keywords RU'),
			'meta_keywords_uk' => Yii::t('main', 'Meta Keywords UK'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions
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
		$criteria->compare('date',$this->date,true);
		$criteria->compare('description_ru',$this->description_ru,true);
		$criteria->compare('description_uk',$this->description_uk,true);
		$criteria->compare('meta_title_ru',$this->meta_title_ru,true);
		$criteria->compare('meta_title_uk',$this->meta_title_uk,true);
		$criteria->compare('meta_description_ru',$this->meta_description_ru,true);
		$criteria->compare('meta_description_uk',$this->meta_description_uk,true);
		$criteria->compare('meta_keywords_ru',$this->meta_keywords_ru,true);
		$criteria->compare('meta_keywords_uk',$this->meta_keywords_uk,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pages the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
