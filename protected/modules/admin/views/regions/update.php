<?php
/* @var $this RegionsController */
/* @var $model Regions */
$this->actionHeader = Yii::t('main', 'Редактирование').' '.'Regions'.' '.$model->id;
$this->breadcrumbs=array(
	'Regions'=>array('index'),
	Yii::t('main', 'Редактирование'),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>