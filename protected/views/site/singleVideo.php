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
                    Yii::t('main', 'Видео')=>array('site/video'),
                    Yii::app()->language == 'ru' ? $video->title_ru : $video->title_uk,
                ),
                'htmlOptions'=>array('class'=>'party-breadcrumps'),
                'separator'=>'&#9642;',

            ));
        ?>
		<h1><?= Yii::t('main', 'Видео'); ?></h1>
        <h4 class="party-title-photo-galery"><?= Yii::app()->language == 'ru' ? $video->title_ru : $video->title_uk; ?></h4>
        <div class="party-news-for-text">
            <iframe class="party-video-for-news" src="http://www.youtube.com/embed/<?= $video->video; ?>" frameborder="0" allowfullscreen></iframe>
    		<p><?= Yii::app()->language == 'ru' ? $video->description_ru : $video->description_uk; ?></p><br>
        </div>
        <div class="party-more-video">
            <h3>Eще видео</h3>
            <?php foreach($videos as $video): ?>
                <a href="<?= Yii::app()->createUrl('/site/video', array('id'=>$video->id)); ?>" class="party-video-item">
                    <div class="party-video-image-outer">
                        <i></i>
                        <img src="<?= Yii::app()->baseUrl.'/uploads/video/'.$video->image; ?>" class="party-active-video" alt="">
                    </div>
                    <span href="#" class="grey"><?= Yii::app()->language == 'ru' ? $video->title_ru : $video->title_uk; ?></span>
                </a>
            <?php endforeach; ?>
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
		        <a href="<?= Yii::app()->createUrl('/site/news'); ?>" class="party-item-list party-link-news">
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