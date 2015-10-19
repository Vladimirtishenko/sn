<?php
/* @var $this ProgrammController */
/* @var $model Programm */
$this->actionHeader = Yii::t('main', 'Добавление').' '.'Programm';
$this->breadcrumbs=array(
	'Programms'=>array('index'),
	Yii::t('main', 'Добавление'),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>