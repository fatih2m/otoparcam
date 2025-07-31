// DOM Elements
const loadingScreen = document.getElementById('loading-screen');
const navToggle = document.getElementById('nav-toggle');
const navMenu = document.getElementById('nav-menu');
const header = document.querySelector('.header');
const userBtn = document.getElementById('user-btn');
const userDropdown = document.getElementById('user-dropdown');
const cartBtn = document.getElementById('cart-btn');

// Loading Screen
window.addEventListener('load', () => {
    setTimeout(() => {
        loadingScreen.style.opacity = '0';
        setTimeout(() => {
            loadingScreen.style.display = 'none';
        }, 300);
    }, 800);
});

// Mobile Navigation Toggle
navToggle.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    navToggle.classList.toggle('active');
});

// Close mobile menu when clicking on a link
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('active');
        navToggle.classList.remove('active');
    });
});

// Header Scroll Effect
window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// Smooth Scrolling for Navigation Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// User button now redirects to login page
// No dropdown functionality needed

// Category Cards Animation
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe category cards
document.querySelectorAll('.category-card').forEach((card, index) => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(50px)';
    card.style.transition = `all 0.6s ease ${index * 0.1}s`;
    observer.observe(card);
});

// Observe feature cards
document.querySelectorAll('.feature-card').forEach((card, index) => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(50px)';
    card.style.transition = `all 0.6s ease ${index * 0.1}s`;
    observer.observe(card);
});

// Stats Counter Animation
const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const target = parseInt(entry.target.getAttribute('data-target'));
            const increment = target / 100;
            let current = 0;
            
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                entry.target.textContent = Math.floor(current).toLocaleString();
            }, 20);
            
            statsObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.5 });

document.querySelectorAll('.stat-number').forEach(stat => {
    statsObserver.observe(stat);
});

// Search Functionality
const searchInput = document.querySelector('.search-input');
const searchBtn = document.querySelector('.search-btn');

if (searchBtn && searchInput) {
    searchBtn.addEventListener('click', performSearch);
    searchInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            performSearch();
        }
    });
}

function performSearch() {
    const query = searchInput.value.trim();
    if (query) {
        // Implement search functionality
        console.log('Searching for:', query);
        showSearchResults(query);
        // Redirect to search results page
        // window.location.href = `search.php?q=${encodeURIComponent(query)}`;
    }
}

// Show search results (demo)
function showSearchResults(query) {
    const resultsDiv = document.createElement('div');
    resultsDiv.className = 'search-results-popup';
    resultsDiv.innerHTML = `
        <div class="search-results-content">
            <h3>"${query}" için arama sonuçları</h3>
            <p>Arama sonuçları burada görüntülenecek...</p>
            <button onclick="this.parentElement.parentElement.remove()">Kapat</button>
        </div>
    `;
    document.body.appendChild(resultsDiv);
    
    setTimeout(() => {
        resultsDiv.remove();
    }, 3000);
}

// Quick Search Form
const quickSearchForm = document.querySelector('.search-form');
const formSelects = quickSearchForm ? quickSearchForm.querySelectorAll('.form-select') : [];

// Sample data for demonstration
const carData = {
    'BMW': {
        models: ['3 Serisi', '5 Serisi', 'X3', 'X5'],
        years: ['2020', '2019', '2018', '2017', '2016']
    },
    'Mercedes': {
        models: ['C-Class', 'E-Class', 'GLC', 'GLE'],
        years: ['2020', '2019', '2018', '2017', '2016']
    },
    'Audi': {
        models: ['A3', 'A4', 'Q3', 'Q5'],
        years: ['2020', '2019', '2018', '2017', '2016']
    },
    'Volkswagen': {
        models: ['Golf', 'Passat', 'Tiguan', 'Touareg'],
        years: ['2020', '2019', '2018', '2017', '2016']
    },
    'Ford': {
        models: ['Focus', 'Fiesta', 'Kuga', 'Mondeo'],
        years: ['2020', '2019', '2018', '2017', '2016']
    },
    'Renault': {
        models: ['Clio', 'Megane', 'Kadjar', 'Koleos'],
        years: ['2020', '2019', '2018', '2017', '2016']
    },
    'Peugeot': {
        models: ['208', '308', '3008', '5008'],
        years: ['2020', '2019', '2018', '2017', '2016']
    }
};

// Update model dropdown when brand changes
if (formSelects.length >= 3) {
    const brandSelect = formSelects[0];
    const modelSelect = formSelects[1];
    const yearSelect = formSelects[2];
    
    brandSelect.addEventListener('change', function() {
        const selectedBrand = this.value;
        
        // Reset model and year selects
        modelSelect.innerHTML = '<option value="">Model Seçin</option>';
        yearSelect.innerHTML = '<option value="">Yıl Seçin</option>';
        
        if (selectedBrand && carData[selectedBrand]) {
            carData[selectedBrand].models.forEach(model => {
                const option = document.createElement('option');
                option.value = model;
                option.textContent = model;
                modelSelect.appendChild(option);
            });
            
            carData[selectedBrand].years.forEach(year => {
                const option = document.createElement('option');
                option.value = year;
                option.textContent = year;
                yearSelect.appendChild(option);
            });
        }
    });
}

// Quick Search Button
const quickSearchBtn = document.querySelector('.btn-search');
if (quickSearchBtn) {
    quickSearchBtn.addEventListener('click', function(e) {
        e.preventDefault();
        const brand = formSelects[0] ? formSelects[0].value : '';
        const model = formSelects[1] ? formSelects[1].value : '';
        const year = formSelects[2] ? formSelects[2].value : '';
        const partName = document.querySelector('.form-input') ? document.querySelector('.form-input').value : '';
        
        console.log('Quick Search:', { brand, model, year, partName });
        
        // Show search notification
        showNotification(`Arama yapılıyor: ${brand} ${model} ${year} ${partName}`, 'info');
    });
}

// Category Card Click Events
document.querySelectorAll('.category-card').forEach(card => {
    card.addEventListener('click', function() {
        const category = this.getAttribute('data-category');
        console.log('Navigating to category:', category);
        showNotification(`${this.querySelector('.category-title').textContent} kategorisine yönlendiriliyor...`, 'success');
        // window.location.href = `category.php?cat=${category}`;
    });
});

// Floating Animation for Hero Parts
function createFloatingAnimation() {
    const parts = document.querySelectorAll('.floating-parts .part');
    parts.forEach((part, index) => {
        const randomDelay = Math.random() * 2;
        const randomDuration = 4 + Math.random() * 4;
        part.style.animationDelay = `${randomDelay}s`;
        part.style.animationDuration = `${randomDuration}s`;
    });
}

// Initialize floating animation
createFloatingAnimation();

// Parallax Effect for Hero Section
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const parallaxElements = document.querySelectorAll('.floating-parts .part');
    
    parallaxElements.forEach((element, index) => {
        const speed = 0.5 + (index * 0.1);
        const yPos = -(scrolled * speed);
        element.style.transform = `translateY(${yPos}px) rotate(${scrolled * 0.1}deg)`;
    });
    
    // Hero content parallax
    const heroContent = document.querySelector('.hero-content');
    if (heroContent) {
        const heroOffset = scrolled * 0.3;
        heroContent.style.transform = `translateY(${heroOffset}px)`;
    }
});

// Add hover effects to buttons
document.querySelectorAll('.btn').forEach(btn => {
    btn.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-2px)';
    });
    
    btn.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
    });
});

// Add ripple effect to buttons
function createRipple(event) {
    const button = event.currentTarget;
    const circle = document.createElement('span');
    const diameter = Math.max(button.clientWidth, button.clientHeight);
    const radius = diameter / 2;
    
    circle.style.width = circle.style.height = `${diameter}px`;
    circle.style.left = `${event.clientX - button.offsetLeft - radius}px`;
    circle.style.top = `${event.clientY - button.offsetTop - radius}px`;
    circle.classList.add('ripple');
    
    const ripple = button.getElementsByClassName('ripple')[0];
    if (ripple) {
        ripple.remove();
    }
    
    button.appendChild(circle);
}

// Apply ripple effect to buttons
document.querySelectorAll('.btn').forEach(btn => {
    btn.addEventListener('click', createRipple);
});

// Add ripple effect CSS dynamically
const rippleCSS = `
.btn {
    position: relative;
    overflow: hidden;
}

.ripple {
    position: absolute;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.6);
    transform: scale(0);
    animation: ripple-animation 0.6s linear;
}

@keyframes ripple-animation {
    to {
        transform: scale(4);
        opacity: 0;
    }
}

.search-results-popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 10000;
}

.search-results-content {
    background: white;
    padding: 2rem;
    border-radius: 10px;
    text-align: center;
    max-width: 400px;
    width: 90%;
}

.notification {
    position: fixed;
    top: 20px;
    right: 20px;
    padding: 1rem 1.5rem;
    border-radius: 5px;
    color: white;
    font-weight: 500;
    z-index: 10000;
    transform: translateX(400px);
    transition: transform 0.3s ease;
}

.notification.show {
    transform: translateX(0);
}

.notification.success {
    background: #10b981;
}

.notification.info {
    background: #3b82f6;
}

.notification.warning {
    background: #f59e0b;
}

.notification.error {
    background: #ef4444;
}
`;

// Add CSS to head
const style = document.createElement('style');
style.textContent = rippleCSS;
document.head.appendChild(style);

// Notification System
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    notification.textContent = message;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.classList.add('show');
    }, 100);
    
    setTimeout(() => {
        notification.classList.remove('show');
        setTimeout(() => {
            notification.remove();
        }, 300);
    }, 3000);
}

// Cart functionality
let cartItems = [];
let cartCount = 0;

function updateCartCount() {
    const cartCountElement = document.querySelector('.cart-count');
    if (cartCountElement) {
        cartCountElement.textContent = cartCount;
        
        // Add bounce animation
        cartCountElement.style.transform = 'scale(1.2)';
        setTimeout(() => {
            cartCountElement.style.transform = 'scale(1)';
        }, 200);
    }
}

function addToCart(item) {
    cartItems.push(item);
    cartCount++;
    updateCartCount();
    showNotification('Ürün sepete eklendi!', 'success');
}

// Showcase parts interaction
document.querySelectorAll('.showcase-part').forEach(part => {
    part.addEventListener('click', function() {
        const partName = this.querySelector('span').textContent;
        showNotification(`${partName} kategorisi görüntüleniyor...`, 'info');
    });
});

// Scroll to top functionality
function createScrollToTopButton() {
    const scrollBtn = document.createElement('button');
    scrollBtn.innerHTML = '<i class="fas fa-chevron-up"></i>';
    scrollBtn.className = 'scroll-to-top';
    scrollBtn.style.cssText = `
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: var(--primary-color);
        color: white;
        border: none;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 1000;
    `;
    
    document.body.appendChild(scrollBtn);
    
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            scrollBtn.style.opacity = '1';
            scrollBtn.style.visibility = 'visible';
        } else {
            scrollBtn.style.opacity = '0';
            scrollBtn.style.visibility = 'hidden';
        }
    });
    
    scrollBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Initialize scroll to top button
createScrollToTopButton();

// Lazy loading for images
function lazyLoadImages() {
    const images = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
}

// Initialize lazy loading
lazyLoadImages();

// Form validation
function validateForm(form) {
    const inputs = form.querySelectorAll('input[required], select[required]');
    let isValid = true;
    
    inputs.forEach(input => {
        if (!input.value.trim()) {
            input.style.borderColor = '#ef4444';
            isValid = false;
        } else {
            input.style.borderColor = '#d1d5db';
        }
    });
    
    return isValid;
}

// FAQ Functionality
function initFAQ() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            
            // Close all other FAQ items
            faqItems.forEach(otherItem => {
                otherItem.classList.remove('active');
            });
            
            // Toggle current item
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
}

// Contact Form Validation
function initContactForm() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const firstName = formData.get('firstName');
            const lastName = formData.get('lastName');
            const email = formData.get('email');
            const subject = formData.get('subject');
            const message = formData.get('message');
            const privacy = formData.get('privacy');
            
            // Basic validation
            if (!firstName || !lastName || !email || !subject || !message || !privacy) {
                showNotification('Lütfen tüm zorunlu alanları doldurun.', 'error');
                return;
            }
            
            if (!isValidEmail(email)) {
                showNotification('Lütfen geçerli bir e-posta adresi girin.', 'error');
                return;
            }
            
            // Simulate form submission
            const submitBtn = this.querySelector('.contact-submit');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Gönderiliyor...';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                showNotification('Mesajınız başarıyla gönderildi! En kısa sürede size dönüş yapacağız.', 'success');
                this.reset();
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 2000);
        });
    }
}

// Initialize all functions when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    console.log('OtoParca website loaded successfully!');
    
    // Add loading class to body
    document.body.classList.add('loaded');
    
    // Initialize tooltips
    const tooltipElements = document.querySelectorAll('[data-tooltip]');
    tooltipElements.forEach(element => {
        element.addEventListener('mouseenter', function() {
            const tooltip = document.createElement('div');
            tooltip.className = 'tooltip';
            tooltip.textContent = this.dataset.tooltip;
            tooltip.style.cssText = `
                position: absolute;
                background: rgba(0, 0, 0, 0.8);
                color: white;
                padding: 0.5rem;
                border-radius: 4px;
                font-size: 0.875rem;
                z-index: 10000;
                pointer-events: none;
            `;
            document.body.appendChild(tooltip);
            
            const rect = this.getBoundingClientRect();
            tooltip.style.top = `${rect.top - tooltip.offsetHeight - 5}px`;
            tooltip.style.left = `${rect.left + (rect.width - tooltip.offsetWidth) / 2}px`;
        });
        
        element.addEventListener('mouseleave', function() {
            const tooltip = document.querySelector('.tooltip');
            if (tooltip) {
                tooltip.remove();
            }
        });
    });
    initFAQ();
    initContactForm();
});

// Performance optimization
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Debounced scroll handler
const debouncedScrollHandler = debounce(() => {
    // Additional scroll handling if needed
}, 10);

window.addEventListener('scroll', debouncedScrollHandler);

// Error handling
window.addEventListener('error', function(e) {
    console.error('JavaScript error:', e.error);
    showNotification('Bir hata oluştu. Lütfen sayfayı yenileyin.', 'error');
});

// Service Worker registration (for future PWA features)
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js')
            .then(registration => {
                console.log('SW registered: ', registration);
            })
            .catch(registrationError => {
                console.log('SW registration failed: ', registrationError);
            });
    });
}

// Login & Register Page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Login Form Functionality
    const loginForm = document.getElementById('login-form');
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const remember = document.getElementById('remember').checked;
            
            // Form validation
            if (!email || !password) {
                showMessage('Lütfen tüm alanları doldurun.', 'error');
                return;
            }
            
            if (!isValidEmail(email)) {
                showMessage('Geçerli bir e-posta adresi girin.', 'error');
                return;
            }
            
            // Simulate login process
            showMessage('Giriş yapılıyor...', 'success');
            
            // Here you would typically send the data to your backend
            console.log('Login attempt:', { email, password, remember });
            
            // Simulate successful login after 2 seconds
            setTimeout(() => {
                showMessage('Giriş başarılı! Anasayfaya yönlendiriliyorsunuz...', 'success');
                setTimeout(() => {
                    window.location.href = 'index.php';
                }, 1500);
            }, 2000);
        });
    }

    // Register Form Functionality
    const customerForm = document.getElementById('customer-form');
    const storeForm = document.getElementById('store-form');
    const customerOption = document.getElementById('customer-option');
    const storeOption = document.getElementById('store-option');

    if (customerForm && storeForm && customerOption && storeOption) {
        // Radio button functionality
        customerOption.addEventListener('click', function() {
            document.querySelector('input[value="customer"]').checked = true;
            customerForm.classList.add('active');
            storeForm.classList.remove('active');
            customerOption.classList.add('selected');
            storeOption.classList.remove('selected');
        });

        storeOption.addEventListener('click', function() {
            document.querySelector('input[value="store"]').checked = true;
            storeForm.classList.add('active');
            customerForm.classList.remove('active');
            storeOption.classList.add('selected');
            customerOption.classList.remove('selected');
        });

        // Initialize selected state
        customerOption.classList.add('selected');

        // TC and Tax number formatting (digits only)
        const customerTc = document.getElementById('customer-tc');
        const storeTax = document.getElementById('store-tax');

        if (customerTc) {
            customerTc.addEventListener('input', function() {
                this.value = this.value.replace(/\D/g, '').substring(0, 11);
            });
        }

        if (storeTax) {
            storeTax.addEventListener('input', function() {
                this.value = this.value.replace(/\D/g, '').substring(0, 10);
            });
        }

        // Customer form submission
        customerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = document.getElementById('customer-name').value.trim();
            const phone = document.getElementById('customer-phone').value.trim();
            const email = document.getElementById('customer-email').value.trim();
            const address = document.getElementById('customer-address').value.trim();
            const tc = document.getElementById('customer-tc').value.trim();
            const password = document.getElementById('customer-password').value.trim();

            // Validation
            if (!name || !phone || !email || !address || !tc || !password) {
                showMessage('Lütfen tüm alanları doldurun!', 'error');
                return;
            }

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                showMessage('Geçerli bir e-posta adresi girin!', 'error');
                return;
            }

            // TC validation (11 digits)
            if (tc.length !== 11) {
                showMessage('TC kimlik numarası 11 haneli olmalıdır!', 'error');
                return;
            }

            // Phone validation
            const phoneRegex = /^[0-9\s\-\+\(\)]{10,}$/;
            if (!phoneRegex.test(phone)) {
                showMessage('Geçerli bir telefon numarası girin!', 'error');
                return;
            }

            // Password validation (min 6 characters)
            if (password.length < 6) {
                showMessage('Şifre en az 6 karakter olmalıdır!', 'error');
                return;
            }

            // Simulate registration
            showMessage('Kayıt işlemi yapılıyor...', 'success');
            
            setTimeout(() => {
                showMessage('Kayıt başarılı! Giriş sayfasına yönlendiriliyorsunuz...', 'success');
                setTimeout(() => {
                    window.location.href = 'login.php';
                }, 1500);
            }, 2000);
        });

        // Store form submission
        storeForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const storeName = document.getElementById('store-name').value.trim();
            const storePhone = document.getElementById('store-phone').value.trim();
            const storeEmail = document.getElementById('store-email').value.trim();
            const storeAddress = document.getElementById('store-address').value.trim();
            const taxNumber = document.getElementById('store-tax').value.trim();
            const storePassword = document.getElementById('store-password').value.trim();

            // Validation
            if (!storeName || !storePhone || !storeEmail || !storeAddress || !taxNumber || !storePassword) {
                showMessage('Lütfen tüm alanları doldurun!', 'error');
                return;
            }

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(storeEmail)) {
                showMessage('Geçerli bir e-posta adresi girin!', 'error');
                return;
            }

            // Tax number validation (10 digits)
            if (taxNumber.length !== 10) {
                showMessage('Vergi numarası 10 haneli olmalıdır!', 'error');
                return;
            }

            // Phone validation
            const phoneRegex = /^[0-9\s\-\+\(\)]{10,}$/;
            if (!phoneRegex.test(storePhone)) {
                showMessage('Geçerli bir telefon numarası girin!', 'error');
                return;
            }

            // Password validation (min 6 characters)
            if (storePassword.length < 6) {
                showMessage('Şifre en az 6 karakter olmalıdır!', 'error');
                return;
            }

            // Simulate registration
            showMessage('Kayıt işlemi yapılıyor...', 'success');
            
            setTimeout(() => {
                showMessage('Kayıt başarılı! Giriş sayfasına yönlendiriliyorsunuz...', 'success');
                setTimeout(() => {
                    window.location.href = 'login.php';
                }, 1500);
            }, 2000);
        });
    }

    // Add input focus effects for login/register forms
    document.querySelectorAll('.form-input').forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'scale(1.02)';
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'scale(1)';
        });
    });
});

// Helper functions for login/register pages
function showMessage(message, type) {
    const errorDiv = document.getElementById('error-message');
    const successDiv = document.getElementById('success-message');
    
    if (type === 'error') {
        errorDiv.textContent = message;
        errorDiv.style.display = 'block';
        successDiv.style.display = 'none';
    } else {
        successDiv.textContent = message;
        successDiv.style.display = 'block';
        errorDiv.style.display = 'none';
    }
}

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}