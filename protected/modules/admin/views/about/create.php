<?php
/* @var $this AboutController */
/* @var $model About */
$this->actionHeader = Yii::t('main', 'Добавление').' '.'About';
$this->breadcrumbs=array(
	'Abouts'=>array('index'),
	Yii::t('main', 'Добавление'),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>