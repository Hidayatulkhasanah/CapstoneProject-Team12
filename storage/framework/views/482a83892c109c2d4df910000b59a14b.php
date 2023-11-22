<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Hafaa Tour & Travel - Beranda</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- logos -->
    <link href="<?php echo e(asset ('assets/img/logo.png')); ?>" rel="icon">
    <link href="<?php echo e(asset ('assets/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo e(asset ('assets/vendor/animate.css/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo e(asset ('assets/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('assets/css/custom.css')); ?>" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto">
                <a href="index.html">
                    <img src="assets/img/logo.png" alt="Logo HAFAATOUR">
                    HAFAATOUR
                </a>
            </h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#paket-wisata">Paket Wisata</a></li>
                    <li><a class="nav-link" href="javscript:void(0)">Tentang Kami</a></li>
                    <li><a class="getstarted" href="#about">Cari Paket Wisata</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active" style="background-image: url('assets/img/slide/slide-1.jpeg')">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Ayo temukan destinasi menarik dari kami
                            </h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lihat
                                Paket Wisata</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('assets/img/slide/slide-2.jpeg')">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url('assets/img/slide/slide-3.jpeg')">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </section>

    <main id="main">
        <section id="cta" class="cta">
            <div class="container">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Ayo pilih paket wisata yang kamu inginkan!</h3>
                        <p>Temukan paket wisata murah sesuai dengan destinasi dan harga yang kamu inginkan!</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle scrollto" href="#paket-wisata">Lihat Paket</a>
                    </div>
                </div>

            </div>
        </section>

        <section id="paket-wisata" class="paket-wisata">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="section-head-alpha">
                            <h2>Pilih Paket Wisata 💼</h2>
                            <p>Ayo pilih dan tentukan tempat wisata favorit sesuai keinginanmu!</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="package-btn text-lg-end">
                            <a href="javascript:void(0)" class="button-fill-primary">Lihat Keseluruhan Paket</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="package-card-alpha">
                            <div class="package-thumb">
                                <a href="javascript:void(0)"><img src="assets/img/gallery/tanah-lot.webp" alt=""></a>
                                <p class="card-lavel">
                                    <i class="bi bi-clock"></i> <span>3 Hari &amp; 2 Malam</span>
                                </p>
                            </div>
                            <div class="package-card-body">
                                <h3 class="p-card-title"><a href="javascript:void(0)">Tour & Gathering Tanah Lot -
                                        Liburan Akhir Tahun 2023 - 3D2N</a></h3>
                                <div class="p-card-bottom">
                                    <div class="book-btn">
                                        <a href="javascript:void(0)">Lihat Paket <i
                                                class="bx bxs-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="p-card-info">
                                        <span>Mulai dari</span>
                                        <h6>Rp 250.000<span>/Org</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="package-card-alpha">
                            <div class="package-thumb">
                                <a href="javascript:void(0)"><img src="assets/img/gallery/tangkubang-perahu.jpeg"
                                        alt=""></a>
                                <p class="card-lavel">
                                    <i class="bi bi-clock"></i> <span>3 Hari &amp; 2 Malam</span>
                                </p>
                            </div>
                            <div class="package-card-body">
                                <h3 class="p-card-title"><a href="javascript:void(0)">Tour & Gathering Bandung -
                                        Liburan Akhir Tahun 2023 - 3D2N</a></h3>
                                <div class="p-card-bottom">
                                    <div class="book-btn">
                                        <a href="javascript:void(0)">Lihat Paket <i
                                                class="bx bxs-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="p-card-info">
                                        <span>Mulai dari</span>
                                        <h6>Rp 150.000<span>/Org</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="package-card-alpha">
                            <div class="package-thumb">
                                <a href="javascript:void(0)"><img src="assets/img/gallery/candi-borobudur.webp"
                                        alt=""></a>
                                <p class="card-lavel">
                                    <i class="bi bi-clock"></i> <span>3 Hari &amp; 2 Malam</span>
                                </p>
                            </div>
                            <div class="package-card-body">
                                <h3 class="p-card-title"><a href="javascript:void(0)">Tour & Gathering Yogyakarta -
                                        Liburan Akhir Tahun 2023 - 3D2N</a></h3>
                                <div class="p-card-bottom">
                                    <div class="book-btn">
                                        <a href="javascript:void(0)">Lihat Paket <i
                                                class="bx bxs-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="p-card-info">
                                        <span>Mulai dari</span>
                                        <h6>Rp 150.000<span>/Org</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="package-card-alpha">
                            <div class="package-thumb">
                                <a href="javascript:void(0)"><img src="assets/img/gallery/tanah-lot.webp" alt=""></a>
                                <p class="card-lavel">
                                    <i class="bi bi-clock"></i> <span>3 Hari &amp; 2 Malam</span>
                                </p>
                            </div>
                            <div class="package-card-body">
                                <h3 class="p-card-title"><a href="javascript:void(0)">Tour & Gathering Tanah Lot -
                                        Liburan Akhir Tahun 2023 - 3D2N</a></h3>
                                <div class="p-card-bottom">
                                    <div class="book-btn">
                                        <a href="javascript:void(0)">Lihat Paket <i
                                                class="bx bxs-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="p-card-info">
                                        <span>Mulai dari</span>
                                        <h6>Rp 250.000<span>/Org</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="package-card-alpha">
                            <div class="package-thumb">
                                <a href="javascript:void(0)"><img src="assets/img/gallery/tangkubang-perahu.jpeg"
                                        alt=""></a>
                                <p class="card-lavel">
                                    <i class="bi bi-clock"></i> <span>3 Hari &amp; 2 Malam</span>
                                </p>
                            </div>
                            <div class="package-card-body">
                                <h3 class="p-card-title"><a href="javascript:void(0)">Tour & Gathering Bandung -
                                        Liburan Akhir Tahun 2023 - 3D2N</a></h3>
                                <div class="p-card-bottom">
                                    <div class="book-btn">
                                        <a href="javascript:void(0)">Lihat Paket <i
                                                class="bx bxs-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="p-card-info">
                                        <span>Mulai dari</span>
                                        <h6>Rp 150.000<span>/Org</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="package-card-alpha">
                            <div class="package-thumb">
                                <a href="javascript:void(0)"><img src="assets/img/gallery/candi-borobudur.webp"
                                        alt=""></a>
                                <p class="card-lavel">
                                    <i class="bi bi-clock"></i> <span>3 Hari &amp; 2 Malam</span>
                                </p>
                            </div>
                            <div class="package-card-body">
                                <h3 class="p-card-title"><a href="javascript:void(0)">Tour & Gathering Yogyakarta -
                                        Liburan Akhir Tahun 2023 - 3D2N</a></h3>
                                <div class="p-card-bottom">
                                    <div class="book-btn">
                                        <a href="javascript:void(0)">Lihat Paket <i
                                                class="bx bxs-right-arrow-alt"></i></a>
                                    </div>
                                    <div class="p-card-info">
                                        <span>Mulai dari</span>
                                        <h6>Rp 150.000<span>/Org</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer">
        <div class="container">
            <h3>Hafaatour</h3>
            <p>Temukan keindahan tersembunyi, mulailah petualanganmu!</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Hafaa</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Dibuat dengan ❤️ oleh Hafaatour</a>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo e(asset ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset ('assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
    <script src="<?php echo e(asset ('assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset ('assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset ('assets/vendor/php-email-form/validate.js')); ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo e(asset ('assets/js/main.js')); ?>"></script>

</body>

</html><?php /**PATH D:\Kuliah\Studi Independen\Capstone Project\resources\views/welcome.blade.php ENDPATH**/ ?>