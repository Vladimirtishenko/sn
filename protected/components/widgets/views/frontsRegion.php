<?php /* @var $model Front */ ?>
<?php foreach($model as $key => $fronts): ?>
        <div class="party-liders">
         	<div class="party-image-mask -white">
         		<img src="<?php echo Yii::app()->baseUrl.'/uploads/photos/thumb/'.$fronts->image_thumb; ?>" alt="<?php echo (Yii::app()->language == 'ru') ? $fronts->title_ru : $fronts->title_uk; ?>" height="102" width="102">
         	</div>
         	<p> <?= Yii::t('main', 'Глава обласной организации'); ?> </p>
         	<span><?php echo (Yii::app()->language == 'ru') ? $fronts->title_ru : $fronts->title_uk; ?></span>
        </div>
<?php endforeach; ?>
