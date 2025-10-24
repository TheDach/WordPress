<?php
// Данные разработчика
$developer = [
    'name' => 'Иван Иванов',
    'position' => 'Full-stack разработчик',
    'description' => 'Создаю современные веб-приложения на PHP, JavaScript и современных фреймворках',
    'email' => 'ivan.ivanov@example.com',
    'phone' => '+7 (999) 123-45-67',
    'location' => 'Санкт-Петербург, Россия',
    'experience' => '2 года'
];

// Проекты
$projects = [
    [
        'id' => 1,
        'title' => 'Интернет-магазин электроники',
        'description' => 'Полнофункциональный магазин с корзиной, фильтрами и системой оплаты на Laravel',
        'technologies' => ['PHP', 'Laravel', 'MySQL', 'JavaScript', 'Bootstrap'],
        'features' => ['Система корзины', 'Панель администратора', 'Платежная система', 'Поиск товаров'],
        'image' => 'project1.jpg',
        'live_url' => '#',
        'github_url' => '#'
    ],
    [
        'id' => 2,
        'title' => 'Task Manager App',
        'description' => 'Приложение для управления задачами с реальным временем на React и Node.js',
        'technologies' => ['JavaScript', 'React', 'Node.js', 'Express', 'MongoDB'],
        'features' => ['Real-time обновления', 'Уведомления', 'Drag & Drop', 'Командная работа'],
        'image' => 'project2.jpg',
        'live_url' => '#',
        'github_url' => '#'
    ],
    [
        'id' => 3,
        'title' => 'Аналитическая панель',
        'description' => 'Dashboard для визуализации бизнес-метрик с графиками и отчетами',
        'technologies' => ['PHP', 'JavaScript', 'Chart.js', 'MySQL', 'REST API'],
        'features' => ['Интерактивные графики', 'Генерация отчетов', 'Настройка дашбордов', 'Экспорт данных'],
        'image' => 'project3.jpg',
        'live_url' => '#',
        'github_url' => '#'
    ]
];

// Навыки
$skills = [
    [
        'name' => 'PHP',
        'level' => 'Продвинутый',
        'level_percent' => 90,
        'experience' => '2 года',
        'projects_count' => 8
    ],
    [
        'name' => 'Laravel',
        'level' => 'Продвинутый',
        'level_percent' => 85,
        'experience' => '1.5 года',
        'projects_count' => 6
    ],
    [
        'name' => 'JavaScript',
        'level' => 'Продвинутый',
        'level_percent' => 88,
        'experience' => '2 года',
        'projects_count' => 10
    ],
    [
        'name' => 'React',
        'level' => 'Средний',
        'level_percent' => 75,
        'experience' => '1 год',
        'projects_count' => 4
    ],
    [
        'name' => 'MySQL',
        'level' => 'Продвинутый',
        'level_percent' => 82,
        'experience' => '2 года',
        'projects_count' => 7
    ],
    [
        'name' => 'Git/Docker',
        'level' => 'Средний',
        'level_percent' => 70,
        'experience' => '1.5 года',
        'projects_count' => 5
    ]
];

// Обработка формы обратной связи
$message_sent = false;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
    
    // Валидация
    if (empty($name)) $errors[] = "Имя обязательно для заполнения";
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Введите корректный email";
    if (empty($message)) $errors[] = "Сообщение не может быть пустым";
    
    if (empty($errors)) {
        $message_sent = true;
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Портфолио | <?php echo $developer['name']; ?> - <?php echo $developer['position']; ?></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header & Navigation -->
    <header class="header">
        <nav class="nav">
            <div class="container">
                <div class="nav-brand">
                    <a href="#home" class="logo">DevPortfolio</a>
                </div>
                <ul class="nav-menu">
                    <li><a href="#home">Главная</a></li>
                    <li><a href="#about">О себе</a></li>
                    <li><a href="#portfolio">Портфолио</a></li>
                    <li><a href="#skills">Технологии</a></li>
                    <li><a href="#contact">Контакты</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title"><?php echo $developer['name']; ?></h1>
                    <p class="hero-subtitle"><?php echo $developer['position']; ?></p>
                    <p class="hero-description"><?php echo $developer['description']; ?></p>
                    <div class="hero-buttons">
                        <a href="#portfolio" class="btn btn-primary">Смотреть работы</a>
                        <a href="#contact" class="btn btn-outline">Связаться со мной</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="images/avatar.jpg" alt="Фото <?php echo $developer['name']; ?>">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">О себе</h2>
            <div class="about-content">
                <div class="about-text">
                    <h3>Привет! Я веб-разработчик</h3>
                    <p>Специализируюсь на создании современных веб-приложений с использованием PHP, JavaScript и современных фреймворков. Имею <?php echo $developer['experience']; ?> коммерческой разработки.</p>
                    
                    <div class="about-details">
                        <div class="detail-column">
                            <h4>Образование</h4>
                            <ul>
                                <li>Бакалавр компьютерных наук, Университет ИТМО (2019-2023)</li>
                                <li>Курс "Full-stack разработка" от Яндекс.Практикум (2022)</li>
                                <li>Сертификация PHP Developer от Zend (2023)</li>
                            </ul>
                        </div>
                        <div class="detail-column">
                            <h4>Опыт работы</h4>
                            <div class="experience-item">
                                <h5>Middle PHP Developer - TechCompany (2023-настоящее время)</h5>
                                <p>Разработка и поддержка высоконагруженных веб-приложений</p>
                            </div>
                            <div class="experience-item">
                                <h5>Junior Web Developer - Startup Inc (2022-2023)</h5>
                                <p>Разработка фронтенда и бэкенда для CRM-системы</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="about-stats">
                    <div class="stat-card">
                        <h4><?php echo count($projects); ?>+</h4>
                        <p>Завершенных проектов</p>
                    </div>
                    <div class="stat-card">
                        <h4><?php echo $developer['experience']; ?></h4>
                        <p>Опыта разработки</p>
                    </div>
                    <div class="stat-card">
                        <h4>15+</h4>
                        <p>Довольных клиентов</p>
                    </div>
                    <div class="stat-card">
                        <h4><?php echo count($skills); ?>+</h4>
                        <p>Технологий в стеке</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2 class="section-title">Портфолио работ</h2>
            
            <div class="portfolio-grid">
                <?php foreach ($projects as $project): ?>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="images/<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
                        <div class="portfolio-overlay">
                            <a href="<?php echo $project['live_url']; ?>" class="btn btn-outline" target="_blank">Демо</a>
                            <a href="<?php echo $project['github_url']; ?>" class="btn btn-primary" target="_blank">Код</a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3><?php echo $project['title']; ?></h3>
                        <p><?php echo $project['description']; ?></p>
                        <div class="tech-tags">
                            <?php foreach ($project['technologies'] as $tech): ?>
                                <span class="tech-tag"><?php echo $tech; ?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="project-features">
                            <h4>Особенности:</h4>
                            <ul>
                                <?php foreach ($project['features'] as $feature): ?>
                                    <li><?php echo $feature; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills">
        <div class="container">
            <h2 class="section-title">Владение современными технологиями</h2>
            
            <div class="skills-content">
                <!-- Таблица навыков -->
                <div class="skills-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Технология</th>
                                <th>Уровень владения</th>
                                <th>Опыт</th>
                                <th>Проекты</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($skills as $skill): ?>
                            <tr>
                                <td><?php echo $skill['name']; ?></td>
                                <td>
                                    <div class="skill-level">
                                        <div class="skill-bar" style="width: <?php echo $skill['level_percent']; ?>%"></div>
                                    </div>
                                    <span><?php echo $skill['level']; ?></span>
                                </td>
                                <td><?php echo $skill['experience']; ?></td>
                                <td><?php echo $skill['projects_count']; ?> проектов</td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <!-- Технологический стек -->
                <div class="tech-stack">
                    <h3>Технологический стек</h3>
                    <div class="tech-categories">
                        <div class="tech-category">
                            <h4>Backend</h4>
                            <div class="tech-icons">
                                <div class="tech-icon">PHP</div>
                                <div class="tech-icon">Laravel</div>
                                <div class="tech-icon">Node.js</div>
                                <div class="tech-icon">MySQL</div>
                                <div class="tech-icon">PostgreSQL</div>
                                <div class="tech-icon">REST API</div>
                            </div>
                        </div>
                        <div class="tech-category">
                            <h4>Frontend</h4>
                            <div class="tech-icons">
                                <div class="tech-icon">JavaScript</div>
                                <div class="tech-icon">React</div>
                                <div class="tech-icon">Vue.js</div>
                                <div class="tech-icon">HTML5</div>
                                <div class="tech-icon">CSS3</div>
                                <div class="tech-icon">TypeScript</div>
                            </div>
                        </div>
                        <div class="tech-category">
                            <h4>Tools</h4>
                            <div class="tech-icons">
                                <div class="tech-icon">Git</div>
                                <div class="tech-icon">Docker</div>
                                <div class="tech-icon">Webpack</div>
                                <div class="tech-icon">Composer</div>
                                <div class="tech-icon">NPM</div>
                                <div class="tech-icon">Linux</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Контактная информация</h2>
            
            <?php if ($message_sent): ?>
            <div class="alert alert-success">
                <p>✅ Сообщение успешно отправлено! Спасибо за ваше обращение.</p>
            </div>
            <?php endif; ?>
            
            <?php if (!empty($errors)): ?>
            <div class="alert alert-error">
                <ul>
                    <?php foreach ($errors as $error): ?>
                    <li>❌ <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>

            <div class="contact-content">
                <div class="contact-info">
                    <h3>Свяжитесь со мной</h3>
                    <div class="contact-item">
                        <strong>Email:</strong>
                        <a href="mailto:<?php echo $developer['email']; ?>"><?php echo $developer['email']; ?></a>
                    </div>
                    <div class="contact-item">
                        <strong>Телефон:</strong>
                        <a href="tel:<?php echo str_replace([' ', '(', ')', '-'], '', $developer['phone']); ?>"><?php echo $developer['phone']; ?></a>
                    </div>
                    <div class="contact-item">
                        <strong>Город:</strong>
                        <span><?php echo $developer['location']; ?></span>
                    </div>
                    <div class="contact-item">
                        <strong>Готов к:</strong>
                        <span>Удаленной работе, Релокации, Фрилансу</span>
                    </div>
                    
                    <div class="social-links">
                        <h4>Социальные сети:</h4>
                        <div class="social-icons">
                            <a href="https://github.com" class="social-link" target="_blank">GitHub</a>
                            <a href="https://linkedin.com" class="social-link" target="_blank">LinkedIn</a>
                            <a href="https://telegram.org" class="social-link" target="_blank">Telegram</a>
                            <a href="https://vk.com" class="social-link" target="_blank">VK</a>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h3>Форма обратной связи</h3>
                    <form method="POST" action="#contact">
                        <div class="form-group">
                            <label for="name">Имя *</label>
                            <input type="text" id="name" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Тема</label>
                            <input type="text" id="subject" name="subject" value="<?php echo isset($_POST['subject']) ? $_POST['subject'] : ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="message">Сообщение *</label>
                            <textarea id="message" name="message" rows="5" required><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Отправить сообщение</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> <?php echo $developer['name']; ?>. Все права защищены.</p>
            <p>Сайт-портфолио разработчика | Сделано на PHP</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>