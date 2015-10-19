<?php
/* @var $this SiteController */
$breadcrumbs = array();
if(isset($_GET['region_id'])) 
{
    $region = Regions::model()->findByPk($_GET['region_id']);
    $breadcrumbs = array(
        Yii::t('main', 'Регионы')=>array('site/regions'),
        Yii::app()->language == 'ru' ? $region->title_ru : $region->title_uk,
    );
    $title = Yii::app()->language == 'ru' ? $region->title_ru : $region->title_uk;
}
elseif(isset($_GET['find'])) {
    $breadcrumbs = array(
        Yii::t('main', 'Результаты поиска'),
    );
    $title = Yii::t('main', 'Поиск');
}
else{
     $breadcrumbs = array(
        Yii::t('main', 'Новости'),
    );
     $title = Yii::t('main', 'Новости');
}
$this->pageTitle=Yii::app()->name;
?>
<div class="party-border"></div>
<section class="party-extension-main -flex">
	<div class="party-video-photo-field">
        <?php 
            $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>$breadcrumbs,
                'htmlOptions'=>array('class'=>'party-breadcrumps'),
                'separator'=>'&#9642;',

            ));
        ?>
        <h1><?= $title; ?></h1>
        <?php
        $this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$data,
            'ajaxUpdate'=>false,
            'itemView'=>'_news',
            'template'=>'<div class="party-outer-all-miltimedia">{items}</div>{pager}',
            'cssFile'=>false,
            'pager'=>array(
                'maxButtonCount' => 5,
                'lastPageLabel'=>null,
                'nextPageLabel'=>Yii::t('main', 'Вперед'),
                'prevPageLabel'=>Yii::t('main', 'Назад'),
                'firstPageLabel'=>null,
                'class'=>'CLinkPager',
                'header'=>false,
                'cssFile'=>false, // устанавливаем свой .css файл
                'htmlOptions'=>array('class'=>''),
                'selectedPageCssClass'=>'party-active-pagination',
                'firstPageCssClass'=>'party-prev-pagination',
                'lastPageCssClass'=>'party-prev-pagination',
                'previousPageCssClass'=>'party-prev-pagination',
                'nextPageCssClass'=>'party-prev-pagination',
            ),
            'pagerCssClass'=>'party-pagination',
            'sortableAttributes'=>array(
                'rating',
                'create_time',
            ),
            'itemsCssClass'=>'clear',
        ));
        ?>
    </div>
    <div class="party-columm-smi-news">
         <div class="party-photo-outer-block">
            <div class="party-photo-inner-block">
             <div class="party-smi">
                <?php $this->widget('application.components.widgets.SmiWidget'); ?>
            </div>
                <h2><?php echo Yii::t('main','Фото') ?></h2>
                <?php $this->widget('application.components.widgets.AlbumsWidget'); ?>
                <a href="<?= Yii::app()->createUrl('/site/photos'); ?>" class="blue"> <?= Yii::t('main', 'Все альбомы'); ?> </a>
            </div>
        </div>
    </div>
</section>
</section>