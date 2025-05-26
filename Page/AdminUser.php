<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель администратора пользователей</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .admin-user-header {
            background-color: #333;
            color: white;
            padding: 10px;
        }
        .admin-user-nav-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        .admin-user-nav-item {
            margin-right: 10px;
        }
        .admin-user-nav-link {
            color: white;
            text-decoration: none;
        }
        .admin-user-data-container {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
        }
        .admin-user-table-header {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 10px;
            padding: 10px;
            background-color: #fafafa;
            font-weight: bold;
        }
        .admin-user-header-item {
            text-align: center;
        }
    </style>
</head>
<body>
<div>
    <header class="admin-user-header">
        <nav class="admin-user-nav">
            <ul className="admin-user-nav-list">
                <li className="admin-user-nav-item">
                    <a href="/item" className="admin-user-nav-link">Управление товаром</a>
                </li>
                <li className="admin-user-nav-item">
                    <a href="/edit" className="admin-user-nav-link">Редактирование товара</a>
                </li>
                <li className="admin-user-nav-item">
                    <a href="/user" className="admin-user-nav-link">Пользователи</a>
                </li>
                <li className="admin-user-nav-item">
                    <a href="/vhod" className="admin-user-nav-link">Выход</a>
                </li>
            </ul>
        </nav>
    </header>
    <div className="admin-user-data-container">
        <div className="admin-user-table-header">
            <div className="admin-user-header-item">Id</div>
            <div className="admin-user-header-item">Никнейм</div>
            <div className="admin-user-header-item">Пароль</div>
            <div className="admin-user-header-item">Аватарка</div>
            <div className="admin-user-header-item">Дата регистрации</div>
            <div className="admin-user-header-item">Последний вход</div>
        </div>
        <!-- Здесь будут данные из базы данных -->
    </div>
</div>
</body>
</html>