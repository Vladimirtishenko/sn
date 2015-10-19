<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


   <section class="party-news-block">

        <?php foreach($news as $key => $newsSingle): ?>
             <a href="<?= Yii::app()->createUrl('/site/news/', array('id'=>$newsSingle->id)); ?>" class="party-item-list width-<?= $key; ?>">
                 <?= CHtml::image(Yii::app()->baseUrl.'/uploads/news/thumb/'.$newsSingle->image, (Yii::app()->language == 'ru') ? $newsSingle->title_ru : $newsSingle->title_uk); ?>
                <div class="party-description-news">
                    <p><?= date('d-m-Y', strtotime($newsSingle->date)); ?></p>
                    <h3><span><?= Yii::app()->language == 'ru' ? $newsSingle->title_ru : $newsSingle->title_uk; ?> </span></h3>
                </div>
            </a>
        <?php endforeach; ?>
        <a href="<?= Yii::app()->createUrl('site/news'); ?>" class="party-item-list party-link-news">
            <h3><i class="fa fa-file-text"></i><span><?= Yii::t('main', 'Все новости'); ?></span></h3>
        </a>
    </section>
    <section class="party-calendar">
        <h2><?= Yii::t('main', 'Календарь событий'); ?>:</h2>
        <?php $this->widget('application.components.widgets.CalendarWidget'); ?>
    </section>
    <section class="party-center-block">
        <div class="party-for-slider-images">
             <?php $this->widget('application.components.widgets.FrontWidgetFull'); ?>
        </div>
        <div class="party-doc-block">
            <div class="party-smi">
                <?php $this->widget('application.components.widgets.SmiWidget'); ?>
            </div>
            <div class="party-document">
                <div class="party-document-cell">
                    <a href="<?= Yii::app()->createUrl('/site/statut'); ?>" class="party-charter"><h3><?= Yii::t('main', 'Устав'); ?></h3></a>
                    <a href="<?= Yii::app()->createUrl('/site/programm'); ?>" class="party-program"><h3><?= Yii::t('main', 'Программа'); ?> <?= Yii::t('main', 'партии'); ?></h3></a>
                </div>
            </div>
        </div>
    </section>
    <section class="party-photo-freedom">
    	 <div class="party-photo-outer-block">
            <div class="party-photo-inner-block">
                <h2><?php echo Yii::t('main','Фото') ?></h2>
                <?php $this->widget('application.components.widgets.AlbumsWidget'); ?>
                <a href="<?= Yii::app()->createUrl('/site/photo'); ?>" class="blue"><?= Yii::t('main', 'Все альбомы'); ?></a>
            </div>
        </div>
    </section>
    <div class="party-absolute-map">
        <div class="party-map-regions">
            <img src="images/map.png" alt="map" usemap="#map" id="ukraine">
        </div>
    </div>
    <div class="pary-footer-general-page">
        <div class="party-innner-footer-gen">
            <div class="paty-outer-one">
                <div class="party-slider-preview">
                    <?php $this->widget('application.components.widgets.FrontWidget'); ?>
                </div>
                <div class="party-video-last">
                    <h2><?php echo Yii::t('main', 'Последние видеозаписи') ?>  <?php echo CHtml::link(Yii::t('main', 'Смотреть все видеозаписи'), array('/site/video'), array('class' => 'orange')); ?></h2>
                        <?php foreach($videos as $video): ?>
                            <a href="<?= Yii::app()->createUrl('/site/video', array('id'=>$video->id)); ?>" class="party-video-item">
                                <div class="party-video-image-outer">
                                    <i></i>
                                    <img src="<?= Yii::app()->baseUrl.'/uploads/video/'.$video->image; ?>" class="party-active-video" width="300" alt="">
                                </div>
                                <span href="#" class="active-blue"><?= Yii::app()->language == 'ru' ? $video->title_ru : $video->title_uk; ?></span>
                            </a>
                        <?php endforeach; ?>
                </div>
            </div>  
                <a href="<?= Yii::app()->createUrl('site/regions'); ?>" class="party-outer-two">
                   <h2><?= Yii::t('main', 'Регионы'); ?></h2>
                   <p class="active-blue"><?= Yii::t('main', 'Все структурные подразделеня партии на карте Украины'); ?>.</p>
               </a>
            </div>
    </div>
</section>