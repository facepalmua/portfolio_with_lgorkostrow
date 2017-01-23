<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0, user-scalable=no">
    <title>Message</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="/javascript/jQuery-v3.1.1.js"></script>
    <script type="text/javascript" src="/javascript/admin-script.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
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
                    <div class="box-top">Увдомления для Вас от <b><?=$m["name"]?></b> В <b><?=$m["datetime"]?></b> Почта: <b><?=$m["email"]?></b></div>
                    <div class="box-panel"><?=$m["text"]?>
                    <?php
                        if ( $m["active"] == 1 ){
                            echo '<span class="active-message"><img src="/images/znak.png" alt="znak" width="20px" height="20px"></span>';
                        }
                    ?>

                    <span><button type="button" class="btn-message  btn btn-danger">Удалить</button></span><button type="button" class="btn-message btn btn-primary click-class"  >Ответить</button>
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
                                for ($i=1; $i <= ceil($this->n/6) ; $i++) {
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
        <input type="text" placeholder="Кому"><br>
        <input type="text" placeholder="Дратути"><br>
        <textarea name="mess" id="" cols="30" rows="10" placeholder="bla bla bla"></textarea><br><br>

        <button type="button" class="btn btn-success">Отправить</button>
    </div>
    </div>
</div>
    <script src="/javascript/jeneral.js"></script>
    <script>
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
    </script>
</body>

</html>
