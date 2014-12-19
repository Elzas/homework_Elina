<!DOCTYPE html>
<html lang="ru">
    <head>
        <title><?
            if ($active == 'home') {
                echo 'Обо мне';
            } elseif ($active == 'works') {
                echo 'Мои работы';
            } else {
                echo 'Связаться со мной';
            }
            ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="<?= BASE ?>/favicon.ico" rel="icon" type="image/x-icon" />
        <link rel="stylesheet" href="<?= BASE ?>/css/reset.css">
        <link rel="stylesheet" href="<?= BASE ?>/css/style.css">
    </head>
    <body>
        <div class="header-wrapper">
            <div class="header-content clearfix">
                <div class="left">
                    <a href="<?= BASE ?>/"><img src="img/logo.png" alt="Логотип"></a>
                </div>
                <ul  class="social-links right">
                    <li><a class="vk" target="_blank" href="http://vk.com/elya_lysenko">vk</a></li>
                    <li><a class="tw" target="_blank" href="http://twitter.com/ElyaLysenko">tw</a></li>
                    <li><a class="fb" target="_blank" href="http://facebook.com/elina.escape.9">fb</a></li>
                    <li><a class="gh" target="_blank" href="http://github.com/Elzas">gh</a></li>
                </ul>
            </div>
        </div>

        <div class="hr  clearfix">
            <div class="hr-left"></div>
            <div class="hr-right"></div>
        </div>

        <div class="container clearfix">
            <aside class="aside left">
                <nav class="navigation">
                    <div class="menu">
                        <ul>
                            <li class="<?
                            if ($active == 'home') {
                                echo 'active';
                            }
                            ?>">
                                <a href="<?= BASE ?>/" class="nav-item">Обо мне</a>
                            </li>
                            <li class="<?
                            if ($active == 'works') {
                                echo 'active';
                            }
                            ?>">
                                <a href="<?= BASE ?>/works" class="nav-item">Мои работы</a>
                            </li>
                            <li class="<?
                            if ($active == 'feedback') {
                                echo 'active';
                            }
                            ?>">
                                <a href="<?= BASE ?>/feedback" class="nav-item">Связаться со мной</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <adress class="contacts">
                    <h3>Контакты</h3>
                    <ul>
                        <li class="second-blue-block">
                            <a href="mailto://elzas.89@mail.com" itemprop="email" title="Написать на эл.почту">
                                <span class="mail"></span>
                                <span class="bottom-hr">elzas.89@mail.ru</span>
                                </a></li>
                        <li class="third-blue-block">
                            <a href="tel:+380963025900" itemprop="telephone" title="Позвонить по телефону">
                                <span class="phone"></span>
                                <span class="bottom-hr">+380963025900</span>
                                </a></li>
                        <li class="fourth-blue-block last-item">
                            <a href="skype:elzas_elzas?chat" itemprop="url" title="Написать или позвонить в skype">
                                <span class="skype"></span>
                                <span class="bottom-hr">elzas_elzas</span>
                                </a></li>
                    </ul>
                </adress>
            </aside>

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