<?php
/* @var $this StatutController */
/* @var $model Statut */
$this->actionHeader = Yii::t('main', 'Добавление').' '.'Statut';
$this->breadcrumbs=array(
	'Statuts'=>array('index'),
	Yii::t('main', 'Добавление'),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>