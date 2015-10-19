<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="party-border"></div>
<section class="party-extension-main">
	<div class="party-text-field">
		<?php 
            $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>array(
                    Yii::t('main', 'Новости')=>array('site/news'),
                    Yii::app()->language == 'ru' ? $page->title_ru : $page->title_uk,
                ),
                'htmlOptions'=>array('class'=>'party-breadcrumps'),
                'separator'=>'&#9642;',

            ));
        ?>
		<h1><?= Yii::t('main', 'Новости'); ?></h1>
        <h4 class="party-title-photo-galery"><?= Yii::app()->language == 'ru' ? $page->title_ru : $page->title_uk; ?></h4>
        <div class="party-news-for-text">
            <img class="party-genimg-for-news" src="<?= Yii::app()->baseUrl; ?>/uploads/news/full/<?= $page->image; ?>" width="350px" alt="">
            <?= Yii::app()->language == 'ru' ? $page->description_ru : $page->description_uk; ?>
        </div>
	</div>
	<div class="party-columm-photo">
		 <div class="party-photo-outer-block">
            <div class="party-photo-inner-block">
             <h2><?php echo Yii::t('main','Новости') ?></h2>
                <?php foreach($news as $key => $newsSingle): ?>
		             <a href="<?= Yii::app()->createUrl('/site/news/', array('id'=>$newsSingle->id)); ?>" class="party-item-list width-2">
		                 <?= CHtml::image(Yii::app()->baseUrl.'/uploads/news/thumb/'.$newsSingle->image, (Yii::app()->language == 'ru') ? $newsSingle->title_ru : $newsSingle->title_uk); ?>
		                <div class="party-description-news">
		                    <p><?= date("Y-m-d", strtotime($newsSingle->date)); ?></p>
		                    <h3><span><?= Yii::app()->language == 'ru' ? $newsSingle->title_ru : $newsSingle->title_uk; ?> </span></h3>
		                </div>
		            </a>
		        <?php endforeach; ?>
		        <a href="#" class="party-item-list party-link-news">
		            <h3><i class="fa fa-file-text"></i><span> <?= Yii::t('main', 'Все новости'); ?> </span></h3>
		        </a>
            </div>
        </div>
	</div>
    <div class="party-columm-smi">
     <div class="party-smi">
        <?php $this->widget('application.components.widgets.SmiWidget'); ?>
    </div>
    </div>
</section>
</section>