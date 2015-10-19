<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 29.05.2015
 * Time: 21:59
 */
?>
<a href="<?= Yii::app()->createUrl('/site/video', array('id'=>$data->id)); ?>" class="party-multimedia-page-item">
    <div class="outer-cut-multimedia"><i class="fa fa-play"></i><img src="<?= Yii::app()->baseUrl; ?>/uploads/video/<?= $data->image; ?>" alt=""></div>
    <span><?= Yii::app()->language == 'ru' ? $data->title_ru : $data->title_uk; ?></span>
</a>