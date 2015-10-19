<?php
if($_POST['username'] == 'online'){
$simple = "Ваш вопрос или предложение";
$description = "Lorem Ipsum - це текст-'риба', що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною 'рибою'' аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів. 'Риба' не тільки успішно пережила п'ять століть, але й прижилася в електронному верстуванні, залишаючись по суті незмінною. Вона популяризувалась в 60-их роках минулого сторіччя завдяки виданню зразків шрифтів Letraset, які містили уривки з Lorem Ipsum, і вдруге - нещодавно завдяки програмам комп'ютерного верстування на кшталт Aldus Pagemaker, які використовували різні версії Lorem Ipsum.";
$arrayName = array('title' => 'On-line приемная', 'description' => $description, 'simple' => $simple);
}
else{
$simple = "Комментарий";
$description = " <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo voluptate, sunt soluta necessitatibus libero deserunt? Eveniet facilis, consequuntur reprehenderit recusandae explicabo, excepturi quam unde accusamus illum necessitatibus doloremque libero sint.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam harum sapiente maxime, omnis fugit ratione sint numquam odit, iusto modi voluptas iure quidem mollitia aut architecto sunt non hic molestias.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio totam esse eveniet repudiandae molestiae quo delectus officiis veniam, nobis dignissimos nisi nesciunt perspiciatis sequi ea, suscipit provident rem eius. Iure.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio totam esse eveniet repudiandae molestiae quo delectus officiis veniam, nobis dignissimos nisi nesciunt perspiciatis sequi ea, suscipit provident rem eius. Iure.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio totam esse eveniet repudiandae molestiae quo delectus officiis veniam, nobis dignissimos nisi nesciunt perspiciatis sequi ea, suscipit provident rem eius. Iure.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio totam esse eveniet repudiandae molestiae quo delectus officiis veniam, nobis dignissimos nisi nesciunt perspiciatis sequi ea, suscipit provident rem eius. Iure.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio totam esse eveniet repudiandae molestiae quo delectus officiis veniam, nobis dignissimos nisi nesciunt perspiciatis sequi ea, suscipit provident rem eius. Iure.</p>";
$arrayName = array('title' => 'Вступить в партию', 'description' => $description, 'simple' => $simple);
}

echo json_encode($arrayName);
?>
