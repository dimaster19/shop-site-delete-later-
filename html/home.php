<?php
            require('/ospanel/domains/shop2.ru/settings/settings.php');

            if (!$dbConnection) {
                die("Ошибка подключения: " . pg_last_error());
            }
            $query = pg_query($dbConnection, 'SELECT * FROM "public"."Products"');
            if (!$query) {
                die("Ошибка выполнения запроса");
            }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интернет-магазин техники и электроники в Донецке (ДНР), купить в DNS</title>

    <link rel="stylesheet" href="html/css/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="html/css/style.css">



</head>

<body>
    <header>
        <div class="header-ad">
            <div class="content">
                <div class="social-link">
                    <a class="social-link-item"><i class="fa fa-telegram" aria-hidden="true"></i>
                    </a>
                    <a class="social-link-item"><i class="fa fa-vk" aria-hidden="true"></i>
                    </a>
                    <a class="social-link-item"><i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="search-workers">
                    <a href="#">Работа в Mobi-Like</a>
                </div>
                <div class="phones">
                    <a>+7 (949) 453-19-81</a>
                    <a>+7 (949) 453-19-79</a>
                </div>
                <div style="font-weight: 500;">
                    Ежедневно 9:00-18:00
                </div>
                <div class="modal1-btn"><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Заказать звонок</button></div>
                <!-- Модальное окно -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Заказать звонок</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="inputName" class="form-label">Ваше имя</label>
                                        <input type="text" class="form-control" id="inputName">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputPhone" class="form-label">Телефон</label>
                                        <input type="text" class="form-control" id="inputPhone" value="+ 7 (949)">
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Отправить</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="content">
            <div class="header-row">
                <div class="header-top">
                    <a href="./index.html">Главная</a>
                    <a href="">Покупателям</a>
                    <a href="./garantiya.html">Гарантии и возврат</a>
                    <a href="./dostavka.html">Доставка и оплата</a>
                </div>
                <div class="mobile-header">
                    <img src="html/img/logo.png" alt="">
                </div>
                <div class="header-bottom">
                    <div class="header-bottom-left">
                        <div class="header-logo">
                            <img src="html/img/logo.png" alt="">

                        </div>
                        <div class="header-dropdown">
                            <button data-path="one" class="dropbtn">
                                Категории
                            </button>
                            <ul data-target="one" class="mydropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="mydropdown-item" href="#">Action</a></li>
                                <li><a class="mydropdown-item" href="#">Another action</a></li>
                                <li><a class="mydropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-search">
                        <input type="text" placeholder="Поиск по сайту" />
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>

                    <div class="header-cart">
                        <a href="">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="header-account">
                        <a href="">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <div id="carouselExampleFade" class="carousel slide carousel-fade mb-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="" class=""><img src="html/img/slide1.jpg" style="max-height: 550px;" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="" class=""><img src="html/img/slide2.jpg" style="max-height: 550px;" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="" class=""><img src="html/img/slide3.jpg" style="max-height: 550px;" class="d-block w-100" alt="..."></a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="content">

        <div class="main-categories">
            <div class="category">
                <a href="" class="link-categories">
                    <div class="block-categories">
                        <div class="categories-img">
                            <img src="html/img/category1.jpg" alt="">
                        </div>
                        <div class="categories-name">
                            Смартфоны
                        </div>
                    </div>
                </a>
            </div>
            <div class="category">
                <a href="" class="link-categories">
                    <div class="block-categories">
                        <div class="categories-img">
                            <img src="html/img/category1.jpg" alt="">
                        </div>
                        <div class="categories-name">
                            Смартфоны
                        </div>
                    </div>
                </a>
            </div>

            <div class="category">
                <a href="" class="link-categories">
                    <div class="block-categories">
                        <div class="categories-img">
                            <img src="html/img/category1.jpg" alt="">
                        </div>
                        <div class="categories-name">
                            Смартфоны
                        </div>
                    </div>
                </a>
            </div>

            <div class="category">
                <a href="" class="link-categories">
                    <div class="block-categories">
                        <div class="categories-img">
                            <img src="html/img/category1.jpg" alt="">
                        </div>
                        <div class="categories-name">
                            Смартфоны
                        </div>
                    </div>
                </a>
            </div>

            <div class="category">
                <a href="" class="link-categories">
                    <div class="block-categories">
                        <div class="categories-img">
                            <img src="html/img/category1.jpg" alt="">
                        </div>
                        <div class="categories-name">
                            Смартфоны
                        </div>
                    </div>
                </a>
            </div>

            <div class="category">
                <a href="" class="link-categories">
                    <div class="block-categories">
                        <div class="categories-img">
                            <img src="html/img/category1.jpg" alt="">
                        </div>
                        <div class="categories-name">
                            Смартфоны
                        </div>
                    </div>
                </a>
            </div>


        </div>


        <div class="products-heading">
            <h1>
                <svg width="38" height="16" viewBox="0 0 38 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="38" height="16" rx="8" fill="#FFCE1F"></rect>
                </svg>
                <p>Популярные товары</p>
            </h1>
        </div>
        <div class="products">
            <?php
            while ($result = pg_fetch_array($query)) {
            ?>
                <div class="product-item" id="<? echo $result[0]; ?>">
                    <div class="product-image">
                        <img src="./html/img/<? echo $result[5]; ?>" alt="<? echo $result[5] ?>">
                    </div>
                    <div class="product-price"><? echo $result[2] ?></div>
                    <div class="product-name"><? echo $result[1] ?></div>
                    <div class="add-product">
                        <a href="#" class="add-product-link">В корзину
                        </a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>


    <div class="footer-block">
        <footer class="footer">
            <div class="content">
                <div class="footer-content">
                    <div class="footer-row">
                        <div class="footer-contacts">
                            <h2 class="footer-title">Контакты</h2>
                            <div class="footer-contacts-list">
                                <div class="contacts-item">
                                    <div class="contact-ico">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                    <div class="contact-text">
                                        <span>Адрес : </span>Ул. Артема, д.192-г
                                    </div>
                                </div>
                                <div class="contacts-item">
                                    <div class="contact-ico">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                    <div class="contact-text">
                                        <span>Телефон : </span>+7 (949) 453-19-81
                                    </div>
                                </div>
                                <div class="contacts-item">
                                    <div class="contact-ico">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                    <div class="contact-text">
                                        <span>Почта : </span>+7 (949) 453-19-81
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-pages">
                            <h2 class="footer-title">Страницы</h2>
                            <div class="footer-pages-list">
                                <ul class="page-list">
                                    <li class="page-item">
                                        <a href="#">
                                            Главная </a>
                                    </li>

                                    <li class="page-item">
                                        <a href="#">
                                            Блог
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#">
                                            Каталог </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#">
                                            Кабинет </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#">
                                            Корзина </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#">
                                            Обратная связь </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-pages">
                            <h2 class="footer-title">Категории</h2>
                            <div class="footer-pages-list">
                                <ul class="page-list">
                                    <li class="page-item">
                                        <a href="#">
                                            Главная </a>
                                    </li>

                                    <li class="page-item">
                                        <a href="#">
                                            Блог
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#">
                                            Каталог </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#">
                                            Кабинет </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#">
                                            Корзина </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#">
                                            Обратная связь </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-pages">
                            <h2 class="footer-title">Подпишись</h2>
                            <div class="footer-pages-list">
                                <div class="footer-subscription">
                                    <div class="">Следите за новинками и акциями:</div>
                                    <div class="subscription-form">
                                        <input class="subscription-input" type="email" name="email" placeholder="Введите email" autocomplete="true">
                                        <button class="subscription-button"><i class="fa fa-bell" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="footer-social-link">
                                    <a class="social-link-item"><i class="fa fa-telegram" aria-hidden="true"></i>
                                    </a>
                                    <a class="social-link-item"><i class="fa fa-vk" aria-hidden="true"></i>
                                    </a>
                                    <a class="social-link-item"><i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
    </div>

    <div class="bottom-navbar-mobile">
        <div class="navbar-row">
            <div class="navbar-col">
                <a href="" class="mobile-navbar-link">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    Главная
                </a>
            </div>
            <div class="navbar-col">
                <a href="" class="mobile-navbar-link">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                    Новости
                </a>
            </div>
            <div class="navbar-col">
                <a href="" class="mobile-navbar-link">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    Корзина
                </a>
            </div>
            <div class="navbar-col">
                <a href="" class="mobile-navbar-link">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    Кабинет
                </a>
            </div>
        </div>
    </div>


    <!-- Close DB -->
    <?php
    pg_close($dbConnection);
    ?>
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="html/js/dropdown.js"></script>
    <script src="html/js/carousel.js"></script>
</body>

</html>
<?php // echo $params['id'];
?>
