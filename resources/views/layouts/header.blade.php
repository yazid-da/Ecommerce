<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agro-Alimen Shop</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
</head>

<body>
    <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="header__top__left">
                                <ul>
                                    <li><i class="fa fa-envelope"></i> support@agroalimen-shop.ma </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="header__top__right">
                                <div class="header__top__right__social">
                                    <a href="https://facebook.com/"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                                    <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                                @guest
                                    @if (Route::has('login'))
                                <div class="header__top__right__auth">
                                    <a href="{{ route('login') }}"><i class="fa fa-user"></i> {{ __('Se Connecter') }}</a>
                                </div>
                                    @endif

                                    @if (Route::has('register'))
                                    <div class="header__top__right__auth">
                                        <a href="{{ route('register') }}"> / {{ __('Inscrire') }}</a>
                                    </div>
                                    @endif
                                    @else   
                                <div class="header__top__right__auth">
                                        <div class="auth_user">
                                            {{ Auth::user()->name }}
                                        </div>
                                </div>
                                <div class="header__top__right__auth">
                                        <button class="logout_btn"  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Se déconnecter') }}
                                        </button>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </div>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <main class="py-4">
                @yield('content')
            </main>


</body>