<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1280, initial-scale=1">
    <title>Главная</title>
    <!-- Bootstrap -->
    <link href="<?= Yii::app()->request->baseUrl; ?>/prodaction/bundle.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<title><?= CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<section class="party-header-out -page404">
        <header>
            <div class="party-lang">
                <a href="" class="no-active-color">По-русски</a><a href="#">Українською</a>
            </div>
             <div class="party-online">
                <button class="btn-blue onloadModal" data-numder="1" data-attr="enter"><?= Yii::t('main', 'Присоединиться'); ?></button>
            </div>
            <div class="party-online">
                <button href="" class="btn-orange onloadModal" data-numder="1" data-attr="online">On-line приемная</button>
            </div>
            <div class="party-social-group">
                <p class="no-active-color"> <?= Yii::t('main', 'Группы с соцсетях'); ?> :</p>
                <a href="" class="party-fb"><i class="fa fa-facebook"></i></a>
                <a href="" class="party-vk"><i class="fa fa-vk"></i></a>
                <a href="" class="party-tw"><i class="fa fa-twitter"></i></a>
            </div>
            <div class="party-search">
                <?php
                $this->beginWidget('CActiveForm', array(
                    'id'=>'search',
                    'action'=>array('/site/search'),
                ));
                echo CHtml::openTag('button', array('type' => 'submit', 'class'=>'party-ico-search'));
                echo '<span class="fa fa-search"></span>';
                echo CHtml::closeTag('button');
                echo CHtml::textField('find', '', array('class'=>'party-input-search no-active-color', 'placeholder'=>Yii::t('main', 'Поиск по сайту')));
                $this->endWidget();
                ?>
            </div>
        </header>
    </section>
<section class="party-page404">
<div class="party-inner-404">
  <figure>
      <a href="<?= Yii::app()->createUrl('site/index'); ?>"><img src="<?= Yii::app()->request->baseUrl; ?>/images/logo.png" alt=""></a>
  </figure>  
  <h1><span> <?= Yii::t('main', 'ошибка'); ?> #</span> <?php echo $code; ?></h1>
  <p><?php echo CHtml::encode($message); ?> <a href="<?= Yii::app()->createUrl('site/index'); ?>" class="btn-green"> <?= Yii::t('main', 'Перейти на главную'); ?> </a></p>
</div>
</section>
</body>
</html>