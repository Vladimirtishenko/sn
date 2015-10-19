<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<div class="row">
    <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'user-form',
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
                    <?= $form->labelEx($model,'username'); ?>
                    <?= $form->textField($model,'username',array('size'=>60,'maxlength'=>150)); ?>
                    <?= $form->error($model,'username'); ?>
                </div>

            
                <div class="form-group">
                    <?= $form->labelEx($model,'role'); ?>
                    <?= $form->textField($model,'role',array('size'=>50,'maxlength'=>50)); ?>
                    <?= $form->error($model,'role'); ?>
                </div>

            
                <div class="form-group">
                    <?= $form->labelEx($model,'password'); ?>
                    <?= $form->passwordField($model,'password',array('size'=>60,'maxlength'=>255)); ?>
                    <?= $form->error($model,'password'); ?>
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