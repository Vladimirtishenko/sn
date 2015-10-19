<?php
/* @var $this ModalsController */
/* @var $model Modals */
$this->actionHeader = Yii::t('main', 'Редактирование').' '.'Modals'.' '.$model->id;
$this->breadcrumbs=array(
	'Modals'=>array('index'),
	Yii::t('main', 'Редактирование'),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>