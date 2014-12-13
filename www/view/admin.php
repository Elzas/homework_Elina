<!DOCTYPE HTML>
<html>
    <head>
        <title>Admin</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>

    <main>
        <section>

            <? if (!empty($_SESSION['admin'])) { ?>
                <span><?= $_SESSION['admin'] ?></span>
                <nav>
                    <a href='/admin/home'>Главная</a> |
                    <a href='/admin/exit'>Выход</a>
                </nav>

                <hr>
                <?
            }

            include $_SERVER['DOCUMENT_ROOT'] . '/view/admin/' . $tpl . '.php';
            ?>

            <div class="footer auto">
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

        </section>
    </main>

</body>
</html>