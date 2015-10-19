<?php
/* @var $this AboutController */
/* @var $model About */
$this->actionHeader = Yii::t('main', 'Редактирование').' '.'About'.' '.$model->id;
$this->breadcrumbs=array(
	'Abouts'=>array('index'),
	Yii::t('main', 'Редактирование'),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>