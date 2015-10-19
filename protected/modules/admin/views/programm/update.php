<?php
/* @var $this ProgrammController */
/* @var $model Programm */
$this->actionHeader = Yii::t('main', 'Редактирование').' '.'Programm'.' '.$model->id;
$this->breadcrumbs=array(
	'Programms'=>array('index'),
	Yii::t('main', 'Редактирование'),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>