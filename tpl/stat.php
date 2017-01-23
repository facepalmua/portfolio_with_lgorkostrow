<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0, user-scalable=no">
    <title>Statystic</title>
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="/javascript/jQuery-v3.1.1.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="/javascript/admin-script.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

   <?php
        $file=file("assets/php/stat/stat.log");
        $col=sizeof($file);

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
                    <a href="/admin/stat/" class="selected">Статистика</a>
                </li>
                <li>
                    <a href="/admin/portfolio/">Добавления в портфолио</a>
                </li>
                <li>
                    <a href="/admin/message/">Сообщения <span class="active-message"><img src="/images/znak.png" alt="znak" width="20px" height="20px"><span id="quantity"></span></span></a>
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

        </div>
    </div>


    <script src="/javascript/jeneral.js"></script>
</body>

</html>
