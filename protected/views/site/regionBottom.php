<div class="party-remove-block">
<div class="party-line-obl">
    <div class="party-obl-outer">
        <div class="party-inner-obl">
            <img src="<?= Yii::app()->baseUrl; ?>/images/icons/<?= $region->image; ?>" alt="">
            <div class="party-outer-text-obl">
                <h2><?= Yii::app()->language == 'ru' ? $region->title_ru : $region->title_uk; ?></h2>
                <p class="no-active-color"><?= Yii::app()->language == 'ru' ? $region->description_ru : $region->description_uk; ?></p>
            </div>
        </div>
    </div>
</div>
<div class="party-liders-commit">
    <div class="party-liders-list">
        <div class="party-tabs">
            <a class="btn-orange party-tabs-active" href="#general"> <?= Yii::t('main', 'Руководящие Органы'); ?> </a>
            <a href="#prezidium" class="btn-green"> <?= Yii::t('main', 'Президия'); ?> </a>
            <a href="#soviet" class="btn-blue"> <?= Yii::t('main', 'Совет Организации Партии'); ?> </a>
            <a href="#ckrk" class="btn-grey"> <?= Yii::t('main', 'КРК'); ?> </a>
            <a href="#obl" class="btn-red"> <?= Yii::t('main', 'Районные организации'); ?> </a>
        </div>
        <div class="party-item-choise" id="general">
            <div class="-flex">
             <?php $this->widget('application.components.widgets.FrontsRegion', array('region_id'=>$region->id, 'post'=>'lider')); ?>
             </div>
        </div>
        <div class="party-item-choise" id="prezidium" style="display:none">
            <div class="-flex">
             <?php $this->widget('application.components.widgets.FrontsRegion', array('region_id'=>$region->id, 'post'=>'prezidia')); ?>
            </div>
        </div>
        <div class="party-item-choise" id="soviet" style="display:none">
            <div class="-flex">
             <?php $this->widget('application.components.widgets.FrontsRegion', array('region_id'=>$region->id, 'post'=>'politrada')); ?>
             </div>
        </div>
        <div class="party-item-choise" id="ckrk" style="display:none">
         <div class="-flex">
             <?php $this->widget('application.components.widgets.FrontsRegion', array('region_id'=>$region->id, 'post'=>'ckrk')); ?>
             </div>
        </div>
         <div class="party-item-choise" id="obl" style="display:none">
         <div class="-flex">
             <?php
                $organizations = Organizations::model()->find('region_id = :region', array(':region'=>$region->id));
                if(isset($organizations) && isset($organizations->description_ru)) {
                    echo Yii::app()->language == 'ru' ? $organizations->description_ru : $organizations->description_uk;
                }
             ?>
             </div>
        </div>
    </div>
    <div class="party-region-news">
        <h2><?php echo Yii::t('main','Новости региона'); ?></h2>
        <?php $this->widget('application.components.widgets.LastRegionNewsWidget', array('region_id'=>$region->id)); ?>
        <a href="<?= Yii::app()->createUrl('/site/news', array('region_id'=>$region->id)); ?>" class="blue"><?= Yii::t('main','Все новости региона'); ?></a>
    </div>
</div>
</div>
