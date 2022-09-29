<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heal</title>
    <link rel="shortcut icon" href="{{asset('assets/css/favicon.png')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightcase.css')}}">

    <!-- main css for template -->
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
</head>

<body class="home-inner">

    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->



    <!-- ================> header section start here <================== -->
    <header class="header" id="navbar">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html"><img src="{{  asset('assets/images/logo/02.png')}}" alt="Heal"></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler--icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarNavAltMarkup">
                    <div class="menu">
                        <ul>
                            <li>
                                <a href="{{ route('main.index')}}" class="active">Blog</a>
                            </li>
                           
                        </ul>
                    </div>
                    @guest
                    <a href="{{ route('login') }}" class="default-btn move-right"><span>Login</span></a>
                    <a class="nav-link" href="{{ route('register') }}">Registration</a>
                    @else
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <input type="submit" class="default-btn move-right w-100 mb-0" value="Logout">
                    </form>
                    @endguest
                </div>
            </nav>
        </div>
    </header>
    <!-- ================> header section end here <================== -->

   @yield('content')
    <!-- ================> Social section start here <================== -->
    <div class="social-section">
        <div class="container">
            <div class="social">
                <ul>
                    <li class="social__list"><a href="#" class="social__name social-facebook"><span class="social__icon"><i class="fab fa-facebook-f"></i></span> <span>facebook</span></a></li>
                    <li class="social__list"><a href="#" class="social__name social-linkedin"><span class="social__icon"><i class="fab fa-linkedin-in"></i></span> <span>linkedin</span></a></li>
                    <li class="social__list"><a href="#" class="social__name social-pinterest"><span class="social__icon"><i class="fab fa-pinterest-p"></i></span> <span>pinterest</span></a></li>
                    <li class="social__list"><a href="#" class="social__name social-twitter"><span class="social__icon"><i class="fab fa-twitter"></i></span> <span>twitter</span></a></li>
                    <li class="social__list"><a href="#" class="social__name social-google"><span class="social__icon"><i class="fab fa-google-plus-g"></i></span> <span>google</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ================> Social section end here <================== -->


    <!-- ================> Footer section start here <================== -->
    <footer class="footer">
        <div class="footer__top padding--top padding--bottom">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer__logoarea">
                            <img src="assets/images/logo/02.png" alt="footer-logo">
                            <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora.</p>
                            <p>Uniquely morph superior customer service whereas scalable.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer__post footer-title">
                            <h3>Recent Post</h3>
                            <ul>
                                <li>
                                    <div class="footer__postthumb">
                                        <a href="blog-single.html"><img src="assets/images/footer/post/01.jpg" alt="footer-postthumb"></a>
                                    </div>
                                    <div class="footer__postcontent">
                                        <a href="blog-single.html"><h6>Nam nec tellus a odio.</h6></a>
                                        <p><i class="far fa-clock"></i> Time: 02:00 pm</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__postthumb">
                                        <a href="blog-single.html"><img src="assets/images/footer/post/02.jpg" alt="footer-postthumb"></a>
                                    </div>
                                    <div class="footer__postcontent">
                                        <a href="blog-single.html"><h6>Uniquely impact focused..</h6></a>
                                        <p><i class="far fa-clock"></i> Time: 02:00 pm</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__postthumb">
                                        <a href="blog-single.html"><img src="assets/images/footer/post/03.jpg" alt="footer-postthumb"></a>
                                    </div>
                                    <div class="footer__postcontent">
                                        <a href="blog-single.html"><h6>Nam nec tellus a odio.</h6></a>
                                        <p><i class="far fa-clock"></i> Time: 02:00 pm</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer__gallery footer-title">
                            <h3>Gallery Post</h3>
                            <ul>
                                <li>
                                    <div class="footer__gallerythumb">
                                        <a href="assets/images/footer/gallery/01.jpg" data-rel="lightcase"><img src="assets/images/footer/gallery/01.jpg" alt="footer-gallerythumb"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__gallerythumb">
                                        <a href="assets/images/footer/gallery/02.jpg" data-rel="lightcase"><img src="assets/images/footer/gallery/02.jpg" alt="footer-gallerythumb"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__gallerythumb">
                                        <a href="assets/images/footer/gallery/03.jpg" data-rel="lightcase"><img src="assets/images/footer/gallery/03.jpg" alt="footer-gallerythumb"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__gallerythumb">
                                        <a href="assets/images/footer/gallery/04.jpg" data-rel="lightcase"><img src="assets/images/footer/gallery/04.jpg" alt="footer-gallerythumb"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__gallerythumb">
                                        <a href="assets/images/footer/gallery/05.jpg" data-rel="lightcase"><img src="assets/images/footer/gallery/05.jpg" alt="footer-gallerythumb"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__gallerythumb">
                                        <a href="assets/images/footer/gallery/06.jpg" data-rel="lightcase"><img src="assets/images/footer/gallery/06.jpg" alt="footer-gallerythumb"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__gallerythumb">
                                        <a href="assets/images/footer/gallery/07.jpg" data-rel="lightcase"><img src="assets/images/footer/gallery/07.jpg" alt="footer-gallerythumb"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__gallerythumb">
                                        <a href="assets/images/footer/gallery/08.jpg" data-rel="lightcase"><img src="assets/images/footer/gallery/08.jpg" alt="footer-gallerythumb"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer__gallerythumb">
                                        <a href="assets/images/footer/gallery/09.jpg" data-rel="lightcase"><img src="assets/images/footer/gallery/09.jpg" alt="footer-gallerythumb"></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="footer__info footer-title">
                            <h3>Contact Info</h3>
                            <p>Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
                            <ul>
                                <li><i class="fas fa-home"></i> 13/2 Elizabeth St, Dimond steet Inner distric Road.</li>
                                <li><i class="fas fa-phone-alt"></i> +880 1234567895 +880 9874321457</li>
                                <li><i class="fas fa-envelope"></i> contact@yourmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-6 col-12">
                        <div class="footer__copyright">
                            <p>&copy; Heal 2021, All Right Reserves | Powered By <a href="https://themeforest.net/user/codexcoder">CodexCoder</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="footer__social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================> Footer section end here <================== -->


    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="fas fa-arrow-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
    <!-- scrollToTop ending here -->



    

    <!-- vendor plugins -->
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <!-- <script src="{{asset('assets/js/parallax.min.js')}}"></script> -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/all.min.js')}}"></script>
    <script src="{{asset('assets/js/swiper.min.js')}}"></script>
    <script src="{{asset('assets/js/lightcase.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>