<?php /* @var $model Front */ ?>
<?php foreach($model as $key => $fronts): ?>
        <a href="<?php echo Yii::app()->createUrl('/site/front', array('id'=>$fronts->id)); ?>" class="party-liders <?php if($key == 0) echo "party-active-lider"; ?>" data-item="<?=$key?>">
         <div class="party-image-mask"><img src="<?php echo Yii::app()->baseUrl.'/uploads/photos/thumb/'.$fronts->image_thumb; ?>" alt="<?php echo (Yii::app()->language == 'ru') ? $fronts->title_ru : $fronts->title_uk; ?>" height="102" width="102"></div><span><?php echo (Yii::app()->language == 'ru') ? $fronts->title_ru : $fronts->title_uk; ?></span>
        </a>
<?php endforeach; ?>
