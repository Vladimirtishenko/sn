<?php

/**
 * This is the model class for table "options".
 *
 * The followings are the available columns in table 'options':
 * @property integer $id
 * @property string $site_name
 * @property string $email
 * @property integer $top_news_count
 * @property integer $short_description_symbols
 */
class Options extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'options';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('top_news_count, short_description_symbols', 'numerical', 'integerOnly'=>true),
			array('site_name, email', 'length', 'max'=>150),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'site_name' => Yii::t('main', 'Название сайта'),
			'email' => 'Email',
			'top_news_count' => Yii::t('main', 'Колличество главных новостей'),
			'short_description_symbols' => Yii::t('main', 'Колличество символов короткого описания'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Settings the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
