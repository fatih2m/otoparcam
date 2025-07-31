<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol - OtoParcam</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <a href="index.php" class="back-home">
        <i class="fas fa-home"></i>
    </a>

    <div class="register-container">
        <div class="register-card">
            <div class="register-header">
                <div class="register-logo">
                    <i class="fas fa-car-side"></i>
                    <span>OtoParcam</span>
                </div>
                <h1 class="register-title">Kayıt Ol</h1>
                <p class="register-subtitle">Hesabınızı oluşturun</p>
            </div>

            <div class="error-message" id="error-message"></div>
            <div class="success-message" id="success-message"></div>

            <div class="account-type">
                <h3>Hesap Türü Seçin</h3>
                <div class="radio-group">
                    <label class="radio-option selected" id="customer-option">
                        <input type="radio" name="account-type" value="customer" checked>
                        <span>Müşteri Kayıt</span>
                    </label>
                    <label class="radio-option" id="store-option">
                        <input type="radio" name="account-type" value="store">
                        <span>Mağaza Kayıt</span>
                    </label>
                </div>
            </div>

            <!-- Customer Form -->
            <form id="customer-form" class="form-container active">
                <div class="form-group">
                    <label for="customer-name" class="form-label">Ad Soyad</label>
                    <input type="text" id="customer-name" name="name" class="form-input" placeholder="Adınız ve soyadınız" required>
                </div>

                <div class="form-group">
                    <label for="customer-phone" class="form-label">Telefon</label>
                    <input type="tel" id="customer-phone" name="phone" class="form-input" placeholder="05XX XXX XX XX" required>
                </div>

                <div class="form-group">
                    <label for="customer-email" class="form-label">E-posta Adresi</label>
                    <input type="email" id="customer-email" name="email" class="form-input" placeholder="ornek@email.com" required>
                </div>

                <div class="form-group">
                    <label for="customer-address" class="form-label">Adres</label>
                    <textarea id="customer-address" name="address" class="form-input" placeholder="Tam adresinizi girin" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="customer-tc" class="form-label">TC Kimlik Numarası</label>
                    <input type="text" id="customer-tc" name="tc" class="form-input" placeholder="11 haneli TC kimlik no" maxlength="11" required>
                </div>

                <div class="form-group">
                    <label for="customer-password" class="form-label">Şifre</label>
                    <input type="password" id="customer-password" name="password" class="form-input" placeholder="En az 6 karakter" required>
                </div>

                <button type="submit" class="btn-register">Müşteri Olarak Kayıt Ol</button>
            </form>

            <!-- Store Form -->
            <form id="store-form" class="form-container">
                <div class="form-group">
                    <label for="store-name" class="form-label">Mağaza Adı</label>
                    <input type="text" id="store-name" name="store-name" class="form-input" placeholder="Mağaza adınız" required>
                </div>

                <div class="form-group">
                    <label for="store-phone" class="form-label">Telefon</label>
                    <input type="tel" id="store-phone" name="store-phone" class="form-input" placeholder="05XX XXX XX XX" required>
                </div>

                <div class="form-group">
                    <label for="store-email" class="form-label">E-posta Adresi</label>
                    <input type="email" id="store-email" name="store-email" class="form-input" placeholder="ornek@email.com" required>
                </div>

                <div class="form-group">
                    <label for="store-address" class="form-label">Mağaza Adresi</label>
                    <textarea id="store-address" name="store-address" class="form-input" placeholder="Mağaza adresinizi girin" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="store-tax" class="form-label">Vergi Numarası</label>
                    <input type="text" id="store-tax" name="tax-number" class="form-input" placeholder="10 haneli vergi no" maxlength="10" required>
                </div>

                <div class="form-group">
                    <label for="store-password" class="form-label">Şifre</label>
                    <input type="password" id="store-password" name="store-password" class="form-input" placeholder="En az 6 karakter" required>
                </div>

                <button type="submit" class="btn-register">Mağaza Olarak Kayıt Ol</button>
            </form>

            <div class="register-footer">
                <p>Zaten hesabınız var mı? <a href="login.php">Giriş Yap</a></p>
            </div>
        </div>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html> 