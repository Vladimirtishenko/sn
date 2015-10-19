<?php

/**
 * This is the model class for table "front".
 *
 * The followings are the available columns in table 'front':
 * @property integer $id
 * @property string $title_ru
 * @property string $title_uk
 * @property string $description_ru
 * @property string $description_uk
 * @property string $vkontakte
 * @property string $facebook
 * @property string $tvitter
 * @property string $image_thumb
 * @property string $image
 * @property string $meta_title_ru
 * @property string $meta_title_uk
 * @property string $meta_description_ru
 * @property string $meta_description_uk
 * @property integer $region_id
 * @property integer $on_front
 * @property integer $prezidia
 * @property integer $politrada
 * @property integer $ckrk
 * @property integer $lider
 * @property string $tiny_desc_uk
 * @property string $tiny_desc_ru
 * @property string $simple_ru
 * @property string $simple_uk
 * @property string $mark
 */
class Front extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'front';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('title_ru, title_uk, description_ru, description_uk, region_id', 'required'),
			array('region_id, on_front, prezidia, politrada, ckrk, lider', 'numerical', 'integerOnly'=>true),
			array('title_ru, title_uk, vkontakte, facebook, tvitter, image_thumb, image, meta_title_ru, meta_title_uk, meta_description_ru, meta_description_uk, simple_ru, simple_uk, mark', 'length', 'max'=>255),
			array('tiny_desc_uk, tiny_desc_ru', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title_ru, title_uk, description_ru, description_uk, vkontakte, facebook, tvitter, image_thumb, image, meta_title_ru, meta_title_uk, meta_description_ru, meta_description_uk, region_id, on_front, prezidia, politrada, ckrk, lider, tiny_desc_uk, tiny_desc_ru, simple_ru, simple_uk, mark', 'safe', 'on'=>'search'),
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
			'vkontakte' => Yii::t('main', 'Vkontakte'),
			'facebook' => Yii::t('main', 'Facebook'),
			'tvitter' => Yii::t('main', 'Tvitter'),
			'image_thumb' => Yii::t('main', 'Малое изображение'),
			'image' => Yii::t('main', 'Image'),
			'meta_title_ru' => Yii::t('main', 'Meta Title Ru'),
			'meta_title_uk' => Yii::t('main', 'Meta Title Uk'),
			'meta_description_ru' => Yii::t('main', 'Meta Description Ru'),
			'meta_description_uk' => Yii::t('main', 'Meta Description Uk'),
			'region_id' => Yii::t('main', 'Регион'),
			'on_front' => Yii::t('main', 'На главной'),
			'prezidia' => Yii::t('main', 'Член президии'),
			'politrada' => Yii::t('main', 'Член политсовета'),
			'ckrk' => Yii::t('main', 'ЦКРК'),
			'lider' => Yii::t('main', 'Лидер'),
			'tiny_desc_uk' => Yii::t('main', 'Короткое описание Uk'),
			'tiny_desc_ru' => Yii::t('main', 'Короткое описание Ru'),
			'simple_ru' => Yii::t('main', 'Цитата Ru'),
			'simple_uk' => Yii::t('main', 'Цитата Uk'),
			'mark' => Yii::t('main', 'Подпись'),

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
		$criteria->compare('description_ru',$this->description_ru,true);
		$criteria->compare('description_uk',$this->description_uk,true);
		$criteria->compare('vkontakte',$this->vkontakte,true);
		$criteria->compare('facebook',$this->facebook,true);
		$criteria->compare('tvitter',$this->tvitter,true);
		$criteria->compare('image_thumb',$this->image_thumb,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('meta_title_ru',$this->meta_title_ru,true);
		$criteria->compare('meta_title_uk',$this->meta_title_uk,true);
		$criteria->compare('meta_description_ru',$this->meta_description_ru,true);
		$criteria->compare('meta_description_uk',$this->meta_description_uk,true);
		$criteria->compare('region_id',$this->region_id);
		$criteria->compare('on_front',$this->on_front);
		$criteria->compare('prezidia',$this->prezidia);
		$criteria->compare('politrada',$this->politrada);
		$criteria->compare('ckrk',$this->ckrk);
		$criteria->compare('lider',$this->lider);
		$criteria->compare('tiny_desc_uk',$this->tiny_desc_uk,true);
		$criteria->compare('tiny_desc_ru',$this->tiny_desc_ru,true);
		$criteria->compare('simple_ru',$this->simple_ru,true);
		$criteria->compare('simple_uk',$this->simple_uk,true);
		$criteria->compare('mark',$this->mark,true);
		if(Yii::app()->user->role == 'manager') {
            $user = User::model()->findByPk(Yii::app()->user->id);
           $criteria->addCondition('region_id = '.$user->region_id);
        } else {
            $criteria->compare('region_id',$this->region_id,true);
        }

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Front the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
