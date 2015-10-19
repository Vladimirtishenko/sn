<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>
<div class="party-border"></div>
<section class="party-extension-main -flex">
    <div class="party-video-photo-field">
        <?php 
            $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>array(
                    Yii::t('main', 'Регионы'),
                ),
                'htmlOptions'=>array('class'=>'party-breadcrumps'),
                'separator'=>'&#9642;',

            ));
        ?>
        <h1><?= Yii::t('main', 'Регионы'); ?></h1>
        <div class="party-map-area">
            <img class="party-back-img" src="<?= Yii::app()->baseUrl; ?>/images/mapBack.jpg" alt="">
            <div class="party-map-regions-general">
            <img class="party-logo-for-map" src="<?= Yii::app()->baseUrl; ?>/images/logoMap.png" alt="">
            <img src="<?= Yii::app()->baseUrl; ?>/images/map_dinamic.png" alt="map" usemap="#map" id="ukraine">
            <map name="map">
                <area data-tooltip="Крим" class="obl" shape="poly" id="1" coords="386, 324, 371, 335, 365, 345, 368, 353, 380, 353, 394, 352, 405, 358, 404, 372, 406, 383, 413, 390, 427, 390, 436, 383, 441, 378, 442, 371, 453, 366, 463, 363, 469, 362, 476, 353, 486, 355, 499, 351, 507, 345, 506, 336, 509, 328, 497, 326, 490, 328, 483, 327, 476, 334, 462, 330, 454, 322, 444, 313, 437, 306, 430, 310, 419, 307, 410, 306, 400, 315, 397, 320">
                <area data-tooltip="Запоріжська" class="obl" shape="poly" id="2" coords="478, 278, 487, 273, 499, 271, 508, 264, 512, 258, 512, 247, 504, 241, 513, 237, 508, 224, 497, 222, 487, 218, 477, 220, 466, 209, 457, 207, 449, 207, 438, 207, 433, 213, 438, 227, 441, 234, 432, 238, 422, 239, 418, 244, 424, 253, 429, 263, 436, 272, 441, 276, 447, 283, 447, 286, 448, 290, 454, 294, 462, 289, 473, 285">
                <area data-tooltip="Херсонська" class="obl" shape="poly" id="3" coords="350, 314, 340, 310, 338, 298, 348, 291, 347, 283, 355, 278, 364, 275, 371, 280, 376, 271, 378, 257, 376, 245, 386, 241, 400, 242, 413, 247, 417, 244, 422, 250, 428, 255, 430, 265, 435, 270, 440, 279, 445, 283, 449, 287, 447, 294, 440, 304, 428, 304, 422, 307, 410, 306, 397, 320, 387, 313, 372, 314, 360, 315">
                <area data-tooltip="Миколаївська" class="obl" shape="poly" id="4" coords="343, 289, 350, 280, 358, 275, 371, 280, 375, 278, 376, 269, 379, 257, 374, 245, 371, 233, 374, 219, 363, 226, 350, 232, 340, 234, 329, 229, 321, 222, 308, 214, 298, 221, 282, 216, 275, 218, 281, 228, 289, 234, 291, 241, 303, 248, 311, 257, 315, 265, 314, 274, 317, 291, 322, 294, 334, 290">
                <area data-tooltip="Дніпропетровська" class="obl" shape="poly" id="5" coords="389, 239, 377, 245, 368, 236, 376, 217, 383, 205, 388, 193, 396, 185, 403, 179, 414, 173, 417, 166, 427, 163, 433, 160, 449, 168, 461, 168, 474, 177, 486, 183, 494, 180, 499, 199, 494, 210, 491, 221, 479, 220, 464, 208, 450, 208, 438, 207, 433, 217, 441, 229, 440, 237, 431, 240, 421, 238, 416, 246, 401, 243">
                <area data-tooltip="Донецька" class="obl" shape="poly" id="6" coords="554, 240, 549, 248, 533, 249, 523, 261, 512, 261, 512, 249, 505, 242, 514, 236, 509, 225, 493, 219, 495, 203, 501, 201, 498, 191, 497, 181, 499, 164, 511, 151, 524, 146, 535, 156, 541, 168, 547, 183, 562, 189, 568, 199, 562, 218, 553, 224">
                <area data-tooltip="Луганська" class="obl" shape="poly" id="7" coords="587, 109, 598, 116, 599, 131, 593, 144, 601, 153, 593, 161, 604, 178, 605, 190, 595, 208, 569, 205, 562, 189, 549, 184, 541, 164, 533, 151, 524, 144, 524, 118, 526, 105, 542, 101, 551, 103, 564, 108, 577, 106">
                <area data-tooltip="Харківська" class="obl" shape="poly" id="8" coords="479, 98, 497, 87, 510, 87, 518, 98, 524, 103, 526, 122, 518, 129, 523, 144, 511, 153, 498, 164, 495, 169, 498, 182, 476, 181, 464, 168, 453, 167, 439, 160, 444, 146, 446, 132, 425, 117, 432, 107, 445, 102, 450, 90, 470, 92">
                <area data-tooltip="Полтавська" class="obl" shape="poly" id="9" coords="444, 132, 445, 145, 437, 157, 425, 162, 412, 167, 410, 178, 393, 181, 382, 164, 361, 166, 354, 168, 352, 156, 354, 141, 341, 126, 337, 114, 353, 111, 366, 104, 379, 100, 392, 96, 407, 107, 424, 117, 436, 128">
                <area data-tooltip="Сумська" class="obl" shape="poly" id="10" coords="397, 40, 402, 55, 402, 61, 419, 61, 433, 63, 445, 78, 449, 94, 447, 104, 430, 110, 424, 117, 408, 111, 406, 104, 390, 96, 379, 101, 369, 100, 367, 79, 360, 68, 360, 58, 358, 44, 364, 30, 368, 20, 369, 6, 383, 5, 384, 14, 392, 23, 398, 26, 406, 32, 402, 41">
                <area data-tooltip="Чернігівська" class="obl" shape="poly" id="11" coords="306, 24, 321, 23, 328, 24, 337, 9, 350, 12, 363, 6, 368, 8, 366, 22, 365, 32, 357, 49, 360, 58, 358, 72, 366, 80, 366, 103, 353, 111, 333, 112, 324, 97, 307, 103, 298, 94, 290, 88, 281, 80, 283, 64, 287, 49, 293, 34">
                
                <area data-tooltip="Київська" class="obl" shape="poly" id="12" coords="270, 61, 282, 67, 282, 80, 291, 90, 299, 95, 308, 102, 323, 98, 332, 106, 334, 121, 319, 129, 307, 133, 301, 149, 297, 157, 286, 162, 276, 156, 267, 164, 259, 164, 250, 151, 256, 134, 258, 126, 252, 99, 247, 83, 246, 72, 250, 62">

                <area data-tooltip="Черкаська" class="obl" shape="poly" id="13" coords="308, 133, 319, 132, 330, 121, 335, 112, 343, 128, 356, 144, 352, 157, 356, 165, 350, 175, 334, 180, 320, 182, 313, 187, 301, 183, 293, 189, 288, 199, 271, 201, 264, 191, 258, 178, 259, 165, 268, 164, 277, 159, 290, 163, 298, 156, 306, 149, 307, 129">
                <area data-tooltip="Кіровоградська" class="obl" shape="poly" id="14" coords="306, 214, 329, 225, 336, 235, 348, 234, 361, 228, 367, 222, 374, 219, 382, 211, 381, 200, 393, 190, 392, 178, 384, 163, 360, 167, 355, 173, 350, 178, 329, 183, 317, 184, 313, 190, 301, 185, 291, 194, 288, 201, 265, 202, 265, 212, 275, 218, 293, 218, 302, 221">
                <area data-tooltip="Одеська" class="obl" shape="poly" id="15" coords="249, 255, 266, 285, 274, 293, 274, 301, 242, 300, 238, 312, 239, 319, 233, 327, 223, 334, 222, 343, 215, 354, 227, 360, 235, 362, 246, 360, 255, 353, 266, 353, 274, 360, 278, 354, 277, 339, 294, 327, 311, 298, 319, 293, 313, 275, 316, 264, 310, 256, 303, 248, 290, 241, 279, 223, 265, 214, 250, 225, 239, 216, 229, 228, 241, 233, 244, 251">
                <area data-tooltip="Вінницька" class="obl" shape="poly" id="16" coords="213, 220, 229, 226, 238, 217, 253, 224, 265, 216, 268, 198, 259, 182, 256, 167, 250, 149, 237, 147, 231, 140, 209, 147, 200, 147, 196, 157, 199, 168, 191, 179, 186, 192, 190, 209, 198, 216">
                <area data-tooltip="Житомирська" class="obl" shape="poly" id="17" coords="241, 54, 250, 64, 244, 75, 248, 84, 252, 90, 253, 99, 255, 110, 258, 126, 255, 137, 250, 148, 239, 148, 231, 141, 210, 146, 199, 146, 191, 132, 188, 120, 176, 104, 181, 92, 182, 75, 187, 64, 195, 55, 211, 55, 225, 60">
                <area data-tooltip="Чернівецька" class="obl" shape="poly" id="18" coords="151, 231, 172, 215, 191, 209, 185, 194, 174, 202, 152, 201, 145, 203, 130, 198, 122, 211, 111, 218, 107, 228, 107, 242, 121, 236, 136, 233">
                <area data-tooltip="Тернопільська" class="obl" shape="poly" id="19" coords="138, 198, 148, 204, 153, 201, 146, 178, 151, 161, 147, 147, 148, 135, 148, 121, 135, 123, 133, 129, 108, 139, 97, 152, 94, 167, 128, 201">
                <area data-tooltip="Рівненська" class="obl" shape="poly" id="20" coords="125, 129, 132, 129, 143, 122, 151, 122, 169, 111, 177, 106, 181, 93, 182, 79, 187, 66, 195, 56, 168, 44, 156, 38, 129, 40, 126, 52, 133, 62, 140, 77, 137, 92, 131, 102, 115, 106, 108, 113, 113, 130, 116, 134">
                <area data-tooltip="Івано-Франківська" class="obl" shape="poly" id="21" coords="102, 241, 107, 238, 106, 226, 111, 216, 122, 212, 128, 197, 117, 189, 94, 165, 97, 153, 85, 160, 86, 168, 69, 177, 63, 177, 59, 190, 68, 199, 81, 204, 92, 219, 91, 231">
                <area data-tooltip="Волинська" class="obl" shape="poly" id="22" coords="72, 58, 80, 50, 87, 52, 96, 40, 127, 36, 131, 41, 126, 52, 131, 62, 139, 69, 137, 84, 139, 95, 130, 100, 113, 106, 105, 118, 85, 102">
                <area data-tooltip="Львівська" class="obl" shape="poly" id="23" coords="36, 146, 66, 114, 75, 110, 85, 102, 104, 118, 111, 122, 115, 136, 87, 160, 86, 167, 70, 176, 63, 178, 59, 193, 46, 186, 41, 171">
                <area data-tooltip="Закарпатська" class="obl" shape="poly" id="24" coords="9, 201, 29, 171, 40, 173, 46, 188, 67, 197, 79, 203, 92, 219, 94, 232, 74, 233, 48, 224, 39, 230, 32, 221, 13, 207">
                <area data-tooltip="Хмельницька" class="obl" shape="poly" id="25" coords="149, 122, 161, 117, 171, 108, 177, 107, 182, 111, 188, 124, 192, 136, 198, 143, 200, 150, 195, 159, 200, 164, 199, 172, 192, 177, 189, 187, 183, 198, 170, 201, 156, 201, 149, 191, 145, 182, 150, 169, 151, 156, 148, 145, 148, 134">
            </map>
                <img id="image-id-1" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/krum.png" alt="Крим">    <img id="image-id-2" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/zaporozhie.png" alt="Запоріжжя">    <img id="image-id-3" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/herson.png" alt="Херсон">    <img id="image-id-4" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/nikolaev.png" alt="Миколаїв" style="display: none;">    <img id="image-id-5" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/dnepropetrovsk.png" alt="Дніпропетровськ">    <img id="image-id-6" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/donetsk.png" alt="Донецьк">    <img id="image-id-7" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/lygansk.png" alt="Луганськ">    <img id="image-id-8" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/harkov.png" alt="Харьків">    <img id="image-id-9" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/poltava.png" alt="Полтава" style="display: none;">    <img id="image-id-10" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/symmu.png" alt="Суми" style="display: none;">    <img id="image-id-11" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/chernigov.png" alt="Чернігів" style="display: none;">    <img id="image-id-12" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/kiev.png" alt="Київ" style="display: none;">    <img id="image-id-13" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/cherkassu.png" alt="Черкаси">    <img id="image-id-14" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/kirovograd.png" alt="Кіровоград" style="display: none;">    <img id="image-id-15" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/odessa.png" alt="Одеса" style="display: none;">    <img id="image-id-16" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/vinnitsa.png" alt="Вінниця" style="display: none;">    <img id="image-id-17" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/zhutomir.png" alt="Житомир" style="display: none;">    <img id="image-id-18" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/chernovtsu.png" alt="Черкаси">    <img id="image-id-19" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/ternopol.png" alt="Тернопіль" style="display: none;">    <img id="image-id-20" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/rovno.png" alt="Рівне">    <img id="image-id-21" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/ivano-frankovsk.png" alt="Івано-Франківськ">    <img id="image-id-22" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/lytsk.png" alt="Луцьк" style="display: none;">    <img id="image-id-23" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/lvov.png" alt="Львів" style="display: none;">    <img id="image-id-24" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/yzhorod.png" alt="Ужгород">    <img id="image-id-25" class="region" src="<?= Yii::app()->baseUrl; ?>/images/regions/hmelnitskii.png" alt="Хмельницький" style="display: none;"></div>
        </div>
    </div>
    <div class="party-columm-smi-news">
         <div class="party-photo-outer-block">
            <div class="party-photo-inner-block">
             <div class="party-smi">
                <?php $this->widget('application.components.widgets.SmiWidget'); ?>
            </div>
            </div>
        </div>
    </div>
</section>
<section class="party-outer-revie">
<div class="party-preloader"><img src="<?= Yii::app()->baseUrl; ?>/images/695.GIF" alt=""></div>
<?php $this->renderPartial("regionBottom", array('region'=>$region)); ?>
</section>
</section>