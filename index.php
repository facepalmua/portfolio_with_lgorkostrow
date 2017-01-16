<?php
    include("assets/php/stat/stat.php");
?>
<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Title</title>
    <!-- Import main styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/sweet-alert.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <!--[if lt IE 10]>
<link rel="stylesheet" href="assets/css/ie.css">
<![endif]-->
    <script src="assets/js/jQuery-v3.1.1.js"></script>
    <script src="assets/js/sweet-alert.js"></script>
</head>

<body>
    <a id="home"></a>
    <header class="site-header">
        <nav class="site-nav ">
            <div class="container">
                <a href="#!" class="main-logo">
                    <img src="assets/img/logo.png" alt="Blueasy" width="80px" height="80px">
                </a>
                <span class="main-nav-trigger trigger-nav">&#9776;</span>
                <ul class="horizontal-nav trigger-victim">
                    <li><a href="#home" class="slide active" id="Home-top">Home</a></li>
                    <li><a href="#Services" class="slide" id="Services-top">Services</a></li>
                    <li><a href="#Portfolio" class="slide" id="Portfolio-top">Portfolio</a></li>
                    <li><a href="#Contact" class="slide" id="Contact-top">Contact</a></li>
                </ul>
            </div>
            <!-- //.container -->
        </nav>
        <nav class="site-nav header">
            <div class="container">
                <a href="#!" class="main-logo">
                    <img src="assets/img/logo.png" alt="goddamn" width="65px" height="65px">
                </a>
                <span class="main-nav-trigger trigger-nav">&#9776;</span>
                <ul class="horizontal-nav horizontal-nav-headhesive trigger-victim">
                    <li><a href="#home" class="slide" id="Home-top">Home</a></li>
                    <li><a href="#Services" class="slide" id="Services-top">Services</a></li>
                    <li><a href="#Portfolio" class="slide" id="Portfolio-top">Portfolio</a></li>
                    <li><a href="#Contact" class="slide" id="Contact-top">Contact</a></li>
                </ul>
            </div>
            <!-- //.container -->
        </nav>
        <!-- //.site-nav -->
        <div class="container">
            <h1 class="hero-heading">
      <span>“Cайт, которым Вы будете гордится.</span> <br>
      <span>Сайт, который принесет вам прибыль”</span>
      </h1>
        </div>
        <!-- //.container -->
    </header>
    <!-- //.site-header -->
    <section class="stn-services">
        <h2 class="stn-heading container"><a name="Services" id="Services"></a>Services
</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="sprite-computer"></div>
                    <h3>Макет</h3>
                    <p>Верстка вашего макета или создание макета для вашего сайта самостоятельно с учетом всех фирменых цветов, предоставим нескольно вариантов на выбор.</p>
                </div>
                <!-- //col -->
                <div class="col-md-6 col-lg-4">
                    <div class="sprite-mobile"></div>
                    <h3>Адаптивность</h3>
                    <p>Создание адаптивного макета с помощью Twitter Bootstrap.</p>
                </div>
                <!-- //col -->
                <div class="col-md-6 col-lg-4">
                    <div class="sprite-bag"></div>
                    <h3>Серьезность</h3>
                    <p>Соблюдение сроков и качественный код.</p>
                </div>
                <!-- //col -->
                <!-- //col -->
            </div>
            <!-- //.row -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //.stn-services -->
    <div class="stn-portfolio">
        <section class="container tab-wrapper">
            <ul class="horizontal-nav black-font tab-menu">
                <li><a href="#!" class="active">All</a></li>
                <li><a href="#!">Paronamars</a></li>
                <li><a href="#!">Portreits</a></li>
                <li><a href="#!">Macro</a></li>
                <li><a href="#!">Journal</a></li>
            </ul>
            <h2 class="stn-heading black-line"><a name="Portfolio" id="Portfolio"></a>Portfolio</h2>
            <div class="row thumbs-row">
                <div class="col-sm-6 col-md-3">
                    <a href="#!" class="thumb-1"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!" class="thumb-2"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!" class="thumb-3"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!" class="thumb-4"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!" class="thumb-5"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!" class="thumb-6"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!" class="thumb-7"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!" class="thumb-8"></a>
                </div>
            </div>
            <!-- ///row -->
            <div class="row thumbs-row">
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
            </div>
            <!-- ///row -->
            <div class="row thumbs-row">
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
            </div>
            <!-- ///row -->
            <div class="row thumbs-row">
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
            </div>
            <!-- ///row -->
            <div class="row thumbs-row">
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#!"></a>
                </div>
            </div>
            <!-- ///row -->
        </section>
        <!-- //container -->
    </div>
    <!-- //stn-portfolio -->
    <section class="stn-video">
        <h2 class="stn-heading container">Просто хорошее видео :)</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <p>Оставлю это здесь, так как иногда нужно делать паузу на приятные вещи.</p>
                    <p>...Или я просто люблю такие видео :)</p>
                    <a href="https://vk.com/zaharchyshyn" target="_blank" class="btn-ghost-grey">мой VK</a>
                </div>
                <!-- //col -->
                <div class="col-md-6 col-md-offset-1 stn-video-col">
                    <div class="videoWrapper">
                        <iframe src="https://player.vimeo.com/video/193266260" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- //row -->
        </div>
        <!-- /container -->
    </section>
    <!-- //stn-video -->
    <section class="stn-twitter">
        <h2 class="stn-heading container">Twitter <i class="icon-twitter stn-twitter-icon"></i></h2>
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                    <p>"Найти себя невозможно — себя можно только создать." Сказал когда-то <strong>Брэд Питт</strong>, но также мы можем сказать и о сайте :)</p>
                </div>
            </div>
        </div>
    </section>
    <!-- //stn-twitter -->
    <section class="stn-about">
        <h2 class="stn-heading container">Почему именно стоит заказать сайт здесь?</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Во первых, это экономия. Так как большие компании создания сайтов делают это непомерно дорого.</p>
                    <p>Во вторых, я люблю это. А человек, который любит свою работу - не может делать ее плохо :)</p>
                </div>
            </div>
            <!-- //row -->
        </div>
        <!-- //container -->
    </section>
    <!-- //stn-about -->
    <section class="stn-testimonials">
        <h2 class="stn-heading container black-line">Цитата дня <i class="icon-quote"></i></h2>
        <div class="container">
            <blocquote class="tst-quote">
                Джесси... То, что мы делаем... Быть лучшим в каком-нибудь деле — огромная редкость и от такого просто так не отказываются.
                <cite>-Walter White</cite>
            </blocquote>
        </div>
    </section>
    <!-- //stn-testimonials -->
    <section class="stn-contact">
        <h2 class="stn-heading container"><a name="Contact" id="Contact" href="#contact"></a>Contact</h2>
        <div class="container">
            <form action="#!" class="row">
                <div class="col-md-6 col-md-push-6 form-text-col">
                    <p>Оставьте мне свое сообщение и я обезательно вам отвечу.</p>
                    <p>
                        Также вы можете со мной связаться через:
                        <br>
                        <br>
                        <a href="https://vk.com/zaharchyshyn"><img src="assets/img/vk_logo_small_blue.png" alt="vk" width="35px" height="35px"> Вконтакте </a>
                        <br>
                        <a href="skype:nerron49?add"><img src="assets/img/skype_logo_small_blue.png" alt="skype" width="35px" height="35px"> Скайп</a>
                        <br>
                        <a href="!#"><img src="assets/img/kiev_logo_small_blue.png" alt="kievstar" width="35px" height="35px"> Киевстар +38097-88-57-806</a>
                    </p>
                </div>
                <div class="col-md-5 col-md-pull-6">
                    <div class="form-group">
                        <label for="name">Full name</label>
                        <input id="name" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="mail">Email</label>
                        <input id="mail" type="email" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="Message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <button type="submit" class="btn-submit">Message</button>
                </div>
            </form>
        </div>
    </section>
    <!-- //stn-cotact -->
    <footer class="site-footer">
        <div class="container">
            <nav>
                <ul class="footer-nav">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#Services">Services</a></li>
                    <li><a href="#Portfolio">Portfolio</a></li>
                    <li><a href="#Contact">Contact</a></li>
                </ul>
            </nav>
            <p class="copyright">2016 &copy</p>
        </div>
    </footer>
    <!-- jQuery for older IE -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="assets/js/headhesive.js"></script>
    <!-- Site Sripts -->
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/1.js"></script>
</body>

</html>
