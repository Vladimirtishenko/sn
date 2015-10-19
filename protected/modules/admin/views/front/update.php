<?php
/* @var $this FrontController */
/* @var $model Front */
$this->actionHeader = Yii::t('main', 'Редактирование').' '.'Front'.' '.$model->id;
$this->breadcrumbs=array(
	'Fronts'=>array('index'),
	Yii::t('main', 'Редактирование'),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>