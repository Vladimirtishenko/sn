<?php
function my_calendar($fill=array()) {
    if(Yii::app()->language == 'ru')
    {
        $month_names=array("январь","февраль","март","апрель","май","июнь",
            "июль","август","сентябрь","октябрь","ноябрь","декабрь");
    }
    else
    {
        $month_names=array("січень","лютий","березень","квітень","травень","червень",
            "липень","серпень","вересень","жовтень","листопад","грудень");
    }


    if (isset($_GET['y'])) $y=$_GET['y'];
    if (isset($_GET['m'])) $m=$_GET['m'];
    if (isset($_GET['date']) AND strstr($_GET['date'],"-")) list($y,$m)=explode("-",$_GET['date']);
    if (!isset($y) OR $y < 1970 OR $y > 2037) $y=date("Y");
    if (!isset($m) OR $m < 1 OR $m > 12) $m=date("m");

    $month_stamp=mktime(0,0,0,$m,1,$y);
    $day_count=date("t",$month_stamp);
    $weekday=date("w",$month_stamp);
    if ($weekday==0) $weekday=7;
    $start=-($weekday-2);
    $last=($day_count+$weekday-1) % 7;
    if ($last==0) $end=$day_count; else $end=$day_count+7-$last;
    $today=date("Y-m-d");
    $prev=date('?\m=m&\y=Y',mktime (0,0,0,$m-1,1,$y));
    $next=date('?\m=m&\y=Y',mktime (0,0,0,$m+1,1,$y));
    $i=0;
    ?>

            <ul class="party-calendar-date">
                <?
                for($d=$start;$d<=$end;$d++) {
                    if ($d >= 1) echo " <li>\n";
                    if ($d < 1 OR $d > $day_count)
                    {
                        continue;
                    }
                    else
                    {
                        $now="$y-$m-".sprintf("%02d",$d);
                        if (is_array($fill) AND in_array($now,$fill))
                        {
                            echo CHtml::link($d, array('/site/news/', 'date'=>$now), array('class' => 'party-day-active'));
                        }
                        else
                        {
                            echo "<a>".$d."</a>";
                        }
                    }
                    if ($d >= 1) echo " </li>\n";
                }
                ?>
            </ul>
        <div class="party-calendar-mounts">
            <a href="<? echo $prev ?>" class="party-calendar-mounts-prev"><i class="fa fa-angle-left"></i></a>
            <span class="party-calendar-mounts-this"><?= $month_names[$m-1]," ",$y ?></span>
            <a href="<? echo $next ?>" class="party-calendar-mounts-next"><i class="fa fa-angle-right"></i></a>
        </div>
<? } ?>
<?php my_calendar($arr); ?>
