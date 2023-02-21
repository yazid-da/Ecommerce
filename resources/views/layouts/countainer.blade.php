<div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{asset('http://127.0.0.1:8000')}}"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
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
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">Total: <span>150.00 Mad</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
</div>