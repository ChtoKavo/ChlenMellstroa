<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель администратора товаров</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .admin-item-header {
            background-color: #333;
            color: white;
            padding: 10px;
        }
        .admin-item-nav-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        .admin-item-nav-item {
            margin-right: 10px;
        }
        .admin-item-nav-link {
            color: white;
            text-decoration: none;
        }
        .admin-item-content-container {
            display: flex;
            margin-top: 20px;
        }
        .admin-item-data-container {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
        }
        .admin-item-table-header {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
            padding: 10px;
            background-color: #fafafa;
            font-weight: bold;
        }
        .admin-item-header-item {
            text-align: center;
        }
        .admin-item-side-container {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
        }
        .admin-item-side-container-title {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .admin-item-image-preview {
            text-align: center;
            margin-bottom: 10px;
        }
        .admin-item-preview-image {
            max-width: 100%;
            height: auto;
        }
        .admin-item-input-group {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .admin-item-input-field {
            flex: 1;
            padding: 5px;
            border: 1px solid #ccc;
        }
        .admin-item-textarea-field {
            resize: vertical;
            height: 100px;
        }
        .admin-item-upload-button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        .admin-item-save-button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div>
    <header class="admin-item-header">
        <nav class="admin-item-nav">
            <ul class="admin-item-nav-list">
                <li class="admin-item-nav-item">
                    <a href="/item" class="admin-item-nav-link"><button>Управление товаром</button></a>
                </li>
                <li class="admin-item-nav-item">
                    <a href="/edit" class="admin-item-nav-link"><button>Редактирование товара</button></a>
                </li>
                <li class="admin-item-nav-item">
                    <a href="/user" class="admin-item-nav-link">Пользователи</a>
                </li>
                <li class="admin-item-nav-item">
                    <a href="/vhod" class="admin-item-nav-link">Выход</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="admin-item-content-container">
        <div class="admin-item-data-container">
            <div class="admin-item-table-header">
                <div class="admin-item-header-item">Id</div>
                <div class="admin-item-header-item">Название товара</div>
                <div class="admin-item-header-item">Цена</div>
                <div class="admin-item-header-item">Количество</div>
                <div class="admin-item-header-item">Удаление</div>
            </div>
            <!-- Здесь будет выводиться база данных -->
        </div>

        <div class="admin-item-side-container">
            <h2 class="admin-item-side-container-title">Добавить товар</h2>
            <div class="admin-item-image-preview">
                <span>Изображение не выбрано</span>
            </div>
            <input
                type="file"
                id="admin-item-image-upload"
                accept="image/*"
                style="display: none;"
            />
            <label for="admin-item-image-upload" class="admin-item-upload-button">
                Выбрать изображение
            </label>
            <div class="admin-item-input-group">
                <input type="text" placeholder="Название" class="admin-item-input-field" />
                <input type="text" placeholder="Возраст" class="admin-item-input-field" />
                <input type="text" placeholder="Жанр" class="admin-item-input-field" />
                <input type="text" placeholder="Количество игроков" class="admin-item-input-field" />
                <input type="text" placeholder="Время игры" class="admin-item-input-field" />
                <textarea placeholder="Описание" class="admin-item-input-field admin-item-textarea-field"></textarea>
                <input type="text" placeholder="Цена" class="admin-item-input-field" />
            </div>
            <button class="admin-item-save-button">Сохранить</button>
        </div>
    </div>
</div>
</body>
</html>