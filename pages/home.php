<?php

global $database;

$sql = "SELECT * FROM `products`";
$query = $database->query($sql);
$products = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="script.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Луна</title>
</head>

<body>
    <div class="banner">
        <div class="content">
            <div class="banner-block">
                <div class="banner-info">
                    <h2>Найдите красоту <br> и
                        <span class="banner-info-dark">определите себя</span>
                    </h2>
                    <div class="banner-info-buttons">
                        <div class="banner-btn">
                            <a class="btn1" href="?page=questions">Пройти опрос</a>
                            <a class="btn2" href="?page=procedures">Процедуры</a>
                        </div>
                        <div class="banner-info-buttons-text">
                            <img src="assets/media/banner/small.png" alt="#">
                            <div class="banner-info-buttons-textx">
                                <h4>НАУКА
                                    <br>О ЗАБОТЕ О СЕБЕ
                                </h4>
                                <p>Красота есть в каждой,
                                    <br>мы поможем сделать ее совершенной!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-product">
                    <div class="banner-product-info">
                        <div class="banner-product-info-text">
                            <p class="product-light">170 грамм</p>
                            <p>Твердое масло <br> для тела / кокос</p>
                        </div>
                        <img src="assets/media/banner/arrow.png" alt="#">
                    </div>
                    <img src="assets/media/banner/product.png" alt="#">
                </div>
            </div>
        </div>
    </div>



    <div class="best">
        <div class="content">
            <div class="bestsellers">
                <div class="best-header">
                    <div class="best-header-title">
                        <p>Не пропусти</p>
                        <h2>Бестселлеры</h2>
                    </div>
                    <p class="best-header-text">Здесь, в Луна, красота- это о вас. От наших формул до упаковки, от<br>
                        игривых отттенков до отличных средств по уходу за кожей - Луна была<br>
                        создана для того, чтобы сделать красоту доступной и незамысловатой.</p>
                </div>
                <div class="slider">
                    <div class="slides">
                        <div class="slide active">
                            <?php foreach($products as $product) { ?>
                            <div class="slide-card">
                                <a class="best-main-img" href="?page=product&id=<?=$product['id']?>"><img src="<?= $product['image'] ?>" alt="#"></a>
                                <a class="slide-card-like">
                                    <img src="assets/media/bestsellers/like.png" alt="">
                                </a>
                                <div class="slide-card-text">
                                    <div class="slide-card-text-price">
                                        <p><?= $product['price'] ?></p>
                                        <p class="text-line"><?= $product['price_rep'] ?></p>
                                    </div>
                                    <h4><?= $product['name'] ?></h4>
                                    <a href="">В корзину</a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="slide">
                            <div class="slide-card">
                                <img src="assets/media/bestsellers/product-4.png" alt="">
                                <a class="slide-card-like">
                                    <img src="assets/media/bestsellers/like.png" alt="">
                                </a>
                                <div class="slide-card-text">
                                    <div class="slide-card-text-price">
                                        <p>378 ₽</p>
                                        <p class="text-line">670 ₽</p>
                                    </div>
                                    <h4>Детокс-маска для лица</h4>
                                    <a href="#">В корзину</a>
                                </div>
                            </div>
                            <div class="slide-card">
                                <img src="assets/media/bestsellers/product-4.png" alt="">
                                <a class="slide-card-like">
                                    <img src="assets/media/bestsellers/like.png" alt="">
                                </a>
                                <div class="slide-card-text">
                                    <div class="slide-card-text-price">
                                        <p>378 ₽</p>
                                        <p class="text-line">670 ₽</p>
                                    </div>
                                    <h4>Детокс-маска для лица</h4>
                                    <a href="#">В корзину</a>
                                </div>
                            </div>
                            <div class="slide-card">
                                <img src="assets/media/bestsellers/product-4.png" alt="">
                                <a class="slide-card-like">
                                    <img src="assets/media/bestsellers/like.png" alt="">
                                </a>
                                <div class="slide-card-text">
                                    <div class="slide-card-text-price">
                                        <p>378 ₽</p>
                                        <p class="text-line">670 ₽</p>
                                    </div>
                                    <h4>Детокс-маска для лица</h4>
                                    <a href="#">В корзину</a>
                                </div>
                            </div>
                            <div class="slide-card">
                                <img src="assets/media/bestsellers/product-4.png" alt="">
                                <a class="slide-card-like">
                                    <img src="assets/media/bestsellers/like.png" alt="">
                                </a>
                                <div class="slide-card-text">
                                    <div class="slide-card-text-price">
                                        <p>378 ₽</p>
                                        <p class="text-line">670 ₽</p>
                                    </div>
                                    <h4>Детокс-маска для лица</h4>
                                    <a href="#">В корзину</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide-card">
                                <img src="assets/media/bestsellers/product-4.png" alt="">
                                <a class="slide-card-like">
                                    <img src="assets/media/bestsellers/like.png" alt="">
                                </a>
                                <div class="slide-card-text">
                                    <div class="slide-card-text-price">
                                        <p>378 ₽</p>
                                        <p class="text-line">670 ₽</p>
                                    </div>
                                    <h4>Детокс-маска для лица</h4>
                                    <a href="#">В корзину</a>
                                </div>
                            </div>
                            <div class="slide-card">
                                <img src="assets/media/bestsellers/product-4.png" alt="">
                                <a class="slide-card-like">
                                    <img src="assets/media/bestsellers/like.png" alt="">
                                </a>
                                <div class="slide-card-text">
                                    <div class="slide-card-text-price">
                                        <p>378 ₽</p>
                                        <p class="text-line">670 ₽</p>
                                    </div>
                                    <h4>Детокс-маска для лица</h4>
                                    <a href="#">В корзину</a>
                                </div>
                            </div>
                            <div class="slide-card">
                                <img src="assets/media/bestsellers/product-4.png" alt="">
                                <a class="slide-card-like">
                                    <img src="assets/media/bestsellers/like.png" alt="">
                                </a>
                                <div class="slide-card-text">
                                    <div class="slide-card-text-price">
                                        <p>378 ₽</p>
                                        <p class="text-line">670 ₽</p>
                                    </div>
                                    <h4>Детокс-маска для лица</h4>
                                    <a href="#">В корзину</a>
                                </div>
                            </div>
                            <div class="slide-card">
                                <img src="assets/media/bestsellers/product-4.png" alt="">
                                <a class="slide-card-like">
                                    <img src="assets/media/bestsellers/like.png" alt="">
                                </a>
                                <div class="slide-card-text">
                                    <div class="slide-card-text-price">
                                        <p>378 ₽</p>
                                        <p class="text-line">670 ₽</p>
                                    </div>
                                    <h4>Детокс-маска для лица</h4>
                                    <a href="#">В корзину</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
                    <button class="next" onclick="changeSlide(1)">&#10095;</button>
                </div>
            </div>
        </div>
    </div>


    <div class="catalog">
        <div class="content">
            <div class="catalog-block">
                <div class="catalog-card">
                    <p>Уход за волосами</p>
                    <img src="assets/media/catalog/1.png" alt="">
                    <a href="?page=catalog-hair" class="catalog-card-arrow">
                        <img src="assets/media/catalog/arrow.png" alt="">
                    </a>
                </div>
                <div class="catalog-card">
                    <p>Уход за телом</p>
                    <img src="assets/media/catalog/2.png" alt="">
                    <a href="?page=catalog-body" class="catalog-card-arrow">
                        <img src="assets/media/catalog/arrow.png" alt="">
                    </a>
                </div>
                <div class="catalog-card">
                    <p>Уход за лицом</p>
                    <img src="assets/media/catalog/3.png" alt="">
                    <a href="?page=catalog-face" class="catalog-card-arrow">
                        <img src="assets/media/catalog/arrow.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="important">
        <div class="content">
            <div class="important-block">
                <div class="imp-left">
                    <div class="imp-left-text">
                        <div class="imp-left-title">
                            <h5>Может быть полезно</h5>
                            <h2>ВАША КОЖА. НАШИ ЗНАНИЯ.</h2>
                        </div>
                        <p>Эффективные средства на <span class="imp-black">основе <br> растительных экстрактов</span>
                        </p>
                    </div>

                    <div class="imp-left-play">
                        <div class="imp-left-img">
                            <div class="imp-left-img-icons">
                                <img src="assets/media/important/prev.png" alt="">
                                <img src="assets/media/important/like.png" alt="">
                            </div>
                            <img src="assets/media/important/orange.png" alt="">
                            <div class="imp-left-img-play">
                                <img src="assets/media/important/play.png" alt="">
                            </div>
                        </div>
                        <p>Фруктовый обновляющий
                            <br>пилинг для лица
                        </p>
                    </div>
                </div>

                <div class="imp-right">
                    <div class="blog-luna">
                        <div class="blog-luna-text">
                            <div class="blog-luna-text-title">
                                <h5>01</h5>
                                <h3>Блог Лу&#x301;на</h3>
                            </div>
                            <p>Узнайте всё об уходе <br> за кожей </p>
                            <div class="blog-luna-text-button">
                                <a href="#">Перейти</a>
                                <a class="blog-luna-text-btn" href="#">
                                    <img src="assets/media/important/arrows.png" alt="">
                                </a>
                            </div>
                        </div>
                        <img class="crem" src="assets/media/important/crem.png" alt="">
                    </div>

                    <div class="accordion">
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <div class="accordion-text">
                                    <p>02</p>
                                    <span>Пройти консультацию у специалиста</span>
                                </div>
                                <button class="toggle-button">></button>
                            </div>
                            <div class="accordion-content">
                                <p>Содержимое 1</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <div class="accordion-text">
                                    <p>03</p>
                                    <span>Ознакомиться с отзывами о нас</span>
                                </div>
                                <button class="toggle-button">></button>
                            </div>
                            <div class="accordion-content">
                                <p>Содержимое 2</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <div class="accordion-text">
                                    <p>04</p>
                                    <span>Узнать всё о скидке на первый приём</span>
                                </div>
                                <button class="toggle-button">></button>
                            </div>
                            <div class="accordion-content">
                                <p>Содержимое 2</p>
                            </div>
                        </div>
                        <button class="accordion-btn">Узнать больше</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>