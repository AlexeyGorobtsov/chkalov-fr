<?php

$routes = explode('/',$_SERVER['REQUEST_URI']);
$route = trim($routes[1], '/').'.php';


if(is_file($route)){
    require_once($route);
    die();
}

    if($_POST ){


        $k = array_keys($_POST);
        $assoc = json_decode($k[0], true);

        $base_url = 'domchkalov.ru';

        $usermail = $username = $usertxt = '';

        if(isset($assoc['name']) && $assoc['name']){
            $username = htmlspecialchars(strip_tags($assoc['name']));
        }
        if(isset($assoc['email']) && $assoc['email']){
            $usermail = htmlspecialchars(strip_tags($assoc['email']));
        }
        if(isset($assoc['message']) && $assoc['message']){
            $usertxt = htmlspecialchars(strip_tags($assoc['message']));
        }

        if($usermail ) {

            $message = 'Сообщение: ' . $usertxt . ' ' . "\r\n" . 'Способ связи: ' . $usermail . ' , ' . $username . ' ';
            $sendtel = $usermail;

            $site_mail = 'no-reply@' . $base_url;

            $headers = 'MIME-Version: 1.0' . "\r\n" .
                'From: ' . $site_mail . '' . "\r\n" .
                //$addheader.
                'X-Mailer: PHP/' . phpversion() . "\r\n" .
                'Content-type: text/plain; charset = "utf-8"' . "\r\n" .
                'Content-Transfer-Encoding: 8bit' . "\r\n" . "\r\n";

            mail('sales@domchkalov.com', "На сайт " . $base_url . " поступила заявка от " . $sendtel . ".", $message, $headers);
            mail('ogalagina@ikon-pm.ru', "На сайт " . $base_url . " поступила заявка от " . $sendtel . ".", $message, $headers);

            //var_dump($message);
            $username = '';
            $usermail = '';
            $usertext = '';

            echo 'ok';
            die();


        }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Дом Chkalov</title>
    <meta name="description"
          content="Дом Chkalov - официальный сайт проекта. Апартаменты с отделкой в уникальном небоскребе в стиле Нью-Йорка, расположенном центре главного арт-квартала Москвы.  "/>
    <meta property="og:site_name" content="IKON Development"/>
    <meta property="og:type" content="article"/>
    <meta property="og:description"
          content="Новый проект в новом формате – residential retail в стиле видовых небоскребов Нью-Йорка. "/>
    <meta property="og:url" content="https://domchkalov.com"/>
    <meta name="keywords"
          content="апартаменты в центре, купить апартаменты, купить апартаменты с отделкой в центре Москвы, апартаменты от застройщика, продажа апартаментов с отделкой на садовом кольце, апартаменты с отделкой на курской, чкалов, жк чкалов, дом чкалов, апартаменты на площади курского вокзала, кто застройщик жк чкалов, chkalov, domchkalov, Дом Chkalov, продажа апартаментов с отделкой, квартиры в жк чкалов, квартиры на курской, жк рядом с курским вокзалом, ikon "/>
    <meta property="og:title" content="Дом Chkalov"/>
    <meta property="og:image"
          content="./img/cdbebc7e01cb429ba869714d6421ee3d0aaba2d2bdebbc26cbb93e2aed2f/10.jpg"/>
    <meta name="fb:app_id" content="566126290226509"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.5, shrink-to-fit=no"
          name="viewport"/>
    <link href="./css/application-65c2b3e6a81a4e1178e30db4dd6df101.css" rel="stylesheet"/>
    <script src="./js/mobile-detect-1843ed3ef97769afa503114a6f79106f.js"></script>
    <script src="./js/device-detect-6093219722ee79423435b9a86ca5857b.js"></script>
    <!--[if lt IE 9]>
    <script src="/assets/es5-shim.min.js"></script>
    <script src="/assets/es5-sham.min.js"></script>
    <script src="/assets/json2.js"></script>
    <script src="/assets/html5shiv.min.js"></script>
    <![endif]-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4oDoDvEvKTOLp41Cnji8vI-UV35H3akM"></script>
    <link href="./images/favicon-a54941ca875303eb64ac33c1076ec6bc.ico" rel="shortcut icon"/>
    <link href="./images/favicon-32x32-f2bc573ef08209dc8291579373c9aab5.png" rel="icon" sizes="32x32"
          type="image/png"/>
    <link href="./images/favicon-16x16-9cd5fbbcaa068c4acbd1a63c3d0f0106.png" rel="icon" sizes="16x16"
          type="image/png"/>
    <link href="./images/favicon-128x128-74dcdd2bd1ecba4b5d15f797d64b0012.png" rel="icon"
          sizes="128x128" type="image/png"/>
    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '597228357020141');
        fbq('track', "PageView");
    </script>
    <noscript>
        <img height="1" src="https://www.facebook.com/tr?id=597228357020141&amp;ev=PageView&amp;noscript=1"
             style="display:none" width="1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
</head>
<body class="project-page">
<!-- Rating@Mail.ru counter -->
<script>
    var _tmr = window._tmr || (window._tmr = []);
    _tmr.push({id: "2591057", type: "pageView", start: (new Date()).getTime()});
    (function (d, w, id) {
        if (d.getElementById(id)) return;
        var ts = d.createElement("script");
        ts.type = "text/javascript";
        ts.async = true;
        ts.id = id;
        ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
        var f = function () {
            var s = d.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(ts, s);
        };
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "topmailru-code");
</script>
<noscript>
    <div style="position:absolute;left:-10000px;">
        <img alt="Рейтинг@Mail.ru" height="1" src="//top-fwz1.mail.ru/counter?id=2591057;js=na" style="border:0;"
             width="1"/>
    </div>
</noscript>
<!-- //Rating@Mail.ru counter -->
<!-- Rating@Mail.ru logo -->
<div style="position:absolute;left:-10000px;">
    <a href="http://top.mail.ru/jump?from=2591057">
        <img alt="Рейтинг@Mail.ru" height="31" src="//top-fwz1.mail.ru/counter?id=2591057;t=479;l=1" style="border:0;"
             width="88"/>
    </a>
</div>
<!-- //Rating@Mail.ru logo -->
<i id="layer"></i>
<div class="b-popup">
    <i class="bg bg-1"></i>
    <i class="bg bg-2"></i>
    <div class="in">
        <i class="i-close"></i>
        <p class="title title-mobile">
            Обратная связь
        </p>
        <div class="contacts">
            <p class="main-phone">
                <a class="comagic_phone" href="tel:+74951501515">+7 495 150 15 15</a>
            </p>
            <p class="comment">Ежедневно с 9:00 до 21:00 по московскому времени</p>
        </div>
        <p class="title">
            Обратная связь
        </p>
        <div class="form">
            <!-- <div data-react-class="CallbackRequestForm"></div>-->

            <form>
                <div class="line">
                    <label >имя и фамилия</label>
                    <div class="input" >
                        <input name="name" type="text">
                    </div>
                </div>
                <div class="line">
                    <label>email</label>
                    <div class="input">
                        <input name="email" type="email">
                    </div>
                </div>
                <div class="line">
                    <label>сообщение</label>
                    <div class="input">
                        <textarea name="body">

                        </textarea>
                    </div>
                </div>
                <div class="wrap-check">
                    <input type="checkbox">
                    "Согласен с условиями обработки персональных данных"
                </div>
                <div class="line clearfix"><div class="input submit">
                        <!--<input value="Отправить" type="submit" disabled="disabled">-->
                        <button disabled="disabled">Отправить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="l-outer">
    <div class="l-container">
        <div class="head">
            <div class="menu-btn-icon">
                <span></span>
            </div>
            <nav class="b-side-links">
                <ul>

                    <li class="callback">
                <span>
                  <i class="i-feedback"></i>
                </span>
                    </li>
                </ul>
            </nav>
            <nav class="b-menu">
                <div class="project-logo">
                    <img src="./images/7a8b68f4c874334eb966a5ba6d5e6d69008cc52cf87ed508c275e4133ee7/chkalov_logo_white.png"
                         title="Дом Chkalov"/>
                </div>
                <div class="list">
                    <div class="in">
                        <!--p class="logo">
                            <i class="i-logo"></i>
                            <a href="/"></a>
                        </p-->
                        <p class="main-phone">
                            <a class="comagic_phone" href="tel:+74951501515">+7 495 150 15 15</a>
                        </p>
                        <ul>
                            <li>
                                <a href="#about">Суть проекта</a>
                            </li>
                            <li>
                                <a href="#features">Плюсы проекта</a>
                            </li>
                            <li>
                                <a href="#gallery">Галерея</a>
                            </li>
                            <li>
                                <a href="#location">Расположение</a>
                            </li>
                            <li>
                                <a href="#specs">Технические данные</a>
                            </li>
                            <li>
                                <a href="#docs">Документация</a>
                            </li>
                            <li>
                                <a href="#office">Офис продаж</a>
                            </li>
                            <li>
                                <a target="_blank"
                                   href="./store/f3f98aed0e9839f17444d17e24d3ed36f2b218a9ebc48ce7ee93cff3eb23/CHKALOV_web_2408(3).pdf">Скачать презентацию</a>
                            </li>
                            <li>
                                <a class="choice-href" href="">Выбор квартиры по параметрам</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="menu-btns">
                    <p class="menu-btn">

                    </p>
                    <p class="menu-btn red">

                    </p>
                </div>
            </nav>
        </div>
        <p class="main-phone">
            <a class="comagic_phone" href="tel:+74951501515">+7 495 150 15 15</a>
        </p>
        <div class="b-plan js-height">
            <div class="plan">
                <div class="mobile-plan"
                     style="background-image: url('./images/cdbebc7e01cb429ba869714d6421ee3d0aaba2d2bdebbc26cbb93e2aed2f/10.jpg');"></div>
                <img class="plan-img"
                     src="./images/cdbebc7e01cb429ba869714d6421ee3d0aaba2d2bdebbc26cbb93e2aed2f/10.jpg"
                     srcset="./images/2000/1000/cdbebc7e01cb429ba869714d6421ee3d0aaba2d2bdebbc26cbb93e2aed2f/10.jpg 1260w,
                      ./images/2400/1260/cdbebc7e01cb429ba869714d6421ee3d0aaba2d2bdebbc26cbb93e2aed2f/10.jpg 1800w,
                      ./images/cdbebc7e01cb429ba869714d6421ee3d0aaba2d2bdebbc26cbb93e2aed2f/10.jpg 5000w"/>
            </div>
            <div class="l-column">
                <div class="project-info">
                    <h1>Дом Chkalov</h1>
                    <div class="address"><br>
                        <p>Первый жилой небоскреб на Садовом кольце</p></div>
                </div>
            </div>

        </div>

        <div class="l-column js-highlight" id="about">
            <div class="project-description"><p>

                    Апартаменты с отделкой в двух современных башнях над торговой галереей. Вся необходимая инфраструктура для комфортной жизни. Феноменальные виды на новой высоте в центре мегаполиса.</p></div>
            <div class="columns">
                <div class="column c-3">
                    <i class="i-advantage-1"></i>
                </div>
                <div class="column c-3">
                    <i class="i-advantage-2"></i>
                </div>
                <div class="column c-3">
                    <i class="i-advantage-3"></i>
                </div>
            </div>
            <div class="columns texts js-columns">
                <div class="column c-3"><h3>уникальная локация</h3>
                    <p>Расположение в центре Москвы на первой линии Садового кольца. В шаге от главных арт-площадок
                        Москвы:</p>
                    <ul>
                        <li>Центр современного искусства ВИНЗАВОД</li>
                        <li>Театр нового формата - Гоголь-центр</li>
                        <li>Арт-квартал - АРМА</li>
                        <li>Центр дизайна и архитектуры - ARTPLAY</li>
                        <li>Британская высшая школа дизайн</li>
                        <li>Архитектурная школа МАРШ</li>
                        <li>Московская школа кино</li>
                    </ul>
                </div>
                <div class="column c-3"><h3>эстетика и функциональность</h3>
                    <ul>
                        <li>Современный дизайн от архитектурного бюро SPEECH</li>
                        <li>Планировки от 35 до 125 м2</li>
                        <li>Лучшие панорамные виды в центре</li>
                        <li>Премиальная отделка апартаментов от международных дизайнеров</li>
                        <li>Атмосфера свободы в каждой детали</li>
                        <li>Премиальная отделка апартаментов</li>
                        <li>Круглосуточные службы и сервис</li>
                        <li>Система контроля и управления доступом</li>
                    </ul>
                </div>
                <div class="column c-3"><h3>perfect lifestyle  mix</h3>
                    <ul>
                        <li>Wellness-клуб</li>
                        <li>Студия йоги и пилатес</li>
                        <li>Лаундж с кинозалом</li>
                        <li>Отдельный доступ к торговой галере, ресторанам и фудкортам</li>
                    </ul>
                </div>
            </div>
            <div class="slideshow-container-top">
                <div class="mySlides-top fade">
                    <div class="column c-3"><h3>уникальная локация</h3>
                        <p>Расположение в центре Москвы на первой линии Садового кольца. В шаге от главных арт-площадок
                            Москвы:</p>
                        <ul>
                            <li>Центр современного искусства ВИНЗАВОД</li>
                            <li>Театр нового формата - Гоголь-центр</li>
                            <li>Арт-квартал - АРМА</li>
                            <li>Центр дизайна и архитектуры - ARTPLAY</li>
                            <li>Британская высшая школа дизайн</li>
                            <li>Архитектурная школа МАРШ</li>
                            <li>Московская школа кино</li>
                        </ul>
                    </div>
                </div>
                <div class="mySlides-top fade">
                    <div class="column c-3"><h3>эстетика и функциональность</h3>
                        <ul>
                            <li>Современный дизайн от архитектурного бюро SPEECH</li>
                            <li>Планировки от 35 до 125 м2</li>
                            <li>Лучшие панорамные виды в центре</li>
                            <li>Премиальная отделка апартаментов от международных дизайнеров</li>
                            <li>Атмосфера свободы в каждой детали</li>
                            <li>Премиальная отделка апартаментов</li>
                            <li>Круглосуточные службы и сервис</li>
                            <li>Система контроля и управления доступом</li>
                        </ul>
                    </div>
                </div>
                <div class="mySlides-top fade">
                    <div class="column c-3"><h3>perfect lifestyle  mix</h3>
                        <ul>
                            <li>Wellness-клуб</li>
                            <li>Студия йоги и пилатес</li>
                            <li>Лаундж с кинозалом</li>
                            <li>Отдельный доступ к торговой галере, ресторанам и фудкортам</li>
                        </ul>
                    </div>
                </div>
                <i class="i-gallery-arrow next-top" ></i>
                <i class="i-gallery-arrow-left prev-top"></i>
            </div>

        </div>
        <div class="l-column js-highlight" id="features">
            <h2>
                Плюсы
                <br/>
                проекта
            </h2>
            <div class="b-galleries js-tabs">
                <div class="switcher js-tab-switcher">
                    <ul class="moving">
                        <li class="active">архитектура</li>
                        <li>авторская отделка</li>
                        <li>Функциональность</li>
                        <li>лучшая локация</li>
                        <li>высокая доходность</li>
                    </ul>
                </div>
                <div class="galleries">
                    <div class="tab active">
                        <div data-react-class="Cards"
                             data-react-props="{&quot;id&quot;:33,&quot;slides&quot;:[{&quot;urls&quot;:{&quot;l&quot;:&quot;/images/31.jpg&quot;,&quot;m&quot;:&quot;/images/31.jpg&quot;,&quot;s&quot;:&quot;/images/31.jpg&quot;},&quot;text&quot;:&quot;&lt;p&gt;Концепция проекта разработана в формате видовых небоскребов Нью-Йорка. &lt;/p&gt;&quot;},
							 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/32.jpg&quot;,&quot;m&quot;:&quot;/images/32.jpg&quot;,&quot;s&quot;:&quot;/images/32.jpg&quot;},&quot;text&quot;:&quot;&lt;p&gt;Две высотные башня с отличными видовыми характеристиками объединены торговой галереей. Идеальное сочетание эстетики и функциональности в апартаментах дома позволяет ощутить новую форму свободы. &lt;/p&gt;&quot;},
							 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/plyus3.jpg&quot;,&quot;m&quot;:&quot;/images/plyus3.jpg&quot;,&quot;s&quot;:&quot;/images/plyus3.jpg&quot;},&quot;text&quot;:&quot;&lt;p&gt;Дом Chkalov – это динамика города, это 4 этажа собственного торгового центра. Галереи модных брендов, рестораны и кафе. Оперативное и удобное решение бытовых вопросов. &lt;/p&gt;&quot;},
							 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/2.jpg&quot;,&quot;m&quot;:&quot;/images/2.jpg&quot;,&quot;s&quot;:&quot;/images/2.jpg&quot;},&quot;text&quot;:&quot;&lt;p&gt;Из панорамных окон апартаментов открываются виды на небесную линию города со сталинскими высотками, Москва – сити и Кремлем.&lt;/p&gt;&quot;}]}"></div>
                    </div>
                    <div class="tab">
                        <div data-react-class="Cards"
                             data-react-props="{&quot;id&quot;:32,&quot;slides&quot;:[
							 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/6.jpg&quot;,&quot;m&quot;:&quot;/images/6.jpg&quot;,&quot;s&quot;:&quot;/images/6.jpg&quot;},&quot;text&quot;:&quot;&lt;p&gt;Интерьеры разработаны Martin Hulbert, London. Все апартаменты предлагаются с высококлассной финишной отделкой.&lt;/p&gt;&quot;},
							 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/7.jpg&quot;,&quot;m&quot;:&quot;/images/7.jpg&quot;,&quot;s&quot;:&quot;/images/7.jpg&quot;},&quot;text&quot;:&quot;&lt;p&gt;Интерьеры квартир продолжают концепцию фасадов: высокие потолки и панорамные окна формируют пространства, наполненные светом и воздухом. &lt;/p&gt;&quot;},
							 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/3.jpg&quot;,&quot;m&quot;:&quot;/images/3.jpg&quot;,&quot;s&quot;:&quot;/images/3.jpg&quot;},&quot;text&quot;:&quot;&lt;p&gt;Игра с фактурами и геометрия форм повторяют минималистичную эстетику нью-йоркских небоскребов.&lt;/p&gt;&quot;},
							 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/1.jpg&quot;,&quot;m&quot;:&quot;/images/1.jpg&quot;,&quot;s&quot;:&quot;/images/1.jpg&quot;},&quot;text&quot;:&quot;&lt;p&gt;Отделка апартаменты в доме Chkalov выполнена в минималистичном стиле. &lt;/p&gt;&quot;},
							 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/4.jpg&quot;,&quot;m&quot;:&quot;/images/4.jpg&quot;,&quot;s&quot;:&quot;/images/4.jpg&quot;},&quot;text&quot;:&quot;&lt;p&gt;Максимум света и пространства. Потолки от 3,1 метра, панорамное остекление с возможностью открывания окон, апартаменты оборудованы системами вентиляции и кондиционирования воздуха, высококачественные скоростные лифты Schindler. &lt;/p&gt;&quot;}]}"></div>
                    </div>
                    <div class="tab">
                        <div data-react-class="Cards"
                             data-react-props="{&quot;id&quot;:34,&quot;slides&quot;:[
							 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/plyus1.jpg&quot;,&quot;m&quot;:&quot;/images/plyus1.jpg&quot;,&quot;s&quot;:&quot;/images/plyus1.jpg&quot;},&quot;text&quot;:&quot;&lt;p&gt;Для жителей дома Chkalov предусмотрен отдельный вход со стороны 1-го Сыромятнического переулка и организован прямой доступ в башни апартаментов из подземного паркинга. &lt;/p&gt;&quot;},
							 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/plyus2.jpg&quot;,&quot;m&quot;:&quot;/images/plyus2.jpg&quot;,&quot;s&quot;:&quot;/images/plyus2.jpg&quot;},&quot;text&quot;:&quot;&lt;p&gt;На эксплуатируемой кровле торгового центра размещена терраса для жителей башен. &lt;/p&gt;&quot;},
							 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/img_9674.jpg&quot;,&quot;m&quot;:&quot;/images/img_9674.jpg&quot;,&quot;s&quot;:&quot;/images/img_9674.jpg&quot;},&quot;text&quot;:&quot;&lt;p&gt;Гастрономические рестораны с патио, кафе и пекарни, магазины - собственная инфраструктура жителей дома Chkalov.&lt;/p&gt;&quot;},
							 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/img_9675.jpg&quot;,&quot;m&quot;:&quot;/images/img_9675.jpg&quot;,&quot;s&quot;:&quot;/images/img_9675.jpg&quot;},&quot;text&quot;:&quot;&lt;p&gt;Со-working пространство, wellness-клуб, студия йоги и пилатес, cinеma-room — собственная инфраструктура резидентов дома.&lt;/p&gt;&quot;}]}"></div>
                    </div>
                    <div class="tab">
                        <div data-react-class="Cards"
                             data-react-props="{&quot;id&quot;:35,&quot;slides&quot;:[
							 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/27.jpg&quot;,&quot;m&quot;:&quot;/images/27.jpg&quot;,&quot;s&quot;:&quot;/images/27.jpg&quot;},&quot;text&quot;:&quot;&lt;p&gt;Расположение в самом центре, на Садовом кольце, задает особый ритм жизни. Все, чем можем заинтересовать один из крупнейших мегаполисов мира, располагается в 5 минутах. &lt;/p&gt;&quot;},
							 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/29.jpg&quot;,&quot;m&quot;:&quot;/images/29.jpg&quot;,&quot;s&quot;:&quot;/images/29.jpg&quot;},&quot;text&quot;:&quot;&lt;p&gt;Лучшая локация для воплощения стремлений к новому и реализации творческого потенциала. &lt;/p&gt;&quot;},
							 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/30.jpg&quot;,&quot;m&quot;:&quot;/images/30.jpg&quot;,&quot;s&quot;:&quot;/images/30.jpg&quot;},&quot;text&quot;:&quot;&lt;p&gt;Центр дизайна Artplay расположен в 1 км от дома Chkalov. 12 минут пешком &lt;/p&gt;&quot;},
							 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/26.jpg&quot;,&quot;m&quot;:&quot;/images/26.jpg&quot;,&quot;s&quot;:&quot;/images/26.jpg&quot;},&quot;text&quot;:&quot;&lt;p&gt;Гоголь-центр – театр нового формата расположен в шаговой доступности. &lt;/p&gt;&quot;}]}"></div>
                    </div>
                    <div class="tab">
                        <div data-react-class="Cards"
                             data-react-props="{&quot;id&quot;:36,&quot;slides&quot;:[{&quot;urls&quot;:{&quot;l&quot;:&quot;/images/454.jpg&quot;,&quot;m&quot;:&quot;/images/454.jpg&quot;,&quot;s&quot;:&quot;/images/454.jpg&quot;},&quot;text&quot;:&quot;&lt;p&gt;Дом Chkalov - это ликвидный актив в Москве с доходностью до 50%. &lt;/p&gt;&quot;}]}"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="b-galleries js-highlight js-tabs" id="gallery">
            <div class="l-column">
                <h2>Галерея</h2>
                <div class="switcher js-tab-switcher">

                </div>
            </div>
            <div class="galleries">
                <div class="tab active">
                    <div data-react-class="Slides"
                         data-react-props="{&quot;id&quot;:30,&quot;slides&quot;:[
						 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/g/9.jpg&quot;,&quot;m&quot;:&quot;/images/g/9.jpg&quot;,&quot;s&quot;:&quot;/images/g/9.jpg&quot;},&quot;tags&quot;:[{&quot;x&quot;:64.08,&quot;y&quot;:57.42,&quot;text&quot;:&quot;&lt;p&gt;Концепция проекта разработана в формате видовых небоскребов Нью-Йорка&lt;/p&gt;&quot;}]},
						 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/g/2.jpg&quot;,&quot;m&quot;:&quot;/images/g/2.jpg&quot;,&quot;s&quot;:&quot;/images/g/2.jpg&quot;},&quot;tags&quot;:[{&quot;x&quot;:27.0,&quot;y&quot;:40.63,&quot;text&quot;:&quot;&lt;p&gt;Две башни, в которых расположены апартаменты с отделкой, объединены торговой галереей. Для жилой части проекта предусмотрена собственная входная группа. &lt;/p&gt;&quot;}]},
						 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/g/11.jpg&quot;,&quot;m&quot;:&quot;/images/g/11.jpg&quot;,&quot;s&quot;:&quot;/images/g/11.jpg&quot;},&quot;tags&quot;:[{&quot;x&quot;:54.83,&quot;y&quot;:41.98,&quot;text&quot;:&quot;&lt;p&gt;Футуристичный дизайн и динамичный язык архитектуры воплощены в доме Chkalov&lt;/p&gt;&quot;}]},
						 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/g/12.jpg&quot;,&quot;m&quot;:&quot;/images/g/12.jpg&quot;,&quot;s&quot;:&quot;/images/g/12.jpg&quot;},&quot;tags&quot;:[{&quot;x&quot;:42.5,&quot;y&quot;:38.53,&quot;text&quot;:&quot;&lt;p&gt;Дом Chkalov буквально разрезает воздух. Это впечатление создается не только благодаря не только эффектному архитектурному образу, но и исключительному сочетанию материалов&lt;/p&gt;&quot;}]},
						 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/g/13.jpg&quot;,&quot;m&quot;:&quot;/images/g/13.jpg&quot;,&quot;s&quot;:&quot;/images/g/13.jpg&quot;},&quot;tags&quot;:[{&quot;x&quot;:78.58,&quot;y&quot;:37.48,&quot;text&quot;:&quot;&lt;p&gt;Chkalov воплощает динамику стремительной жизни, располагаясь в центре города &lt;/p&gt;&quot;}]},
						 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/g/5.jpg&quot;,&quot;m&quot;:&quot;/images/g/5.jpg&quot;,&quot;s&quot;:&quot;/images/g/5.jpg&quot;}},
						 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/g/6.jpg&quot;,&quot;m&quot;:&quot;/images/g/6.jpg&quot;,&quot;s&quot;:&quot;/images/g/6.jpg&quot;},&quot;tags&quot;:[{&quot;x&quot;:60.08,&quot;y&quot;:52.32,&quot;text&quot;:&quot;&lt;p&gt;Футуристичный дизайн и динамичный язык архитектуры воплощены в доме Chkalov&lt;/p&gt;&quot;}]},
						 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/g/7.jpg&quot;,&quot;m&quot;:&quot;/images/g/7.jpg&quot;,&quot;s&quot;:&quot;/images/g/7.jpg&quot;}},
						 {&quot;urls&quot;:{&quot;l&quot;:&quot;/images/g/8.jpg&quot;,&quot;m&quot;:&quot;/images/g/8.jpg&quot;,&quot;s&quot;:&quot;/images/g/8.jpg&quot;}}]}"></div>
                </div>
            </div>
        </div>
        <div class="b-location js-highlight" id="location">
            <div class="l-column">
                <h2>Расположение</h2>
                <div class="project-description"><p>Расположение в самом центре, на Садовом кольце, задает особый ритм жизни: все, чем может заинтересовать один из крупнейших мегаполисов мира, располагается в 10 минутах. Выезд в обе стороны Садового кольца и шаговая доступность к трем станциям метро дает возможность не тратить время в пробках.</p></div>
                <div class="map"
                     data-props="{&quot;project&quot;:{&quot;name&quot;:&quot;Дом Chkalov&quot;,&quot;latlng&quot;:[55.75576050461752,37.65821671055596]},&quot;markers&quot;:[{&quot;latlng&quot;:[55.754009633776455,37.66226148175042],&quot;name&quot;:&quot;Визовый центр Великобритании&quot;,&quot;type&quot;:&quot;culture&quot;},{&quot;latlng&quot;:[55.752548502087464,37.66077017353814],&quot;name&quot;:&quot;Российская академия адвокатуры и нотариата&quot;,&quot;type&quot;:&quot;education&quot;},{&quot;latlng&quot;:[55.76104735565569,37.66429727839272],&quot;name&quot;:&quot;АРМА&quot;,&quot;type&quot;:&quot;culture&quot;},{&quot;latlng&quot;:[55.762271243263314,37.662867660987786],&quot;name&quot;:&quot;Гоголь-центр&quot;,&quot;type&quot;:&quot;culture&quot;},{&quot;latlng&quot;:[55.750809563296066,37.62856220768731],&quot;name&quot;:&quot;Зарядье парк&quot;,&quot;type&quot;:&quot;culture&quot;},{&quot;latlng&quot;:[55.75201112997353,37.670876737106255],&quot;name&quot;:&quot;ARTPLAY&quot;,&quot;type&quot;:&quot;culture&quot;},{&quot;latlng&quot;:[55.75160054853768,37.669878955352715],&quot;name&quot;:&quot;Британская Высшая Школа Дизайна&quot;,&quot;type&quot;:&quot;education&quot;},{&quot;latlng&quot;:[55.75533185040155,37.664621825683525],&quot;name&quot;:&quot;Центр современного искусства ВИНЗАВОД&quot;,&quot;type&quot;:&quot;culture&quot;}],&quot;routes&quot;:null}">
                    <p class="route-description"></p>
                    <div class="map-container"></div>
                    <ul class="legend">
                        <li>
                            <i class="i-education"></i>
                            <span>Образование</span>
                        </li>
                        <li>
                            <i class="i-culture"></i>
                            <span>Культура и развлечения</span>
                        </li>
                        <li>
                            <i class="i-shopping"></i>
                            <span>Шоппинг</span>
                        </li>
                        <li>
                            <i class="i-sport"></i>
                            <span>Спорт</span>
                        </li>
                        <li>
                            <i class="i-medicine"></i>
                            <span>Медицина</span>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="l-column js-highlight" id="specs">
                <h2>Технические данные</h2>

                <div class="columns js-columns">
                    <div class="column c-3"><h3>Details</h3>
                        <ul>
                            <li>2 башни высотой 21 м.</li>
                            <li>Площадь апартаментов 32-126 кв.м.</li>
                            <li>161 апартамент в Башне А</li>
                            <li>235 апартаментов в Башне Б</li>
                            <li>Высота потолков 3,15 м</li>
                            <li>Высококачественная отделка</li>
                            <li>Электричество 14-18 кВт</li>
                        </ul>
                    </div>
                    <div class="column c-3"><h3>Comfort</h3>
                        <ul>
                            <li>Отдельный вход</li>
                            <li>Подземный паркинг на 270 м/м.</li>
                            <li>Система централизованного кондиционирования типа VRV</li>
                            <li>Автоматическое регулирование температуры приборов</li>
                            <li>Высокоскоростные бесшумные лифты Shindler</li>
                            <li>Высокоскоростной интернет, ТВ, телефония</li>
                            <li>Система контроля и управления доступом</li>
                            <li>Видеонаблюдение</li>
                        </ul>
                    </div>
                    <div class="column c-3"><h3>Service</h3>
                        <ul>
                            <li>Служба ресепшн</li>
                            <li>Техническая служба эксплуатации и обслуживания здания</li>
                            <li>Диспетчерская основных систем здания</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="column c-3"><h3>Details</h3>
                        <ul>
                            <li>2 башни высотой 21 м.</li>
                            <li>Площадь апартаментов 32-126 кв.м.</li>
                            <li>161 апартамент в Башне А</li>
                            <li>235 апартаментов в Башне Б</li>
                            <li>Высота потолков 3,15 м</li>
                            <li>Высококачественная отделка</li>
                            <li>Электричество 14-18 кВт</li>
                        </ul>
                    </div>
                </div>
                <div class="mySlides fade">
                    <div class="column c-3"><h3>Comfort</h3>
                        <ul>
                            <li>Отдельный вход</li>
                            <li>Подземный паркинг на 270 м/м.</li>
                            <li>Система централизованного кондиционирования типа VRV</li>
                            <li>Автоматическое регулирование температуры приборов</li>
                            <li>Высокоскоростные бесшумные лифты Shindler</li>
                            <li>Высокоскоростной интернет, ТВ, телефония</li>
                            <li>Система контроля и управления доступом</li>
                            <li>Видеонаблюдение</li>
                        </ul>
                    </div>
                </div>
                <div class="mySlides fade">
                    <div class="column c-3"><h3>Service</h3>
                        <ul>
                            <li>Служба ресепшн</li>
                            <li>Техническая служба эксплуатации и обслуживания здания</li>
                            <li>Диспетчерская основных систем здания</li>
                        </ul>
                    </div>
                </div>
                <i class="i-gallery-arrow next" ></i>
                <i class="i-gallery-arrow-left prev"></i>
            </div>
            <div class="b-docs js-highlight l-column" id="docs">
                <h2>Документация</h2>
                <div class="columns list">


                    <div class="column c-3">
                        <p class="name"><a target="_blank"
                                           href="./store/buh-otch.pdf">Бухгалтерская отчетность за 1 Полугодие 2018 г.</a></p>
                        <p class="date">21 августа 2018</p>
                    </div>
                    <div class="column c-3">
                        <p class="name"><a target="_blank"
                                           href="./store/e10346644fddc81bb6654c87f7d9ad7b43aae941a5c05ddc9980c1d2670a/positive_expert_opinion_17-10-2017.pdf">Положительное
                                заключение экспертизы от 17 октября 2017 года.</a></p>
                        <p class="date">21 августа 2018</p>
                    </div>
                    <div class="column c-3">
                        <p class="name"><a target="_blank"
                                           href="./store/6e494790a8087459f3a939ce0482a363b5f1725a34dba68c4e5a038c226f/positive_expert_opinion_14-02-2018.pdf">Положительное
                                заключение экспертизы от 14 февраля 2018 г.</a></p>
                        <p class="date">21 августа 2018</p>
                    </div>
                    <div class="column c-3">
                        <p class="name"><a target="_blank"
                                           href="./store/a1548253e64263e39042a6a9186d1fb06892ee808d1658151c56ac35891e/land_lease_agreement.pdf">Договор
                                аренды земельного участка</a></p>
                        <p class="date">21 августа 2018</p>
                    </div>
                    <div class="column c-3">
                        <p class="name"><a target="_blank"
                                           href="./store/d94340286869ad6fe9f6eddbe5f3d350257ca63c5a8b7f50b7e65a39c23d/balance_sheet_for_2018_quarter_1.pdf">Бухгалтерский
                                баланс за I квартал 2018 г.</a></p>
                        <p class="date">21 августа 2018</p>
                    </div>
                    <div class="column c-3">
                        <p class="name"><a target="_blank"
                                           href="./store/f3f98aed0e9839f17444d17e24d3ed36f2b218a9ebc48ce7ee93cff3eb23/balance_sheet_for_2017.pdf">Бухгалтерский
                                баланс за 2017 год </a></p>
                        <p class="date">21 августа 2018</p>
                    </div>
                    <div class="column c-3">
                        <p class="name"><a target="_blank"
                                           href="./store/5fe7ab1656d741952a29f8e92595267d71388ffd0d28b5da5d6ba9091b4a/auditor-s_report_for_2017.pdf">Аудиторское
                                заключение за 2017 г.</a></p>
                        <p class="date">21 августа 2018</p>
                    </div>
                    <div class="column c-3">
                        <p class="name"><a target="_blank"
                                           href="./store/ba8954bb2a76ad09295e20d3fa602dfb7c911e3336b4cdfdeb1c07d8c85e/resolution_01-03-2018.pdf">Разрешение
                                на строительство от 01.03.2018 г.</a></p>
                        <p class="date">21 августа 2018</p>
                    </div>
                    <div class="column c-3">
                        <p class="name"><a target="_blank"
                                           href="./store/882679bb19851d256a600089e6135405ddcfbcbe89155488fea37fffdadf/resolution_12-12-2017.pdf">Разрешение
                                на строительство от 12.12.2017 г.</a></p>
                        <p class="date">21 августа 2018</p>
                    </div>
                    <div class="column c-3">
                        <p class="name"><a target="_blank"
                                           href="./store/ac7dd40e4e7c60873a01cfd06bf3b6f11a871d4da6f0fdea815bd1076c6e/declaration.pdf">Проектная
                                декларация от 11.04.2018 г.</a></p>
                        <p class="date">21 августа 2018</p>
                    </div>
                    <div class="column c-3">
                        <p class="name"><a target="_blank"
                                           href="./store/bd8bf30f2c0dd68f3a639bbe78726eb9094754ef13294cda39957edb5141/conclusion.pdf">
                                Заключение о соответствии</a></p>
                        <p class="date">21 августа 2018 г.</p>
                    </div>
                </div>
                <!--<p class="btn">-->
                <!--<a href="/domchkalov/docs">Вся документация</a>-->
                <!--</p>-->
            </div>
            <div class="l-column js-highlight" id="office">
                <h2>
                    Офис
                    <br/>
                    продаж
                </h2>
                <div class="contacts-info">
                    <ul>
                        <li>Москва, Земляной вал. 37</li>
                        <li>Ежедневно: с 9:00 до 21:00</li>
                    </ul>
                </div>

                <div class="b-galleries js-tabs">
                    <div class="switcher js-tab-switcher">

                    </div>
                    <div class="galleries"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-modal">
    <div class="wrap-modal-table">
        <div class="modal-container">
            <i class="i-close"></i>
            <table>
                <thead>
                <tr>
                    <th>№</th>
                    <th>башня</th>
                    <th>этаж</th>
                    <th>спальни</th>
                    <th>площадь</th>
                    <th>форма заявки</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>А</td>
                    <td>6</td>
                    <td>2</td>
                    <td>76,6</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>А</td>
                    <td>6</td>
                    <td>1</td>
                    <td>41,8</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>А</td>
                    <td>6</td>
                    <td>2</td>
                    <td>60,7</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>А</td>
                    <td>6</td>
                    <td>2</td>
                    <td>73,2</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>А</td>
                    <td>6</td>
                    <td>1</td>
                    <td>43,1</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>А</td>
                    <td>7</td>
                    <td>1</td>
                    <td>41,2</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>А</td>
                    <td>7</td>
                    <td>2</td>
                    <td>74,1</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>А</td>
                    <td>7</td>
                    <td>1</td>
                    <td>43,3</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>А</td>
                    <td>7</td>
                    <td>1</td>
                    <td>43,0</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>А</td>
                    <td>7</td>
                    <td>2</td>
                    <td>80,4</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>А</td>
                    <td>8</td>
                    <td>2</td>
                    <td>77,3</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>А</td>
                    <td>8</td>
                    <td>1</td>
                    <td>42,1</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>А</td>
                    <td>8</td>
                    <td>2</td>
                    <td>61,2</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>29</td>
                    <td>А</td>
                    <td>8</td>
                    <td>2</td>
                    <td>73,8</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>32</td>
                    <td>А</td>
                    <td>8</td>
                    <td>1</td>
                    <td>43,4</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>56</td>
                    <td>А</td>
                    <td>11</td>
                    <td>2</td>
                    <td>78,2</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>58</td>
                    <td>А</td>
                    <td>11</td>
                    <td>1</td>
                    <td>41,4</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>60</td>
                    <td>А</td>
                    <td>11</td>
                    <td>2</td>
                    <td>61,2</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>62</td>
                    <td>А</td>
                    <td>11</td>
                    <td>2</td>
                    <td>70,7</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>65</td>
                    <td>А</td>
                    <td>11</td>
                    <td>1</td>
                    <td>42,8</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>68</td>
                    <td>А</td>
                    <td>12</td>
                    <td>1</td>
                    <td>49,7</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>70</td>
                    <td>А</td>
                    <td>12</td>
                    <td>1</td>
                    <td>40,9</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>72</td>
                    <td>А</td>
                    <td>12</td>
                    <td>2</td>
                    <td>73,5</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>74</td>
                    <td>А</td>
                    <td>12</td>
                    <td>1</td>
                    <td>42,3</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>75</td>
                    <td>А</td>
                    <td>12</td>
                    <td>1</td>
                    <td>42,3</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>77</td>
                    <td>А</td>
                    <td>12</td>
                    <td>2</td>
                    <td>80,5</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>123</td>
                    <td>А</td>
                    <td>17</td>
                    <td>2</td>
                    <td>74,4</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>124</td>
                    <td>А</td>
                    <td>17</td>
                    <td>1</td>
                    <td>40,2</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>126</td>
                    <td>А</td>
                    <td>17</td>
                    <td>3</td>
                    <td>118,7</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>128</td>
                    <td>А</td>
                    <td>17</td>
                    <td>2</td>
                    <td>63,3</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>192</td>
                    <td>Б</td>
                    <td>8</td>
                    <td>1</td>
                    <td>49,3</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>195</td>
                    <td>Б</td>
                    <td>8</td>
                    <td>1</td>
                    <td>35,3</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>197</td>
                    <td>Б</td>
                    <td>8</td>
                    <td>1</td>
                    <td>36,3</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>201</td>
                    <td>Б</td>
                    <td>8</td>
                    <td>1</td>
                    <td>46,1</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>202</td>
                    <td>Б</td>
                    <td>8</td>
                    <td>2</td>
                    <td>71,8</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>206</td>
                    <td>Б</td>
                    <td>8</td>
                    <td>2</td>
                    <td>72,3</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>208</td>
                    <td>Б</td>
                    <td>9</td>
                    <td>1</td>
                    <td>35,0</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>211</td>
                    <td>Б</td>
                    <td>9</td>
                    <td>1</td>
                    <td>32,4</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>213</td>
                    <td>Б</td>
                    <td>9</td>
                    <td>1</td>
                    <td>36,3</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>214</td>
                    <td>Б</td>
                    <td>9</td>
                    <td>2</td>
                    <td>66,6</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>215</td>
                    <td>Б</td>
                    <td>9</td>
                    <td>1</td>
                    <td>38,4</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>219</td>
                    <td>Б</td>
                    <td>9</td>
                    <td>1</td>
                    <td>47,0</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>222</td>
                    <td>Б</td>
                    <td>10</td>
                    <td>1</td>
                    <td>47,5</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>224</td>
                    <td>Б</td>
                    <td>10</td>
                    <td>1</td>
                    <td>35,1</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>226</td>
                    <td>Б</td>
                    <td>10</td>
                    <td>1</td>
                    <td>32,3</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>232</td>
                    <td>Б</td>
                    <td>10</td>
                    <td>2</td>
                    <td>69,2</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>234</td>
                    <td>Б</td>
                    <td>10</td>
                    <td>1</td>
                    <td>47,0</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>254</td>
                    <td>Б</td>
                    <td>12</td>
                    <td>1</td>
                    <td>35,1</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>257</td>
                    <td>Б</td>
                    <td>12</td>
                    <td>1</td>
                    <td>35,5</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>260</td>
                    <td>Б</td>
                    <td>12</td>
                    <td>1</td>
                    <td>38,4</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>263</td>
                    <td>Б</td>
                    <td>12</td>
                    <td>1</td>
                    <td>48,2</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>266</td>
                    <td>Б</td>
                    <td>12</td>
                    <td>2</td>
                    <td>71,7</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>267</td>
                    <td>Б</td>
                    <td>13</td>
                    <td>1</td>
                    <td>47,5</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>270</td>
                    <td>Б</td>
                    <td>13</td>
                    <td>1</td>
                    <td>35,3</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>273</td>
                    <td>Б</td>
                    <td>13</td>
                    <td>1</td>
                    <td>35,4</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>276</td>
                    <td>Б</td>
                    <td>13</td>
                    <td>1</td>
                    <td>45,2</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>277</td>
                    <td>Б</td>
                    <td>13</td>
                    <td>2</td>
                    <td>69,2</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>283</td>
                    <td>Б</td>
                    <td>14</td>
                    <td>1</td>
                    <td>34,1</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>286</td>
                    <td>Б</td>
                    <td>14</td>
                    <td>1</td>
                    <td>32,1</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>289</td>
                    <td>Б</td>
                    <td>14</td>
                    <td>2</td>
                    <td>65,4</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>294</td>
                    <td>Б</td>
                    <td>14</td>
                    <td>1</td>
                    <td>47,0</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>295</td>
                    <td>Б</td>
                    <td>14</td>
                    <td>1</td>
                    <td>44,7</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>327</td>
                    <td>Б</td>
                    <td>17</td>
                    <td>1</td>
                    <td>45,9</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>330</td>
                    <td>Б</td>
                    <td>17</td>
                    <td>1</td>
                    <td>35,3</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>334</td>
                    <td>Б</td>
                    <td>17</td>
                    <td>2</td>
                    <td>65,4</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>336</td>
                    <td>Б</td>
                    <td>17</td>
                    <td>1</td>
                    <td>43,7</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>337</td>
                    <td>Б</td>
                    <td>17</td>
                    <td>2</td>
                    <td>66,5</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>338</td>
                    <td>Б</td>
                    <td>17</td>
                    <td>1</td>
                    <td>47</td>
                    <td><a>узнать больше</a></td>
                </tr>
                <tr>
                    <td>340</td>
                    <td>Б</td>
                    <td>17</td>
                    <td>3</td>
                    <td>96,6</td>
                    <td><a>узнать больше</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<footer>
    <p class="description">Настоящий сайт и представленные на нем материалы носят исключительно информационный
        характер и ни при каких условиях не являются публичной офертой, определяемой положениями Статьи 437
        Гражданского кодекса Российской Федерации.
    </p>
    <p>
        Права на сайт принадлежат застройщику ООО «Эссет Менеджмент".
        <span>Девелопер проекта - IKON-Development.</span>
    </p>

    <ul class="links">
        <li class="fb">
            <a target="_blank" href="https://www.facebook.com/domchkalov/"><i class="i-fb"></i>
            </a>
        </li>


    </ul>
    <p class="copy">© IKON development 2018</p>
    <p><a target="_blank"
          href="./store/f3f98aed0e9839f17444d17e24d3ed36f2b218a9ebc48ce7ee93cff3eb23/SecurityPolicy.pdf">Политика конфиденциальности</a></p>
    <p class="designedby"><a target="_blank" href="http://proekt.co.uk">Designed by Proekt Agency in Moscow</a></p>
</footer>
<script src="./js/application-c43b9676b3a2557f8a917b08f520c0f6.js"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter50307964 = new Ya.Metrika2({
                    id:50307964,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/50307964" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125642134-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-125642134-1');
</script>

<script src="./js/scroll.js"></script>
<script type="text/javascript">
    var __cs = __cs || [];
    __cs.push(["setCsAccount", "YWZxysY_Ia2gcnQYLEgM5o5mMVHVlygg"]);
</script>
<script type="text/javascript" async src="https://app.comagic.ru/static/cs.min.js"></script>
</body>

</html>