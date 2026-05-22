<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Markedia - Маркетинговое Агентство</title>
    <style>
        :root {
            --primary-color: #ff4757; 
            --dark-bg: #2f3542;
            --light-bg: #f1f2f6;
            --text-color: #333;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-color);
        }

        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }

        .container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background: var(--white);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 70px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: var(--primary-color);
            text-transform: uppercase;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: var(--primary-color);
        }

        .btn-contact {
            padding: 10px 20px;
            background: var(--primary-color);
            color: var(--white);
            border-radius: 5px;
            transition: background 0.3s;
        }

        .btn-contact:hover {
            background: #e04050;
        }
        
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            text-align: center;
            color: var(--white);
            padding-top: 70px; 
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-main {
            padding: 15px 30px;
            background: var(--primary-color);
            color: var(--white);
            font-size: 1.1rem;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .btn-main:hover {
            transform: scale(1.05);
        }

        .services {
            padding: 80px 0;
            background: var(--light-bg);
            text-align: center;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 50px;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background: var(--primary-color);
            margin: 10px auto 0;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: var(--white);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .icon {
            font-size: 40px;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .service-card h3 {
            margin-bottom: 15px;
        }

        .stats {
            padding: 60px 0;
            background: var(--dark-bg);
            color: var(--white);
            text-align: center;
        }

        .stats-grid {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .stat-item h2 {
            font-size: 3rem;
            color: var(--primary-color);
        }

        footer {
            background: #222;
            color: #ccc;
            padding: 50px 0 20px;
            text-align: center;
        }

        .footer-content {
            margin-bottom: 30px;
        }

        .copyright {
            border-top: 1px solid #444;
            padding-top: 20px;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .hero-content h1 { font-size: 2.5rem; }
            .nav-links { display: none; } 
            .logo { flex-grow: 1; text-align: center; }
            .stats-grid { flex-direction: column; gap: 30px; }
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">Markedia.</a>
                <ul class="nav-links">
                    <li><a href="#home">Главная</a></li>
                    <li><a href="#services">Услуги</a></li>
                    <li><a href="#about">О нас</a></li>
                    <li><a href="#contact" class="btn-contact">Связаться</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="container hero-content">
            <h1>Цифровой маркетинг нового поколения</h1>
            <p>Мы помогаем брендам расти, создавая эффективные стратегии продвижения в интернете. SEO, SMM и веб-разработка.</p>
            <button class="btn-main">Начать проект</button>
        </div>
    </section>

    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title">Наши Услуги</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="icon">🚀</div>
                    <h3>SEO Продвижение</h3>
                    <p>Выводим ваш сайт в топ поисковых систем Google и Яндекс. Органический трафик и рост продаж.</p>
                </div>
                <div class="service-card">
                    <div class="icon">📱</div>
                    <h3>SMM Маркетинг</h3>
                    <p>Ведем ваши социальные сети, создаем контент и настраиваем таргетированную рекламу.</p>
                </div>
                <div class="service-card">
                    <div class="icon">💻</div>
                    <h3>Веб-разработка</h3>
                    <p>Создаем современные, быстрые и адаптивные сайты, которые конвертируют посетителей в клиентов.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <h2>150+</h2>
                    <p>Проектов завершено</p>
                </div>
                <div class="stat-item">
                    <h2>50+</h2>
                    <p>Довольных клиентов</p>
                </div>
                <div class="stat-item">
                    <h2>5</h2>
                    <p>Лет на рынке</p>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact">
        <div class="container">
            <div class="footer-content">
                <h3>Готовы начать?</h3>
                <p>Напишите нам: hello@markedia-demo.ru</p>
                <p>Телефон: +7 (999) 000-00-00</p>
            </div>
            <div class="copyright">
                &copy; 2026 Markedia Template. Все права защищены.
            </div>
        </div>
    </footer>

</body>
</html>