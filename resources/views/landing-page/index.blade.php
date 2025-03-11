<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Akademik PPLG SMKN 1 Cirebon</title>
    <meta name="description" content="Sistem Akademik PPLG SMKN 1 Cirebon - Platform manajemen akademik yang dilengkapi dengan fitur pengajuan izin dan absensi siswa secara digital untuk memudahkan pencatatan kehadiran dan perizinan siswa">
    <meta name="keywords" content="Sistem Akademik, PPLG, SMKN 1 Cirebon, Manajemen Akademik, Absensi, Izin, Digital, Pencatatan, Kehadiran, Perizinan">
    
    <!-- Favicons -->
    <link href="{{ asset('landing-page/img/logo.png') }}" rel="icon">
    <link href="{{ asset('landing-page/img/logo.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <img src="landing-page/img/logo.png" alt="">
                <h1 class="sitename">SMKN 1 CIREBON</h1>
            </a>
            <a class="btn-getstarted" href="{{ route('login') }}">Login</a>
        </div>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="container text-center">
                
            </div>
        </section>

        <!-- Services Section -->
        <section class="services section">
            <div class="container">
                <div class="row g-5">

                    <div class="col-lg-4 mx-auto" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item item-orange position-relative text-center">
                            <i class="bi bi-file-earmark-text icon"></i>
                            <div>
                                <h3>Login Siswa</h3>
                                <p>Login siswa untuk melihat jadwal ujikom</p>
                                <a href="{{ route('permit-requests.index') }}" class="read-more stretched-link">Login <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </section>
    </main>

    <footer id="footer" class="footer position-relative light-background">
        <div class="container copyright text-center mt-4">
            <p>&copy; <span>Copyright</span> <strong class="px-1 sitename">Sistem Akademik</strong> <span>All Rights Reserved</span></p>
        </div>
    </footer>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landing-page/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('landing-page/js/main.js') }}"></script>
</body>
</html>
