<?php
require_once 'Page/db_connect.php';

// Функция для получения изображения в base64
function getBase64Image($blobData) {
    return base64_encode($blobData);
}

// Получаем категории
try {
    $stmt = $conn->query("SELECT * FROM Category");
    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    $error = "Ошибка при получении категорий: " . $e->getMessage();
}

// Получаем выбранную категорию из GET параметра
$selectedCategory = isset($_GET['category']) ? $_GET['category'] : null;

// Модифицируем запрос для получения товаров с учетом категории
$whereClause = $selectedCategory ? " WHERE c.idCategory = :category" : "";

// Получаем последние добавленные товары для секции "Новинки"
try {
    $stmt = $conn->prepare("
        SELECT i.*, c.nameCategory, c.idCategory as categoryId
        FROM Item i 
        INNER JOIN Category c ON i.idCategory = c.idCategory" 
        . $whereClause . 
        " ORDER BY i.idItem DESC LIMIT 6"
    );
    if ($selectedCategory) {
        $stmt->bindParam(':category', $selectedCategory);
    }
    $stmt->execute();
    $newItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    $error = "Ошибка при получении новинок: " . $e->getMessage();
}

// Топ продаж
$stmt = $conn->prepare("
    SELECT i.*, c.nameCategory, c.idCategory as categoryId
    FROM Item i 
    INNER JOIN Category c ON i.idCategory = c.idCategory"
    . $whereClause . 
    " LIMIT 6"
);
if ($selectedCategory) {
    $stmt->bindParam(':category', $selectedCategory);
}
$stmt->execute();
$topItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Случайные товары для секции "Специально для вас"
$stmt = $conn->prepare("
    SELECT i.*, c.nameCategory, c.idCategory as categoryId
    FROM Item i 
    INNER JOIN Category c ON i.idCategory = c.idCategory"
    . $whereClause . 
    " ORDER BY RAND() LIMIT 6"
);
if ($selectedCategory) {
    $stmt->bindParam(':category', $selectedCategory);
}
$stmt->execute();
$specialItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная - Настольные игры</title>
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <img src="Media/logo.png" alt="Логотип" class="logo"/>
        <div class="search-container">
            <input class="search-input" placeholder="Поиск по названию, описанию или категории" type="text"/>
            <div class="search-results"></div>
        </div>
        <div class="button-container">
            <a href="Page/vhod.php" class="icon-button">
                <img alt="Пользователь" src="Media/icon1.png"/>
            </a>
            <a href="Page/fav.php" class="icon-button">
                <img alt="Любимые" src="Media/icon2.png"/>
            </a>
            <a href="Page/busket.php" class="icon-button">
                <img alt="Корзина" src="Media/icon3.png"/>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <?php
                    $userId = $_SESSION['user_id'];
                    $stmt = $conn->prepare("SELECT SUM(quantity) as total FROM Cart WHERE idUser = ?");
                    $stmt->execute([$userId]);
                    $total = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
                    if ($total > 0):
                    ?>
                        <span class="cart-count"><?php echo $total; ?></span>
                    <?php endif; ?>
                <?php endif; ?>
            </a>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="nav">
        <ul>
            <li><a href="index.php" class="<?php echo !$selectedCategory ? 'active' : ''; ?>">Все</a></li>
            <?php foreach ($categories as $category): ?>
                <li>
                    <a href="index.php?category=<?php echo $category['idCategory']; ?>" 
                       class="<?php echo $selectedCategory == $category['idCategory'] ? 'active' : ''; ?>">
                        <?php echo htmlspecialchars($category['nameCategory']); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>

    <!-- Slider -->
    <div class="slider-container">
        <div id="slider">
            <img src="Media/slide1.jpg" alt="Слайд 1" class="slider-image"/>
            <img src="Media/slide2.jpg" alt="Слайд 2" class="slider-image"/>
            <img src="Media/slide3.jpg" alt="Слайд 3" class="slider-image"/>
        </div>
    </div>

    <div class="container">
        <!-- Секция Новинки -->
        <section class="section">
            <div class="section-header">
                <h2>Новинки</h2>
                <a href="#" class="more-link">Ещё <img src="Media/arrow.png" alt="Стрелка" class="arrow-icon"/></a>
            </div>
            <div class="products-grid">
                <?php foreach ($newItems as $item): ?>
                    <div class="product-card">
                        <div class="age-limit"><?php echo htmlspecialchars($item['Limitation']); ?></div>
                        <img src="data:image/jpeg;base64,<?php echo getBase64Image($item['img']); ?>" 
                             alt="<?php echo htmlspecialchars($item['ItemName']); ?>" 
                             class="product-image">
                        <h3 class="product-title"><?php echo htmlspecialchars($item['ItemName']); ?></h3>
                        <p class="product-price"><?php echo number_format($item['Price'], 0, '', ' '); ?>₽</p>
                        <button class="add-to-cart" data-item-id="<?php echo $item['idItem']; ?>">В корзину</button>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Секция Топ продаж -->
        <section class="section">
            <div class="section-header">
                <h2>Топ продаж</h2>
                <a href="#" class="more-link">Ещё <img src="Media/arrow.png" alt="Стрелка" class="arrow-icon"/></a>
            </div>
            <div class="products-grid">
                <?php foreach ($topItems as $item): ?>
                    <div class="product-card">
                        <div class="age-limit"><?php echo htmlspecialchars($item['Limitation']); ?></div>
                        <img src="data:image/jpeg;base64,<?php echo getBase64Image($item['img']); ?>" 
                             alt="<?php echo htmlspecialchars($item['ItemName']); ?>" 
                             class="product-image">
                        <h3 class="product-title"><?php echo htmlspecialchars($item['ItemName']); ?></h3>
                        <p class="product-price"><?php echo number_format($item['Price'], 0, '', ' '); ?>₽</p>
                        <button class="add-to-cart" data-item-id="<?php echo $item['idItem']; ?>">В корзину</button>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Секция Специально для вас -->
        <section class="section">
            <div class="section-header">
                <h2>Специально для вас</h2>
                <a href="#" class="more-link">Ещё <img src="Media/arrow.png" alt="Стрелка" class="arrow-icon"/></a>
            </div>
            <div class="products-grid">
                <?php foreach ($specialItems as $item): ?>
                    <div class="product-card">
                        <div class="age-limit"><?php echo htmlspecialchars($item['Limitation']); ?></div>
                        <img src="data:image/jpeg;base64,<?php echo getBase64Image($item['img']); ?>" 
                             alt="<?php echo htmlspecialchars($item['ItemName']); ?>" 
                             class="product-image">
                        <h3 class="product-title"><?php echo htmlspecialchars($item['ItemName']); ?></h3>
                        <p class="product-price"><?php echo number_format($item['Price'], 0, '', ' '); ?>₽</p>
                        <button class="add-to-cart" data-item-id="<?php echo $item['idItem']; ?>">В корзину</button>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- About section -->
        <section class="about-section">
            <h1>О нас</h1>
            <hr/>
            <div class="about-content">
                <img src="Media/about.jpg" alt="О нас" class="about-image"/>
                <p>
                    Добро пожаловать в наш интернет-магазин настольных игр! Мы — команда увлечённых энтузиастов, которые верят в объединяющую силу настольных игр...
                </p>
            </div>
        </section>

        <!-- Преимущества магазина -->
        <div class="container-carder">
            <div class="card-item">
                <img src="Media/sistema.png" alt="Накопительная скидка"/>
                <p>Система накопительной скидки</p>
            </div>
            <div class="card-item">
                <img src="Media/big-assortment.png" alt="Ассортимент"/>
                <p>Большой ассортимент настольных игр</p>
            </div>
            <div class="card-item">
                <img src="Media/good-quality.png" alt="Качество"/>
                <p>Хорошее качество товара</p>
            </div>
            <div class="card-item">
                <img src="Media/bonus-system.png" alt="Бонусы"/>
                <p>Система бонусов</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-logo">
            <img src="Media/logo.png" alt="логотип"/>
        </div>
        <div class="footer-content">
            <div class="footer-section">
                <h4>Страницы</h4>
                <ul>
                    <li><a href="/">Главная</a></li>
                    <li><a href="Page/catalog.php">Каталог</a></li>
                    <li><a href="Page/busket.php">Корзина</a></li>
                    <li><a href="Page/fav.php">Избранное</a></li>
                    <li><a href="Page/personal.php">Профиль</a></li>
                    <li><a href="Page/delivery.php">Доставка</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Услуги</h4>
                <ul>
                    <li><a href="Page/delivery.php">Доставка</a></li>
                    <li><a href="Page/support.php">Служба поддержки</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Документация</h4>
                <ul>
                    <li><a href="Page/delivery-terms.php">Условия доставки</a></li>
                    <li><a href="Page/storage-terms.php">Условия хранения</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-qr">
            <div class="qr-code">
                <img src="Media/qr.png" alt="QR Код"/>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.querySelector('.search-input');
        const searchResults = document.querySelector('.search-results');
        let searchTimeout;

        // Функция для экранирования HTML
        function escapeHtml(unsafe) {
            return unsafe
                .replace(/&/g, "&amp;")
                .replace(/</g, "&lt;")
                .replace(/>/g, "&gt;")
                .replace(/"/g, "&quot;")
                .replace(/'/g, "&#039;");
        }

        // Обработка ввода в поле поиска
        searchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            const query = this.value.trim();

            if (query.length < 2) {
                searchResults.innerHTML = '';
                searchResults.classList.remove('active');
                return;
            }

            // Показываем индикатор загрузки
            searchResults.innerHTML = '<div class="no-results">Поиск...</div>';
            searchResults.classList.add('active');

            // Задержка перед отправкой запроса для оптимизации
            searchTimeout = setTimeout(() => {
                fetch(`Page/search.php?query=${encodeURIComponent(query)}`)
                    .then(response => response.json())
                    .then(data => {
                        console.log('Search response:', data); // Для отладки
                        
                        if (data.success) {
                            if (data.results && data.results.length > 0) {
                                searchResults.innerHTML = data.results.map(item => `
                                    <div class="search-item" onclick="window.location.href='product.php?id=${escapeHtml(item.idItem)}'">
                                        ${item.img ? 
                                            `<img src="data:image/jpeg;base64,${item.img}" 
                                                  alt="${escapeHtml(item.ItemName)}" 
                                                  class="search-item-image">` : 
                                            '<div class="search-item-image-placeholder"></div>'}
                                        <div class="search-item-details">
                                            <div class="search-item-name">${escapeHtml(item.ItemName)}</div>
                                            ${item.nameCategory ? 
                                                `<div class="search-item-category">${escapeHtml(item.nameCategory)}</div>` : 
                                                ''}
                                            <div class="search-item-price">${new Intl.NumberFormat('ru-RU').format(item.Price)}₽</div>
                                        </div>
                                    </div>
                                `).join('');
                            } else {
                                searchResults.innerHTML = '<div class="no-results">Ничего не найдено</div>';
                            }
                        } else {
                            console.error('Search error:', data.message); // Для отладки
                            searchResults.innerHTML = `<div class="no-results">Произошла ошибка при поиске${data.message ? ': ' + escapeHtml(data.message) : ''}</div>`;
                        }
                    })
                    .catch(error => {
                        console.error('Search error:', error); // Для отладки
                        searchResults.innerHTML = '<div class="no-results">Произошла ошибка при поиске</div>';
                    });
            }, 300);
        });

        // Закрытие результатов поиска при клике вне
        document.addEventListener('click', function(e) {
            if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
                searchResults.classList.remove('active');
            }
        });

        // Открытие результатов поиска при фокусе, если есть текст
        searchInput.addEventListener('focus', function() {
            if (this.value.trim().length >= 2) {
                searchResults.classList.add('active');
            }
        });
    });
    </script>
</body>
</html>