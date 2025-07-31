<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımızda - OtoParcam</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Loading Screen -->
    <div id="loading-screen">
        <div class="loading-content">
            <div class="car-animation">
                <i class="fas fa-car-side"></i>
            </div>
            <div class="loading-text">OtoParcam Yükleniyor...</div>
            <div class="loading-bar">
                <div class="loading-progress"></div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <nav class="navbar">
            <div class="nav-container">
                <div class="nav-logo">
                    <i class="fas fa-car-side"></i>
                    <span>OtoParcam</span>
                </div>
                
                <div class="nav-menu" id="nav-menu">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Anasayfa</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link">Kategoriler <i class="fas fa-chevron-down"></i></a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Motor Parçaları</a>
                                <a href="#" class="dropdown-item">Fren Sistemi</a>
                                <a href="#" class="dropdown-item">Elektrik</a>
                                <a href="#" class="dropdown-item">Karoseri</a>
                                <a href="#" class="dropdown-item">İç Aksesuar</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-link active">Hakkımızda</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link">İletişim</a>
                        </li>
                    </ul>
                </div>

                <div class="nav-actions">
                    <div class="search-box">
                        <input type="text" placeholder="Parça ara..." class="search-input">
                        <button class="search-btn"><i class="fas fa-search"></i></button>
                    </div>
                    <div class="user-actions">
                        <a href="#" class="action-btn" id="cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="cart-count">0</span>
                        </a>
                        <a href="login.php" class="action-btn" id="user-btn">
                            <i class="fas fa-user"></i>
                        </a>
                    </div>
                </div>

                <div class="nav-toggle" id="nav-toggle">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </nav>
    </header>

    <!-- About Hero Section -->
    <section class="about-hero">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h1 class="about-title">Hakkımızda</h1>
                    <div class="about-description">
                        <p class="about-paragraph">
                            2015 yılında kurulan OtoParcam, Türkiye'nin önde gelen otomobil yedek parça platformudur. 
                            Müşterilerimize en kaliteli parçaları en uygun fiyatlarla sunmak için çalışıyoruz.
                        </p>
                        <p class="about-paragraph">
                            Deneyimli ekibimiz ve güvenilir partner mağazalarımızla, otomobiliniz için ihtiyacınız olan 
                            her parçayı tek bir platformda bulabilirsiniz. Orijinal, kaliteli ve uygun fiyatlı parçalar 
                            için OtoParcam'ı tercih edin.
                        </p>
                        <p class="about-paragraph">
                            Misyonumuz, otomobil sahiplerinin parça arama sürecini kolaylaştırmak ve güvenilir bir 
                            alışveriş deneyimi sunmaktır. Vizyonumuz ise Türkiye'nin en büyük ve güvenilir otomobil 
                            yedek parça platformu olmaktır.
                        </p>
                    </div>
                    
                    <div class="about-stats">
                        <div class="stat-item">
                            <div class="stat-number">8+</div>
                            <div class="stat-label">Yıl Deneyim</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">50K+</div>
                            <div class="stat-label">Ürün Çeşidi</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">10K+</div>
                            <div class="stat-label">Mutlu Müşteri</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">500+</div>
                            <div class="stat-label">Mağaza Partneri</div>
                        </div>
                    </div>
                </div>
                
                <div class="about-image">
                    <div class="about-visual">
                        <div class="about-car">
                            <i class="fas fa-car"></i>
                        </div>
                        <div class="floating-parts-about">
                            <div class="part-about part-1"><i class="fas fa-cog"></i></div>
                            <div class="part-about part-2"><i class="fas fa-wrench"></i></div>
                            <div class="part-about part-3"><i class="fas fa-car-battery"></i></div>
                            <div class="part-about part-4"><i class="fas fa-oil-can"></i></div>
                            <div class="part-about part-5"><i class="fas fa-tire"></i></div>
                        </div>
                        <div class="about-glow"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Değerlerimiz</h2>
                <p class="section-subtitle">Neden bizi tercih etmelisiniz?</p>
            </div>
            
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Güvenilirlik</h3>
                    <p>8 yıllık deneyimimizle müşterilerimize güvenilir hizmet sunuyoruz. Tüm parçalarımız kalite kontrolünden geçer.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-tags"></i>
                    </div>
                    <h3>Uygun Fiyat</h3>
                    <p>Kaliteli parçaları en uygun fiyatlarla sunuyoruz. Fiyat karşılaştırması yaparak en iyi teklifi bulabilirsiniz.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3>Hızlı Teslimat</h3>
                    <p>24 saat içinde kapınızda. Türkiye'nin her yerine hızlı ve güvenli kargo hizmeti.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>7/24 Destek</h3>
                    <p>Uzman ekibimiz her zaman yanınızda. Teknik destek ve müşteri hizmetleri için bize ulaşın.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Ekibimiz</h2>
                <p class="section-subtitle">Sizin için çalışan uzman ekibimiz</p>
            </div>
            
            <div class="team-grid">
                <div class="team-card">
                    <div class="team-avatar">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Ahmet Yılmaz</h3>
                    <p class="team-position">Kurucu & CEO</p>
                    <p class="team-description">8 yıllık sektör deneyimi ile OtoParcam'ın kurucusu ve yöneticisi.</p>
                </div>

                <div class="team-card">
                    <div class="team-avatar">
                        <i class="fas fa-user-cog"></i>
                    </div>
                    <h3>Mehmet Kaya</h3>
                    <p class="team-position">Teknik Direktör</p>
                    <p class="team-description">Otomobil parçaları konusunda uzman, teknik destek ekibinin lideri.</p>
                </div>

                <div class="team-card">
                    <div class="team-avatar">
                        <i class="fas fa-user-headset"></i>
                    </div>
                    <h3>Ayşe Demir</h3>
                    <p class="team-position">Müşteri Hizmetleri</p>
                    <p class="team-description">Müşteri memnuniyeti odaklı hizmet anlayışı ile ekibimizin gururu.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                        <i class="fas fa-car-side"></i>
                        <span>OtoParcam</span>
                    </div>
                    <p>Türkiye'nin en güvenilir otomobil yedek parça platformu. Kaliteli parçalar, uygun fiyatlar.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>

                <div class="footer-section">
                    <h3>Hızlı Linkler</h3>
                    <ul>
                        <li><a href="index.php">Anasayfa</a></li>
                        <li><a href="#">Kategoriler</a></li>
                        <li><a href="#">Mağazalar</a></li>
                        <li><a href="#">Kampanyalar</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Müşteri Hizmetleri</h3>
                    <ul>
                        <li><a href="contact.php">İletişim</a></li>
                        <li><a href="#">SSS</a></li>
                        <li><a href="#">İade & Değişim</a></li>
                        <li><a href="#">Kargo Takibi</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>İletişim</h3>
                    <div class="contact-info">
                        <p><i class="fas fa-phone"></i> 0850 123 45 67</p>
                        <p><i class="fas fa-envelope"></i> info@otoparcam.com</p>
                        <p><i class="fas fa-map-marker-alt"></i> İstanbul, Türkiye</p>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2024 OtoParcam. Tüm hakları saklıdır.</p>
            </div>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>
