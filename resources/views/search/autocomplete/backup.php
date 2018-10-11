@extends('layouts.application.template')

@section('title', 'Pièces détaché pour '.$brand.' '.$model)

@section('content')
    <main class="site-main product-list product-grid">
        <div class="container">
            <ol class="breadcrumb-page">
                <li><a href="#">Home </a></li>
                <li class="active"><a href="#">Grid Categorys</a></li>
                <!-- <li class="active"><a href="#">Autocomplete</a></li> -->
            </ol>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 float-none float-right padding-left-5">
                    <div class="main-content">
                        <div class="toolbar-products">
                            <h4 class="title-product">Grid Category</h4>
                            <div class="toolbar-option">
                                <div class="toolbar-sort">
                                    <select class="chosen-select sorter-options form-control" >
                                        <option selected="selected" value="position">Sort by popularity</option>
                                    </select>
                                </div>
                                <div class="toolbar-per">               
                                    <select class="chosen-select limiter-options form-control" >
                                        <option selected="selected" value="6">20 per page</option>
                                        <option value="15">15</option>
                                        <option value="30">30</option>
                                    </select>
                                </div> 
                                <div class="modes">
                                    <a href="#" class="active modes-mode mode-grid" title="Grid"><i class="flaticon-squares"></i>
                                        <span>Grid</span>
                                    </a>
                                    <a href="#" title="List" class="modes-mode mode-list"><i class="flaticon-interface"></i>
                                        <span>List</span>
                                    </a>
                                </div>
                            </div>  
                        </div>
                        <div class="products products-list products-grid equal-container" id="type1" style="    width: 100%;">
                            @foreach($articles_appliance as $article)
                            <?php if ($article['ekpreis'] == 0) {
                                 continue;
                            } ?>
                            <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">
                                <input type="hidden" name="product_id" class="product_id" value="{{ $article['artikelnummer'] }}">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <span data-link="{{ get_product_url($type, $model, $article['artikelnummer'], $article['vgruppenname'], $article['vgruppenid']) }}" class="item_visual" >
                                                <img id="img_zoom" data-zoom-image="{{ $article['img_url']['tempurl'] }}" src="{{ $article['img_url']['tempurl'] }}" alt="{{ $article['artikelbezeichnung'] }}" onerror="imgError(this);" style="width: 200px;height: 200px;">
                                            </span>
                                        </div>
                                        <span>
                                            <div class="loading-ajax>"></div>
                                            <p class="info-delivery shipping-rule-pd-page-101458">
                                                <br>
                                                <span class="shipping-rule-101458 delivery_date_text"></span>
                                            </p>
                                        </span>
                                    </div>
                                    <div class="product-innfo" style="width: 220px;height: 240px;">
                                        <div class="product-name">
                                            <a href=" {{ get_product_url($type, $model, $article['artikelnummer'], $article['vgruppenname'], $article['vgruppenid']) }}" style="margin-top: 85px;">
                                                <?php echo substr($article['artikelbezeichnung'],0,19);?>
                                            </a>
                                        </div>
                                        
                                        <span class="price">
                                            @if(isset($article["final_price"]))
                                            <ins><span class="currency">€</span>{{ $article["final_price"] }}<span class="price_ttc">TTC</span></ins>
                                            @else
                                                <ins><span class="currency">€</span>{{ get_price($article['ekpreis']) }}<span class="price_ttc">TTC</span></ins>
                                            @endif
                                        </span>
                                        
                                        <span class="star-rating">
                                            <p class="product-rating" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <span class="rating-md r45">4,5 sur 5</span>
                                            </p>
                                        </span>
                                        <div class="info-product">
                                            <p>réf. : {{$article['artikelnummer']}}</p>
                                            <p>Catégorie : <?php echo substr($article['vgruppenname'],0,18);?></p>
                                            <a href="{{ get_product_url($type, $model, $article['artikelnummer'], $article['vgruppenname'], $article['vgruppenid']) }}">+ d'informations</a>
                                        </div>
                                        <div class="single-add-to-cart" style="margin-top: 0px;">
                                            @if(isset($article['final_price']))
                                            <a href="{{ add_to_cart_url($article['artikelnummer'], $article['artikelbezeichnung'], 1, \App\PriceRule::removeVta($article['final_price'])) }}" class="btn-add-to-cart"><i class="fa fa-cart-plus"></i> Ajouter au panier</a>
                                            @else
                                            <a href="{{ add_to_cart_url($article['artikelnummer'], $article['artikelbezeichnung'], 1, \App\PriceRule::getRawPriceWithoutVta($article['ekpreis'])) }}" class="btn-add-to-cart"><i class="fa fa-cart-plus"></i> Ajouter au panier</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <form id="filterForm" method="POST">
                       <div class="col-sidebar">
                        <div class="filter-options">
                            <div class="block-title">Shop by</div>
                            <div class="block-content">
                                <div class="filter-options-item filter-categori">
                                    <div class="filter-options-title">Categories</div>
                                    <div class="filter-options-content">
                                        <ul>
                                            @foreach($article_families as $family)
                                            <li>
                                                <label class="inline">
                                                    <input class="getfilter" type="checkbox" value="<?=$family['vgruppenid'].'_'.str_slug($appliance_id, '-').'_'.str_slug($model, '-').'_'.str_slug($type, '-').'_'.str_slug($family['vgruppenname'], '-');?>"
                                                 name="cat[]" id="<?php echo str_slug($appliance_id, '-');?>" >
                                                 <span class="input"></span>
                                                 <span> {{ $family['vgruppenname'] }} </span>
                                                    <!-- <a href="{{ route('search-results-family', [str_slug($type, '-'), str_slug($model, '-'), str_slug($appliance_id, '-'), $family['vgruppenid'], str_slug($family['vgruppenname'], '-')]) }}" > {{ $family['vgruppenname'] }} </a> -->
                                                </label>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="filter-options-item filter-price">
                                    <div class="filter-options-title">Price</div>
                                    <div class="filter-options-content">
                                        <div class="price_slider_wrapper">
                                            <div data-label-reasult="Price:" data-min="0" data-max="3000" data-unit="$" class="slider-range-price " data-value-min="85" data-value-max="2000">
                                                <span class="text-right">Filter</span>
                                            </div>
                                            <div class="price_slider_amount">
                                                <div class="price_label">
                                                    Price: <span class="from">$85</span>-<span class="to">$2000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-options-item filter-size">
                                    <div class="filter-options-title">Size</div>
                                    <div class="filter-options-content">
                                        <ul>
                                            <li><label class="inline" ><input type="checkbox"><span class="input">S</span></label></li>
                                            <li><label class="inline" ><input type="checkbox"><span class="input">M</span></label></li>
                                            <li><label class="inline" ><input type="checkbox"><span class="input">L</span></label></li>
                                            <li><label class="inline" ><input type="checkbox"><span class="input">XL</span></label></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="filter-options-item filter-color">
                                    <div class="filter-options-title">Color</div>
                                    <div class="filter-options-content">
                                        <ul>
                                            <li><label class="inline" ><input type="checkbox"><span class="input"></span>Red<span class="value">(217)</span></label></li>
                                            <li><label class="inline" ><input type="checkbox"><span class="input"></span>Black<span class="value">(79)</span></label></li>
                                            <li><label class="inline" ><input type="checkbox"><span class="input"></span>Grey<span class="value">(116)</span></label></li>
                                            <li><label class="inline" ><input type="checkbox"><span class="input"></span>While<span class="value">(38)</span></label></li>
                                        </ul>
                                        <ul>
                                            <li><label class="inline" ><input type="checkbox"><span class="input"></span>Yellow<span class="value">(179)</span></label></li>
                                            <li><label class="inline" ><input type="checkbox"><span class="input"></span>Blue<span class="value">(283)</span></label></li>
                                            <li><label class="inline" ><input type="checkbox"><span class="input"></span>Pink<span class="value">(29)</span></label></li>
                                            <li><label class="inline" ><input type="checkbox"><span class="input"></span>Green<span class="value">(205)</span></label></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-banner-sidebar">
                            <a href=""><img src="images/product/banner-sidebar.jpg" alt="banner-sidebar"></a>
                        </div>
                        <div class="block-latest-roducts">
                            <div class="block-title">Latest Products</div>
                            <div class="block-latest-roducts-content">
                                <div class="owl-carousel nav-style2" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"600":{"items":1},"1000":{"items":1}}'>
                                    <div class="owl-ones-row">
                                        <div class="product-item style1">
                                            <div class="product-inner">
                                                <div class="product-thumb">
                                                    <div class="thumb-inner">
                                                        <a href=""><img src="images/blog/p1.jpg" alt="p1"></a>
                                                    </div>
                                                </div>
                                                <div class="product-innfo">
                                                    <div class="product-name"><a href="">Leather Chelsea Boots</a></div>
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
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="product-item style1">
                                            <div class="product-inner">
                                                <div class="product-thumb">
                                                    <div class="thumb-inner">
                                                        <a href=""><img src="images/blog/p2.jpg" alt="p2"></a>
                                                    </div>
                                                </div>
                                                <div class="product-innfo">
                                                    <div class="product-name"><a href="">2750 Cotu Classic Sneakers</a></div>
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
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="product-item style1">
                                            <div class="product-inner">
                                                <div class="product-thumb">
                                                    <div class="thumb-inner">
                                                        <a href=""><img src="images/blog/p3.jpg" alt="p3"></a>
                                                    </div>
                                                </div>
                                                <div class="product-innfo">
                                                    <div class="product-name"><a href="">Thule Chasm Sport Duffel Bag</a></div>
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
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="product-item style1">
                                            <div class="product-inner">
                                                <div class="product-thumb">
                                                    <div class="thumb-inner">
                                                        <a href=""><img src="images/blog/p4.jpg" alt="p4"></a>
                                                    </div>
                                                </div>
                                                <div class="product-innfo">
                                                    <div class="product-name"><a href="">Pullover Hoodie - Mens</a></div>
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
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-ones-row">
                                        <div class="product-item style1">
                                            <div class="product-inner">
                                                <div class="product-thumb">
                                                    <div class="thumb-inner">
                                                        <a href=""><img src="images/blog/p1.jpg" alt="p1"></a>
                                                    </div>
                                                </div>
                                                <div class="product-innfo">
                                                    <div class="product-name"><a href="">Leather Chelsea Boots</a></div>
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
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="product-item style1">
                                            <div class="product-inner">
                                                <div class="product-thumb">
                                                    <div class="thumb-inner">
                                                        <a href=""><img src="images/blog/p2.jpg" alt="p2"></a>
                                                    </div>
                                                </div>
                                                <div class="product-innfo">
                                                    <div class="product-name"><a href="">2750 Cotu Classic Sneakers</a></div>
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
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="product-item style1">
                                            <div class="product-inner">
                                                <div class="product-thumb">
                                                    <div class="thumb-inner">
                                                        <a href=""><img src="images/blog/p3.jpg" alt="p3"></a>
                                                    </div>
                                                </div>
                                                <div class="product-innfo">
                                                    <div class="product-name"><a href="">Thule Chasm Sport Duffel Bag</a></div>
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
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="product-item style1">
                                            <div class="product-inner">
                                                <div class="product-thumb">
                                                    <div class="thumb-inner">
                                                        <a href=""><img src="images/blog/p4.jpg" alt="p4"></a>
                                                    </div>
                                                </div>
                                                <div class="product-innfo">
                                                    <div class="product-name"><a href="">Pullover Hoodie - Mens</a></div>
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
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                   </form>
                </div> 
            </div>
        </div>
        <div class="block-recent-view">
                    <div class="container">
                        <div class="title-of-section">You may be also interested</div>
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
    <script type="text/javascript" src="{!! asset('resources/assets1/js/jquery-2.1.4.min.js') !!}"></script>
    <script>
        function imgError(image) {
            image.onerror = "";
            image.src = "/img/no_img_avaliable.jpg";
            return true;
        }

        $(document).ready(function(){
            var url='{{ url("/get_delivery_date") }}';
            $('.call_external_system').each(function(){
                var product_id = $(this).find('.product_id').val();
                var this_product = $(this);
                $.get('/get_delivery_date/' + product_id, function(data){
                    this_product.find('.delivery_date_text').html(data);
                });
            });
        });
    </script>
    <script type="text/javascript">
        $('body').on('change','.getfilter',function(e){
            e.preventDefault();
            var formData = $('#filterForm').serialize();
            $.ajax({
                    url:"{{ url('search_results_id') }}",
                    method:'GET',
                    data: formData,
                    dataType:'json',
                    success:function(data)
                    {
                        $('#type1').html(data.apend_data);
                        console.log(data);
                    }
                })
        });
    </script>
@endsection