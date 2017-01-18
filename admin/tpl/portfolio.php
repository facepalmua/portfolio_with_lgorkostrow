<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0, user-scalable=no">
    <title>Admin panel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/sweet-alert.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="javascript/jQuery-v3.1.1.js"></script>
    <script type="text/javascript" src="javascript/admin-script.js"></script>
    <script src="../assets/js/sweet-alert.js"></script>
   
    <script>
    function getName(str) {
        if (str.lastIndexOf('\\')) {
            var i = str.lastIndexOf('\\') + 1;
        } else {
            var i = str.lastIndexOf('/') + 1;
        }
        var filename = str.slice(i);
        var uploaded = document.getElementById("fileformlabel");
        uploaded.innerHTML = filename;
    }
    </script>
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
                    <a href="?portfolio" class="selected">Добавления в портфолио</a>
                </li>
                <li>
                    <a href="?message">Сообщения <span class="active-message"><img src="images/znak.png" alt="znak" width="20px" height="20px"><span id="quantity"></span></span></a>
                </li>
            </ul>
        </sidebar>
        <div class="content">
            <h1>Добавления и просмотр секции "ПОРТФОЛИО"</h1>
            <p >Сделай это!</p>
            <div id="box">
                <p class="text-color-black text-color-black2" >Путь к картинке:</p>
                <div class="form-portfolio">
                <div class="fileform">
                    <div id="fileformlabel"></div>
                    <div class="selectbutton">Обзор</div>
                    <input placeholder="Путь к картинке" type="file" name="upload" id="upload" onchange="getName(this.value);" />
                </div>
                <p class="text-color-black">Ссылка на сайт:</p>
                <input type="text" id="site">
                <br>
                <div class="select-wrapper">
    <div class="select-arrow-3"></div><p class="text-color-black">Категория:</p>
    
    <select>
     <option>выберите категорию:</option>
                            <option>Landing</option>
                            <option>Shop</option>
                            <option>Corp.site</option>
                            <option>Visit</option>
    </select>
  </div>
  <br>
                <a class="large button blue" id="add_site">Добавить</a>
                
                 
            
                </div>

                <div class="line-portfolio"></div>
                <div class="container">
                    <div class="portfolio-img">
                        <ul>
                            <?php foreach($this->site as $s) : ?>
                                <li><a href="<?=$s['site']?>"><img src="<?=$s['img']?>" alt="thumb1" width="240px" height="230px"></a>
                                    <br>
                                    <a class="delete_site large button red" id="<?=$s['id']?>">Удалить?</a><a class="large button orange">Редактировать?</a>
                                </li>
                            <?php endforeach ?>
                         
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="javascript/jeneral.js"></script>
</body>

</html>
