<?php
/* @var $this ProgrammController */
/* @var $model Programm */

$this->actionHeader = Yii::t('main', 'Управление').' '.'Programm';
$this->breadcrumbs=array(
	'Programms'=>array('index'),
	Yii::t('main', 'Управление'),
);
?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h5 class="box-title">
                    Programm
                </h5>

            </div>
            <div class="box-body">
                <?php $this->widget('application.modules.admin.components.widgets.overWrite.AdminGridView', array(
                'id'=>'programm-grid',
                'dataProvider'=>$model->search(),
                'filter'=>$model,
                'columns'=>array(
				'title_ru',
				'title_uk',
				'description_ru',
				'description_uk',
				'meta_title_ru',
	/*
				'meta_title_uk',
				'meta_description_ru',
				'meta_description_uk',
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