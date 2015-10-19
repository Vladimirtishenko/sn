<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1280, initial-scale=-1">
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
<section class="party-modal-block animated">
    <div class="party-popup-content">
        <div class="party-close-icon"><i class="fa fa-times"></i></div>
        <h1></h1>
        <div class="party-scroll-modal" >
            <div id="wrapper1" class="wrapper">
                <div id="scroller1" class="scroller">
                   
                </div>
            </div>
        </div>
        <div class="party-outer-forms">
            <form action="#" id="modal-window">
                <div class="party-inline-field">
                    <input type="text" required><label for=""> <?= Yii::t('main', 'ФИО'); ?> </label>
                </div>
                <div class="party-inline-field">
                    <input type="text" required><label for=""> <?= Yii::t('main', 'Телефон'); ?> </label>
                </div>
                <div class="party-inline-field">
                    <input type="email" required><label for=""> <?= Yii::t('main', 'Электронная почта'); ?> </label>
                </div>
                <div class="party-inline-textarea">
                    <textarea name="" id=""></textarea><label for=""> <?= Yii::t('main', 'Комментарий'); ?> </label>
                </div>
                <button type="submit" class="btn-green"> <?= Yii::t('main', 'Отправить'); ?> </button>
            </form>
        </div>
    </div>
</section>
<section class="party-outers-footer-usualy<?= (Yii::app()->controller->action->id !== 'index') ? '-bottom' : ''; ?>">
 <section class="party-header-out">
        <header>
            <div class="party-lang">
                <?php $this->widget('application.components.widgets.LanguageSelector'); ?> 
            </div>
            
             <div class="party-online">
                <button class="btn-blue onloadModal" data-numder="1" data-attr="enter"><?= Yii::t('main', 'Присоединиться'); ?></button>
            </div>
            <div class="party-online">
                <button class="btn-orange onloadModal" data-numder="1" data-attr="online"><?= Yii::t('main', 'On-line приемная'); ?></button>
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
                    'method'=>'get',
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
    <nav class="party-menu">
        <ul class="party-wraper-menu">
            <li class="party-logo"><a href="<?= Yii::app()->createUrl('site/index'); ?>"><img src="<?= Yii::app()->request->baseUrl; ?>/images/logo.png" alt=""></a></li>
            <li>
                <a href="<?= Yii::app()->createUrl('site/about'); ?>"><h2> <?= Yii::t('main', 'О Партии'); ?> </h2><p> <?= Yii::t('main', 'Политическая программа'); ?> , <br> <?= Yii::t('main', 'миссия и ценности'); ?> </p></a>
                <ul class="party-drop">
                    <li>
                        <a href="<?= Yii::app()->createUrl('site/statut'); ?>"><h5> <?= Yii::t('main', 'уСТАВ'); ?> </h5></a> 
                    </li> 
                    <li>
                        <a href="<?= Yii::app()->createUrl('site/programm'); ?>"><h5> <?= Yii::t('main', 'прОГРАММА'); ?> </h5></a> 
                    </li> 
                     <li>
                        <a href="<?= Yii::app()->createUrl('site/ideology'); ?>"><h5> <?= Yii::t('main', 'Идеология'); ?> </h5></a> 
                    </li> 
                    <li>
                        <a href="<?= Yii::app()->createUrl('site/liders'); ?>"><h5> <?= Yii::t('main', 'пРЕЗИДИУМ'); ?> </h5></a> 
                    </li>
                     <li>
                        <a href="<?= Yii::app()->createUrl('site/politrada'); ?>"><h5> <?= Yii::t('main', 'пОЛИТ. СОВЕТ'); ?> </h5></a> 
                    </li>
                </ul>
            </li>
            <li><a href="<?= Yii::app()->createUrl('site/news'); ?>"><h2> <?= Yii::t('main', 'Новости'); ?> </h2><p> <?= Yii::t('main', 'Оперативное поступление'); ?>  <br> <?= Yii::t('main', 'информации'); ?> </p></a></li>
            <li><a href="<?= Yii::app()->createUrl('site/photo'); ?>"><h2> <?= Yii::t('main', 'ФОтО'); ?> </h2><p> <?= Yii::t('main', 'Фото отчеты'); ?>  <br> <?= Yii::t('main', 'деятельности партии'); ?> </p></a></li>
             <li><a href="<?= Yii::app()->createUrl('site/video'); ?>"><h2> <?= Yii::t('main', 'ВИдео'); ?> </h2><p> <?= Yii::t('main', 'Видео отчеты'); ?>  <br> <?= Yii::t('main', 'деятельности партии'); ?> </p></a></li>
            <li><a href="<?= Yii::app()->createUrl('site/regions'); ?>"><h2> <?= Yii::t('main', 'Регионы'); ?> </h2><p> <?= Yii::t('main', 'Наши отделения в <br /> регионах'); ?>  <?= Yii::t('main', 'Украины'); ?> </p></a></li>
        </ul>
    </nav>
	<?= $content; ?>
     <footer class="pary-footer-else-page">
    <div class="party-innner-footer-else <?= (Yii::app()->controller->action->id == 'index') ? '-border' : ''; ?>">
    <div class="paty-outer-three-else">
        <p>2015 ©  <?= Yii::t('main', 'Все права защищены'); ?>  <br> <a class="dev" href="http://4side.in.ua"><span> <?= Yii::t('main', 'Разработка'); ?> </span> &nbsp; <img src="<?= Yii::app()->baseUrl; ?>/images/4side.png" width="100px" alt=""></a></p>
        <div class="party-footer-menu">
            <ul class="party-footer-list-menu">
                <li>
                    <h5> <?= Yii::t('main', 'Партия'); ?> </h5>
                    <a href="<?= Yii::app()->createUrl('site/statut'); ?>"> <?= Yii::t('main', 'Устав'); ?> </a>
                    <a href="<?= Yii::app()->createUrl('site/programm'); ?>"> <?= Yii::t('main', 'Программа партии'); ?> </a>
                    <a href="<?= Yii::app()->createUrl('site/ideology'); ?>"> <?= Yii::t('main', 'Идеология'); ?> </a>
                    <a href="<?= Yii::app()->createUrl('site/presid'); ?>"> <?= Yii::t('main', 'Президиум'); ?> </a>
                    <a href="<?= Yii::app()->createUrl('site/polit'); ?>"> <?= Yii::t('main', 'Полит. совет'); ?> </a>
                </li>
                <li>
                    <h5> <?= Yii::t('main', 'Пресс-центр'); ?> </h5>
                    <a href="<?= Yii::app() -> createUrl('site/news'); ?>"> <?= Yii::t('main', 'Новости'); ?> </a>
                    <a href="<?= Yii::app() -> createUrl('site/video'); ?>"> <?= Yii::t('main', 'Видео'); ?> </a>
                    <a href="<?= Yii::app() -> createUrl('site/photo'); ?>"> <?= Yii::t('main', 'Фотоотчеты'); ?> </a>
                </li>
                <li>
                    <h5> <?= Yii::t('main', 'Контакты'); ?> </h5>
                    <a href="<?= Yii::app() -> createUrl('site/regions'); ?>"> <?= Yii::t('main', 'Регионы'); ?> </a>
                </li>
                <li>
                    <h5> <?= Yii::t('main', 'Сообщества'); ?> </h5>
                    <a href="#">Facebook</a>
                    <a href="#">Vkontakte</a>
                    <a href="#">Twitter</a>
                </li>
            </ul>
        </div>
        <div class="party-online">
                <button class="btn-blue onloadModal" data-numder="1" data-attr="enter"> <?= Yii::t('main', 'Присоединиться'); ?> </button>
            </div>
            <div class="party-online">
                <button class="btn-orange onloadModal" data-numder="1" data-attr="online"> <?= Yii::t('main', 'On-line приемная'); ?> </button>
            </div>
    </div>
    </div>
    </footer>
    <? Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/iscroll.js', CClientScript::POS_END); ?>
    <? Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/default.js', CClientScript::POS_END); ?>
</body>

</html>
