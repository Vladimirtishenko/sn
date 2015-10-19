<?php
/* @var $this FrontController */
/* @var $model Front */
/* @var $form CActiveForm */
$newImageName = uniqid();
Yii::app()->clientScript->registerScriptFile($this->module->assetsUrl.'/js/jquery.Jcrop.js',
    CClientScript::POS_END);
Yii::app()->clientScript->registerCssFile($this->module->assetsUrl.'/css/jquery.Jcrop.css');
?>
<div class="row">
    <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'front-form',
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
                    <div id="images">
                        <?php if(!$model->isNewRecord): ?>
                            <?= CHtml::image(Yii::app()->baseUrl.'/uploads/photos/thumb/'.$model->image_thumb); ?>
                            <?= $form->hiddenField($model, 'image'); ?>
                        <?php endif; ?>
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                            <?php echo $model->isNewRecord ? Yii::t('main', 'Добавить фото') : Yii::t('main', 'Загррузить новое фото'); ?>
                        </button>
                    </div>
                </div>
                	            
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
            
                <?php if(Yii::app()->user->role != 'admin'): ?>
                    <?= $form->hiddenField($model, 'region_id', array('value'=>$user->region_id)); ?>
                <?php else: ?>
                    <div class="form-group">
                        <?= $form->labelEx($model,'region_id'); ?>
                        <?= $form->dropDownList($model,'region_id', CHtml::listData(Regions::model()->findAll(), 'id', 'title_ru'),array('class'=>'form-control', 'empty'=>'Выберите регион')); ?>
                        <?= $form->error($model,'region_id'); ?>
                    </div>
                <?php endif; ?>
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
            <div class="box-body">
                <div class="form-group">
                    <?= $form->labelEx($model,'vkontakte'); ?>
                    <?= $form->textField($model,'vkontakte',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
                    <?= $form->error($model,'vkontakte'); ?>
                </div>


                <div class="form-group">
                    <?= $form->labelEx($model,'facebook'); ?>
                    <?= $form->textField($model,'facebook',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
                    <?= $form->error($model,'facebook'); ?>
                </div>


                <div class="form-group">
                    <?= $form->labelEx($model,'tvitter'); ?>
                    <?= $form->textField($model,'tvitter',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
                    <?= $form->error($model,'tvitter'); ?>
                </div>

                <div class="form-group">
                    <?= $form->labelEx($model,'image'); ?>
                    <?= $form->fileField($model,'image'); ?>
                    <?= $form->error($model,'image'); ?>
                </div>

                <div class="form-group">
                    <?= $form->labelEx($model,'image'); ?>
                    <?= Chtml::textField('sd',isset($model->image) ? $model->image : '',array('size'=>60,'maxlength'=>255, 'disabled'=>true, 'class'=>'form-control')); ?>
                    <?= $form->error($model,'image'); ?>
                </div>

                <div class="form-group">
                    <?= $form->labelEx($model,'meta_title_ru'); ?>
                    <?= $form->textField($model,'meta_title_ru',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
                    <?= $form->error($model,'meta_title_ru'); ?>
                </div>


                <div class="form-group">
                    <?= $form->labelEx($model,'meta_title_uk'); ?>
                    <?= $form->textField($model,'meta_title_uk',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
                    <?= $form->error($model,'meta_title_uk'); ?>
                </div>


                <div class="form-group">
                    <?= $form->labelEx($model,'meta_description_ru'); ?>
                    <?= $form->textField($model,'meta_description_ru',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
                    <?= $form->error($model,'meta_description_ru'); ?>
                </div>


                <div class="form-group">
                    <?= $form->labelEx($model,'meta_description_uk'); ?>
                    <?= $form->textField($model,'meta_description_uk',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
                    <?= $form->error($model,'meta_description_uk'); ?>
                </div>

                <div class="form-group">
                    <?= $form->labelEx($model,'on_front'); ?>
                    <?= $form->dropDownList($model,'on_front', array(0=>'Нет', 1=>'Да'), array('class'=>'form-control')); ?>
                    <?= $form->error($model,'on_front'); ?>
                </div>


                <div class="form-group">
                    <?= $form->labelEx($model,'prezidia'); ?>
                    <?= $form->dropDownList($model,'prezidia', array(0=>'Нет', 1=>'Да'), array('class'=>'form-control')); ?>
                    <?= $form->error($model,'prezidia'); ?>
                </div>


                <div class="form-group">
                    <?= $form->labelEx($model,'politrada'); ?>
                    <?= $form->dropDownList($model,'politrada', array(0=>'Нет', 1=>'Да'), array('class'=>'form-control')); ?>
                    <?= $form->error($model,'politrada'); ?>
                </div>


                <div class="form-group">
                    <?= $form->labelEx($model,'ckrk'); ?>
                    <?= $form->dropDownList($model,'ckrk', array(0=>'Нет', 1=>'Да'), array('class'=>'form-control')); ?>
                    <?= $form->error($model,'ckrk'); ?>
                </div>


                <div class="form-group">
                    <?= $form->labelEx($model,'lider'); ?>
                    <?= $form->dropDownList($model,'lider', array(0=>'Нет', 1=>'Да'), array('class'=>'form-control')); ?>
                    <?= $form->error($model,'lider'); ?>
                </div>


                <div class="form-group">
                    <?= $form->labelEx($model,'tiny_desc_uk'); ?>
                    <?= $form->textArea($model,'tiny_desc_uk',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
                    <?= $form->error($model,'tiny_desc_uk'); ?>
                </div>


                <div class="form-group">
                    <?= $form->labelEx($model,'tiny_desc_ru'); ?>
                    <?= $form->textArea($model,'tiny_desc_ru',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
                    <?= $form->error($model,'tiny_desc_ru'); ?>
                </div>


                <div class="form-group">
                    <?= $form->labelEx($model,'simple_ru'); ?>
                    <?= $form->textField($model,'simple_ru',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
                    <?= $form->error($model,'simple_ru'); ?>
                </div>


                <div class="form-group">
                    <?= $form->labelEx($model,'simple_uk'); ?>
                    <?= $form->textField($model,'simple_uk',array('size'=>60,'maxlength'=>255, 'class'=>'form-control')); ?>
                    <?= $form->error($model,'simple_uk'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Загрузка и обрезка фото</h4>
            </div>
            <div class="modal-body">
                <?php $form = $this->beginWidget('CActiveForm', array(
                    'id'=>'image-form',
                    'method'=>'POST',
                    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
                )); ?>

                <?php echo $form->labelEx($model,'image_thumb'); ?>
                <?php echo $form->fileField($model,'image_thumb'); ?>
                <?php echo $form->error($model,'image_thumb'); ?>

                <?= CHtml::hiddenField('name', $newImageName); ?>
                <?= CHtml::submitButton('Загрузить', array('class'=>'btn btn-default')); ?>
                <?php $this->endWidget(); ?>

                <?php $form = $this->beginWidget('CActiveForm', array(
                    'id'=>'image-crop',
                    'method'=>'POST',
                    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
                )); ?>

                <div id="done"></div>
                <input type="hidden" id="x" name="x" />
                <input type="hidden" id="y" name="y" />
                <input type="hidden" id="w" name="w" />
                <input type="hidden" id="h" name="h" />

                <?= CHtml::submitButton('Обрезать', array('class'=>'btn btn-default')); ?>
                <?php $this->endWidget(); ?>

            </div>
        </div>
    </div>
</div>
<script>
    $("#image-form").submit(function(event){
        event.preventDefault();
        var data = new FormData($("#image-form")[0]);
        $.ajax({
            type: "POST",
            url: "<?= Yii::app()->createUrl("/admin/front/upload"); ?>",
            data: data,
            contentType: false,
            processData: false,
            success: function(html) {
                $("#image-form").hide();
                $("#image-crop").show();
                $("#done").append(html);
                $("#crop").load(function(){
                    $(this).Jcrop({
                        aspectRatio: 1/1,
                        boxWidth: 530,
                        boxHeight: 600,
                        onSelect: updateCoords
                    });
                });
            }
        }).done(function(){

        });
    });
</script>
<script>
    $( document ).ready(function() {
        $("#image-crop").hide();
    });
</script>
<script>
    function updateCoords(c)
    {
        $('#x').val(c.x);
        $('#y').val(c.y);
        $('#w').val(c.w);
        $('#h').val(c.h);
    }

    function checkCoords()
    {
        if (parseInt($('#w').val())) return true;
        alert('Please select a crop region then press submit.');
        return false;
    }
</script>
<script>
    $("#image-crop").submit(function(event){
        event.preventDefault();
        var data = new FormData($("#image-crop")[0]);
        $.ajax({
            type: "POST",
            url: "<?= Yii::app()->createUrl("/admin/front/crop"); ?>",
            data: data,
            contentType: false,
            processData: false,
            success: function(html) {
                $("#images").html(html);
            }
        }).done(function(){

        });
    });
</script>