<?php
/* @var $this IdeologyController */
/* @var $model Ideology */
$this->actionHeader = Yii::t('main', 'Редактирование').' '.'Ideology'.' '.$model->id;
$this->breadcrumbs=array(
	'Ideologies'=>array('index'),
	Yii::t('main', 'Редактирование'),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>