<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim - OtoParcam</title>
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
                            <a href="about.php" class="nav-link">Hakkımızda</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link active">İletişim</a>
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

    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="contact-header">
                <h1 class="contact-title">İletişim</h1>
                <p class="contact-subtitle">Bizimle iletişime geçin, size yardımcı olalım</p>
            </div>
        </div>
    </section>

    <!-- Contact Content Section -->
    <section class="contact-content">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Info Card -->
                <div class="contact-info-card">
                    <div class="contact-info-header">
                        <h2>İletişim Bilgileri</h2>
                        <p>Size en hızlı şekilde ulaşabilmemiz için aşağıdaki kanalları kullanabilirsiniz.</p>
                    </div>
                    
                    <div class="contact-info-items">
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-details">
                                <h3>Telefon</h3>
                                <p>0850 123 45 67</p>
                                <p>+90 212 123 45 67</p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-details">
                                <h3>E-posta</h3>
                                <p>info@otoparcam.com</p>
                                <p>destek@otoparcam.com</p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-details">
                                <h3>Adres</h3>
                                <p>OtoParcam Plaza</p>
                                <p>Levent Mah. Otomobil Cad. No:123</p>
                                <p>Beşiktaş / İstanbul</p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-details">
                                <h3>Çalışma Saatleri</h3>
                                <p>Pazartesi - Cuma: 08:00 - 18:00</p>
                                <p>Cumartesi: 09:00 - 16:00</p>
                                <p>Pazar: Kapalı</p>
                            </div>
                        </div>
                    </div>

                    
                </div>

                <!-- Contact Form Card -->
                <div class="contact-form-card">
                    <div class="contact-form-header">
                        <h2>Mesaj Gönderin</h2>
                        <p>Sorularınız için aşağıdaki formu doldurabilirsiniz.</p>
                    </div>
                    
                    <form class="contact-form" id="contactForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName" class="form-label">Ad *</label>
                                <input type="text" id="firstName" name="firstName" class="form-input" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName" class="form-label">Soyad *</label>
                                <input type="text" id="lastName" name="lastName" class="form-input" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email" class="form-label">E-posta *</label>
                                <input type="email" id="email" name="email" class="form-input" required>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label">Telefon</label>
                                <input type="tel" id="phone" name="phone" class="form-input">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject" class="form-label">Konu *</label>
                            <select id="subject" name="subject" class="form-select" required>
                                <option value="">Konu seçiniz</option>
                                <option value="genel">Genel Bilgi</option>
                                <option value="siparis">Sipariş Takibi</option>
                                <option value="iade">İade & Değişim</option>
                                <option value="teknik">Teknik Destek</option>
                                <option value="oneri">Öneri & Şikayet</option>
                                <option value="diger">Diğer</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message" class="form-label">Mesajınız *</label>
                            <textarea id="message" name="message" class="form-input" rows="6" placeholder="Mesajınızı buraya yazın..." required></textarea>
                        </div>

                        <div class="form-group">
                            <div class="form-checkbox">
                                <input type="checkbox" id="privacy" name="privacy" required>
                                <label for="privacy">
                                    <a href="#" target="_blank">Gizlilik Politikası</a>'nı okudum ve kabul ediyorum *
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-checkbox">
                                <input type="checkbox" id="newsletter" name="newsletter">
                                <label for="newsletter">
                                    Kampanya ve yeniliklerden haberdar olmak istiyorum
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary contact-submit">
                            <i class="fas fa-paper-plane"></i>
                            Mesaj Gönder
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="map-header">
                <h2>Konum</h2>
                <p>Mağazamızı ziyaret etmek için aşağıdaki haritayı kullanabilirsiniz.</p>
            </div>
            <div class="map-container">
                <div class="map-placeholder">
                    <i class="fas fa-map-marked-alt"></i>
                    <h3>Harita Yükleniyor...</h3>
                    <p>Google Maps entegrasyonu burada olacak</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Sık Sorulan Sorular</h2>
                <p class="section-subtitle">En çok sorulan sorular ve cevapları</p>
            </div>
            
            <div class="faq-grid">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Kargo süresi ne kadar?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Kargo süresi bulunduğunuz bölgeye göre 1-3 iş günü arasında değişmektedir. İstanbul içi aynı gün teslimat seçeneği de mevcuttur.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>İade koşulları nelerdir?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>15 gün içinde ücretsiz iade hakkınız bulunmaktadır. Ürün orijinal ambalajında ve kullanılmamış olmalıdır.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Garanti kapsamı nedir?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Tüm ürünlerimiz 2 yıl garanti kapsamındadır. Orijinal parçalar için üretici garantisi de geçerlidir.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Ödeme seçenekleri nelerdir?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Kredi kartı, banka kartı, havale/EFT ve kapıda ödeme seçenekleri mevcuttur. Taksitli ödeme imkanı da sunuyoruz.</p>
                    </div>
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