<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование товара</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .admin-edit-header {
            background-color: #333;
            color: white;
            padding: 10px;
        }
        .admin-edit-nav-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        .admin-edit-nav-item {
            margin-right: 10px;
        }
        .admin-edit-nav-link {
            color: white;
            text-decoration: none;
        }
        .admin-edit-container-wrapper {
            display: flex;
            margin-top: 20px;
        }
        .admin-edit-data-container {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
        }
        .admin-edit-table-header {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
            padding: 10px;
            background-color: #fafafa;
            font-weight: bold;
        }
        .admin-edit-column-id,
        .admin-edit-column-name,
        .admin-edit-column-price,
        .admin-edit-column-quantity,
        .admin-edit-column-actions {
            text-align: center;
        }
        .admin-edit-table-row {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .admin-edit-side-container {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
        }
        .admin-edit-image-preview {
            text-align: center;
            margin-bottom: 10px;
        }
        .admin-edit-upload-button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        .admin-edit-input-group label {
            display: block;
            margin-bottom: 5px;
        }
        .admin-edit-input-group input,
        .admin-edit-input-group textarea {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
        }
        .admin-edit-save-button {
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
    <header class="admin-edit-header">
        <nav class="admin-edit-nav">
            <ul class="admin-edit-nav-list">
                <li class="admin-edit-nav-item">
                    <a href="/item" class="admin-edit-nav-link">Управление товаром</a>
                </li>
                <li class="admin-edit-nav-item">
                    <a href="/edit" class="admin-edit-nav-link">Редактирование товара</a>
                </li>
                <li class="admin-edit-nav-item">
                    <a href="/user" class="admin-edit-nav-link">Пользователи</a>
                </li>
                <li class="admin-edit-nav-item">
                    <a href="/vhod" class="admin-edit-nav-link">Выход</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="admin-edit-container-wrapper">
        <div class="admin-edit-data-container">
            <div class="admin-edit-table-header">
                <div class="admin-edit-column-id">Id товара</div>
                <div class="admin-edit-column-name">Имя товара</div>
                <div class="admin-edit-column-price">Цена</div>
                <div class="admin-edit-column-quantity">Количество</div>
                <div class="admin-edit-column-actions">Редактирование</div>
            </div>

            <div class="admin-edit-table-row">
                <div class="admin-edit-column-id">1</div>
                <div class="admin-edit-column-name">Товар 1</div>
                <div class="admin-edit-column-price">1000 ₽</div>
                <div class="admin-edit-column-quantity">10</div>
                <div class="admin-edit-column-actions">
                    <button class="admin-edit-edit-button">Редактировать</button>
                </div>
            </div>

            <div class="admin-edit-table-row">
                <div class="admin-edit-column-id">2</div>
                <div class="admin-edit-column-name">Товар 2</div>
                <div class="admin-edit-column-price">1500 ₽</div>
                <div class="admin-edit-column-quantity">5</div>
                <div class="admin-edit-column-actions">
                    <button class="admin-edit-edit-button">Редактировать</button>
                </div>
            </div>
        </div>

        <div class="admin-edit-side-container">
            <div class="admin-edit-image-preview">
                <span>Выберите изображение</span>
            </div>

            <label class="admin-edit-upload-button">
                Добавить изображение
                <input
                  type="file"
                  accept="image/*"
                  style="display: none;"
                />
            </label>

            <div class="admin-edit-input-group">
                <label>Название</label>
                <input type="text" placeholder="Введите название" />
            </div>

            <div class="admin-edit-input-group">
                <label>Возраст</label>
                <input type="text" placeholder="Введите возраст" />
            </div>

            <div class="admin-edit-input-group">
                <label>Жанр</label>
                <input type="text" placeholder="Введите жанр" />
            </div>

            <div class="admin-edit-input-group">
                <label>Количество игроков</label>
                <input type="text" placeholder="Введите количество игроков" />
            </div>

            <div class="admin-edit-input-group">
                <label>Время игры</label>
                <input type="text" placeholder="Введите время игры" />
            </div>

            <div class="admin-edit-input-group">
                <label>Описание</label>
                <textarea placeholder="Введите описание"></textarea>
            </div>

            <div class="admin-edit-input-group">
                <label>Цена</label>
                <input type="text" placeholder="Введите цену" />
            </div>

            <button class="admin-edit-save-button">Сохранить</button>
        </div>
    </div>
</div>
</body>
</html>