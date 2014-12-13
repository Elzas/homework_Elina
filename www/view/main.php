<!DOCTYPE html>
<html>
    <head>
        <title>ДЗ_1 Элина</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="/favicon.ico" rel="icon" type="image/x-icon" />
        <link rel="stylesheet" href="<?=BASE?>/css/style.css">
    </head>
    <body>
        <!--<div class="wrapper">-->
        <div class="header clearfix">
            <div class="logo">
                <a href="<?=BASE?>/"><img src="img/logo.png" alt=""></a>
            </div>
            <div class="social-links">
                <ul>
                    <li class="vk"><a href="https://vk.com/elya_lysenko"></a></li>
                    <li class="tw"><a href="https://twitter.com/ElyaLysenko"></a></li>
                    <li class="fb"><a href="https://www.facebook.com/elina.escape.9"></a></li>
                    <li class="gihtub"><a href="https://github.com/Elzas"></a></li>
                </ul>
            </div>
        </div>

        <div class="hr  clearfix">
            <div class="hr-left"></div>
            <div class="hr-right"></div>
        </div>
        <div class="container clearfix">
            <div class="left-block">
                <div class="sidebar">
                    <nav>
                        <ul>
                            <li><a class="first-item <?
                                if ($active == 'home') {
                                    echo 'active';
                                }
                                ?>" href="<?=BASE?>/"  ><span>Обо мне</span></a></li>
                            <li><a href="<?=BASE?>/works" <a class="<?
                                    if ($active == 'works') {
                                        echo 'active';
                                    }
                                    ?>"><span>Мои работы</span></a></li>
                            <li><a href="<?=BASE?>/feedback" class="last-item <?
                                if ($active == 'feedback') {
                                    echo 'active';
                                }
                                ?> ">Связаться со мной</a></li>
                        </ul>
                    </nav>
                </div>
                <aside>
                    <ul>
                        <li class="first-blue-block first-item">Контакты</li>
                        <li class="second-blue-block"><span class="mail"></span><a href="#">elzas.89@mail.ru</a></li>
                        <li class="third-blue-block"><span class="phone"></span><a href="#">+380963025900</a></li>
                        <li class="fourth-blue-block last-item"><span class="skype"></span><a href="#">elzas_elzas</a></li>
                    </ul>
                </aside>
            </div>

            <?
            include $_SERVER['DOCUMENT_ROOT'] . '/view/' . $tpl . '.php';
            ?>

        </div>
        <div class="footer">
            <div class="hr  clearfix">
                <div class="hr-left"></div>
                <div class="hr-right"></div>
            </div>
            <div class="copyright">&copy; 2014, Это мой сайт, пожалуйста, не копируйте и не воруйте его</div>
        </div>

        <script src="/js/libs/jquery-1.11.1.min.js"></script>
        <script src="/js/unit.js"></script>

        <script src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    </body>
</html>