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
    <link rel="stylesheet" href="assets/css/animate.css">
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
    <script src="assets/js/classie.js"></script>  
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
        <div class="wow fadeInUp container">
            <h1 class="hero-heading">
      <span>“Cайт, которым Вы будете гордиться.</span> <br>
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
                <div class="wow fadeInLeft col-md-6 col-lg-4" data-wow-offset="100" >
                    <div class="sprite-computer"></div>
                    <h3>Макет</h3>
                    <p>Верстка вашего макета или создание макета для вашего сайта самостоятельно с учетом всех фирменых цветов, предоставим нескольно вариантов на выбор.</p>
                </div>
                <!-- //col -->
                <div class="wow fadeInLeft col-md-6 col-lg-4" data-wow-offset="170">
                    <div class="sprite-mobile"></div>
                    <h3>Адаптивность</h3>
                    <p>Создание адаптивного макета с помощью Twitter Bootstrap.</p>
                </div>
                <!-- //col -->
                <div class="wow fadeInLeft col-md-6 col-lg-4" data-wow-offset="200">
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
    <div class=" wow fadeInRight stn-portfolio" data-wow-offset="300">
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
     <section class="wow fadeInLeft stn-video">
        <h2 class="stn-heading container">Какой сайт вам нужен?</h2>
        <div class="container">
            <div class="">
                <div class="col-md-5">
                    <div id="wheelDiv"></div>
                </div>
                <!-- //col -->
                <div class="col-md-6 col-md-offset-1 ">
                    <div class="stn-video" ">
                        <p class="animated fadeInRight tab tab1 "><b>Интернет магазин</b> <br>В отличие от сайта-витрины, где клиент может увидеть наличие всех товаров, с помощью интернет-магазина клиент может еще и сделать заказ, выбрать вариант расчета, способ получения заказа и получить счет на оплату. Такой сайт должен быть удобным и функциональным, чтобы посетитель мог легко найти то, что ему нужно, отправить товар в корзину и оформить покупку в несколько кликов. Интернет-магазин существенно уменьшит Ваши расходы, так как не надо арендовать помещение для магазина, не надо платить заработную плату сотрудникам.</p>
                        <p class="animated fadeInRight  tab tab2 active-menu"><b>Корпоративный сайт</b> <br>Более серьезным видом представительства компании в Интернете являются корпоративные сайты. Это обязательный инструмент успешного бизнеса любой компании. В первую очередь, сайты подобного рода помогают формировать позитивный имидж компании, привлекают новых заказчиков, которые могут не знать о существовании Вашей фирмы на рынке, и, соответственно, расширяют рынок сбыта компании. С помощью корпоративного сайта клиенты и заказчики получают информацию о ценах на товары и услуги в удобном виде. Значительно увеличить прибыль Вы сможете путем предоставления возможности делать заказы Вашим клиентам прямо в Интернете, на Вашей страничке.</p>
                        <p class="animated fadeInRight  tab tab3 active-menu"><b>Landing page</b> <br>Целевая страница (англ. landing page, также «посадочная страница») — веб-страница, основной задачей которой является сбор контактных данных целевой аудитории. Используется для усиления эффективности рекламы, увеличения аудитории. Целевая страница обычно содержит информацию о товаре или услуге.</p>
                        <p class="animated fadeInRight  tab tab4 active-menu"><b>Визитка</b> <br>Именно тот набор информации, распространение которой в Интернете, несомненно, полезно как начинающим, так и акулам бизнеса. Это своеобразный справочник о фирме, который содержит все необходимые контактные данные и информацию о деятельности компании. Это должна быть краткая, четкая и самая важная информация о Вас, Вашей сфере деятельности, интересах. Не стоит перегружать Ваш сайт-визитку информацией, которая возможно не понадобится потенциальному клиенту или партнеру.</p>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- //row -->
        </div>
        <!-- /container -->
    </section>
    <!-- //stn-video -->
    <section class="wow fadeInRight stn-twitter">
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
    <section class="wow fadeInleft  stn-about">
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
    <section class="wow fadeInLeft stn-testimonials">
        <h2 class="stn-heading container black-line">Цитата дня <i class="icon-quote"></i></h2>
        <div class="container">
            <blocquote class="tst-quote">
                Джесси... То, что мы делаем... Быть лучшим в каком-нибудь деле — огромная редкость и от такого просто так не отказываются.
                <cite>-Walter White</cite>
            </blocquote>
        </div>
    </section>
    <!-- //stn-testimonials -->
    <section class="wow fadeInRight stn-contact" data-wow-offset="300">
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
                        
                        <span class="input input--jiro">
                    <input id="name" class="form-control input__field input__field--jiro" type="text" id="input-10" />
                    <label class="input__label input__label--jiro" for="input-10">
                        <span class="input__label-content input__label-content--jiro">Имя</span>
                    </label>
                </span>
                    </div>
                    <div class="form-group">
                        
                         <span class="input input--jiro">
                    <input id="mail" class="form-control input__field input__field--jiro" type="text" id="input-10" />
                    <label class="input__label input__label--jiro" for="input-10">
                        <span class="input__label-content input__label-content--jiro">Почта</span>
                    </label>
                </span>
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
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/headhesive.js"></script>
    <!-- Site Sripts -->
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/1.js"></script>
     <script type="text/javascript" src="assets/js/raphael.min.js"></script>
    <script type="text/javascript" src="assets/js/raphael.icons.min.js"></script>
    <script type="text/javascript" src="assets/js/wheelnav.min.js"></script>
    <script src="assets/js/SmoothScroll.js"></script>
    <script type="text/javascript">
    window.onload = function() {

        var wheel = new wheelnav("wheelDiv");

        //This is the place for code snippets from the documentation -> http://wheelnavjs.softwaretailoring.net/documentation.html


        wheel = new wheelnav('wheelDiv');
        wheel.slicePathFunction = slicePath().CogBasePieSlice;
        wheel.sliceHoverPathFunction = slicePath().CogSlice;
        wheel.sliceSelectedPathFunction = slicePath().CogSlice;

        wheel.sliceSelectedTransformFunction = sliceTransform().MoveMiddleTransform;
        wheel.animatetime = 900;
        // wheel.colors = colorpalette.gamebookers;
        wheel.colors = ['#48525a', "#4bcaff"];
        wheel.createWheel(["Магазин", "Корп. сайт", "Лендинг", "Визитка"]);
        wheel.navItems[0].navigateFunction = function() {
            $(".tab2").addClass("active-menu"); //добавляем класс текущей (нажатой)
            $(".tab3").addClass("active-menu"); //добавляем класс текущей (нажатой)
            $(".tab4").addClass("active-menu"); //добавляем класс текущей (нажатой)
            $(".tab1").removeClass("active-menu", 1000); //добавляем класс текущей (нажатой)
        };
        wheel.navItems[1].navigateFunction = function() {
            $(".tab1").addClass("active-menu"); //добавляем класс текущей (нажатой)
            $(".tab3").addClass("active-menu"); //добавляем класс текущей (нажатой)
            $(".tab4").addClass("active-menu"); //добавляем класс текущей (нажатой)
            $(".tab2").removeClass("active-menu", 1000); //добавляем класс текущей (нажатой)
        };
        // wheel.navItems[1].navSlice.mousedown(function() {
        //     $(".tab1").addClass("active-menu"); //добавляем класс текущей (нажатой)
        //     $(".tab3").addClass("active-menu"); //добавляем класс текущей (нажатой)
        //     $(".tab4").addClass("active-menu"); //добавляем класс текущей (нажатой)
        //     $(".tab2").removeClass("active-menu"); //добавляем класс текущей (нажатой)
        // });
        wheel.navItems[2].navigateFunction = function() {
            $(".tab1").addClass("active-menu"); //добавляем класс текущей (нажатой)
            $(".tab2").addClass("active-menu"); //добавляем класс текущей (нажатой)
            $(".tab4").addClass("active-menu"); //добавляем класс текущей (нажатой)
            $(".tab3").removeClass("active-menu", 1000); //добавляем класс текущей (нажатой)
        };
        // wheel.navItems[2].navSlice.mousedown(function() {
        //     $(".tab1").addClass("active-menu"); //добавляем класс текущей (нажатой)
        //     $(".tab2").addClass("active-menu"); //добавляем класс текущей (нажатой)
        //     $(".tab4").addClass("active-menu"); //добавляем класс текущей (нажатой)
        //     $(".tab3").removeClass("active-menu"); //добавляем класс текущей (нажатой)
        // });
        wheel.navItems[3].navigateFunction = function() {
            $(".tab2").addClass("active-menu"); //добавляем класс текущей (нажатой)
            $(".tab3").addClass("active-menu"); //добавляем класс текущей (нажатой)
            $(".tab1").addClass("active-menu"); //добавляем класс текущей (нажатой)
            $(".tab4").removeClass("active-menu", 1000); //добавляем класс текущей (нажатой)
        };
        // wheel.navItems[3].navSlice.mousedown(function() {
        //     $(".tab2").addClass("active-menu"); //добавляем класс текущей (нажатой)
        //     $(".tab3").addClass("active-menu"); //добавляем класс текущей (нажатой)
        //     $(".tab1").addClass("active-menu"); //добавляем класс текущей (нажатой)
        //     $(".tab4").removeClass("active-menu"); //добавляем класс текущей (нажатой)
        // });
        wheel.navigateWheel(0);
        wheel.hoverPercent = 0.5;
        wheel.selectedPercent = 1.1;
    };
    </script>
    <script>
    new WOW().init();
    </script>
    <script>
            (function() {
                // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
                if (!String.prototype.trim) {
                    (function() {
                        // Make sure we trim BOM and NBSP
                        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                        String.prototype.trim = function() {
                            return this.replace(rtrim, '');
                        };
                    })();
                }

                [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
                    // in case the input is already filled..
                    if( inputEl.value.trim() !== '' ) {
                        classie.add( inputEl.parentNode, 'input--filled' );
                    }

                    // events:
                    inputEl.addEventListener( 'focus', onInputFocus );
                    inputEl.addEventListener( 'blur', onInputBlur );
                } );

                function onInputFocus( ev ) {
                    classie.add( ev.target.parentNode, 'input--filled' );
                }

                function onInputBlur( ev ) {
                    if( ev.target.value.trim() === '' ) {
                        classie.remove( ev.target.parentNode, 'input--filled' );
                    }
                }
            })();
        </script>
</body>

</html>
