<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ-панель - Ёжик Кейтеринг</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Lora", sans-serif;
            background: #f5f5f5;
        }

        .admin-header {
            background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
            color: white;
            padding: 20px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-title h1 {
            font-size: 24px;
            font-weight: 700;
        }

        .header-user {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .user-name {
            font-size: 16px;
        }

        .btn-logout {
            background: rgba(255,255,255,0.2);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-logout:hover {
            background: rgba(255,255,255,0.3);
        }

        .dashboard-container {
            max-width: 1400px;
            margin: 40px auto;
            padding: 0 30px;
        }

        .welcome-card {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }

        .welcome-card h2 {
            font-size: 28px;
            color: #1A3853;
            margin-bottom: 10px;
        }

        .welcome-card p {
            font-size: 16px;
            color: #666;
        }

        .modules-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .module-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            text-decoration: none;
            transition: all 0.3s ease;
            display: block;
        }

        .module-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .module-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .module-card h3 {
            font-size: 20px;
            color: #1A3853;
            margin-bottom: 10px;
        }

        .module-card p {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <header class="admin-header">
        <div class="header-content">
            <div class="header-title">
                <h1>Админ-панель</h1>
            </div>
            <div class="header-user">
                <span class="user-name">{{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('admin.logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn-logout">Выход</button>
                </form>
            </div>
        </div>
    </header>

    <div class="dashboard-container">
        <div class="welcome-card">
            <h2>Добро пожаловать, {{ Auth::user()->name }}!</h2>
            <p>Выберите модуль для управления</p>
        </div>

        <div class="modules-grid">
            <a href="{{ route('admin.news.index') }}" class="module-card">
				<div class="module-icon">
					<svg width="32" height="32" viewBox="0 0 24 24" fill="none">
						<path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" fill="white"/>
					</svg>
				</div>
				<h3>Блог / Новости</h3>
				<p>Управление статьями блога и новостями компании</p>
			</a>

            <div class="module-card" style="opacity: 0.5; cursor: not-allowed;">
                <div class="module-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" fill="white"/>
                    </svg>
                </div>
                <h3>Пользователи</h3>
                <p>Скоро...</p>
            </div>

            <div class="module-card" style="opacity: 0.5; cursor: not-allowed;">
                <div class="module-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" fill="white"/>
                    </svg>
                </div>
                <h3>Настройки</h3>
                <p>Скоро...</p>
            </div>
        </div>
    </div>
</body>
</html>