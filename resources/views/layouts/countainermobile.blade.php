<div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">Total: <span>150.00 Mad</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="{{url('/')}}">Accueil</a></li>
                <li><a href="{{url('/produits')}}">Nos Produits</a>
                    <ul class="header__menu__dropdown">
                    @foreach($categories as $categorie)
                        <li><a href="{{url('/produits/'.$categorie->id)}}">{{ $categorie->name }}</a></li>
                    @endforeach
                    </ul>
                </li>
                <li><a href="{{url('/partenaires')}}">Partenaires</a></li>
                <li><a href="{{url('/contact')}}">Contact</a></li>
                <li><a href="{{url('/apropos')}}">A Propos</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
            <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
            <a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> support@agroalimen-shop.ma </li>
            </ul>
        </div>
    </div>