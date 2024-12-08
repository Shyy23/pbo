<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galery</title>
  
    <!-- ================= FAVICON ===================== -->
    <link rel="shortcut icon" href="assets/icon/icon-2/Galery.ico" type="image/x-icon">

    <!-- ================= FONT AWESOME ===================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css?v<?= time();?>">
    <!-- ================= REMIXICON ===================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css?v=<?= time();?>">
        
    <!-- ================= Hamburgers ===================== -->
    <link rel="stylesheet" href="dist/css/hamburgers.css?v=<?= time();?>">
    
    <!-- ================= CSS ===================== -->
    <link rel="stylesheet" href="dist/css/style.css?v=<?= filemtime('dist/css/style.css')?>">
    <link rel="stylesheet" href="dist/css/home.css?v=<?= filemtime('dist/css/home.css')?>">
</head>
<body>
            <!-- ================= HEADER ===================== -->

            <header class="header" id="header">
                <div class="header__container">
                    <a href="" class="header__logo">
                        <i class="fa-solid fa-cloud"></i>
                        <span>cloud</span>
                    </a>
        
                    <div class="header__actions">
                        <i class="fa-regular fa-bell"></i>
                        <i class="ri-account-circle-line"></i>
        
                        <button class="hamburger hamburger--elastic header__toggle" type="button" id="header-toggle">
                            <span class="hamburger-box">
                              <span class="hamburger-inner"></span>
                            </span>
                          </button>
                    </div>
        
                </div>
        
                <form action="" class="header__search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="search" placeholder="search" class="header__input">
                </form>
            </header>
            <!-- ================= SIDEBAR ===================== -->
            <nav class="sidebar" id="sidebar">
                <div class="sidebar__container">
                    <div class="sidebar__user b-bot">
                        <div class="sidebar__image">
                            <img src="assets/img/pp.jpg" alt="image" class="sidebar__img">
                        </div>
        
                        <div class="sidebar__info">
                            <h3 class="sidebar__name">Shyy</h3>
                            <span class="sidebar__email">Shyy23@gmail.com</span>
                        </div>
                    </div>
        
                    <div class="sidebar__content">
                        <div>
                            <h3 class="sidebar__title">MANAGE</h3>
                            <div class="sidebar__list b-bot">
                                
                                <a href="#" class="sidebar__link active-link">
                                    <i class="fa-solid fa-chart-pie"></i>
                                    <span>Dashboard</span>
                                </a>
                                <a href="view/tabel/view_barang.php" class="sidebar__link ">
                                    <i class="fa-solid fa-box-archive"></i>
                                    <span>Manage Barang</span>
                                </a>
                                <a href="view/tabel/view_customer.php" class="sidebar__link">
                                    <i class="fa-solid fa-user"></i>    
                                    <span>Manage Customer</span>
                                </a>
                            </div>
                        </div>
        
                        <div>
                            <h3 class="sidebar__title">SETTINGS</h3>
                            <div class="sidebar__list">
                                
                                <a href="#" class="sidebar__link">
                                    <i class="fa-solid fa-gear"></i>
                                    <span>Setting</span>
                                </a>
                                <a href="#" class="sidebar__link">
                                    <i class="fa-solid fa-envelope-circle-check"></i>
                                    <span>My Messages</span>
                                </a>
                                <a href="#" class="sidebar__link">
                                    <i class="fa-solid fa-bell"></i>
                                    <span>Notification</span>
                                </a>
                            </div>
                        </div>
                    </div>
        
                    <div class="sidebar__actions">
                        <button>
                            <i class="ri-moon-clear-fill sidebar__link sidebar__theme" id="theme-button">
                                
                                <span>Theme</span>
                            </i>
                        </button>
        
                        <button class="sidebar__link">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span>Log Out</span>
                        </button>
                    </div>
                </div>
            </nav>

            <!-- ================= MAIN  ===================== -->
             <main class="main container" id="main">
                <section class="card__highlight grid">
                    <h1 class="title__highlight section__title">Available Access</h1>
                    <div class="wrapped__card grid">
                        <article class="card">
                            <a href="view/tabel/view_barang.php" class="card__link">
                            <div class="card__image">
                                <img src="assets/img/barang.webp" alt="barang" class="card__img">
                            </div>
                            <div class="card__info">
                                <h3 class="card__title">Manage Barang</h3>
                                <p class="card__desc">Kelola daftar barang yang tersedia di sistem Anda. Tambahkan, edit, atau hapus barang sesuai kebutuhan untuk memperbarui inventaris Anda. Pastikan data barang selalu terorganisir dan up-to-date.</p>
                            </div>
                            </a>
                        </article>
                        <article class="card">
                            <a href="view/tabel/view_customer.php" class="card__link">
                            <div class="card__image">
                                <img src="assets/img/customer.webp" alt="customer" class="card__img">
                            </div>
                            <div class="card__info">
                                <h3 class="card__title">Manage Customer</h3>
                                <p class="card__desc">Atur data pelanggan Anda dengan mudah. Lihat, tambahkan, atau edit informasi pelanggan untuk menjaga hubungan yang baik dan memastikan pelayanan yang optimal. Kelola preferensi dan status pelanggan dengan cepat.</p>
                            </div>
                            </a>
                            
                        </article>
                    </div>
                </section>
             </main>
               <!-- ================= FOOTER ===================== -->
            <footer class="footer footer__bottom" id="footer">
                <div class="legal">
                    <span class="footer__CR">© 2024 All Right Shyy Reserved</span>
                </div>

                <div class="footer__social">
                    <a href="" class="footer__social-links">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="" class="footer__social-links">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </footer>

    
    <script src="dist/js/script.js?v=<?= filemtime('dist/js/script.js')?>"></script>
</body>
</html>