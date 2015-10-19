<?php
/* @var $this SmiController */
/* @var $model Smi */
/* @var $form CActiveForm */
?>
<div class="row">
    <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'smi-form',
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
                    <?= $form->labelEx($model,'title'); ?>
                    <?= $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
                    <?= $form->error($model,'title'); ?>
                </div>

            
                <div class="form-group">
                    <?= $form->labelEx($model,'description'); ?>
                    <?= $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
                    <?= $form->error($model,'description'); ?>
                </div>

            
                <div class="form-group">
                    <?= $form->labelEx($model,'image'); ?>
                    <?= $form->textField($model,'image',array('size'=>60,'maxlength'=>255)); ?>
                    <?= $form->error($model,'image'); ?>
                </div>

            
                <div class="form-group">
                    <?= $form->labelEx($model,'meta_title'); ?>
                    <?= $form->textField($model,'meta_title',array('size'=>60,'maxlength'=>255)); ?>
                    <?= $form->error($model,'meta_title'); ?>
                </div>

            
                <div class="form-group">
                    <?= $form->labelEx($model,'meta_description'); ?>
                    <?= $form->textField($model,'meta_description',array('size'=>60,'maxlength'=>255)); ?>
                    <?= $form->error($model,'meta_description'); ?>
                </div>

            
                <div class="form-group">
                    <?= $form->labelEx($model,'meta_keywords'); ?>
                    <?= $form->textField($model,'meta_keywords',array('size'=>60,'maxlength'=>255)); ?>
                    <?= $form->error($model,'meta_keywords'); ?>
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