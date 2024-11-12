<?php

global $database;

if(isset($_GET['page']) && $_GET['page'] == 'product' && isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id = $id";
    $query= $database->query($sql);
    $product = $query->fetchAll(PDO::FETCH_ASSOC);

    if(!$product){
        die('продукт не найден');
    }
}
else{
    echo '404.error';
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="product">
        <div class="content">
            <div class="product-block">
                <div class="product-image">
                    <img src="<?= $product['image']?>" alt="">
                </div>

                <div class="product-content">
                    <div class="product-content-main">
                        <div class="product-content-main-text">
                            <h2><?= $product['name']?></h2>
                            <div class="product-content-main-ml">
                                <h5><?= $product['volume']?></h5>
                                <p>Объём / Мл</p>
                            </div>
                            <div class="product-content-main-review">
                                <img src="assets/media/product/stars.png" alt="">
                                <p>4.8</p>
                            </div>
                        </div>
                        <div class="product-content-main-bottom">
                            <div class="product-content-main-price">
                                <p><?= $product['price']?></p>
                                <p class="price-line"><?= $product['price_rep']?></p>
                            </div>
                            <div class="product-content-main-buttons">
                                <a href="#">Добавить в корзину</a>
                                <a class="product-like" href="#">
                                    <img src="assets/media/product/like.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="product-opisanie">
                        <h5>
                            описание
                        </h5>
                        <p><?= $product['text']?></p>
                    </div>

                    <div class="product-reviews">
                        <h3>рейтинг и отзывы</h3>
                        <div class="product-reviews-stars">
                            <div class="product-reviews-stars-first">
                                <p>4.8</p>
                                <img src="assets/media/product/stars-2.png" alt="">
                            </div>
                            <div class="product-reviews-stars-second">
                                <p class="product-10">10</p>
                                <p>отзывов</p>
                            </div>
                        </div>
                        <div class="product-reviews-info">
                            <div class="product-reviews-info-card">
                                <div class="product-reviews-info-card-title">
                                    <p>ААААлия Х.</p>
                                    <img src="assets/media/product/stars-3.png" alt="">
                                </div>
                                <p>Всё супер!</p>
                            </div>
                            <img src="assets/media/product/line.png" alt="">
                            <div class="product-reviews-info-card">
                                <div class="product-reviews-info-card-title">
                                    <p>Людмила(Эльза)</p>
                                    <img src="assets/media/product/stars-3.png" alt="">
                                </div>
                                <p>Мне очень понравилось!</p>
                            </div>
                            <img src="assets/media/product/line.png" alt="">
                            <div class="product-reviews-info-card">
                                <div class="product-reviews-info-card-title">
                                    <p>Ziatdinov.love_house2005</p>
                                    <img src="assets/media/product/stars-3.png" alt="">
                                </div>
                                <p>Покупкой довольны</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>