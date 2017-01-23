<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0, user-scalable=no">
    <title>Message</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/sweet-alert.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="/javascript/jQuery-v3.1.1.js"></script>
    <script type="text/javascript" src="/javascript/admin-script.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="/assets/js/sweet-alert.js"></script>
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
                    <a href="/admin/stat/">Статистика</a>
                </li>
                <li>
                    <a href="/admin/portfolio/">Добавления в портфолио</a>
                </li>
                <li>
                    <a href="/admin/message/" class="selected">Сообщения <span class="active-message"><img src="/images/znak.png" alt="znak" width="20px" height="20px"><span id="quantity"></span></span></a>
                </li>
            </ul>
        </sidebar>

        <div class="content">
            <h1>Уведомления</h1>
            <p>Сообщения, которые вам надо прочитать</p>
            <?php foreach($this->messages as $m) : ?>
                <div class="box" id="<?=$m["id"]?>">
                    <?php
                        if ( $m["active"] == 1 ){
                            echo '<div class="box-top-active" id="'.$m["id"].'">Увдомления для Вас от <b>'.$m["name"].'</b> В <b>'.$m["datetime"].'</b> Почта: <b class="mail'.$m["id"].'">'.$m["email"].'</b></div>';
                        }
                        else {
                            echo '<div class="box-top" id="'.$m["id"].'">Увдомления для Вас от <b>'.$m["name"].'</b> В <b>'.$m["datetime"].'</b> Почта: <b class="mail'.$m["id"].'">'.$m["email"].'</b></div>';
                        }
                    ?>

                    <div class="box-panel"><?=$m["text"]?>
                    <span><button type="button" class="delete-message btn-message  btn btn-danger" id="<?=$m["id"]?>">Удалить</button></span><button type="button" class="answer btn-message btn btn-primary click-class" id="<?=$m["id"]?>"  >Ответить</button>
                    </div>
                </div>
            <?php endforeach ?>
            <!-- <div id="page"> -->
                <section class="pagination">
                        <ul>

                            <?php
                                if ($this->page != 1) {
                                    $page = $this->page-1;
                                    echo '<li><a href="'.$page.'" title="Назад" >&laquo;</a></li>';
                                }
                                for ($i=1; $i <= ceil($this->n/5) ; $i++) {
                                    if ( $this->page == $i ){
                                        echo '<li><a id="active-page" title="Страница '.$i.'">'.$i.'</a></li>';
                                    }
                                    else {
                                        echo '<li><a href="'.$i.'" title="Страница '.$i.'">'.$i.'</a></li>';
                                    }
                                }
                                if ($this->page != ceil($this->n/6)) {
                                    $page = $this->page+1;
                                    echo '<li><a href="'.$page.'" title="Вперед">&raquo;</a></li>';
                                }
                            ?>


                        </ul>
                </section>


        </div>

    <div class="container-mess ">
    <div class="container-clicked">

    </div>
<div class="clicked">
        <p>From: my@email.com <span id="close-msg">X</span></p>
        <input type="text" placeholder="Кому" id="destination"><br>
        <input type="text" placeholder="Дратути"><br>
        <textarea name="mess" id="" cols="30" rows="10" placeholder="bla bla bla"></textarea><br><br>

        <button type="button" class="send btn btn-success">Отправить</button>
    </div>
    </div>
</div>
    <script src="/javascript/jeneral.js"></script>
    <!-- <script>
        $(document).ready(function(){
    $('.click-class').click(function(){
        $('.container-mess').toggleClass('hide');
    });

});
    </script>
    <script>
        $(document).ready(function(){
    $('#close-msg').click(function(){
        $('.container-mess').toggleClass('hide');
    });

});
    </script> -->
</body>

</html>
