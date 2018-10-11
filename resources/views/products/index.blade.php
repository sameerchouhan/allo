@extends('layouts.application.template')

@section('title', 'Vente Pièces Détachées électroménager et Accessoires')
@section('keywords', 'piece, bosch, whirlpool, pièces détachées, LG, samsung, miele, scholtes, braun, brandt, calor, delonghi, dyson, electrolux, hoover, kenwood, krups, moulinex, rowenta, four, detachee, remplacer pièce, piece electromenager hotte, plaque, menager, appareil')
@section('description', ' ➽ Spécialiste Pièces Détachées électroménager et accessoires électroménager, remplacer pièce ✅Lave-linge ✅Sèche-linge ✅Lave-vaiselle ✅Four... ✅Toutes marques ✱Livrée sous 24h/48h❗✱')
@section('robots', 'INDEX,FOLLOW') 

    @section('content')
        <main class="site-main">
            <div class="block-slide">
                <div class="container">
                    <div class="main-slide slide-opt-3">
                        <div class="owl-carousel nav-style5" data-nav="true" data-autoplay="false" data-dots="true" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"600":{"items":1},"1000":{"items":1}}'>
                            <div class="item-slide item-slide-1">
                                <div class="container">
                                    <div class="slide-desc slide-desc-1 backchange">
                                        <div class="p-primary" style="color: white">World Leader in Home & Kitchens Appliances</div>
                                        <p style="color: white">Introducing Products for a Machine and Healthier Lifestyle.</p>
                                        <a href="" class="btn-shop-now" style="color: white">Shop Now</a>                            
                                    </div>
                                </div>
                            </div>
                            <div class="item-slide item-slide-2">
                                <div class="container">
                                    <div class="slide-desc slide-desc-2 backchange">
                                        <div class="p-primary" style="color: white">Back<br>To the<span class="number" style="color: white">50<span style="color: white">s</span></span></div>
                                        <p class="p-second" style="color: white">Free Delivery</p>
                                        <p style="color: white">On Online Purchases of Small Appliances</p>
                                        <a href="" class="btn-shop-now" style="color: white">Shop Now</a>                            
                                    </div>
                                </div>
                            </div>
                            <div class="item-slide item-slide-3">
                                <div class="container">
                                    <div class="slide-desc slide-desc-3 backchange">
                                        <div class="p-primary" style="color: white">KitchenAid Artisan</div>
                                        <p style="color: white">Find appliances that consume more money than others.</p>
                                        <a href="" class="btn-shop-now" style="color: white">Shop Now</a>                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="promotion-banner banner-slide style-4 hidden-sm hidden-xs">
                        <a href="" class="banner-img"><img src="{!! asset('resources/assets1/images/product/d2.p') !!}ng" alt="banner1"></a>
                    </div>
                    <div class="promotion-banner banner-slide style-4 hidden-sm hidden-xs">
                        <a href="" class="banner-img"><img src="{!! asset('resources/assets1/images/product/s.png') !!}" alt="banner2"></a>
                        <a href="#" class="btn-shop-now">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="block-top-categori">
                <div class="container">
                    <div class="title-of-section">Top Categories This Week</div>
                    <div class="owl-carousel nav-style2" data-nav="true" data-autoplay="false" data-dots="true" data-loop="true" data-margin="20" data-responsive='{"0":{"items":1},"360":{"items":2},"500":{"items":3},"992":{"items":5}}'>
                        <div class="block-top-categori-item">
                            <a href=""><img src="{!! asset('resources/assets1/images/product/si.png') !!}" alt="c1" ></a>
                            <div class="block-top-categori-title">washing machine</div>
                        </div>
                        <div class="block-top-categori-item">
                            <a href=""><img src="{!! asset('resources/assets1/images/product/tv1.jpg') !!}" alt="c2"></a>
                            <div class="block-top-categori-title">Televisions</div>
                        </div>
                        <div class="block-top-categori-item">
                            <a href=""><img src="{!! asset('resources/assets1/images/product/juicer2.jpg') !!}" alt="c3" height="260px;"></a>
                            <div class="block-top-categori-title">Juicer</div>
                        </div>
                        <div class="block-top-categori-item">
                            <a href=""><img src="{!! asset('resources/assets1/images/product/lap1.jpg') !!}" alt="c4" height="260px;"></a>
                            <div class="block-top-categori-title">Laptops</div>
                        </div>
                        <div class="block-top-categori-item">
                            <a href=""><img src="{!! asset('resources/assets1/images/product/d2.png') !!}" alt="c5" height="260px;"></a>
                            <div class="block-top-categori-title">Electronics</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-promotion-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-xs-7">
                            <div class="promotion-banner style-5">
                                <a href="" class="banner-img"><img src="{!! asset('resources/assets1/images/product/img6.jpeg') !!}" alt="banner3" style="width: 670px;height: 195px;"></a>
                            </div>
                        </div>
                        <div class="col-sm-5 col-xs-5">
                            <div class="promotion-banner style-5">
                                <a href="" class="banner-img"><img src="{!! asset('resources/assets1/images/product/img8.jpg') !!}" alt="banner4" style="width: 470px;height: 195px;"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-feature-product">
                <div class="container">
                    <div class="title-of-section">Featured Products</div>
                    <div class="tab-product tab-product-fade-effect">
                        <ul class="box-tabs nav-tab">
                            <li class="active"><a data-animated="" data-toggle="tab" href="#tab-1">All Products </a></li>
                            <li><a data-animated="fadeInRight" data-toggle="tab" href="#tab-1">Electronics</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-container">
                                <div id="tab-1" class="tab-panel active">
                                    <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"1000":{"items":5}}'>
                                        <div class="owl-one-row">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href=""><img src="{!! asset('resources/assets1/images/product/featured1.png') !!}" alt="f1" class="changesize"></a>
                                                        </div>
                                                        <a href="" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="">Vegan Kitchen Essentials</a></div>
                                                        <span class="price price-dark">
                                                            <ins>$229.00</ins>
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="" class="add-to-cart">Add to cart</a>
                                                                <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href=""><img src="{!! asset('resources/assets1/images/product/featured5.png') !!}" alt="f6" class="changesize"></a>
                                                        </div>
                                                        <span class="onnew style2">New</span>
                                                        <a href="" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="">Acer's Aspire S7 is a thin and portable laptop</a></div>
                                                        <span class="price price-dark">
                                                            <ins>$229.00</ins>
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="" class="add-to-cart">Add to cart</a>
                                                                <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-one-row">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href=""><img src="{!! asset('resources/assets1/images/product/featured2.png') !!}" alt="f2" class="changesize"></a>
                                                        </div>
                                                         <span class="onnew">New</span>
                                                         <a href="" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="">Electrolux Washing Machine.</a></div>
                                                        <span class="price price-dark">
                                                            <ins>$229.00</ins>
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="" class="add-to-cart">Add to cart</a>
                                                                <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href=""><img src="{!! asset('resources/assets1/images/product/featured4.png') !!}" alt="f7" class="changesize"></a>
                                                        </div>
                                                        <span class="onsale style2">-50%</span>
                                                        <a href="" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="">PerfectCare Aqua Pressurised steam generator GC8640</a></div>
                                                        <span class="price">
                                                            <ins>$229.00</ins>
                                                            <del>$259.00</del>
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="" class="add-to-cart">Add to cart</a>
                                                                <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-one-row">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href=""><img src="{!! asset('resources/assets1/images/product/featured3.png') !!}" alt="f3" class="changesize"></a>
                                                        </div>
                                                         <span class="onsale">-50%</span>
                                                         <a href="" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="">Friteuse Tristar FR6929 1,75 l</a></div>
                                                        <span class="price">
                                                            <ins>$229.00</ins>
                                                            <del>$259.00</del>
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="" class="add-to-cart">Add to cart</a>
                                                                <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href=""><img src="{!! asset('resources/assets1/images/product/featured3.png') !!}" alt="f8" class="changesize"></a>
                                                        </div>
                                                        <a href="" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        
                                                        <div class="product-name"><a href="">Over-The-Range Microwave - 2.1</a></div>
                                                        <span class="price price-dark">
                                                            <ins>$229.00</ins>
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="" class="add-to-cart">Add to cart</a>
                                                                <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-one-row">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href=""><img src="{!! asset('resources/assets1/images/product/featured4.png') !!}" alt="f4" class="changesize"></a>
                                                        </div>
                                                        <a href="" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="">Smartphone MTK6737 Quad Core.</a></div>
                                                        <span class="price price-dark">
                                                            <ins>$229.00</ins>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="" class="add-to-cart">Add to cart</a>
                                                                <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href=""><img src="{!! asset('resources/assets1/images/product/featured2.png') !!}" alt="f9" class="changesize"></a>
                                                        </div>
                                                        <span class="onsale style2">-50%</span>
                                                        <a href="" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="">Smart Watch SERIE 2 (42mm) SilverCase with White Sport</a></div>
                                                        <span class="price">
                                                            <ins>$229.00</ins>
                                                            <del>$259.00</del>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="" class="add-to-cart">Add to cart</a>
                                                                <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-one-row">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href=""><img src="{!! asset('resources/assets1/images/product/featured5.png') !!}" alt="f5" class="changesize"></a>
                                                        </div>
                                                        <span class="onsale">-50%</span>
                                                        <a href="" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="">Crock-Pot. Programmable Cook</a></div>
                                                        <span class="price">
                                                            <ins>$229.00</ins>
                                                            <del>$259.00</del>
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="" class="add-to-cart">Add to cart</a>
                                                                <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href=""><img src="{!! asset('resources/assets1/images/product/featured1.png') !!}" alt="f10" class="changesize"></a>
                                                        </div>
                                                        <a href="" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">  
                                                        <div class="product-name"><a href="">Xbox One S Halo Collection Bund</a></div>
                                                        <span class="price">
                                                            <ins>$229.00</ins>
                                                            <del>$259.00</del>
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="" class="add-to-cart">Add to cart</a>
                                                                <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-panel">
                                    <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"1000":{"items":5}}'>
                                        <div class="owl-one-row">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href=""><img src="{!! asset('resources/assets1/images/home3/f1.jpg') !!}" alt="f1"></a>
                                                        </div>
                                                        <a href="" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="">Vegan Kitchen Essentials</a></div>
                                                        <span class="price price-dark">
                                                            <ins>$229.00</ins>
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="" class="add-to-cart">Add to cart</a>
                                                                <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href=""><img src="{!! asset('resources/assets1/images/home3/f6.jpg') !!}" alt="f6"></a>
                                                        </div>
                                                        <span class="onnew style2">New</span>
                                                        <a href="" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="">Acer's Aspire S7 is a thin and portable laptop</a></div>
                                                        <span class="price price-dark">
                                                            <ins>$229.00</ins>
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="" class="add-to-cart">Add to cart</a>
                                                                <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-one-row">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href=""><img src="{!! asset('resources/assets1/images/home3/f2.jpg') !!}" alt="f2"></a>
                                                        </div>
                                                         <span class="onnew">New</span>
                                                         <a href="" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="">Electrolux Washing Machine.</a></div>
                                                        <span class="price price-dark">
                                                            <ins>$229.00</ins>
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="" class="add-to-cart">Add to cart</a>
                                                                <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href=""><img src="{!! asset('resources/assets1/images/product/aquacare2.jpg') !!}" alt="f7" style="width: 215px;height: 215px;"></a>
                                                        </div>
                                                        <span class="onsale style2">-50%</span>
                                                        <a href="" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="">PerfectCare Aqua Pressurised steam generator GC8640</a></div>
                                                        <span class="price">
                                                            <ins>$229.00</ins>
                                                            <del>$259.00</del>
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="" class="add-to-cart">Add to cart</a>
                                                                <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-one-row">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href=""><img src="{!! asset('resources/assets1/images/home3/f3.jpg') !!}" alt="f3"></a>
                                                        </div>
                                                         <span class="onsale">-50%</span>
                                                         <a href="" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="">Friteuse Tristar FR6929 1,75 l</a></div>
                                                        <span class="price">
                                                            <ins>$229.00</ins>
                                                            <del>$259.00</del>
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="" class="add-to-cart">Add to cart</a>
                                                                <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href=""><img src="{!! asset('resources/assets1/images/home3/f8.jpg') !!}" alt="f8"></a>
                                                        </div>
                                                        <a href="" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        
                                                        <div class="product-name"><a href="">Over-The-Range Microwave - 2.1</a></div>
                                                        <span class="price price-dark">
                                                            <ins>$229.00</ins>
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="" class="add-to-cart">Add to cart</a>
                                                                <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-one-row">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href=""><img src="{!! asset('resources/assets1/images/home3/f4.jpg') !!}" alt="f4"></a>
                                                        </div>
                                                        <a href="" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="">Smartphone MTK6737 Quad Core.</a></div>
                                                        <span class="price price-dark">
                                                            <ins>$229.00</ins>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="" class="add-to-cart">Add to cart</a>
                                                                <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href=""><img src="{!! asset('resources/assets1/images/home3/f9.jpg') !!}" alt="f9"></a>
                                                        </div>
                                                        <span class="onsale style2">-50%</span>
                                                        <a href="" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="">Smart Watch SERIE 2 (42mm) SilverCase with White Sport</a></div>
                                                        <span class="price">
                                                            <ins>$229.00</ins>
                                                            <del>$259.00</del>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="" class="add-to-cart">Add to cart</a>
                                                                <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-one-row">
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href=""><img src="{!! asset('resources/assets1/images/home3/f5.jpg') !!}" alt="f5"></a>
                                                        </div>
                                                        <span class="onsale">-50%</span>
                                                        <a href="" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="">Crock-Pot. Programmable Cook</a></div>
                                                        <span class="price">
                                                            <ins>$229.00</ins>
                                                            <del>$259.00</del>
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="" class="add-to-cart">Add to cart</a>
                                                                <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner equal-elem">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href=""><img src="{!! asset('resources/assets1/images/home3/f10.jpg') !!}" alt="f10"></a>
                                                        </div>
                                                        <a href="" class="quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-innfo">  
                                                        <div class="product-name"><a href="">Xbox One S Halo Collection Bund</a></div>
                                                        <span class="price">
                                                            <ins>$229.00</ins>
                                                            <del>$259.00</del>
                                                        </span>
                                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                                        <div class="group-btn-hover">
                                                            <div class="inner">
                                                                <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                                                <a href="" class="add-to-cart">Add to cart</a>
                                                                <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
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
                </div>
            </div>
            <div class="block-sale-product full-width block-background" style="background-color: #80808054!important;">
                <div class="container">
                    <div class="title-of-section">Comment ça marche ?</div>
                    <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"1000":{"items":4}}'>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <img src="{{ asset('resources/assets1/images/frontend/Etiquette_generique.png') }}" alt="Etiquette generique" class="saleimgsize">
                                    </div>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name">1. RENSEIGNEZ La référence de votre appareil et lancer la recherche</div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <img src="{{ asset('resources/assets1/images/frontend/liste_pieces_detachee.png') }}" alt="Liste pieces detachee" class="saleimgsize">
                                    </div>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name">2. Cliquez sur "liste des pieces détachées</div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <img src="{{ asset('resources/assets1/images/frontend/group_article.png') }}" alt="Group article" class="saleimgsize">
                                    </div>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name">3. Choisir le type de pièce dans la liste</div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <img src="{{ asset('resources/assets1/images/frontend/votre_piece.png') }}" alt="Votre piece" class="saleimgsize">
                                    </div>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name">4. Cliquez sur votre pièce</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="block-recent-view">
                <div class="container">
                    <div class="title-of-section">Recently Viewed Products</div>
                    <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"1000":{"items":6}}'>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href=""><img src="{!! asset('resources/assets1/images/product/womanhat.jpg') !!}" alt="r1" style="width: 175px;height: 175px;"></a>
                                    </div>
                                    <span class="onsale">-50%</span>
                                    <a href="" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="">Women Hats</a></div>
                                    <span class="price">
                                        <ins>$229.00</ins>
                                        <del>$259.00</del>
                                    </span>
                                    <span class="star-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span class="review">5 Review(s)</span>
                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                        <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href=""><img src="{!! asset('resources/assets1/images/product/shoe.jpg') !!}" alt="r2" style="width: 175px;height: 175px;"></a>
                                    </div>
                                    <span class="onnew">new</span>
                                    <a href="" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo"> 
                                    <div class="product-name"><a href="">Basketball Sports Shoes</a></div>
                                    <span class="price price-dark">
                                        <ins>$229.00</ins>
                                    </span>
                                    <span class="star-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span class="review">5 Review(s)</span>
                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                        <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href=""><img src="{!! asset('resources/assets1/images/product/sale2.png') !!}" alt="r3" style="width: 175px;height: 175px;"></a>
                                    </div>
                                    <a href="" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="">Dark Green Prada Sneakers</a></div>
                                    <span class="price price-dark">
                                        <ins>$229.00</ins>
                                    </span>
                                    <span class="star-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span class="review">5 Review(s)</span>
                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                        <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href=""><img src="{!! asset('resources/assets1/images/product/bag.jpg') !!}" alt="r4" style="width: 175px;height: 175px;"></a>
                                    </div>
                                    <a href="" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="">Clutches in Men's Bags for Men</a></div>
                                    <span class="price price-dark">
                                        <ins>$229.00</ins>
                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                        <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href=""><img src="{!! asset('resources/assets1/images/product/parka.jpg') !!}" alt="r5" style="width: 175px;height: 175px;"></a>
                                    </div>
                                    <span class="onsale">-50%</span>
                                    <a href="" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="">Parka With a Hood</a></div>
                                    <span class="price">
                                        <ins>$229.00</ins>
                                        <del>$259.00</del>
                                    </span>
                                    <span class="star-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span class="review">5 Review(s)</span>
                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                        <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href=""><img src="{!! asset('resources/assets1/images/product/smartphone.jpg') !!}" alt="r6" style="width: 175px;height: 175px;"></a>
                                    </div>
                                    <a href="" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="">Smartphone MTK6737 Quad Core.</a></div>
                                    <span class="price price-dark">
                                        <ins>$229.00</ins>
                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="" class="add-to-cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                        <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-the-blog">
                <div class="container">
                    <div class="title-of-section">From The Blog</div>
                    <div class="owl-carousel nav-style2" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="30" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":2},"992":{"items":3}}'>
                        <div class="blog-item">
                            <div class="post-thumb">
                                <a href=""><img src="{!! asset('resources/assets1/images/product/block-1-hover.png') !!}" alt="blog1" style="width: 370px;height: 207px;"></a>
                                <span class="date">2017<span>Jan 06</span></span>
                            </div>
                            <div class="post-item-info">
                                <h3 class="post-name"><a href="">It’s all about the bread: whole grain home</a></h3>
                                <div class="post-metas">
                                    <span class="author">Post by: <span>Admin</span></span>
                                    <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>36 Comments</span>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="post-thumb">
                                <a href=""><img src="{!! asset('resources/assets1/images/product/block-2-hover.png') !!}" alt="blog2" style="width: 370px;height: 207px;"></a>
                                <span class="date">2017<span>Jan 06</span></span>
                            </div>
                            <div class="post-item-info">
                                <h3 class="post-name"><a href="">It’s all about the bread: whole grain home</a></h3>
                                <div class="post-metas">
                                    <span class="author">Post by: <span>Admin</span></span>
                                    <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>36 Comments</span>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="post-thumb">
                                <a href=""><img src="{!! asset('resources/assets1/images/product/block-3-hover.png') !!}" alt="blog3" style="width: 370px;height: 207px;"></a>
                                <span class="date">2017<span>Jan 06</span></span>
                            </div>
                            <div class="post-item-info">
                                <h3 class="post-name"><a href="">It’s all about the bread: whole grain home</a></h3>
                                <div class="post-metas">
                                    <span class="author">Post by: <span>Admin</span></span>
                                    <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>36 Comments</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-section-brand">
                <div class="container">
                    <div class="section-brand style1">
                        <div class="owl-carousel nav-style3" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="2" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":4},"1000":{"items":6}}'>
                            @for ($i = 0; $i < count($brands); $i++)
                            <a href="{{ route("brands", str_slug($brands[$i]->name), '-') }}" class="item-brand"><img src="{{ asset("resources/assets1/images/brand/" . str_replace(" ", '-', $brands[$i]->name) . ".png") }}" alt="{{$brands[$i]->name}}" alt="brand1" style="width: 192px;height: 68.56px;"/></a>

                            @endfor
                            
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection