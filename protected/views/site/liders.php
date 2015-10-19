<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>
<div class="party-border"></div>
<section class="party-extension-main -flex">
	<div class="party-video-photo-field">
        <?php 
            $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>array(
                    Yii::app()->language == 'ru' ? $title['ru'] : $title['uk'],
                ),
                'htmlOptions'=>array('class'=>'party-breadcrumps'),
                'separator'=>'&#9642;',

            ));
        ?>
        <h1><?= Yii::app()->language == 'ru' ? $title['ru'] : $title['uk']; ?></h1>
        <div class="party-outer-liders-page -flex">
            <?php foreach($liders as $lider): ?>
                <div class="party-item-liders-page">
                    <img src="<?= Yii::app()->baseUrl; ?>/uploads/photos/thumb/<?= $lider->image_thumb; ?>" alt="">
                    <div class="party-liders-description">
                        <h2><span><?= Yii::app()->language == 'ru' ? $lider->title_ru : $lider->title_uk; ?></span></h2>
                        <p><?= Yii::app()->language == 'ru' ? $lider->tiny_desc_ru : $lider->tiny_desc_uk; ?></p>
                        <div class="party-social-group -grey">
                            <a href="" class="party-fb"><i class="fa fa-facebook"></i></a>
                            <a href="" class="party-tw"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
     
    </div>
    <div class="party-columm-smi-news">
         <div class="party-photo-outer-block">
            <div class="party-photo-inner-block">
             <div class="party-smi">
                <?php $this->widget('application.components.widgets.SmiWidget'); ?>
            </div>
                <h2><?php echo Yii::t('main','Фото') ?></h2>
                <?php $this->widget('application.components.widgets.AlbumsWidget'); ?>
                <a href="<?= Yii::app()->createUrl('/site/photo'); ?>" class="blue"> <?= Yii::t('main', 'Все альбомы'); ?> </a>
            </div>
        </div>
    </div>
</section>
</section>