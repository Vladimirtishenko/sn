<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class AdminController extends CController
{
    public function init()
    {
        $this->getMenu();
        if(Yii::app()->user->role == 'manager' && Yii::app()->controller->id !== 'news')
        {
            $this->redirect(Yii::app()->createUrl('/admin/news/index'));
        }
    }
    public $layout='/layouts/admin';
    public $actionHeader = '';
    public $mainMenu = array();
    public $breadcrumbs=array();
    private $_assetsPath;

    public function getAssetsPath()
    {
        if ($this->_assetsPath === null) {
            $this->_assetsPath = Yii::app()->assetManager->publish(
                Yii::getPathOfAlias('application.modules.admin.assets'),
                false,
                -1,
                YII_DEBUG
            );
        }
        return $this->_assetsPath;
    }

    public function getMenu()
    {
       $this->mainMenu = array(

            array(
                'label'=>'
                <i class="fa fa-file-text-o"></i>
                <span>Новости</span>
            ',
                'url'=>array('/admin/news/index'),
            ),
            array(
                'label'=>'
                <i class="fa fa-shopping-cart"></i>
                <span>Галерея фото</span>
                <small class="badge pull-right bg-green">new</small>
            ',
                'url'=>array('/admin/photoCategory/index'),
                'visible'=>Yii::app()->user->role == 'admin',
            ),
            array(
                'label'=>'
                <i class="fa fa-shopping-cart"></i>
                <span>Фотографии</span>
                <small class="badge pull-right bg-green">new</small>
            ',
                'url'=>array('/admin/photo/index'),
                'visible'=>Yii::app()->user->role == 'admin',
            ),
            array(
                'label'=>'
                <i class="fa fa-shopping-cart"></i>
                <span>Видеозаписи</span>
                <small class="badge pull-right bg-green">new</small>
            ',
                'url'=>array('/admin/video/index'),
                'visible'=>Yii::app()->user->role == 'admin',
            ),
            array(
                'label'=>'
                <i class="fa fa-shopping-cart"></i>
                <span>О партии</span>
                <small class="badge pull-right bg-green">new</small>
            ',
                'url'=>array('/admin/about/index'),
                'visible'=>Yii::app()->user->role == 'admin',
            ),
            array(
                'label'=>'
                <i class="fa fa-shopping-cart"></i>
                <span>Статут</span>
                <small class="badge pull-right bg-green">new</small>
            ',
                'url'=>array('/admin/statut/index'),
                'visible'=>Yii::app()->user->role == 'admin',
            ),
            array(
                'label'=>'
                <i class="fa fa-shopping-cart"></i>
                <span>Программа</span>
                <small class="badge pull-right bg-green">new</small>
            ',
                'url'=>array('/admin/programm/index'),
                'visible'=>Yii::app()->user->role == 'admin',
            ),
            array(
                'label'=>'
                <i class="fa fa-shopping-cart"></i>
                <span>Идеология</span>
                <small class="badge pull-right bg-green">new</small>
            ',
                'url'=>array('/admin/ideology/index'),
                'visible'=>Yii::app()->user->role == 'admin',
            ),
            array(
                'label'=>'
                <i class="fa fa-shopping-cart"></i>
                <span>Фронтмены</span>
                <small class="badge pull-right bg-green">new</small>
            ',
                'url'=>array('/admin/front/index'),
            ),
            array(
                'label'=>'
                <i class="fa fa-shopping-cart"></i>
                <span>Модальные окна</span>
                <small class="badge pull-right bg-green">new</small>
            ',
                'url'=>array('/admin/modals/index'),
                'visible'=>Yii::app()->user->role == 'admin',
            ),
            array(
                'label'=>'
                <i class="fa fa-shopping-cart"></i>
                <span>Месные организации партии</span>
                <small class="badge pull-right bg-green">new</small>
            ',
                'url'=>array('/admin/organizations/index'),
                'visible'=>Yii::app()->user->role == 'admin',
            ),

        );
    }


    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow',
                'actions' => array('login'),
                'users' => array('*'),// для всех
            ),
            array('allow',
                'actions' => array('view', 'create', 'update', 'delete', 'index', 'logout','admin', 'upload', 'crop'),
                'roles' => array('admin'),// для авторизованных
            ),
            array('allow',
                'actions' => array('view', 'create', 'update', 'delete', 'index', 'logout','admin', 'upload', 'crop'),
                'roles' => array('manager'),// для авторизованных
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }
}