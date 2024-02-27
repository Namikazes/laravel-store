<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li  class="active" ><a href="/">Все товары</a></li>
                <li ><a href="/categories">Категории</a>
                </li>
                <li ><a href="http://laravel-diplom-1.rdavydov.ru/basket">В корзину</a></li>
                <li><a href="http://laravel-diplom-1.rdavydov.ru/reset">Сбросить проект в начальное состояние</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://laravel-diplom-1.rdavydov.ru/admin/home">Панель администратора</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">
    <div class="starter-template">
        <h1>Все товары</h1>

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="data:image/jpeg;base64,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" alt="iPhone X 64GB">
                    <div class="caption">
                        <h3>iPhone X 64GB</h3>
                        <p>71990 руб.</p>
                        <p>
                            <a href="http://laravel-diplom-1.rdavydov.ru/basket/1/add" class="btn btn-primary" role="button">В корзину</a>
                            <a href="http://laravel-diplom-1.rdavydov.ru/mobiles/iphone_x_64" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="data:image/jpeg;base64,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" alt="iPhone X 256GB">
                    <div class="caption">
                        <h3>iPhone X 256GB</h3>
                        <p>89990 руб.</p>
                        <p>
                            <a href="http://laravel-diplom-1.rdavydov.ru/basket/2/add" class="btn btn-primary" role="button">В корзину</a>
                            <a href="http://laravel-diplom-1.rdavydov.ru/mobiles/iphone_x_256" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMrlToXv8I-c3Ix-R3wT4WYiryIMnIxq-scjEUjljaXJ2n_7VxHhUd9KCozKHUP0-JfDc&usqp=CAU" alt="HTC One S">
                    <div class="caption">
                        <h3>HTC One S</h3>
                        <p>12490 руб.</p>
                        <p>
                            <a href="http://laravel-diplom-1.rdavydov.ru/basket/3/add" class="btn btn-primary" role="button">В корзину</a>
                            <a href="http://laravel-diplom-1.rdavydov.ru/mobiles/htc_one_s" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvpNeoYOI_MzZIddDAeeSBQXMY0cNn20D5xQ&usqp=CAU" alt="iPhone 5SE">
                    <div class="caption">
                        <h3>iPhone 5SE</h3>
                        <p>17221 руб.</p>
                        <p>
                            <a href="http://laravel-diplom-1.rdavydov.ru/basket/4/add" class="btn btn-primary" role="button">В корзину</a>
                            <a href="http://laravel-diplom-1.rdavydov.ru/mobiles/iphone_5se" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvpNeoYOI_MzZIddDAeeSBQXMY0cNn20D5xQ&usqp=CAU" alt="Наушники Beats Audio">
                    <div class="caption">
                        <h3>Наушники Beats Audio</h3>
                        <p>20221 руб.</p>
                        <p>
                            <a href="http://laravel-diplom-1.rdavydov.ru/basket/5/add" class="btn btn-primary" role="button">В корзину</a>
                            <a href="http://laravel-diplom-1.rdavydov.ru/portable/beats_audio" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvpNeoYOI_MzZIddDAeeSBQXMY0cNn20D5xQ&usqp=CAU" alt="Камера GoPro">
                    <div class="caption">
                        <h3>Камера GoPro</h3>
                        <p>12000 руб.</p>
                        <p>
                            <a href="http://laravel-diplom-1.rdavydov.ru/basket/6/add" class="btn btn-primary" role="button">В корзину</a>
                            <a href="http://laravel-diplom-1.rdavydov.ru/portable/gopro" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvpNeoYOI_MzZIddDAeeSBQXMY0cNn20D5xQ&usqp=CAU" alt="Камера Panasonic HC-V770">
                    <div class="caption">
                        <h3>Камера Panasonic HC-V770</h3>
                        <p>27900 руб.</p>
                        <p>
                            <a href="http://laravel-diplom-1.rdavydov.ru/basket/7/add" class="btn btn-primary" role="button">В корзину</a>
                            <a href="http://laravel-diplom-1.rdavydov.ru/portable/panasonic_hc-v770" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvpNeoYOI_MzZIddDAeeSBQXMY0cNn20D5xQ&usqp=CAU" alt="Кофемашина DeLongi">
                    <div class="caption">
                        <h3>Кофемашина DeLongi</h3>
                        <p>25200 руб.</p>
                        <p>
                            <a href="http://laravel-diplom-1.rdavydov.ru/basket/8/add" class="btn btn-primary" role="button">В корзину</a>
                            <a href="http://laravel-diplom-1.rdavydov.ru/appliances/delongi" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvpNeoYOI_MzZIddDAeeSBQXMY0cNn20D5xQ&usqp=CAU" alt="Холодильник Haier">
                    <div class="caption">
                        <h3>Холодильник Haier</h3>
                        <p>40200 руб.</p>
                        <p>
                            <a href="http://laravel-diplom-1.rdavydov.ru/basket/9/add" class="btn btn-primary" role="button">В корзину</a>
                            <a href="http://laravel-diplom-1.rdavydov.ru/appliances/haier" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvpNeoYOI_MzZIddDAeeSBQXMY0cNn20D5xQ&usqp=CAU" alt="Блендер Moulinex">
                    <div class="caption">
                        <h3>Блендер Moulinex</h3>
                        <p>4200 руб.</p>
                        <p>
                            <a href="http://laravel-diplom-1.rdavydov.ru/basket/10/add" class="btn btn-primary" role="button">В корзину</a>
                            <a href="http://laravel-diplom-1.rdavydov.ru/appliances/moulinex" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvpNeoYOI_MzZIddDAeeSBQXMY0cNn20D5xQ&usqp=CAU" alt="Мясорубка Bosch">
                    <div class="caption">
                        <h3>Мясорубка Bosch</h3>
                        <p>9200 руб.</p>
                        <p>
                            <a href="http://laravel-diplom-1.rdavydov.ru/basket/11/add" class="btn btn-primary" role="button">В корзину</a>
                            <a href="http://laravel-diplom-1.rdavydov.ru/appliances/bosch" class="btn btn-default"
                               role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
