<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="У нас можно заказать создание сайта, веб-приложения, изготовить макет страницы, разработать современный дизайн для бренда, изготовить логотип">
    <meta name="keywords" content="заказать создание сайта веб-приложение дешево дизайн логотип макет страницы">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:type"          content="website" />
    <meta property="og:image"         content="/img/favicon.jpg" />
    <meta property="og:title"         content="Lexis Studio | Веб Студия" />
    <meta property="og:description"   content="У нас можно заказать создание сайта, веб-приложения, изготовить макет страницы, разработать современный дизайн для бренда, изготовить логотип" />
    <meta property="og:url"           content="{{ asset('/') }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@vegansfreedom.com" />
    <meta name="twitter:title" content="Lexis Studio | Веб Студия" />
    <meta name="twitter:description" content="У нас можно заказать создание сайта, веб-приложения, изготовить макет страницы, разработать современный дизайн для бренда, изготовить логотип" />
    <meta name="twitter:image" content="/img/favicon.jpg" />
    <title>Lexis Studio | Студия Сайтов</title>
    <link rel="icon" href="/img/favicon.png">
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/ls.css" rel="stylesheet">
</head>
<body>
@auth
@include('admin.tools')
@endauth
<div id="pre-load">
    <div class="ls-loader"></div>
</div>
<header class="header_area animated">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!-- Menu Area Start -->
            <div class="col-12 col-lg-10">
                <div class="menu_area">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <!-- Logo -->
                        <a class="navbar-brand" href="/">Ls<span class="blink">_</span></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ls-navbar" aria-controls="ls-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Menu Area -->
                        <div class="collapse navbar-collapse" id="ls-navbar">
                            <ul class="navbar-nav ml-auto" id="nav">
                                <li data-toggle="collapse" data-target="#ls-navbar" aria-controls="ls-navbar" class="nav-item active"><a class="nav-link" href="#home">Начало</a></li>
                                <li data-toggle="collapse" data-target="#ls-navbar" aria-controls="ls-navbar" class="nav-item"><a class="nav-link" href="#about">О нас</a></li>
                                <li data-toggle="collapse" data-target="#ls-navbar" aria-controls="ls-navbar" class="nav-item"><a class="nav-link" href="#features">Услуги</a></li>
                                <li data-toggle="collapse" data-target="#ls-navbar" aria-controls="ls-navbar" class="nav-item"><a class="nav-link" href="#port_screen">Портфолио</a></li>
                                <li data-toggle="collapse" data-target="#ls-navbar" aria-controls="ls-navbar" class="nav-item"><a class="nav-link" href="#pricing">Стоимость</a></li>
                                <li data-toggle="collapse" data-target="#ls-navbar" aria-controls="ls-navbar" class="nav-item"><a class="nav-link" href="#contact">Контакты</a></li>
                            </ul>
                            <div class="order-btn d-lg-none scroll_anchor">
                                <a data-toggle="collapse" data-target="#ls-navbar" aria-controls="ls-navbar" class="nav-item" href="#contact">Заказать сайт</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-12 col-lg-2">
                <div class="order-btn d-none d-lg-block scroll_anchor">
                    <a href="#contact">Заказать сайт</a>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="welcome clearfix" id="home"><!-- Welcome Start -->
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md">
                <div class="welcome-header">
                    <h2>Lexis Studio</h2>
                    <h3>LS</h3>
                    <p>Создание сайтов и веб-приложений<br/>Мы развиваем интернет бизнес потому,<br/>что мы любим интернет и это наш бизнес</p>
                </div>
                <div class="get-start-block scroll_anchor">
                    <a href="#contact" class="submit">Бесплатная консультация</a>
                </div>
            </div>
        </div>
    </div>
</section><!-- Welcome End -->
<section class="special-area bg-white padding_100" id="about"><!-- Special Layer Start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                <div class="ls-descr">
                    <h1>Студия сайтов Lexis</h1>
                    <div class="under-line"></div>
                    <div class="ls-descr-content ls-zoom wow fadeInUp">
                        <p>
                            Мы создаём сайты! Если Вам нужно сделать сайт, то Вы зашли по адресу! Создаём уникальные интернет ресурсы,
                            сайты и приложения! Веб-Студия Lexis Studio Design предоставляет услуги по изготовлению сайтов, по их поддержке
                            и раскрутке
                        </p>
                        <p>
                            Если Вы интересуетесь, как создать сайт, то без сомнения Вам нужен сайт!
                            И чем раньше, тем лучше, ведь чем дольше сайт работает в сети, тем больше рейтинга имеет,
                            и тем больше опыта в настройке и поддержке сайта имеет его владелец
                        </p>
                        <p>
                            Как создать сайт бесплатно - этот вопрос возникает у всех без исключения новичков. Ответ на этот вопрос
                            утвердительный - Да, бесплатно создать сайт возможно! Но, на это нужно время, чтоб получить знания во многих
                            областях. И лучше сделать сайт дешёво у нас, ведь намного эффективней эти знания купить и пользоваться ими
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="block-header text-center">
                    <h2>Наша студия особенная</h2>
                    <div class="under-line"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="single-special text-center ls-zoom wow fadeInUp" data-wow-delay="0.2s">
                    <div class="single-icon">
                        <i class="fa fa-handshake-o fa-4x" aria-hidden="true"></i>
                    </div>
                    <h4>Открыты</h4>
                    <p>
                        Честность - лучшая политика. Мы очень ценим положительные
                        отзывы наших клиентов  и расчитываем на них. Никаких скрытых
                        платежей и недоработок в проектах, только законченные результаты
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="single-special text-center ls-zoom wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-icon">
                        <i class="fa fa-tachometer fa-4x" aria-hidden="true"></i>
                    </div>
                    <h4>Нацелены</h4>
                    <p>
                        Основная и главная цель - это решить задачу с точки зрения бизнеса, для
                        которого она будет служить. Чтобы технология оправдывала своё
                        существование, работая на благо поставленной задачи
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="single-special text-center ls-zoom wow fadeInUp" data-wow-delay="0.6s">
                    <div class="single-icon">
                        <i class="fa fa-gears fa-4x" aria-hidden="true"></i>
                    </div>
                    <h4>Внимательны</h4>
                    <p>
                        Профессиональный подход означает внимательность к деталям, так как
                        мелочей не бывает. Наши продукты всегда проверяются профессионалами
                        широкого профиля для максимальной эффективности
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="spec-descr-layer"><!-- Special Description Layer -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="spec-descr-img">
                        <img src="img/draft/more.jpg" alt="Получайте больше чем сайт!">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 ml-xl-auto">
                    <div class="spec-descr-content">
                        <h2>Получайте больше!</h2>
                        <p>
                            Решения и услуги для бизнеса в сети, решаем с акцентом под специфику Вашего бизнеса, с аналитикой конкурентов по присутствию в соц-сетях, SMM стратегии, поисковых сервисах, СЕО-оптимизации. Разрабатываем семантическое ядро сайта и кампании в целом. Выделяем выразительную идею Вашего продукта, или услуги, что бы выделить среди конкурентов, создаём уникальный стиль и дизайн с идеей
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xl-5 ml-xl-auto">
                    <div class="spec-descr-content">
                        <h2>Что мы создаём?</h2>
                        <p>
                            Мы больше чем Веб Студия! Мы создаём Бренды. Основная специализация направлена на решение проблематики малого и среднего бизнеса, которые имеют предложение, но пока не обрели узнаваемый облик, способный эффективно накапливать клиентскую базу
                        </p>
                        <p>
                            Мы делаем автоматизацию! От калькуляторов заказа, заполнения форм и предрасчёта, CRM систем телефонии, подключения кол-центров с консультантами, до ERP - систем управления ресурсами предприятия
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="spec-descr-img">
                        <img src="img/draft/outstand.jpg" alt="Выразительный дизайн сайта">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- Special Layer End -->
<section class="bg-white padding_0_100 clearfix" id="features"><!-- Work Types Start -->
    <div class="container ls-headers">
        <div class="row">
            <div class="col-12">
                <div class="block-header text-center">
                    <h2>Наши услуги</h2>
                    <div class="under-line"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-center p-3 wow fadeInUp">
                <div class="ls-zoom ls-example">
                    <p><i class="fa fa-address-card fa-4x"></i></p>
                    <h4>Сайт Визитка</h4>
                    <img src="img/draft/vizitka.jpg"/>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 text-center p-3 wow fadeInUp">
                <div class="ls-zoom ls-example">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p><i class="fa fa-cart-plus fa-5x"></i></p>
                            <h4>Интернет магазин</h4>
                            <h4>Сайт Витрина</h4>
                            <p>Интернет магазин является сложным веб приложением, поэтому магазин лучше заказывать под ключ, или начинать с нашего упрощённого специального предложения - сайта-витрины</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 align-content-center">
                            <img src="img/draft/shop.jpg"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 text-center p-3 wow fadeInUp">
                <div class="ls-zoom ls-example">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p><i class="fa fa-group fa-4x"></i></p>
                            <h4>Корпоративный сайт</h4>
                            <p>Корпоративный сайт это закрытая социальная сеть, дополненная спецфункционалом предприятия. Имеет многоуровневый доступ к информации. Возможность отслеживать работу персонала и читать служебную переписку</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 align-content-center">
                            <img src="img/draft/corporate.jpg"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-center p-3 wow fadeInUp">
                <div class="ls-zoom ls-example">
                    <p><i class="fa fa-rocket fa-4x"></i></p>
                    <h4>Сайт Лэндинг</h4>
                    <img src="img/draft/land.jpg"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-center p-3 wow fadeInUp">
                <div class="ls-zoom ls-example">
                    <p><i class="fa fa-star fa-4x"></i></p>
                    <h4>Блог / Журнал</h4>
                    <img src="img/draft/blog.jpg"/>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 text-center p-3 wow fadeInUp">
                <div class="ls-zoom ls-example">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p><i class="fa fa-smile-o fa-5x"></i></p>
                            <h4>Социальная сеть</h4>
                            <p>
                                Социальные сети уже успели доказать свою эффективность, устойчивость и постоянство роста. Первые социальные сети были закрытые и частные, для сотрудников и друзей
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 align-content-center">
                            <img src="img/draft/social.jpg"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 text-center p-3 wow fadeInUp">
                <div class="ls-zoom ls-example">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p><i class="fa fa-paint-brush fa-4x"></i></p>
                            <h4>Графика и Дизайн</h4>
                            <p>
                                Дизайн очень важен, он сильно помогает выделяться из толпы, визуальная информация воспринимается быстрей и запоминается лучше. Делаем логотипы, макеты страниц, изображения, фото и картинки
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 align-content-center">
                            <img src="img/draft/Graphics.jpg"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-center p-3 wow fadeInUp">
                <div class="ls-zoom ls-example">
                    <p><i class="fa fa-file-text-o fa-4x"></i></p>
                    <h4>Пишем тексты</h4>
                    <p>
                        Красивые продающие тексты очень важны.  Текст может правильно передать послание, обозначить позицию в рыночной нише, задать тон для сотрудничества и также он важен для СЕО
                    </p>
                </div>
            </div>
        </div>
    </div>
</section><!-- Work Types End -->
<section class="numbers_layer clearfix"><!-- Numbers Layer Start -->
    <div class="container">
        <div class="col-12">
            <!-- Heading Text -->
            <div class="block-header text-center">
                <h2>У нас сейчас</h2>
                <div class="under-line"></div>
            </div>
        </div>
        <div class="row">
            <!-- Single Counter -->
            <div class="col-12 col-md-4 col-lg-4">
                <div class="one-number d-flex justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="counter-area">
                        <h3><span class="counter">7</span></h3>
                    </div>
                    <div class="numbers-content">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <p>Проектов <br> в разработке</p>
                    </div>
                </div>
            </div>
            <!--Single Counter -->
            <div class="col-12 col-md-4 col-lg-4">
                <div class="one-number d-flex justify-content-center wow fadeInUp" data-wow-delay="0.7s">
                    <div class="counter-area">
                        <h3><span class="counter">22</span></h3>
                    </div>
                    <div class="numbers-content">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <p>Проекта сданы <br> в эксплуатацию</p>
                    </div>
                </div>
            </div>
            <!-- Single Counter -->
            <div class="col-12 col-md-4 col-lg-4">
                <div class="one-number d-flex justify-content-center wow fadeInUp" data-wow-delay="1.2s">
                    <div class="counter-area">
                        <h3><span class="counter">43</span></h3>
                    </div>
                    <div class="numbers-content">
                        <i class="fa fa-smile-o" aria-hidden="true"></i>
                        <p>Счастливых <br> Клиента</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section><!-- Numbers Layer End -->
<section class="port-screenshots-area padding_0_100 clearfix" id="port_screen"><!-- Portfolio Start -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <!-- Heading Text  -->
                <div class="block-header">
                    <h2>Наши работы</h2>
                    <div class="under-line"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Screenshots Slides  -->
                <div class="port_slides owl-carousel">
                    <div class="single-shot">
                        <img src="img/port/candybar.jpg" alt="Кэндибар">
                    </div>
                    <div class="single-shot">
                        <img src="img/port/carserv.jpg" alt="СТО">
                    </div>
                    <div class="single-shot">
                        <img src="img/port/sweetshop.jpg" alt="Кондитерская">
                    </div>
                    <div class="single-shot">
                        <img src="img/port/dentist.jpg" alt="Дантист">
                    </div>
                    <div class="single-shot">
                        <img src="img/port/realty.jpg" alt="Риэлторы в Ялте">
                    </div>
                    <div class="single-shot">
                        <img src="img/port/cleaning.jpg" alt="Клининговая компания">
                    </div>
                    <div class="single-shot">
                        <img src="img/port/ccvita.jpg" alt="Сайт Колл-центра">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- Portfolio End -->
<section class="pricing-plan-layer padding_0_100 clearfix" id="pricing"><!-- Prices Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Heading Text  -->
                <div class="block-header text-center">
                    <h2>У нас лучшие цены</h2>
                    <div class="under-line"></div>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-12 col-md-6 col-lg-3">
                <!-- Package Price  -->
                <div class="single-price-plan text-center">
                    <!-- Package Text  -->
                    <div class="package-plan">
                        <h5>Страничка</h5>
                        <div class="price d-flex justify-content-center">
                            <p>От </p><span><i class="fa fa-dollar"></i></span><h4>14</h4>
                        </div>
                    </div>
                    <div class="package-description">
                        <p>Подбор оптимального домена</p>
                        <p>Подбор оптимального хостинга</p>
                        <p>От одной страницы</p>
                        <p>От 500 символов текста</p>
                        <p>От трёх ярких изображений</p>
                    </div>
                    <!-- Plan Button  -->
                    <div class="plan-button scroll_anchor">
                        <a href="#contact">Заказать</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <!-- Package Price  -->
                <div class="single-price-plan text-center">
                    <!-- Package Text  -->
                    <div class="package-plan">
                        <h5>Сайт Визитка</h5>
                        <div class="price d-flex justify-content-center">
                            <p>От </p><span><i class="fa fa-dollar"></i></span><h4>29</h4>
                        </div>
                    </div>
                    <div class="package-description">
                        <p>Подбор оптимального домена</p>
                        <p>Подбор оптимального хостинга</p>
                        <p>От 5 тематических страниц</p>
                        <p>От 1000 символов текста</p>
                        <p>От пяти ярких изображений</p>
                    </div>
                    <!-- Plan Button  -->
                    <div class="plan-button scroll_anchor">
                        <a href="#contact">Заказать</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <!-- Package Price  -->
                <div class="single-price-plan active text-center">
                    <!-- Package Text  -->
                    <div class="package-plan">
                        <h5>Лендинг Сайт</h5>
                        <div class="price d-flex justify-content-center">
                            <p>От </p><span><i class="fa fa-dollar"></i></span><h4>49</h4>
                        </div>
                    </div>
                    <div class="package-description">
                        <p>Подбор оптимального домена</p>
                        <p>Подбор оптимального хостинга</p>
                        <p>Адаптивный живой дизайн</p>
                        <p>От 1500 символов текста</p>
                        <p>От пяти ярких изображений</p>
                    </div>
                    <!-- Plan Button  -->
                    <div class="plan-button scroll_anchor">
                        <a href="#contact">Заказать</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <!-- Package Price  -->
                <div class="single-price-plan text-center">
                    <!-- Package Text  -->
                    <div class="package-plan">
                        <h5>Интернет магазин</h5>
                        <div class="price d-flex justify-content-center">
                            <p>От </p><span><i class="fa fa-dollar"></i></span><h4>89</h4>
                        </div>
                    </div>
                    <div class="package-description">
                        <p>Подбор оптимального домена</p>
                        <p>Подбор оптимального хостинга</p>
                        <p>От 10 страницы</p>
                        <p>От 2000 символов текста</p>
                        <p>От пяти ярких изображений</p>
                    </div>
                    <!-- Plan Button  -->
                    <div class="plan-button scroll_anchor">
                        <a href="#contact">Заказать</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- Prices End -->
<section class="staff-area bg-white padding_0_100 clearfix" id="our_team"><!-- Team Start -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <!-- Heading Text  -->
                <div class="block-header">
                    <h2>Наша команда</h2>
                    <div class="under-line"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="slider slider-for">
                    <div class="text-center"><!-- Staff Text  -->
                        <div class="staff-description text-center">
                            <p>“ Менеджер Проектов, PHP и Java разработчик ”</p>
                        </div>
                        <div class="staff-name text-center">
                            <h5>Aleks Kujawec</h5>
                            <p>Менеждер Проектов</p>
                        </div>
                    </div>
                    <div class="staff-text text-center"><!-- Staff Text  -->
                        <div class="staff-description text-center">
                            <p>“ Волшебница и заклинательница регулярных выражений (Regex), создатель огромного количества парсеров для поисковых машин. Мисс недвижимость интернета, участница и руководитель одних из самых крупных сервисов поиска объектов недвижимости в Белорусии, Украине и Росии  ”</p>
                        </div>
                        <div class="staff-name text-center">
                            <h5>Valentina Moroz</h5>
                            <p>Системный Администратор</p>
                        </div>
                    </div>
                    <div class="text-center"><!-- Staff Text  -->
                        <div class="staff-description text-center">
                            <p>“ Просто архитектор Зураб Церетели систем и библиотек, скульптор Микеланджело програмного обеспечения. Кудесник и гуру Full Stack, к чему прикасается всё преображается. Художник стилей и поет кода. Однажды в детстве включил компьютер и с того момента больше не выключал ”</p>
                        </div>
                        <div class="staff-name text-center">
                            <h5>Лапин Илья</h5>
                            <p>Программист Архитектор</p>
                        </div>
                    </div>
                    <div class="staff-text text-center"><!-- Staff Text  -->
                        <div class="staff-description text-center">
                            <p>“ Знает множество сочетаний цветов и текстур, а так же хитрые секреты, как сочетать не сочетаемое. Имеет огромный опыт в дизайне декоров, интерьеров, ландшафтов, графики в полиграфии. С художественным чутьём рисует шаблоны для сайтов с понятным и удобным функционалом ”</p>
                        </div>
                        <div class="staff-name text-center">
                            <h5>Наталья Ильина</h5>
                            <p>Художник Дизайнер</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5"><!-- Staff Thumbnail Layer -->
                <div class="slider slider-nav">
                    <div class="staff-thumbnail">
                        <img src="img/staff/kujawetsaleks.png" alt="">
                    </div>
                    <div class="staff-thumbnail">
                        <img src="img/staff/morozvalentina.png" alt="">
                    </div>
                    <div class="staff-thumbnail">
                        <img src="img/staff/lapinilia.png" alt="">
                    </div>
                    <div class="staff-thumbnail">
                        <img src="img/staff/ilinanatalia.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- Team End -->
<section class="contact-layer padding_100 clearfix" id="contact"><!-- Contact Layer -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block-header">
                    <h2>Обратитесь к нам!</h2>
                    <div class="under-line"></div>
                </div>
                <div class="contact-text">
                    <p>Свяжитесь с нами любым удобным для Вас способом, или сбросьте нам пару строк с Вашим вопросом и мы Вам ответим. Можете так же передать через эту форму Ваш номер телефона и мы Вам перезвоним</p>
                </div>
                <div class="address-text">
                    <p><span>адрес:</span>Киев, ул.Хмельницкая, 10</p>
                </div>
                <div class="email-text">
                    <p><span>email:</span> lexis.studio.com@gmail.com</p>
                </div>
            </div>
            <div class="col-md-6"><!-- Form Start-->
                <div class="contact-form">
                    <form method="POST" action="{{ route('feedback') }}">
                        @csrf
                        <div class="row">
                            @if($errors->any())
                                <div class="col-md-12">
                                    <div class="form-sent-info">
                                        Поля заполнены не верно!
                                    </div>
                                </div>
                            @endif
                            @if(session('messageSent'))
                            <div class="col-md-12">
                                <div class="form-sent-info">
                                    СООБЩЕНИЕ ОТПРАВЛЕНО!
                                </div>
                            </div>
                            @endif
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" placeholder="Ваше Имя" required {{ session('messageSent') ? 'autofocus' : ''}} {{ $errors->has('name') ? 'autofocus' : '' }}>
                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="Ваша Почта E-mail" required {{ $errors->has('email') ? 'autofocus' : '' }}>
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="text" id="message" class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}" cols="30" rows="4" placeholder="Ваше Сообщение" required {{ $errors->has('text') ? 'autofocus' : '' }}>{{ old('text') }}</textarea>
                                    @if ($errors->has('text'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn submit-btn">Отправить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- Contact Layer End -->
<!-- Map Layer -->
<div class="container-fluid bg-white">
    <div class="row">
        <div class="col-12 p-0">
            <div id="googleMap" class="gmap"></div>
        </div>
    </div>
</div> <!-- Map Layer End -->
<footer class="footer-social-icon text-center padding_70 clearfix bg-white">
    <div class="footer-text">
        <h2>Ls<span class="blink">_</span></h2>
    </div>
    <div class="footer-menu">
        <nav>
            <ul class="scroll_anchor">
                <li><a href="#about">О нас</a></li>
                <li><a href="#our_team">Команда</a></li>
                <li><a href="#">Условия</a></li>
                <li><a href="#contact">Контакты</a></li>
            </ul>
        </nav>
    </div>
    <div class="copyright-text">
        <p>Copyright ©2019 Lexis Studio</p>
    </div>
</footer>
<script src="/js/jquery-2.2.4.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/footer-reveal.min.js"></script>
<script src="/js/map.js"></script>
<script src="/js/ls.js"></script>
</body>
</html>
