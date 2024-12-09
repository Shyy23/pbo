<?php
require_once '../../control/customer/proses_customer.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galery</title>
  
    <!-- ================= FAVICON ===================== -->
    <link rel="shortcut icon" href="../assets/icon/icon-2/Galery.ico" type="image/x-icon">

    <!-- ================= FONT AWESOME ===================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css?v<?= time();?>">
    <!-- ================= REMIXICON ===================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css?v=<?= time();?>">
        
    <!-- ================= Hamburgers ===================== -->
    <link rel="stylesheet" href="../../dist/css/hamburgers.css?v=<?= time();?>">
    
    <!-- ================= CSS ===================== -->
    <link rel="stylesheet" href="../../dist/css/style.css?v=<?= filemtime('../../dist/css/style.css')?>">
    <link rel="stylesheet" href="../../dist/css/table.css?v=<?= filemtime('../../dist/css/table.css')?>">
</head>
<body id="body_customer">
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
                            <img src="../../assets/img/pp.jpg" alt="image" class="sidebar__img">
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
                                
                                <a href="../../home.php" class="sidebar__link ">
                                    <i class="fa-solid fa-chart-pie"></i>
                                    <span>Dashboard</span>
                                </a>
                                <a href="view_barang.php" class="sidebar__link ">
                                    <i class="fa-solid fa-box-archive"></i>
                                    <span>Manage Barang</span>
                                </a>
                                <a href="#" class="sidebar__link active-link">
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
                <section class="table">
                    <section class="table__header">
                    <div class="table__info">
                        <h1 class="title__table">Tabel Data Customer</h1>
                        </div>
                        <div class="table__fungsi">
                                <a  data-fungsi="add" href="../form/form_add.php?tabel=customer" class="add-btn"><i class="fa-solid fa-plus"></i></a>
                            <div class="export__file">
                                <label data-fungsi="export" for="export-file" class="fungsi"><i class="fa-solid fa-file-pdf"></i></label>
                                <input type="checkbox" id="export-file" name="export-file">
                                <div class="export__file-options">
                                    <label>Export As &nbsp; &#10140;</label>
                                    <label for="export-file" id="toPDF" onclick="window.print()">PDF <i class="fa-solid fa-file-pdf"></i></label>
                                    <label for="export-file">PDF <i class="fa-solid fa-file-pdf"></i></label>
                                    <label for="export-file">PDF <i class="fa-solid fa-file-pdf"></i></label>
                                    <label for="export-file">PDF <i class="fa-solid fa-file-pdf"></i></label>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="table__body">
                        <table id="table-customer">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Lokasi</th>
                                    <th>Pref</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="table-body-customer">
                                <?php foreach($customerManager->getCustomer() as $customer):?>
                                <tr class="tr">
                                <td class="td"><?= $customer['no']?></td>
                                <td class="td"><?= $customer['nama']?></td>
                                <td class="td"><?= $customer['contact']?></td>
                                <td class="td"><?= $customer['alamat']?></td>
                                <td class="td"><?= $customer['pref']?></td>
                                <td class="td">
                                    <a href="?hapus=<?= $customer['id']?>" class="btn btn-delete">Hapus</a>
                                </td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </section>
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

    
            <script src="../../dist/js/script.js?v=<?= filemtime('../../dist/js/script.js')?>"></script>
            <script src="../../dist/js/table.js?v=<?= filemtime('../../dist/js/table.js')?>"></script>
</body>
</html>