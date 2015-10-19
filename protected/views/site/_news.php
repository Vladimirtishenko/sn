<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 29.05.2015
 * Time: 21:16
 */
?>
<a href="<?= Yii::app()->createUrl('/site/news', array('id'=>$data->id)); ?>" class="party-item-list width-3">
    <img src="<?= Yii::app()->baseUrl; ?>/uploads/news/thumb/<?= $data->image; ?>" alt="<?= Yii::app()->language == 'ru' ? $data->title_ru : $data->title_uk; ?>">
    <div class="party-description-news">
        <p><?= date('d-m-Y', strtotime($data->date)); ?></p>
        <h3><span><?= Yii::app()->language == 'ru' ? $data->title_ru : $data->title_uk; ?></span></h3>
    </div>
</a>