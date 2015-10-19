<?php
/**
 * @var $news News
 */
?>
<?php foreach($news as $value): ?>
    <a href="<?= Yii::app()->createUrl('/site/news', array('id'=>$value->id)); ?>" class="party-photo-unit">
        <span class="date"><?= date('Y-m-d H:i:s', strtotime($value->date)); ?></span>
        <?= CHtml::image(Yii::app()->baseUrl.'/uploads/news/thumb/'.$value->image, Yii::app()->language == 'ru' ? $value->title_ru : $value->title_uk); ?>
        <p><?= Yii::app()->language == 'ru' ? $value->title_ru : $value->title_uk; ?></p>
    </a>
<?php endforeach; ?>