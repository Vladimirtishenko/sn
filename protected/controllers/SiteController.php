<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
        $page = About::model()->findByPk(1);
        $criteria = new CDbCriteria();
        $criteria->limit = 2;
        $criteria->group = 'id DESC';
        $videos = Video::model()->findAll($criteria);
        $criteria->limit = 3;
        $criteria->condition = 'region_id = :region_id';
        $criteria->params = array(':region_id'=>12);
        $news = News::model()->findAll($criteria);
        $this->render('index', array('page'=>$page ,'news'=>$news, 'videos'=>$videos));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
        $this->layout = '404'; 
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('404', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}


	public function actionAbout()
	{
		$page = About::model()->findByPk(1);
        $criteria = new CDbCriteria();
        $criteria->group = 'id DESC';
        $criteria->limit = 3;
        $criteria->condition = 'region_id = 12 OR region_id = 0';
        $news = News::model()->findAll($criteria);
        $this->render('textPage', array('page'=>$page ,'news'=>$news));
	}

    public function actionIdeology()
    {
        $page = Ideology::model()->findByPk(1);
        $criteria = new CDbCriteria();
        $criteria->group = 'id DESC';
        $criteria->limit = 3;
        $criteria->condition = 'region_id = 12 OR region_id = 0';
        $news = News::model()->findAll($criteria);
        $this->render('statutAndProgramm', array('page'=>$page ,'news'=>$news));
    }

    public function actionStatut()
    {
        $page = Statut::model()->findByPk(1);
        $criteria = new CDbCriteria();
        $criteria->group = 'id DESC';
        $criteria->limit = 3;
        $criteria->condition = 'region_id = 12 OR region_id = 0';
        $news = News::model()->findAll($criteria);
        $this->render('statutAndProgramm', array('page'=>$page ,'news'=>$news));
    }

    public function actionProgramm()
    {
        $page = Programm::model()->findByPk(1);
        $criteria = new CDbCriteria();
        $criteria->group = 'id DESC';
        $criteria->limit = 3;
        $criteria->condition = 'region_id = 12 OR region_id = 0';
        $news = News::model()->findAll($criteria);
        $this->render('statutAndProgramm', array('page'=>$page ,'news'=>$news));
    }

	public function actionPhoto($id = null)
	{
        $criteria = new CDbCriteria();
        $criteria->limit = 2;
        $criteria->group = 'id DESC';
        $videos = Video::model()->findAll($criteria);

        if(isset($id)) {
            $photos = Photo::model()->findAll('category_id = :id', array(':id'=>$id));
            $category = PhotoCategory::model()->findByPk($id);
            $this->render('singlePhoto', array('photos'=>$photos, 'videos'=>$videos, 'category'=>$category));
        } else {
            $data = new CActiveDataProvider('PhotoCategory',
                array(
                    'criteria'=>array(
                        'order'=>'id DESC',
                    ),
                    'sort'=>false,
                    'pagination'=>array(
                        'pageSize'=>6
                    ),
                )
            );
            $this->render('photo', array('data'=>$data ,'videos'=>$videos));
        }
	}

    public function actionSearch()
    {
        if(isset($_GET['find']) && !empty($_GET['find']))
        {
            $keyword = trim(strip_tags($_GET['find']));
            $criteria = new CDbCriteria();
            $criteria->distinct = true;

            if(Yii::app()->language == 'ru')
                $criteria->condition = 'title_ru LIKE :keyword OR description_ru LIKE :keyword';
            else
                $criteria->condition = 'title_uk LIKE :keyword OR description_uk LIKE :keyword';

            $criteria->order = 'date DESC';
            $criteria->params = array(':keyword'=>'%'.$keyword.'%');

            $data = new CActiveDataProvider('News',
                array(
                    'criteria'=>$criteria,
                    'sort'=>false,
                    'pagination'=>array(
                        'pageSize'=>6
                    ),
                )
            );

            $this->render('news', array(
                'data'=>$data
            ));
        }
        else
        {
            $this->redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function actionVideo($id = null)
    {
        $criteria = new CDbCriteria();
        $criteria->limit = 2;
        $criteria->group = 'id DESC';
        $photos = PhotoCategory::model()->findAll($criteria);

        if(isset($id)) {
            $criteria = new CDbCriteria();
            $criteria->group = 'id DESC';
            $criteria->limit = 3;
            $criteria->condition = 'region_id = 12 OR region_id = 0';
            $news = News::model()->findAll($criteria);
            $video = Video::model()->findByPk($id);
            $videos = Video::model()->findAll(array('limit'=>4));
            $this->render('singleVideo', array('video'=>$video, 'photos'=>$photos, 'videos'=>$videos, 'news'=>$news));
        } else {
            $data = new CActiveDataProvider('Video',
                array(
                    'criteria'=>array(
                        'order'=>'id DESC',
                    ),
                    'sort'=>false,
                    'pagination'=>array(
                        'pageSize'=>6
                    ),
                )
            );
            $this->render('video', array('data'=>$data ,'photos'=>$photos));
        }
    }

	public function actionRegions()
	{
        $region = Regions::model()->findByPk(12);
        $this->render('regions', array('region'=>$region));
	}

	public function actionNews()
	{
        if(isset($_GET['id'])) {
            $criteria = new CDbCriteria();
            $criteria->group = 'id DESC';
            $criteria->limit = 3;
            $criteria->condition = 'region_id = 12 OR region_id = 0';
            $news = News::model()->findAll($criteria);
            $page = News::model()->findByPk($_GET['id']);
            $this->render('singleNews', array('page'=>$page, 'news'=>$news));
        } elseif(isset($_GET['region_id'])) {
            $data = new CActiveDataProvider('News',
                array(
                    'criteria'=>array(
                        'order'=>'id DESC',
                        'condition'=>'region_id = :id',
                        'params'=>array(':id'=>$_GET['region_id']),
                    ),
                    'sort'=>false,
                    'pagination'=>array(
                        'pageSize'=>6
                    ),
                )
            );
            $this->render('news', array('data'=>$data));
        } elseif(isset($_GET['date'])) {
            $criteria = new CDbCriteria();
            $criteria->distinct = true;
            $criteria->condition='date >= :date_start AND date <= :date_end';
            $criteria->params = array(':date_start'=>$_GET['date'].' 00.00.00', ':date_end'=>$_GET['date'].' 23.59.59');
            $criteria->order = 'date DESC';
            $data = new CActiveDataProvider('News',
                array(
                    'criteria'=>$criteria,
                    'sort'=>false,
                    'pagination'=>array(
                        'pageSize'=>6
                    ),
                )
            );
            $this->render('news', array('data'=>$data));
        } else {
            $data = new CActiveDataProvider('News',
                array(
                    'criteria'=>array(
                        'order'=>'id DESC',
                        'condition'=>'region_id = 12 OR region_id = 0',
                    ),
                    'sort'=>false,
                    'pagination'=>array(
                        'pageSize'=>6
                    ),
                )
            );
            $this->render('news', array('data'=>$data));
        }
	}
	public function actionSingleVideo()
	{
		$page = About::model()->findByPk(1);
        $criteria = new CDbCriteria();
        $criteria->limit = 2;
        $criteria->group = 'id DESC';
        $videos = Video::model()->findAll($criteria);
        $criteria->limit = 3;
        $criteria->condition = 'region_id = :region_id';
        $criteria->params = array(':region_id'=>0);
        $news = News::model()->findAll($criteria);
        $this->render('singleVideo', array('page'=>$page ,'news'=>$news, 'videos'=>$videos));
	}

	public function actionLiders()
	{
        $title = array('ru' => 'Президия', 'uk' => 'Президіум');
		$liders = Front::model()->findAll(array('condition'=>'prezidia = 1 AND region_id = 12'));
        $this->render('liders', array('liders'=>$liders, 'title'=>$title));
	}

    public function actionPolitRada()
    {
        $title = array('ru' => 'Политический совет', 'uk' => 'Політична рада');
        $liders = Front::model()->findAll(array('condition'=>'politrada = 1 AND region_id = 12'));
        $this->render('liders', array('liders'=>$liders, 'title'=>$title));
    }
	/*public function actionNews()
	{
		$page = About::model()->findByPk(1);
        $this->render('news', array('page'=>$page ,'news'=>$news));
	}*/

    public function actionGetRegion()
    {
        if(isset($_POST['id'])) {
            $region = Regions::model()->findByPk($_POST['id']);
            $this->renderPartial('regionBottom', array('region'=>$region));
        }
    }

    public function actionGetModal()
    {
        if(isset($_POST)) {
            if($_POST['username'] == 'online') {
                $model = Modals::model()->findByPk(2);
                $array = Yii::app()->language == 'ru' ? array('title'=>$model->title_ru, 'text'=>$model->description_ru) : array('title'=>$model->title_uk, 'text'=>$model->description_uk);
                $array['TextareaFiled'] = Yii::app()->language == 'ru' ? 'Ваш вопрос' : 'Ваше питання';
                echo json_encode($array);
                Yii::app()->end();
            } else {
                $model = Modals::model()->findByPk(1);
                $array = Yii::app()->language == 'ru' ? array('title'=>$model->title_ru, 'text'=>$model->description_ru) : array('title'=>$model->title_uk, 'text'=>$model->description_uk);
                $array['TextareaFiled'] = Yii::app()->language == 'ru' ? 'Комментарий' : 'Коментар';
                echo json_encode($array);
                Yii::app()->end();
            }
        }
    }
}