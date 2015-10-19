<?php
/* @var $this VideoController */
/* @var $model Video */

$this->actionHeader = Yii::t('main', 'Управление').' '.'Video';
$this->breadcrumbs=array(
	'Videos'=>array('index'),
	Yii::t('main', 'Управление'),
);
?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h5 class="box-title">
                    Video
                </h5>
                <div class="button_save">
                    <?= CHtml::link('<i class="fa fa-plus"></i>'.Yii::t('main', 'Добавить'), array('/admin/video/create'), array('class'=>'pull-right btn btn-info btn-flat')); ?>
                </div>
            </div>
            <div class="box-body">
                <?php $this->widget('application.modules.admin.components.widgets.overWrite.AdminGridView', array(
                'id'=>'video-grid',
                'dataProvider'=>$model->search(),
                'filter'=>$model,
                'columns'=>array(
                    'id',
                    array(
                        'name' => 'video',
                        'value' => '"http://img.youtube.com/vi/".$data->video."/mqdefault.jpg"',
                        'type' => 'image',
                        'htmlOptions' => array('class'=>'min-img'),
                    ),
                    'title_ru',
                    'title_uk',
                    /*
                    'description_ru',
                    'description_uk',
                    'video',
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