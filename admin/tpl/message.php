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
                    <div class="box-panel"><?=$m["text"]?> 
                    <?php
                        if ( $m["active"] == 1 ){
                            echo '<span class="active-message"><img src="images/znak.png" alt="znak" width="20px" height="20px"></span>';
                        }
                    ?>
                    
                    </div>
                </div>
            <?php endforeach ?>
            <div id="page">
                <?php 
                    for ($i=1; $i <= ceil($this->n/6) ; $i++) { 
                        if ( $this->page == $i ){
                            echo '<span >'.$i.'</span>';
                        }
                        else {

                            echo '<a href="?message/'.$i.'">'.$i.'</a>'; 
                        }
                    }
                ?>
            </div>
            <section class="pagination">
                    <ul>
                        <li><a href="#" title="Назад" >&laquo;</a></li>
                        <li><a href="#" title="Страница 1">1</a></li>
                        <li><a href="#" title="Страница 2">2</a></li>
                        <li><a href="#" title="Страница 3" >3</a></li>
                        <li><a href="#" title="Страница 4" >4</a></li>
                        <li><a href="#" title="Страница 5" >5</a></li>
                        <li><a href="#" title="Страница 6" >6</a></li>
                        <li><a href="#" title="Страница 7" >7</a></li>
                        <li><a href="#" title="Страница 8" >8</a></li>
                        <li><a href="#" title="Страница 9" >9</a></li>
                        <li><a href="#" title="Страница 10">10</a></li>
                        <li><a href="#" title="Вперед">&raquo;</a></li>
                    </ul>
            </section>
        </div>
        
    </div>
    
    <script src="javascript/jeneral.js"></script>
</body>

</html>
