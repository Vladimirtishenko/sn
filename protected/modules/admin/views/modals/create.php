<?php
/* @var $this ModalsController */
/* @var $model Modals */
$this->actionHeader = Yii::t('main', 'Добавление').' '.'Modals';
$this->breadcrumbs=array(
	'Modals'=>array('index'),
	Yii::t('main', 'Добавление'),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>