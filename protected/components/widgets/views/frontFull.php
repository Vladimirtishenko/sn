<?php /* @var $model Front */ ?>
<?php foreach($model as $key => $fronts): ?>
        <div class="party-outer-content-photo animated" id="<?=$key; ?>-s" <?php if($key == 0) echo "style='display: block; opacity: 1'"; ?> >
		<div class="party-text-lider">
			<a href="<?php echo Yii::app()->createUrl('/site/front', array('id'=>$fronts->id)); ?>" class="party-outer-of-cell">
			<p> <?= Yii::t('main', 'Президиум'); ?> :</p>
			<h2><?php echo (Yii::app()->language == 'ru') ? $fronts->title_ru : $fronts->title_uk; ?></h2>
			<span><?php echo (Yii::app()->language == 'ru') ? $fronts->simple_ru : $fronts->simple_uk; ?></span>
			</a>
		</div>
		<img src="<?php echo Yii::app()->baseUrl.'/uploads/photos/full/'.$fronts->image; ?>" alt="">
	</div>
<?php endforeach; ?>
	