<?php
/* @var $this RegionsController */
/* @var $model Regions */
$this->actionHeader = Yii::t('main', 'Добавление').' '.'Regions';
$this->breadcrumbs=array(
	'Regions'=>array('index'),
	Yii::t('main', 'Добавление'),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>