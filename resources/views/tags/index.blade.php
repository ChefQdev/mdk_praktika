<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Markedia - Digital Marketing Agency</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #ff3e3e;
            --secondary-color: #2c2c2c;
            --text-color: #666;
            --bg-light: #f9f9f9;
            --white: #ffffff;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
        }

        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }
        img { max-width: 100%; display: block; }

        .container {
            max-width: 1170px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: var(--primary-color);
            color: var(--white);
            border-radius: 30px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 14px;
            border: 2px solid var(--primary-color);
        }

        .btn:hover {
            background: transparent;
            color: var(--primary-color);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--white);
            color: var(--white);
            margin-left: 10px;
        }

        .btn-outline:hover {
            background: var(--white);
            color: var(--primary-color);
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            padding: 20px 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--secondary-color);
        }

        .logo span { color: var(--primary-color); }

        .nav-menu { display: flex; gap: 30px; }
        .nav-menu a {
            font-weight: 500;
            color: var(--secondary-color);
            font-size: 15px;
        }
        .nav-menu a:hover { color: var(--primary-color); }

        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            text-align: center;
            color: var(--white);
            padding-top: 80px;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero-content p {
            font-size: 1.1rem;
            margin-bottom: 40px;
            opacity: 0.9;
        }

        .section-padding { padding: 100px 0; }
        
        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 15px;
        }

        .section-header p {
            max-width: 600px;
            margin: 0 auto;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: var(--white);
            padding: 40px 30px;
            border: 1px solid #eee;
            text-align: center;
            transition: var(--transition);
        }

        .service-card:hover {
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transform: translateY(-5px);
            border-color: transparent;
        }

        .service-icon {
            font-size: 40px;
            color: var(--primary-color);
            margin-bottom: 20px;
            display: inline-block;
        }

        .service-card h3 {
            margin-bottom: 15px;
            color: var(--secondary-color);
        }

        .about-section {
            background: var(--bg-light);
            display: flex;
            align-items: center;
        }

        .about-img {
            flex: 1;
            height: 500px;
            background: url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover;
        }

        .about-text {
            flex: 1;
            padding: 60px;
        }

        .about-text h2 {
            font-size: 2.2rem;
            color: var(--secondary-color);
            margin-bottom: 20px;
        }

        .stats-row {
            display: flex;
            gap: 40px;
            margin-top: 30px;
        }

        .stat-item h4 {
            font-size: 2.5rem;
            color: var(--primary-color);
            font-weight: 700;
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 15px;
        }

        .portfolio-item {
            position: relative;
            overflow: hidden;
            height: 300px;
        }

        .portfolio-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 62, 62, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: var(--transition);
        }

        .portfolio-item:hover .portfolio-overlay { opacity: 1; }
        .portfolio-item:hover img { transform: scale(1.1); }

        .portfolio-info {
            text-align: center;
            color: var(--white);
        }

        .contact-section {
            background: #1a1a1a;
            color: var(--white);
            text-align: center;
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .contact-form input, .contact-form textarea {
            padding: 15px;
            border: none;
            border-radius: 5px;
            font-family: inherit;
        }

        .contact-form button {
            cursor: pointer;
            border: none;
        }

        footer {
            background: #111;
            color: #888;
            padding: 30px 0;
            text-align: center;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .hero-content h1 { font-size: 2.5rem; }
            .nav-menu { display: none; } 
            .about-section { flex-direction: column; }
            .about-img { width: 100%; height: 300px; }
            .about-text { padding: 40px 20px; }
        }
    </style>
</head>
<body>

    <header>
        <div class="container navbar">
            <a href="#" class="logo">Marke<span>dia</span></a>
            <nav>
                <ul class="nav-menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <a href="#contact" class="btn">Get Started</a>
        </div>
    </header>

    <?php
    @foreach($posts as $post)
        <div class="blog-box wow fadeIn">
            <div class="post-media">
                <a href="{{ route('posts.single', ['slug' => $post->slug]) }}" title="">
                    <img src="{{ $post->image }}" alt="" class="img-fluid">
                    <div class="hovereffect">
                        <span></span>
                    </div>
                    <!-- end hover -->
                </a>
            </div>
            <!-- end media -->
            <div class="blog-meta big-meta text-center">
                <div class="post-sharing">
                    <!-- end post-sharing -->
                </div>
                <!-- end post-sharing -->

                <h4><a href="{{ route('posts.single', ['slug' => $post->slug]) }}" 
                    title="{{ $post->title }}">{{ $post->title }}</a></h4>

                <small><a href="{{ route('categories.single', ['slug' => $post->category->slug]) }}" 
                        title="">{{ $post->category->title }}</a></small>
                <small>{{ $post->created_at->format('d M Y') }}</small>
                <small><i class="fa fa-eye"></i> {{ $post->views }}</small>
            </div>
            <!-- end meta -->
        </div>
        <!-- end blog-box -->

        <hr class="invis">
    @endforeach

    <section id="home" class="hero">
        <div class="container hero-content">
            <h1>We Boost Your Business <br> With Digital Marketing</h1>
            <p>Комплексные решения для роста вашего бренда в интернете. <br> SEO, SMM, PPC и веб-дизайн.</p>
            <div>
                <a href="#services" class="btn">Our Services</a>
                <a href="#contact" class="btn btn-outline">Contact Us</a>
            </div>
        </div>
    </section>

    <section id="services" class="section-padding">
        <div class="container">
            <div class="section-header">
                <h2>Наши Услуги</h2>
                <p>Мы предлагаем полный спектр услуг цифрового маркетинга для достижения ваших бизнес-целей.</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">📈</div>
                    <h3>SEO Optimization</h3>
                    <p>Улучшаем видимость вашего сайта в поисковых системах для привлечения органического трафика.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">📣</div>
                    <h3>Social Media</h3>
                    <p>Стратегическое управление социальными сетями для повышения лояльности и узнаваемости бренда.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">💻</div>
                    <h3>Web Design</h3>
                    <p>Создание современных, адаптивных и продающих сайтов, которые конвертируют посетителей.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-section">
        <div class="about-img"></div>
        <div class="about-text">
            <h2>Почему выбирают нас?</h2>
            <p>Мы — команда энтузиастов, которые любят цифровой маркетинг. Мы работаем с клиентами по всему миру, помогая им достигать невероятных результатов.</p>
            <br>
            <p>Наш подход основан на данных и креативности. Мы не просто делаем рекламу, мы строим стратегии.</p>
            
            <div class="stats-row">
                <div class="stat-item">
                    <h4>250+</h4>
                    <p>Проектов</p>
                </div>
                <div class="stat-item">
                    <h4>120+</h4>
                    <p>Клиентов</p>
                </div>
                <div class="stat-item">
                    <h4>10</h4>
                    <p>Лет опыта</p>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="section-padding">
        <div class="container">
            <div class="section-header">
                <h2>Наши Работы</h2>
                <p>Последние проекты, которыми мы гордимся.</p>
            </div>
            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Work 1">
                    <div class="portfolio-overlay">
                        <div class="portfolio-info">
                            <h3>Project One</h3>
                            <p>Marketing</p>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1555421689-492a18d9c3ad?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Work 2">
                    <div class="portfolio-overlay">
                        <div class="portfolio-info">
                            <h3>Project Two</h3>
                            <p>Design</p>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Work 3">
                    <div class="portfolio-overlay">
                        <div class="portfolio-info">
                            <h3>Project Three</h3>
                            <p>SEO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section-padding contact-section">
        <div class="container">
            <div class="section-header">
                <h2 style="color: white;">Свяжитесь с нами</h2>
                <p style="color: #ccc;">Готовы начать проект? Напишите нам!</p>
            </div>
            <form class="contact-form">
                <input type="text" placeholder="Ваше имя" required>
                <input type="email" placeholder="Ваш Email" required>
                <textarea rows="5" placeholder="Сообщение" required></textarea>
                <button type="submit" class="btn">Отправить</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2026 Markedia Template Clone. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>