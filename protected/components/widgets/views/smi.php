<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 20.05.14
 * Time: 17:12
 */
/* @var $smis Smi model */
?>
<h2><?php echo Yii::t('main','Топ новости'); ?></h2>
    <? foreach($smis as $key => $smi): ?>
            <?= CHtml::link(Yii::app()->language == 'ru' ? $smi->title_ru : $smi->title_uk, array('/site/news', 'id'=>$smi->id), array('class' => 'blue')); ?>
            <?  if(Yii::app()->controller->action->id == 'index' && $key == 1) break; ?>
    <?php endforeach; ?>

<a href="<?= Yii::app() -> createUrl('site/news'); ?>" class="grey"> <?= Yii::t('main', 'Все статьи'); ?> </a>