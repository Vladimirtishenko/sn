<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20.05.14
 * Time: 17:47
 */
/* @var $photos PhotoCategory model */
?>  
    <?php foreach($photos as $photo): ?>
        <a href="<?= Yii::app()->createUrl('/site/photo', array('id'=>$photo->id)); ?>" class="party-photo-unit">
            <span class="date"><?= $photo->date; ?></span>
            <?= CHtml::image(Yii::app()->baseUrl.'/uploads/images/albums/'.$photo->image, Yii::app()->language == 'ru' ? $photo->name_ru : $photo->name_uk); ?>
            <p><?= Yii::app()->language == 'ru' ? $photo->name_ru : $photo->name_uk; ?></p>
        </a>
    <?php endforeach; ?>