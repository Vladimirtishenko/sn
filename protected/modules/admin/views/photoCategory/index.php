<?php
/* @var $this PhotoCategoryController */
/* @var $model PhotoCategory */

$this->actionHeader = Yii::t('main', 'Управление').' '.'PhotoCategory';
$this->breadcrumbs=array(
	'Photo Categories'=>array('index'),
	Yii::t('main', 'Управление'),
);
?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h5 class="box-title">
                    PhotoCategory
                </h5>
                <div class="button_save">
                    <?= CHtml::link('<i class="fa fa-plus"></i>'.Yii::t('main', 'Добавить'), array('/admin/photo-category/create'), array('class'=>'pull-right btn btn-info btn-flat')); ?>
                </div>
            </div>
            <div class="box-body">
                <?php $this->widget('application.modules.admin.components.widgets.overWrite.AdminGridView', array(
                'id'=>'photo-category-grid',
                'dataProvider'=>$model->search(),
                'filter'=>$model,
                'columns'=>array(
                				'id',
				'image',
				'name_ru',
				'name_uk',
				'description_ru',
				'description_uk',
	/*
				'meta_title_ru',
				'meta_title_uk',
				'meta_description_ru',
				'meta_description_uk',
				'date',
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