<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="container">
    <header class="main-header">
        <h1 class="visually-hidden">Giftube</h1>

        <div class="logo">
            <a href="/"><img class="logo__img" src="img/logotype.svg" alt="Giftube" width="160" height="38"></a>
        </div>

        <form class="search" action="/" method="post">
            <div class="search__control">
                <input class="search__text" type="text" name="" value="" placeholder="Поиск гифки…">

                <input class="search__submit button" type="submit" name="" value="Найти">
            </div>
        </form>
    </header>

    <div class="main-content">
        <section class="navigation">
            <h2 class="visually-hidden">Навигация</h2>

            <div class="navigation__item">
                <h3 class="navigation__title navigation__title--account">Мой Giftube</h3>

                <nav class="navigation__links">
                    <a href="/signup">Регистрация</a>

                    <a href="#">Вход для своих</a>
                </nav>
            </div>

            <div class="navigation__item">
                <h3 class="navigation__title navigation__title--list">Будем посмотреть</h3>

                <nav class="navigation__links">
                    <a href="#">Вайны</a>

                    <a href="#">Фэйлы</a>

                    <a href="#">Сэйвы</a>

                    <a href="#">Пранки</a>

                    <a href="#">Кэтсы</a>
                </nav>
            </div>
        </section>

        <main class="content">
            <?=$this->section('content'); ?>
        </main>
    </div>

    <footer class="main-footer">
        <div class="main-footer__col">
            Если у вас вдруг возникли вопросы, свяжитесь с нами по почте: <a href="mailto:info@giftube.com">info@giftube.com</a>.
        </div>

        <div class="main-footer__col">
            Сохранение смешных гифок разрешено только для личного использования.
        </div>

        <div class="main-footer__col main-footer__col--short">
            <a class="copyright-logo" href="/"><img src="img/htmlacademy.svg" alt="" width="27" height="34"></a>
        </div>
    </footer>
</div>
</body>

</html>
