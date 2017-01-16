<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0, user-scalable=no">
    <title>Message</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="javascript/jQuery-v3.1.1.js"></script>
    <script type="text/javascript" src="javascript/admin-script.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
                    <a href="?stat">Статистика</a>
                </li>
                <li>
                    <a href="?portfolio">Добавления в портфолио</a>
                </li>
                <li>
                    <a href="?message" class="selected">Сообщения <span class="active-message"><img src="images/znak.png" alt="znak" width="20px" height="20px"><span id="quantity"></span></span></a>
                </li>
            </ul>
        </sidebar>
        <div class="content">
            <h1>Уведомления</h1>
            <p>Сообщения, которые вам надо прочитать</p>
            <?php foreach($this->messages as $m) : ?>
                <div class="box" id="<?=$m["id"]?>">
                    <div class="box-top">Увдомления для Вас от <b><?=$m["name"]?></b> В <b><?=$m["datetime"]?></b> Почта: <b><?=$m["email"]?></b></div>
                    <div class="box-panel"><?=$m["text"]?> <span class="active-message"><img src="images/znak.png" alt="znak" width="20px" height="20px"></span></div>
                </div>
            <?php endforeach ?>
            
        </div>
    </div>
    
    <script src="javascript/jeneral.js"></script>
</body>

</html>
