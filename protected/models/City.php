<?php

/**
 * This is the model class for table "city".
 *
 * The followings are the available columns in table 'city':
 * @property integer $id
 * @property integer $region_id
 * @property string $name
 * @property string $phone_code
 */
class City extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'city';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('region_id', 'required'),
			array('region_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('phone_code', 'length', 'max'=>7),
			// @todo Удалить ненужные для поиска поля.
			array('id, region_id, name, phone_code', 'safe', 'on'=>'search'),
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
			'region_id' => 'Регион',
			'name' => 'Название',
			'phone_code' => 'Телефонный код',
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
		$criteria->compare('region_id',$this->region_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('phone_code',$this->phone_code,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return City the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
