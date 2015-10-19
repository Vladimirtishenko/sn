<?php
/* @var $this ModalsController */
/* @var $model Modals */
/* @var $form CActiveForm */
?>
<div class="row">
    <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'modals-form',
                'enableAjaxValidation'=>false,
            )); ?>
    <div class="col-xs-12">
        <!---- Flash message ---->
         <?php $this->beginWidget('application.modules.admin.components.widgets.FlashWidget',array(
            'params'=>array(
                'model' => $model,
                'form' => null,
            )));
        $this->endWidget(); ?>
        <!---- End Flash message ---->
    </div>

    <div class="col-md-6">
        <div class="box box-primary">

            <div class="box-header">
                <h3 class="box-title">
                    <?= Yii::t('main', 'Основные настройки'); ?>
                </h3>
            </div>
            <div class="box-body">
                	            
                <div class="form-group">
                    <?= $form->labelEx($model,'title_ru'); ?>
                    <?= $form->textField($model,'title_ru',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
                    <?= $form->error($model,'title_ru'); ?>
                </div>

            
                <div class="form-group">
                    <?= $form->labelEx($model,'title_uk'); ?>
                    <?= $form->textField($model,'title_uk',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
                    <?= $form->error($model,'title_uk'); ?>
                </div>

                <div class="form-group">
                    <?= $form->labelEx($model,'description_ru'); ?>
                    <?php $this->widget('application.extensions.eckeditor.ECKEditor', array(
                        'model'=>$model,
                        'attribute'=>'description_ru',
                        'config'=>array(
                            'filebrowserUploadUrl' => $this->createUrl('/admin/upload/index/'),//Конфиг вставлять сюда
                        ),
                    ));
                    ?>
                    <?= $form->error($model,'description_ru'); ?>
                </div>


                <div class="form-group">
                    <?= $form->labelEx($model,'description_uk'); ?>
                    <?php $this->widget('application.extensions.eckeditor.ECKEditor', array(
                        'model'=>$model,
                        'attribute'=>'description_uk',
                        'config'=>array(
                            'filebrowserUploadUrl' => $this->createUrl('/admin/upload/index/'),//Конфиг вставлять сюда
                        ),
                    ));
                    ?>
                    <?= $form->error($model,'description_uk'); ?>
                </div>
            </div>

            <div class="box-footer">
                <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('main', 'Добавить') : Yii::t('main', 'Сохранить'), array('class'=>'btn btn-primary')); ?>
            </div>

        </div>
    </div>
    <div class="col-md-6">
        <div class="box box-success">
            <div class="box-header">
                <h3 class="box-title">
                    <?= Yii::t('main', 'Дополнительные настройки'); ?>
                </h3>
            </div>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>