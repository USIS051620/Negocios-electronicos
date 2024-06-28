<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Iris Accesorios</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">

        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="home_black_version">
        <header class="header_area header_black">
            <!-- header top starts -->
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="social_icone">
                                <ul>
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-right">
                                <ul>
                                    <li class="language">
                                        <a href="#">Español <i class="ion-chevron-down"></i></a>
                                        <ul class="dropdown_language">
                                            <li><a href="#">Ingles</a></li>
                                        </ul>
                                    </li>
                                    <li class="currency">
                                        <a href="#">Pago <i class="ion-chevron-down"></i></a>
                                        <ul class="dropdown_currency">
                                            <li><a href="#">USD - Dolar</a></li>
                                            <li><a href="#">EUR - Euro</a></li>
                                        </ul>
                                    </li>
                                    <li class="top_links">
                                        <a href="#">Mi Cuenta <i class="ion-chevron-down"></i></a>
                                        <ul class="dropdown_links">
                                            @if (Auth::check())
                                            <li>{{ Auth::user()->name }}</li>
                                            <li><a href="#">Verificar</a></li>
                                            <li><a href="#">Mi Cuenta</a></li>
                                            <li><a href="#">Carro de Compras</a></li>
                                            <li><a href="#">Lista de Deseos</a></li>
                                            <li>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                                            </li>
                                            @else
                                            <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                                            @endif
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top ends -->

            <!-- header middle starts -->
            <div class="header_middel">
                <div class="container">
                    <div class="row align-items-center">
                        
                        <div class="col-lg-2 col-md-3 col-4">
                            <div  class="logo">
                                <a href="index.html"><img style="border-radius: 20px; width: 80px; margin-bottom: 10px; margin-top: 10px" src="images/logo/iris.png" alt=""></a>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="home_contact">
                                <div class="contact_icone">
                                    <img  src="images/icon/icon_phone.png" alt="">
                                </div>
                                <div class="contact_box">
                                    <p>Consulta / Línea de ayuda : <a href="tel: 1234567894">1234567890</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-7 col-6">
                            <div class="middel_right">
                                <div class="search_btn">
                                    <!-- <a href="#"><i class="ion-ios-search-strong"></i></a> -->
                                    <div class="dropdown_search">
                                        <form action="#">
                                            <input type="text" placeholder="Search Product ....">
                                            <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="wishlist_btn">
                                    <a href="#"><i class="ion-heart"></i></a>
                                </div>
                                <div class="cart_link">
                                    
                                    

                                            @if (Auth::check())
                                            <a href="#"><i class="ion-android-cart"></i></a>
                                            <span class="cart_quantity">2</span>
                                            @else
                                                <a href="{{ route('login') }}">Iniciar Sesión</a>
                                            @endif

                                    <!-- mini cart -->
                                    @if (Auth::check())
                                    <div class="mini_cart">
                                        <div class="cart_close">
                                            <div class="cart_text">
                                                <h3>cart</h3>
                                            </div>
                                            <div class="mini_cart_close">
                                                <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_item">
                                            <div class="cart_img">
                                                <a href="#"><img src="images/nav-product/product.jpg" alt=""></a>
                                            </div>
                                            <div class="cart_info">
                                                <a href="#">Anillo</a>
                                                <span class="quantity">Cantidad : 1</span>
                                                <span class="price_cart">$ 12,59</span>
                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_item">
                                            <div class="cart_img">
                                                <a href="#"><img src="images/nav-product/product2.jpg" alt=""></a>
                                            </div>
                                            <div class="cart_info">
                                                <a href="#">Aretes</a>
                                                <span class="quantity">Cantidad : 1</span>
                                                <span class="price_cart">$ 10,99</span>
                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_total">
                                            <span>Subtotal : </span>
                                            <span>$ 23.58</span>
                                        </div>
                                        <div class="mini_cart_footer">
                                            <div class="cart_button view_cart">
                                                <a href="#">Ver Carrito</a>
                                            </div>
                                            <div class="cart_button checkout">
                                                <a href="#" class="active">Verificar</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <!-- mini cart ends  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- header middle ends -->

            <!-- header bottom starts -->

            <div class="header_bottom sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="main_menu_inner">
                                <div class="logo_sticky">
                                    <a href="#"><img style="border-radius: 20px; width: 80px; margin-bottom: 10px; margin-top: 10px" src="images/logo/iris.png" alt="logo"></a>
                                </div>
                                <div class="main_menu">
                                    <nav>
                                        <ul>
                                            <li class="active">
                                                <a href="index.html">Inicio<i class="ion-chevron-down"></i></a>
                                                <ul class="sub_menu">
                                                    <li><a href="#">Banner</a></li>
                                                    <li><a href="#">Presentado</a></li>
                                                    <li><a href="#">Colección</a></li>
                                                    <li><a href="#">Más vendido</a></li>
                                                    <li><a href="#">Noticias</a></li>
                                                    <li><a href="#">Blog</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Categoría<i class="ion-chevron-down"></i></a>
                                                <ul class="mega_menu">
                                                    <li>
                                                        <a href="#">Mujer</a>
                                                        <ul>
                                                            <li><a href="#">Aretes</a></li>
                                                            <li><a href="#">Colgante</a></li>
                                                            <li><a href="#">Anillo</a></li>
                                                            <li><a href="#">Cadena</a></li>
                                                            <li><a href="#">Pulsera</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Hombre</a>
                                                        <ul>
                                                            <li><a href="#">Anillo</a></li>
                                                            <li><a href="#">Colgante</a></li>
                                                            <li><a href="#">Pulsera</a></li>
                                                            <li><a href="#">Cadenas</a></li>
                                                            <li><a href="#">Piedra Preciosa</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Otro</a>
                                                        <ul>
                                                            <li><a href="#">Platino</a></li>
                                                            <li><a href="#">Plata</a></li>
                                                            <li><a href="#">Monedas</a></li>
                                                            <li><a href="#">Tarjeta de Regalo</a></li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Diamantes sin cortar <i class="ion-chevron-down"></i></a>
                                                <ul class="sub_menu pages">
                                                    <li><a href="#">Aretes</a></li>
                                                    <li><a href="#">Colgante</a></li>
                                                    <li><a href="#">Anillo</a></li>
                                                    <li><a href="#">Pulsera</a></li>
                                                    <li><a href="#">Conjunto De Collar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="nosotros.html">Sobre nosotros</a></li>
                                            <li>
                                                <a href="#">Colección especial<i class="ion-chevron-down"></i></a>
                                                <ul class="sub_menu pages">
                                                    <li><a href="#">Piedra Preciosa</a></li>
                                                    <li><a href="#">Oro</a></li>
                                                    <li><a href="#">Oro Rosa</a></li>
                                                    <li><a href="#">Plata</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header bottom ends -->
        </header>

        <!-- slider section starts -->
        <div class="slider_area slider_black owl-carousel">
            <div class="single_slider" data-bgimg="images/slider/1.png">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="slider_content">
                                <p>Oferta Exclusiva -20% De Descuento Esta Semana 2024</p>
                                <h1>Collar</h1>
                                <span>Collar de oro de 22 quilates para boda.</span>
                                <p class="slider_price">A partir De: <span>$ 25,99</span></p>
                                <a href="#" class="button">COMPRA AHORA</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="single_slider" data-bgimg="images/slider/2.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="slider_content">
                                <p>Oferta Exclusiva -40% De Descuento Esta Semana 2024</p>
                                <h1>Aretes y Colgante</h1>
                                <span>Conjunto de novia completo con perlas blancas.</span>
                                <p class="slider_price">A partir De: <span>$ 35,50</span></p>
                                <a href="#" class="button">COMPRAR AHORA</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="single_slider" data-bgimg="images/slider/3.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="slider_content">
                                <p>Oferta Exclusiva -10% De Descuento Esta Semana 2024</p>
                                <h1>Anillos De Boda</h1>
                                <span>Alianzas de boda especiales para parejas.</span>
                                <p class="slider_price">A partir De: <span>$ 35,50</span></p>
                                <a href="#" class="button">COMPRA AHORA</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- slider section ends -->
        <!-- banner section starts -->
        <section class="banner_section banner_black">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="images/banner/bg-1.jpg" alt="banner1"></a>
                                <div class="banner_content">
                                    <p>Nuevo Diseño</p>
                                    <h2>Anillos de diseño pequeño</h2>
                                    <span>Venta 20% </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="images/banner/bg-2.jpg" alt="banner2"></a>
                                <div class="banner_content">
                                    <p>Anillos más vendidos</p>
                                    <h2>Anillos de oro blnaco</h2>
                                    <span>Venta 10% </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="images/banner/bg-3.jpg" alt="banner3"></a>
                                <div class="banner_content">
                                    <p>Anillos destacados</p>
                                    <h2>Anillos de platino</h2>
                                    <span>Venta 30% </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner section ends -->
        <!-- product section area starts  -->

        <section class="product_section p_section1 product_black_section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product_area">
                            <div class="product_tab_button">
                                <ul class="nav" role="tablist">
                                    <li>
                                        <a href="#featured" class="active" data-toggle="tab" role="tab"
                                            aria-controls="featured" aria-selected="true">Presentado</a>
                                    </li>
                                    <li>
                                        <a href="#arrivals" data-toggle="tab" role="tab" aria-controls="arrivals"
                                            aria-selected="false">Los recién llegados</a>
                                    </li>
                                    <li>
                                        <a href="#onsale" data-toggle="tab" role="tab" aria-controls="onsale"
                                            aria-selected="false">En Venta</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="featured" role="tabpane1">
                                    <div class="product_container">
                                        <div class="custom-row product_column3">
                                            @foreach($productos as $producto)
                                            @if ($producto->estado !== 'featured')
                                                @continue
                                            @endif
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="{{ asset('imagenes/product/' . json_decode($producto->portadas)[0]) }}" alt="{{ $producto->nombre }}"></a>
                                                        @if(count(json_decode($producto->portadas)) > 1)
                                                            <a href="#" class="secondary_img"><img src="{{ asset('imagenes/product/' . json_decode($producto->portadas)[1]) }}" alt="{{ $producto->nombre }}"></a>
                                                        @endif
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view" data-producto-id="{{ $producto->id }}">Vista Rápida</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Collar con una cruz.</a>
                                                        </div>
                                                        <h3><a href="#">{{ $producto->nombre }}</a></h3>
                                                        <div class="price_box">
                                                            @if($producto->descuento)
                                                                <span class="old_price">{{ $producto->precio }}</span>
                                                                <span class="current_price">{{ $producto->precio - $producto->descuento }}</span>
                                                            @else
                                                                <span class="current_price">{{ $producto->precio }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>{{ $producto->descripcion }}</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Añadir A La Cesta</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="arrivals" role="tabpane1">
                                    <div class="product_container">
                                        <div class="custom-row product_column3">
                                            @foreach($productos as $producto)
                                            @if ($producto->estado !== 'arrivals')
                                                @continue
                                            @endif
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img"><img src="{{ asset('imagenes/product/' . json_decode($producto->portadas)[0]) }}" alt="{{ $producto->nombre }}"></a>
                                                        @if(count(json_decode($producto->portadas)) > 1)
                                                            <a href="#" class="secondary_img"><img src="{{ asset('imagenes/product/' . json_decode($producto->portadas)[1]) }}" alt="{{ $producto->nombre }}"></a>
                                                        @endif
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view" data-producto-id="{{ $producto->id }}">Vista Rápida</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">Collar con una cruz.</a>
                                                        </div>
                                                        <h3><a href="#">{{ $producto->nombre }}</a></h3>
                                                        <div class="price_box">
                                                            @if($producto->descuento)
                                                                <span class="old_price">{{ $producto->precio }}</span>
                                                                <span class="current_price">{{ $producto->precio - $producto->descuento }}</span>
                                                            @else
                                                                <span class="current_price">{{ $producto->precio }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>{{ $producto->descripcion }}</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                <li><a href="#" data-placement="top"
                                                                            title="Add to Wishlist"
                                                                            data-toggle="tooltip"><span
                                                                                class="ion-heart"></span></a></li>
                                                                    <li class="add_to_cart"><a href="#"
                                                                            title="Add to Cart">Añadir A La Cesta</a></li>
                                                                    <li><a href="#" title="Compare"><i
                                                                                class="ion-ios-settings-strong"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="onsale" role="tabpane1">
                                    <div class="product_container">
                                        <div class="custom-row product_column3">
                                            @foreach($productos as $producto)
                                                @if ($producto->estado !== 'onsales')
                                                    @continue
                                                @endif
                                                <div class="custom-col-5">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                            <a href="#" class="primary_img"><img src="{{ asset('imagenes/product/' . json_decode($producto->portadas)[0]) }}" alt="{{ $producto->nombre }}"></a>
                                                            @if(count(json_decode($producto->portadas)) > 1)
                                                                <a href="#" class="secondary_img"><img src="{{ asset('imagenes/product/' . json_decode($producto->portadas)[1]) }}" alt="{{ $producto->nombre }}"></a>
                                                            @endif
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view" data-producto-id="{{ $producto->id }}">Vista Rápida</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <div class="tag_cate">
                                                                <a href="#">Collar con una cruz.</a>
                                                            </div>
                                                            <h3><a href="#">{{ $producto->nombre }}</a></h3>
                                                            <div class="price_box">
                                                                @if($producto->descuento)
                                                                    <span class="old_price">{{ $producto->precio }}</span>
                                                                    <span class="current_price">{{ $producto->precio - $producto->descuento }}</span>
                                                                @else
                                                                    <span class="current_price">{{ $producto->precio }}</span>
                                                                @endif
                                                            </div>
                                                            <div class="product_hover">
                                                                <div class="product_ratings">
                                                                    <ul>
                                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product_desc">
                                                                    <p>{{ $producto->descripcion }}</p>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                    <li><a href="#" data-placement="top"
                                                                                title="Add to Wishlist"
                                                                                data-toggle="tooltip"><span
                                                                                    class="ion-heart"></span></a></li>
                                                                        <li class="add_to_cart"><a href="#"
                                                                                title="Add to Cart">Añadir A La Cesta</a></li>
                                                                        <li><a href="#" title="Compare"><i
                                                                                    class="ion-ios-settings-strong"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- product section area sends -->

        <!-- banner full width start -->
        <section class="banner_fullwidth black_fullwidth">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="banner_text">
                            <p>Oferta de descuento del 20 % en todos los productos</p>
                            <h2>Nueva Colección De Tendencias</h2>
                            <span>El mejor diseño te hace más especial.</span>
                            <a href="#">COMPRA AHORA</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner full width end -->

        <!-- product section area starts  -->
        <section class="product_section p_section1 product_black_section bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title">
                            <h2>Productos Más Vendidos</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="product-area">
                            <div class="product_container bottom">
                                <div class="custom-row product_row1">
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/71.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/72.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Vista Rápida</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Ring, Necklace,</a>
                                                    <a href="#">Earrings</a>
                                                </div>
                                                <h3><a href="#">Necklace Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$ 15</span>
                                                    <span class="current_price">$ 10</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>This is a gold ring with diamond and Lorem ipsum
                                                            dolor sit amet.</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Añadir A La Cesta</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/4.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/5.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Vista Rápida</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Ring, Necklace,</a>
                                                    <a href="#">Earrings</a>
                                                </div>
                                                <h3><a href="#">Necklace Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$ 12</span>
                                                    <span class="current_price">$ 10</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>This is a gold ring with diamond and Lorem ipsum
                                                            dolor sit amet.</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Añadir A La Cesta</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/10.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/11.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Vista Rápida</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Ring, Necklace,</a>
                                                    <a href="#">Earrings</a>
                                                </div>
                                                <h3><a href="#">Necklace Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$ 15</span>
                                                    <span class="current_price">$ 10</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>This is a gold ring with diamond and Lorem ipsum
                                                            dolor sit amet.</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Añadir A La Cesta</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/24.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/22.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Vista Rápida</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Ring, Necklace,</a>
                                                    <a href="#">Earrings</a>
                                                </div>
                                                <h3><a href="#">Necklace Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$ 12</span>
                                                    <span class="current_price">$ 8</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>This is a gold ring with diamond and Lorem ipsum
                                                            dolor sit amet.</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Añadir A La Cesta</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/26.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/27.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Vista Rápida</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Ring, Necklace,</a>
                                                    <a href="#">Earrings</a>
                                                </div>
                                                <h3><a href="#">Necklace Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$ 16</span>
                                                    <span class="current_price">$ 11</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>This is a gold ring with diamond and Lorem ipsum
                                                            dolor sit amet.</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Añadir A La Cesta</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/28.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/29.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Vista Rápida</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Ring, Necklace,</a>
                                                    <a href="#">Earrings</a>
                                                </div>
                                                <h3><a href="#">Necklace Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$ 12</span>
                                                    <span class="current_price">$ 10</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>This is a gold ring with diamond and Lorem ipsum
                                                            dolor sit amet.</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Añadir A La Cesta</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/32.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/33.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Vista Rápida</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Ring, Necklace,</a>
                                                    <a href="#">Earrings</a>
                                                </div>
                                                <h3><a href="#">Necklace Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$ 15</span>
                                                    <span class="current_price">$ 10</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>This is a gold ring with diamond and Lorem ipsum
                                                            dolor sit amet.</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Añadir A La Cesta</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/34.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/35.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Vista Rápida</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Ring, Necklace,</a>
                                                    <a href="#">Earrings</a>
                                                </div>
                                                <h3><a href="#">Necklace Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$ 12</span>
                                                    <span class="current_price">$ 10</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>This is a gold ring with diamond and Lorem ipsum
                                                            dolor sit amet.</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Añadir A La Cesta</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/38.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/39.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Vista Rápida</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Ring, Necklace,</a>
                                                    <a href="#">Earrings</a>
                                                </div>
                                                <h3><a href="#">Necklace Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$ 15</span>
                                                    <span class="current_price">$ 10</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>This is a gold ring with diamond and Lorem ipsum
                                                            dolor sit amet.</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Añadir A La Cesta</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/40.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/41.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Vista Rápida</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <a href="#">Ring, Necklace,</a>
                                                    <a href="#">Earrings</a>
                                                </div>
                                                <h3><a href="#">Necklace Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$ 15</span>
                                                    <span class="current_price">$ 12</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>This is a gold ring with diamond and Lorem ipsum
                                                            dolor sit amet.</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Añadir A La Cesta</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-col-5">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img"><img src="images/product/42.jpg"
                                                        alt="product1"></a>
                                                <a href="#" class="secondary_img"><img src="images/product/43.jpg"
                                                        alt="product1"></a>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"
                                                        data-placement="top" data-original-title="quick view">Vista Rápida</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="tag_cate">
                                                    <!-- make this corection in all products above -->
                                                    <a href="#">Ring, Necklace,</a>
                                                    <a href="#">Earrings</a>
                                                </div>
                                                <h3><a href="#">Necklace Set</a></h3>
                                                <div class="price_box">
                                                    <span class="old_price">$ 15</span>
                                                    <span class="current_price">$ 10</span>
                                                </div>
                                                <div class="product_hover">
                                                    <div class="product_ratings">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product_desc">
                                                        <p>This is a gold ring with diamond and Lorem ipsum
                                                            dolor sit amet.</p>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li><a href="#" data-placement="top" title="Add to Wishlist"
                                                                    data-toggle="tooltip"><span
                                                                        class="ion-heart"></span></a></li>
                                                            <li class="add_to_cart"><a href="#" title="Add to Cart">Añadir A La Cesta</a></li>
                                                            <li><a href="#" title="Compare"><i
                                                                        class="ion-ios-settings-strong"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product section area ends  -->
        <!-- blog section starts -->
        <section class="blog_section blog_black">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title">
                            <h2>Actualizaciones de Iris Accesorios</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="blog_wrapper blog_column3 owl-carousel">
                        <div class="col-lg-4">
                            <div class="single_blog">
                                <div class="blog_thumb">
                                    <a href="#"><img src="images/blog/4.jpg" alt="blog 4"></a>
                                </div>
                                <div class="blog_content">
                                    <h3><a href="#">Earrings for Navratri</a></h3>
                                    <div class="author_name">
                                        <p>
                                            <span>Por</span>
                                            <span class="themes">Iris Accesorios</span>
                                            <span class="post_by">/ 4 Enero 2024</span>
                                        </p>
                                    </div>

                                    <div class="post_desc">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt fugit commodi
                                            quo eligendi laudantium quisquam, magnam hic numquam fuga illum sed aperiam
                                            sint, expedita dolor.</p>
                                    </div>
                                    <div class="read_more">
                                        <a href="#">Continuar leyendo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_blog">
                                <div class="blog_thumb">
                                    <a href="#"><img src="images/blog/1.jpg" alt="blog 1"></a>
                                </div>
                                <div class="blog_content">
                                    <h3><a href="#">Pendant for engagement</a></h3>
                                    <div class="author_name">
                                        <p>
                                            <span>Por</span>
                                            <span class="themes">Iris Accesorios</span>
                                            <span class="post_by">/ 3 Enero 2024</span>
                                        </p>
                                    </div>

                                    <div class="post_desc">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt fugit commodi
                                            quo eligendi laudantium quisquam, magnam hic numquam fuga illum sed aperiam
                                            sint, expedita dolor.</p>
                                    </div>
                                    <div class="read_more">
                                        <a href="#">Continuar leyendo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_blog">
                                <div class="blog_thumb">
                                    <a href="#"><img src="images/blog/2.jpg" alt="blog 2"></a>
                                </div>
                                <div class="blog_content">
                                    <h3><a href="#">Engagement Couple Rings</a></h3>
                                    <div class="author_name">
                                        <p>
                                            <span>Por</span>
                                            <span class="themes">Iris Accesorios</span>
                                            <span class="post_by">/ 2 Enero 2024</span>
                                        </p>
                                    </div>

                                    <div class="post_desc">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt fugit commodi
                                            quo eligendi laudantium quisquam, magnam hic numquam fuga illum sed aperiam
                                            sint, expedita dolor.</p>
                                    </div>
                                    <div class="read_more">
                                        <a href="#">Continuar leyendo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_blog">
                                <div class="blog_thumb">
                                    <a href="#"><img src="images/blog/3.jpg" alt="blog 3"></a>
                                </div>
                                <div class="blog_content">
                                    <h3><a href="#">Earrings for Party</a></h3>
                                    <div class="author_name">
                                        <p>
                                            <span>Por</span>
                                            <span class="themes">Iris Accesorios</span>
                                            <span class="post_by">/ 5 Enero 2024</span>
                                        </p>
                                    </div>

                                    <div class="post_desc">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt fugit commodi
                                            quo eligendi laudantium quisquam, magnam hic numquam fuga illum sed aperiam
                                            sint, expedita dolor.</p>
                                    </div>
                                    <div class="read_more">
                                        <a href="#">Continuar leyendo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog section ends -->

        <hr>
        <br><br><br>

        <!-- instagram section starts -->
        <div class="instagram">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title">
                            <h2>Publicaciones de Iris Accesorios</h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                        <div class="instagram__item set-bg" data-bgimg="images/instagram/icono.jpg">
                            <div class="instagram__text">
                                <i class="ion-social-instagram"></i>
                                <a href="#">@ Iris Accesorios</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                        <div class="instagram__item set-bg" data-bgimg="images/instagram/icono.jpg">
                            <div class="instagram__text">
                                <i class="ion-social-instagram"></i>
                                <a href="#">@ Iris Accesorios</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                        <div class="instagram__item set-bg" data-bgimg="images/instagram/icono.jpg">
                            <div class="instagram__text">
                                <i class="ion-social-instagram"></i>
                                <a href="#">@ Iris Accesorios</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                        <div class="instagram__item set-bg" data-bgimg="images/instagram/icono.jpg">
                            <div class="instagram__text">
                                <i class="ion-social-instagram"></i>
                                <a href="#">@ Iris Accesorios</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                        <div class="instagram__item set-bg" data-bgimg="images/instagram/icono.jpg">
                            <div class="instagram__text">
                                <i class="ion-social-instagram"></i>
                                <a href="#">@ Iris Accesorios</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                        <div class="instagram__item set-bg" data-bgimg="images/instagram/icono.jpg">
                            <div class="instagram__text">
                                <i class="ion-social-instagram"></i>
                                <a href="#">@ Iris Accesorios</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- instagram section  ends-->

        <!-- subscribe section starts -->
        <div class="newsletter_area newsletter_black">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="newsletter_content">
                            <h2>Suscríbete a las revistas Iris Accesorios</h2>
                            <p>Reciba por correo electrónico todas las actualizaciones sobre nuestras últimas y ofertas especiales.</p>
                            <div class="subscibe_form">
                                <form class="footer-newsletter">
                                    <input type="email" placeholder="Correo electrónico ..." autocapitalize="off"
                                        autocomplete="off">
                                    <button>Subscríbete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- subscribe section ends -->
        <!-- banner area starts  -->
        <section class="banner_section banner_section_five">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12">
                        <div class="port-box">
                            <div class="text-overlay">
                                <h1>New Arrivals 2024</h1>
                                <p>Crown for wife</p>
                            </div>
                            <img src="images/banner/1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="port-box">
                            <div class="text-overlay">
                                <h1>Featured Products 2024</h1>
                                <p>Pendant for Valentine</p>
                            </div>
                            <img src="images/banner/2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner area ends -->

        <!-- footer section starts -->
        <footer class="footer_widgets footer_black">
            <div class="container">
                <div class="footer_top">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="widgets_container contact_us">
                                <h3>Acerca de Iris Accesorios:</h3>
                                <div class="footer_contact">
                                    <p>Dirección : Usulután, El Salvador</p>
                                    <p>Teléfono : <a href="tel:(+503)0000-0000">(+503)0000-0000</a></p>
                                    <p>Email : irisaccesorios@gmail.com</p>
                                    <ul>
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                        <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-4 col-6">
                            <div class="widgets_container widget_menu">
                                <h3>Información:</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="nosotros.html">Acerca de nosotros</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="contacto.html">Contacto</a></li>
                                        <li><a href="#">Servicios</a></li>
                                        <li><a href="#">Colección</a></li>
                                        <li><a href="#">Portafolio</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-5 col-6">
                            <div class="widgets_container widget_menu">
                                <h3>Mi Cuenta:</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="#">Mi Cuenta</a></li>
                                        <li><a href="#">Contacto</a></li>
                                        <li><a href="#">Lista de deseos</a></li>
                                        <li><a href="#">Portafolio</a></li>
                                        <li><a href="#">Verificar</a></li>
                                        <li><a href="#">Preguntas Frecuentes</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-7">
                            <div class="widgets_container product_widget">
                                <h3>Productos Mejor Valorados:</h3>
                                <div class="simple_product">
                                    <div class="simple_product_items">
                                        <div class="simple_product_thumb">
                                            <a href="#"><img src="images/product/14.jpg" alt=""></a>
                                        </div>
                                        <div class="simple_product_content">
                                            <div class="tag_cate">
                                                <a href="#">Women,</a>
                                                <a href="#">Earrings</a>
                                            </div>
                                            <div class="product_name">
                                                <h3><a href="#">Bracelet</a></h3>
                                            </div>
                                            <div class="product_price">
                                                <span class="old_price">$ 15</span>
                                                <span class="current_price">$ 10</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simple_product_items">
                                        <div class="simple_product_thumb">
                                            <a href="#"><img src="images/product/28.jpg" alt=""></a>
                                        </div>
                                        <div class="simple_product_content">
                                            <div class="tag_cate">
                                                <a href="#">Women,</a>
                                                <a href="#">Earrings</a>
                                            </div>
                                            <div class="product_name">
                                                <h3><a href="#">Ring</a></h3>
                                            </div>
                                            <div class="product_price">
                                                <span class="old_price">$ 12</span>
                                                <span class="current_price">$ 8</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright_area">
                                <p>Copyright &copy; 2024 <a href="#">Iris Accesorios</a> All rights Reserved.</p>
                                <img src="images/icon/papyel2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </footer>
        <!-- footer section ends -->
    </div>

    <!-- modal section starts -->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="images/product/70.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="images/product/71.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="images/product/72.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="images/product/73.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a href="#tab1" class="nav-link active" data-toggle="tab" role="tab"
                                                    aria-controls="tab1" aria-selected="false"><img
                                                        src="images/product/70.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a href="#tab2" class="nav-link" data-toggle="tab" role="tab"
                                                    aria-controls="tab2" aria-selected="false"><img
                                                        src="images/product/71.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a href="#tab3" class="nav-link button_three" data-toggle="tab"
                                                    role="tab" aria-controls="tab3" aria-selected="false"><img
                                                        src="images/product/72.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a href="#tab4" class="nav-link" data-toggle="tab" role="tab"
                                                    aria-controls="tab4" aria-selected="false"><img
                                                        src="images/product/73.jpg" alt=""></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Women's Necklace</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">Rs. 51164</span>
                                        <span class="old_price">Rs. 54164</span>
                                    </div>
                                    <div class="see_all">
                                        <a href="#">See All Features</a>
                                    </div>
                                    <div class="modal_add_to_cart mb-15">
                                        <form action="#">
                                            <input type="number" min="0" max="100" step="1">
                                            <button type="submit">Add To Cart</button>
                                        </form>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus quibusdam
                                            nisi voluptas consequatur tempora, recusandae nemo blanditiis eaque odit
                                            voluptatibus voluptatem, ipsa incidunt fugiat a.</p>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this Product</h2>
                                        <ul>
                                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                            <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                            <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- JavaScript Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script src="main.js"></script>
    </body>
</html>
