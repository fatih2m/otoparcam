<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap - OtoParcam</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <a href="index.php" class="back-home">
        <i class="fas fa-home"></i>
    </a>

    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="login-logo">
                    <i class="fas fa-car-side"></i>
                    <span>OtoParcam</span>
                </div>
                <h1 class="login-title">Giriş Yap</h1>
                <p class="login-subtitle">Hesabınıza giriş yapın</p>
            </div>

            <div class="error-message" id="error-message"></div>
            <div class="success-message" id="success-message"></div>

            <form id="login-form">
                <div class="form-group">
                    <label for="email" class="form-label">E-posta Adresi</label>
                    <div class="input-group">
                        <input type="email" id="email" name="email" class="form-input" placeholder="ornek@email.com" required>
                        <i class="fas fa-envelope"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Şifre</label>
                    <div class="input-group">
                        <input type="password" id="password" name="password" class="form-input" placeholder="Şifrenizi girin" required>
                        <i class="fas fa-lock"></i>
                    </div>
                </div>

                <div class="form-checkbox">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Beni hatırla</label>
                </div>

                <button type="submit" class="btn-login">
                    <i class="fas fa-sign-in-alt"></i>
                    Giriş Yap
                </button>
            </form>

            <div class="login-footer">
                <p>Hesabınız yok mu? <a href="register.php">Kayıt Ol</a></p>
            </div>
        </div>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html> 