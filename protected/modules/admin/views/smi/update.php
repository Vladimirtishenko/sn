<?php
/* @var $this SmiController */
/* @var $model Smi */
$this->actionHeader = Yii::t('main', 'Редактирование').' '.'Smi'.' '.$model->id;
$this->breadcrumbs=array(
	'Smis'=>array('index'),
	Yii::t('main', 'Редактирование'),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>