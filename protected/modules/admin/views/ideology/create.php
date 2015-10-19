<?php
/* @var $this IdeologyController */
/* @var $model Ideology */
$this->actionHeader = Yii::t('main', 'Добавление').' '.'Ideology';
$this->breadcrumbs=array(
	'Ideologies'=>array('index'),
	Yii::t('main', 'Добавление'),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>