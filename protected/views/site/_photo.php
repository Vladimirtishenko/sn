<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 29.05.2015
 * Time: 21:59
 */
?>
<a href="<?= Yii::app()->createUrl('/site/photo', array('id'=>$data->id)); ?>" class="party-multimedia-page-item">
    <div class="outer-cut-multimedia"><i class="fa fa-camera"></i><img src="<?= Yii::app()->baseUrl; ?>/uploads/images/albums/<?= $data->image; ?>" alt=""></div>
    <span><?= Yii::app()->language == 'ru' ? $data->name_ru : $data->name_uk; ?></span>
</a>