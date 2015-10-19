<?php
/* @var $this FrontController */
/* @var $model Front */
$this->actionHeader = Yii::t('main', 'Добавление').' '.'Front';
$this->breadcrumbs=array(
	'Fronts'=>array('index'),
	Yii::t('main', 'Добавление'),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>