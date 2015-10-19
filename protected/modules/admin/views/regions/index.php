<?php
/* @var $this RegionsController */
/* @var $model Regions */

$this->actionHeader = Yii::t('main', 'Управление').' '.'Regions';
$this->breadcrumbs=array(
	'Regions'=>array('index'),
	Yii::t('main', 'Управление'),
);
?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h5 class="box-title">
                    Regions
                </h5>
                <div class="button_save">
                    <?= CHtml::link('<i class="fa fa-plus"></i>'.Yii::t('main', 'Добавить'), array('/admin/regions/create'), array('class'=>'pull-right btn btn-info btn-flat')); ?>
                </div>
            </div>
            <div class="box-body">
                <?php $this->widget('application.modules.admin.components.widgets.overWrite.AdminGridView', array(
                'id'=>'regions-grid',
                'dataProvider'=>$model->search(),
                'filter'=>$model,
                'columns'=>array(
                    'id',
                    array(
                        'name' => 'image',
                        'value' => '"/images/icons/".$data->image',
                        'type' => 'image',
                        'htmlOptions' => array('class'=>'min-img'),
                    ),
                    'title_ru',
                    'title_uk',
                    /*
                    'image',
                    'description_ru',
                    'description_uk',
                    */
                    array(
                        'class'=>'CButtonColumn',
                        'htmlOptions' => array('style'=>'text-align: center; width: 80px;'),
                        'template'=>'{update}&nbsp;{delete}',
                        'buttons' => array(
                            'update' => array(
                                'imageUrl'=>$this->assetsPath.'/images/edit.png',
                            ),
                            'delete' => array(
                                'imageUrl'=>$this->assetsPath.'/images/delete.png',
                            ),
                        ),
                    ),
                ),
                )); ?>
            </div>
        </div>
    </div>
</div>