<?php
/* @var $this OrganizationsController */
/* @var $model Organizations */
$this->actionHeader = Yii::t('main', 'Добавление').' '.'Organizations';
$this->breadcrumbs=array(
	'Organizations'=>array('index'),
	Yii::t('main', 'Добавление'),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>