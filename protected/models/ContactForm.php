<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class ContactForm extends CFormModel
{
    public $region;
    public $city;
    public $category;
	public $name;
	public $email;
	public $subject;
	public $body;
	public $verifyCode;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('name, email, body, region, city, category', 'required'),
			// email has to be a valid email address
			array('email', 'email'),
			// verifyCode needs to be entered correctly
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
            array('region', 'safe', 'on'=>'search'),
		);
	}

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'name' => Yii::t('main', 'Ваше имя'),
            'subject' => Yii::t('main', 'Тема'),
            'body' => Yii::t('main', 'Сообщение'),
            'verifyCode' => Yii::t('main', 'Код проверки'),
            'region' => Yii::t('main', 'Область'),
            'city' => Yii::t('main', 'Город'),
            'category' => Yii::t('main', 'Категория вопроса'),
        );
    }
}