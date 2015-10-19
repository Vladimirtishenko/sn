<?php
/* @var $this OrganizationsController */
/* @var $model Organizations */
$this->actionHeader = Yii::t('main', 'Редактирование').' '.'Organizations'.' '.$model->id;
$this->breadcrumbs=array(
	'Organizations'=>array('index'),
	Yii::t('main', 'Редактирование'),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>