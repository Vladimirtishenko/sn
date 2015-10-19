<?php
/* @var $this StatutController */
/* @var $model Statut */
$this->actionHeader = Yii::t('main', 'Редактирование').' '.'Statut'.' '.$model->id;
$this->breadcrumbs=array(
	'Statuts'=>array('index'),
	Yii::t('main', 'Редактирование'),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>