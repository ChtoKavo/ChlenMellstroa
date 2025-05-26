<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="..\Css\product.css">
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

    <div style="margin-top: 20px; font-size: 24px; font-weight: bold;">Личный кабинет</div>

    <div class="content-container">
        <div class="rectangle" style="
            width: 710px;
            height: 540px;
            background-color: #F9FBEF;
            margin-top: 90px;
            margin-left: 240px;
            position: relative;
        ">
            <div class="avatar-upload">
                <input type="file" id="avatar-input" accept="image/*" style="display: none;"/>
                <label for="avatar-input" class="avatar-label">
                    + <!-- Если аватарка не загружена -->
                </label>
            </div>

            <div class="small-rectangles-container">
                <div class="small-rectangle"></div>
                <div class="small-rectangle"></div>
            </div>

            <div class="buttons-below-container">
                <button class="large-button">Выбрать способ оплаты</button>
                <button class="large-button">Ваши устройства</button>
            </div>
        </div>

        <div class="buttons-right-container">
            <button class="profile-button">Редактировать профиль</button>
            <a href="/favourites" class="profile-button">Избранное</a>
            <a href="/user" class="profile-button">Админ</a>
            <a href="/buy" class="profile-button">Покупки</a>
        </div>
    </div>

    <footer class="footer" style="margin-top: 50px;">
        <div class="footer-logo">
            <img src="./images/Используются везде/logo.png" alt="logofooter" />
        </div>
        <div class="footer-content">
            <div class="footer-section">
                <h4>Страницы</h4>
                <ul>
                    <li><a href="/">Главная</a></li>
                    <li><a href="/catalog">Каталог</a></li>
                    <li><a href="/basket">Корзина</a></li>
                    <li><a href="/favourites">Избранное</a></li>
                    <li><a href="/personal">Профиль</a></li>
                    <li><a href="/delivery">Доставка</a></li>
                    <li><a href="/purchases">Покупки</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Услуги</h4>
                <ul>
                    <li><a href="/delivery">Доставка</a></li>
                    <li><a href="/support">Служба поддержки</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Документация</h4>
                <ul>
                    <li><a href="/delivery-terms">Условия доставки</a></li>
                    <li><a href="/storage-terms">Условия хранения</a></li>
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