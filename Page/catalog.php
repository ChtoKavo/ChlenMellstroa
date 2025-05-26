<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="stylesheet" href="..\Css\catalog.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
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
        aside {
            float: left;
            width: 20%;
            padding-right: 20px;
        }
        main {
            float: right;
            width: 80%;
        }
        .new-product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
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
        footer {
            clear: both;
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
    <div class="new-catalog-container">
        <aside class="new-catalog-sidebar">
            <h2>Каталог</h2>
            <ul>
                <li onclick="toggleCategory('popularGames')" style="cursor: pointer;">Популярные игры</li>
                <ul id="popularGames" style="display: none;">
                    <li><a href="#popular1">Топ 10 настольных игр</a></li>
                    <li><a href="#popular2">Новинки месяца</a></li>
                    <li><a href="#popular3">Игры с высоким рейтингом</a></li>
                </ul>
                <li onclick="toggleCategory('genres')" style="cursor: pointer;">Жанры игр</li>
                <ul id="genres" style="display: none;">
                    <li><a href="#genre1">Стратегические игры</a></li>
                    <li><a href="#genre2">Карточные игры</a></li>
                    <li><a href="#genre3">Семейные игры</a></li>
                    <li><a href="#genre4">Ролевые игры</a></li>
                    <li><a href="#genre5">Партии и вечеринки</a></li>
                    <li><a href="#genre6">Кооперативные игры</a></li>
                </ul>
                <li onclick="toggleCategory('ageCategories')" style="cursor: pointer;">Возрастные категории</li>
                <ul id="ageCategories" style="display: none;">
                    <li><a href="#age1">3 - 5 лет</a></li>
                    <li><a href="#age2">6 - 7 лет</a></li>
                    <li><a href="#age3">8 - 12 лет</a></li>
                    <li><a href="#age4">13 - 17 лет</a></li>
                    <li><a href="#age5">Более 18 лет</a></li>
                </ul>
                <li onclick="toggleCategory('playerCount')" style="cursor: pointer;">Количество игроков</li>
                <ul id="playerCount" style="display: none;">
                    <li><a href="#count1">Игры на 1-2 игрока</a></li>
                    <li><a href="#count2">Игры на 3-6 игроков</a></li>
                    <li><a href="#count3">Игры на большие компании (6+ игроков)</a></li>
                </ul>
                <li onclick="toggleCategory('playTime')" style="cursor: pointer;">Время игры</li>
                <ul id="playTime" style="display: none;">
                    <li><a href="#time1">Быстрые игры (до 30 минут)</a></li>
                    <li><a href="#time2">Средние игры (от 30 до 60 минут)</a></li>
                    <li><a href="#time3">Долгие игры (более 60 минут)</a></li>
                </ul>
                <li onclick="toggleCategory('discounts')" style="cursor: pointer;">Скидки и распродажи</li>
                <ul id="discounts" style="display: none;">
                    <li><a href="#discount1">Скидки на игры</a></li>
                    <li><a href="#discount2">Специальное предложение</a></li>
                </ul>
            </ul>
        </aside>
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
            <!-- Повторяем аналогичные блоки для оставшихся продуктов -->
        </main>
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
<script>
    function toggleCategory(categoryId) {
        var categoryElement = document.getElementById(categoryId);
        if (categoryElement.style.display === "none") {
            categoryElement.style.display = "block";
        } else {
            categoryElement.style.display = "none";
        }
    }
</script>
</body>
</html>