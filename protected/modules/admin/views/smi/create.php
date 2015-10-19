<?php
/* @var $this SmiController */
/* @var $model Smi */
$this->actionHeader = Yii::t('main', 'Добавление').' '.'Smi';
$this->breadcrumbs=array(
	'Smis'=>array('index'),
	Yii::t('main', 'Добавление'),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>