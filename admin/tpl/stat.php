<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0, user-scalable=no">
    <title>Statystic</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="javascript/jQuery-v3.1.1.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="javascript/admin-script.js"></script>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

   <?php 
        $file=file("../assets/php/stat/stat.log");
        $col=50;
        if ($col>sizeof($file)) { $col=sizeof($file); }
        $d1=$d2=$d3=$d4=$d5=$d6=$d7 = 0; 
        $day1 = date("d.m.Y", strtotime("-6 day",strtotime(date("d.m.Y"))));
        $day2 = date("d.m.Y", strtotime("-5 day",strtotime(date("d.m.Y"))));
        $day3 = date("d.m.Y", strtotime("-4 day",strtotime(date("d.m.Y"))));
        $day4 = date("d.m.Y", strtotime("-3 day",strtotime(date("d.m.Y"))));
        $day5 = date("d.m.Y", strtotime("-2 day",strtotime(date("d.m.Y"))));
        $day6 = date("d.m.Y", strtotime("-1 day",strtotime(date("d.m.Y"))));
        $day7 = date("d.m.Y");
        for ($si=sizeof($file)-1; $si+1>sizeof($file)-$col; $si--) {
            $string=explode("|",$file[$si]);
            if($string[0] == $day1){$d1++;}
            elseif ($string[0] == $day2) {$d2++;}
            elseif ($string[0] == $day3) {$d3++;}
            elseif ($string[0] == $day4) {$d4++;}
            elseif ($string[0] == $day5) {$d5++;}
            elseif ($string[0] == $day6) {$d6++;}
            elseif ($string[0] == $day7) {$d7++;}
        }
        echo"<script type=\"text/javascript\">
        google.charts.load('current', {
            'packages': ['bar']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Дни', 'Просмотры'],
                ['".$day1."', ".$d1."],
                ['".$day2."', ".$d2."],
                ['".$day3."', ".$d3."],
                ['".$day4."', ".$d4."],
                ['".$day5."', ".$d5."],
                ['".$day6."', ".$d6."],
                ['".$day7."', ".$d7."]

            ]);

            var options = {
                chart: {
                    title: 'Статистика',
                    subtitle: 'Количество просмотров за: ".$day1."-".$day7."',
                }
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, options);
        }
        </script>";?>
</head>

<body>

    <div id="header">
        <div class="logo"><a href="#">God<span><i>damn</i></span></a></div>
    </div>
    <!-- end header -->
    <a class="mobile" href="#">MENU</a>
    <div id="container">
        <sidebar>
            <ul id="nav">
                <li>
                    <a href="?stat" class="selected">Статистика</a>
                </li>
                <li>
                    <a href="?portfolio">Добавления в портфолио</a>
                </li>
                <li>
                    <a href="?message">Сообщения <span class="active-message"><img src="images/znak.png" alt="znak" width="20px" height="20px"><span id="quantity"></span></span></a>
                </li>
            </ul>
        </sidebar>
        <div class="content">
            <h1>Статистика</h1>
            <!-- <p>Количество заходов на страницу по данным Google Analytics</p> -->
            <div id="box">
                <div class="box-top">Просмотры</div>
                <div class="box-panel">
                    <div id="columnchart_material" style="width: 900px; height: 500px;"></div>
                </div>
            </div>
            <!-- если хочешь, можешь удалить-->
            <?php 
                
                if ($col>sizeof($file)) { $col=sizeof($file); }
                    echo "Последние <b>".$col."</b> посещений сайта:"; ?>

                    <table width="680" cellspacing="1" cellpadding="1" border="0"
                        STYLE="table-layout:fixed">
                    <tr bgcolor="#eeeeee">
                    <td class="zz" width="100"><b>Время и дата</b></td>
                    <td class="zz" width="200"><b>Данные о посетителе</b></td>
                    <td class="zz" width="100"><b>IP/прокси</b></td>
                    <td class="zz" width="280"><b>Посещенный URL</b></td>
                </tr>

                <?php
                    for ($si=sizeof($file)-1; $si+1>sizeof($file)-$col; $si--) {
                        $string=explode("|",$file[$si]);
                        $q1[$si]=$string[0]; // дата и время
                        $q2[$si]=$string[1]; // имя бота
                        $q3[$si]=$string[2]; // ip бота
                        $q4[$si]=$string[3]; // адрес посещения
                        echo '<tr bgcolor="#eeeeee"><td class="zz">'.$q1[$si].'</td>
                        <td class="zz">'.$q2[$si].'</td>
                        <td class="zz">'.$q3[$si].'</td>
                        <td class="zz">'.$q4[$si].'</td></tr>';
                    }
                ?>
                </table>
                <!-- если хочешь, можешь удалить-->
        </div>
    </div>
    </div>
    
    <script src="javascript/jeneral.js"></script>
</body>

</html>
