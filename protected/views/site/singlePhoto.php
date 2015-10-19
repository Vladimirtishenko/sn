<?php
Yii::app()->clientScript->registerCoreScript('jquery');
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="party-border"></div>
<section class="party-extension-main -flex">
    <div class="party-video-photo-field">
        <?php 
            $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>array(
                    Yii::t('main', 'Фото')=>array('site/photo'),
                    Yii::app()->language == 'ru' ? $category->name_ru : $category->name_uk,
                ),
                'htmlOptions'=>array('class'=>'party-breadcrumps'),
                'separator'=>'&#9642;',

            ));
        ?>
        <h1><?= Yii::t('main', 'Фото'); ?> <a href="<?= Yii::app()->createUrl('/site/photo'); ?>" class="party-back"><i class="fa fa-angle-left"></i>&nbsp; <span>Назад</span></a></h1>
        <h4 class="party-title-photo-galery"><?= Yii::app()->language == 'ru' ? $category->name_ru : $category->name_uk; ?></h4>
        <div class="party-outer-single-miltimedia">
            <?php  foreach($photos as $photo): ?>
                <a href="<?= Yii::app()->baseUrl; ?>/uploads/images/photos/full/<?= $photo->name; ?>" class="party-multimedia-single-item">
                    <div class="outer-cut-single-multimedia"><img src="<?= Yii::app()->baseUrl; ?>/uploads/images/photos/full/<?= $photo->name; ?>" alt=""></div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="party-columm-smi-news">
         <div class="party-photo-outer-block">
            <div class="party-photo-inner-block">
             <div class="party-smi">
                <?php $this->widget('application.components.widgets.SmiWidget'); ?>
            </div>
                <h2><?php echo Yii::t('main','Видео') ?></h2>
                <?php foreach($videos as $video): ?>
                    <a href="<?= Yii::app()->createUrl('/site/video', array('id'=>$video->id)); ?>" class="party-video-item">
                        <div class="party-video-image-outer">
                            <i></i>
                            <img src="<?= Yii::app()->baseUrl.'/uploads/video/'.$video->image; ?>" class="party-active-video" alt="">
                        </div>
                        <span class="grey"><?= Yii::app()->language == 'ru' ? $video->title_ru : $video->title_uk; ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
</section>
<? Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/imagelightbox.min.js', CClientScript::POS_END); ?>
<? Yii::app()->clientScript->registerScript('galeryLigtbox', '$(function(){$(".party-multimedia-single-item").imageLightbox()})', CClientScript::POS_END); ?>