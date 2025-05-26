<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Избранное</title>
    <link rel="stylesheet" href="..\Css\fav.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .App {
            padding: 20px;
        }
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        input[type="text"] {
            width: 500px;
            padding: 10px;
            margin-bottom: 10px;
        }
        .button-container a,
        .button-container button {
            margin-left: 10px;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        nav li {
            display: inline-block;
            margin-right: 10px;
        }
        .content {
            display: flex;
            justify-content: space-between;
        }
        .new-product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }
        .new-product-card {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        .new-product-content h3 {
            margin-bottom: 5px;
        }
        .new-basket-button {
            cursor: pointer;
        }
        .advertisement img {
            max-width: 100%;
        }
        footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 50px;
        }
        .footer-section ul {
            list-style: none;
            padding: 0;
        }
    </style>
</head>
<body>
<div class="App">
    <header class="header">
        <img src="./images/Используются везде/logo.png" alt="Логотип" class="logo" />
        <input style="width: 500px;" placeholder="Название товара" type="text" />
        <div class="button-container">
            <a href="/personal" class="icon-button">
                <img alt="user" src="./images/Используются везде/user-icon.png" />
            </a>
            <a href="/favourites" class="icon-button">
                <img alt="love" src="./images/Используются везде/love-icon.png" />
            </a>
            <a href="/basket" class="icon-button">
                <img alt="store" src="./images/Используются везде/store-icon.png" />
            </a>
        </div>
    </header>
    <nav class="nav">
        <ul>
            <li><a href="#veterinary">Ветеринарные</a></li>
            <li><a href="#adults">Для взрослых</a></li>
            <li><a href="#family">Для всей семьи</a></li>
            <li><a href="#children">Для детей</a></li>
            <li><a href="#classic">Классические</a></li>
            <li><a href="#plans">Планы</a></li>
            <li><a href="#strategic">Стратегические</a></li>
            <li><a href="#sales">Хаты продаж</a></li>
        </ul>
    </nav>
    <div class="content">
        <main class="new-product-grid">
            <div class="new-product-card">
                <img src="https://avatars.mds.yandex.net/i?id=872dc79fb43f6d5d72c2024dff7bf222-5910939-images-thumbs&n=13" alt="Товар 1" />
                <div class="new-product-content">
                    <h3>Товар 1</h3>
                    <p>Описание товара 1</p>
                </div>
                <button class="new-basket-button">
                    <img src="./images/Используются везде/basket.png" alt="Корзина" />
                </button>
            </div>
            <div class="new-product-card">
                <img src="https://avatars.mds.yandex.net/i?id=872dc79fb43f6d5d72c2024dff7bf222-5910939-images-thumbs&n=13" alt="Товар 2" />
                <div class="new-product-content">
                    <h3>Товар 2</h3>
                    <p>Описание товара 2</p>
                </div>
                <button class="new-basket-button">
                    <img src="./images/Используются везде/basket.png" alt="Корзина" />
                </button>
            </div>
            <!-- Повторяем аналогичный блок еще 10 раз -->
        </main>
        <div class="advertisement">
            <img src="./images/favourites/Реклама.png" alt="Реклама" />
        </div>
    </div>
    <footer class="footer">
        <div class="footer-logo">
            <img src="./images/Используются везде/logo.png" alt="logofooter" />
        </div>
        <div class="footer-content">
            <div class="footer-section">
                <h4>Страницы</h4>
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Каталог</a></li>
                    <li><a href="#">Корзина</a></li>
                    <li><a href="#">Избранное</a></li>
                    <li><a href="#">Профиль</a></li>
                    <li><a href="#">Доставка</a></li>
                    <li><a href="#">Покупки</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Услуги</h4>
                <ul>
                    <li><a href="#">Доставка</a></li>
                    <li><a href="#">Служба поддержки</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Документация</h4>
                <ul>
                    <li><a href="#">Условия доставки</a></li>
                    <li><a href="#">Условия хранения</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-qr">
            <div class="qr-code">
                <img src="./images/Используются везде/qr-code.png" alt="QR Code" />
            </div>
        </div>
    </footer>
</div>
</body>
</html>