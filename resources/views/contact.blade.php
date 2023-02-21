@extends('layouts.header')

@section('content')

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!--Fin Page Preloder -->

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    <!-- Humberger Begin -->
        @include('layouts.countainermobile')
    <!-- Humberger End -->  

    <!-- Header Section Begin -->
    <header class="header">
        @include('layouts.countainer')
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>AGRO-ALIMEN SHOP</h2>
                        <div class="breadcrumb__option">
                            <a href="{{url('/')}}">Acceuil</a>
                            <span>Contactez Nous</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Télephone</h4>
                        <p>+212 512345678</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Adresse</h4>
                        <p>BP 244. FQUIH BEN SALAH, Maroc</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Open time</h4>
                        <p>09:00 - 16:00 </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p> support@agroalimen-shop.ma</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d26919.76801761165!2d-6.710071720510832!3d32.50020418227775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0xda46b0a6c9b61ff%3A0x71456f2b90188215!2sFkih%20Ben%20Salah!3m2!1d32.5009216!2d-6.6905458!5e0!3m2!1sfr!2sma!4v1657199752636!5m2!1sfr!2sma"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>Maroc</h4>
                <ul>
                    <li>Phone: +212 512345678</li>
                    <li>Add: BP 244. FQUIH BEN SALAH, Maroc</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Comment pouvons nous vous aider?</h2>
                    </div>
                </div>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Nom . Prénom">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="E-mail">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="N Télephone">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea placeholder="Message"></textarea>
                        <button type="submit" class="site-btn">ENVOYER</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        @include('layouts.footer')
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



    @endsection