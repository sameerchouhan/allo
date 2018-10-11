@extends('layouts.application.template')

@section('title', 'Pièces détaché pour '.$brand.' '.$model)

@section('content')
    <main class="site-main">
            <div class="container">
                <ol class="breadcrumb-page">
                    <li><a href="#">Home </a></li>
                    <li class="active"><a href="#">Detail</a></li>
                    <li class="active"><a href="#">After Autocomplete</a></li>
                </ol>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-3">
                        <h3 class="title-result"> {{ "" }} 
                            <span> {{ $type = str_replace("-", " ", $type)}} {{"$brand" }}</span> 
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <style>
                    .search_categories_content ul li:nth-child(even) {
                         background: #f4f4f4;
                     }
                </style>
                    <div class="col-sm-8 col-md-offset-3 search_categories_content">
                        <h3 class="title-result"> {{ "" }} 
                            <span> 1- Choisissez la catégorie de votre pièce détachées : {{ "$brand" }}</span> 
                        </h3>
                        <ul class="list-group" style="border: 1px solid #ddd;line-height: 26px;position: relative;list-style: none;padding: 10px;border-top: 1px solid #f6f6f6;margin-top: 4px;z-index: 99999;overflow-y: scroll;height: 150px;">
                            @foreach($article_families as $family)
                            <li class="list-group" style="list-style: none;">
                                <a href="{{ route("search-results-family", [str_slug($type, '-'), str_slug($model, '-'), str_slug($appliance_id, '-'), $family['vgruppenid'], str_slug($family['vgruppenname'], "-")]) }}" > {{ $family['vgruppenname'] }} </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 col-md-offset-3">
                        <h3 class="title-result"> {{ "" }} 
                            <span> 2- Selectionner votre pièce détachée {{ "$brand" }} dans la liste ci-dessous.</span> 
                        </h3>
                    </div>
                </div>
                <div class="product-content-single">
                    @foreach($articles_appliance as $article)
                        <?php 
                            $products = App\Sauver::updateOrCreate([
                            'name' => $article['artikelbezeichnung'],
                            'description' => '',
                            'condition' => '',
                            'availability' => '',
                            'google_product_category' => '',
                            'gtin' => '',
                            'mpn' => '',
                            'aswo_id' =>  $article['artikelnummer'],
                            'brand_id' => 0,
                            'brand_name' => $type = str_replace("-", " ", $type),
                            'image' => $article['img_url']['tempurl'],
                            'purchase_price' => $article['ekpreis'],
                            'price' => get_price($article['ekpreis']),
                            'category' => $article['vgruppenname'],
                            'google_shopping' => 0,
                            ]);
                        ?>
                        <?php if($article['ekpreis'] == 0) continue; ?>

                        {{-- if artikelnummer exists then augment --}}
                    <div class="row">
                        <div class="col-md-4 col-sm-12 padding-right">
                            <div class="product-media call_external_system">
                                <input type="hidden" name="product_id" class="product_id" value="{{ $article['artikelnummer'] }}">
                                <div class="image-preview-container image-thick-box image_preview_container">
                                    <span data-link="{{ get_product_url($type, $model, $article['artikelnummer'], $article['vgruppenname'], $article['vgruppenid']) }}" class="item_visual">
                                        <img id="img_zoom" data-zoom-image="{{ $article['img_url']['tempurl'] }}" src="{{ $article['img_url']['tempurl'] }}" alt="{{ $article['artikelbezeichnung'] }}" onerror="imgError(this);">
                                    </span>
                                    <a href=" {{ get_product_url($type, $model, $article['artikelnummer'], $article['vgruppenname'], $article['vgruppenid']) }}" class="btn-zoom open_qv">{{ $article['artikelbezeichnung'] }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <div class="product-info-main">
                                <div class="product-name"><a href=" {{ get_product_url($type, $model, $article['artikelnummer'], $article['vgruppenname'], $article['vgruppenid']) }}">{{ $article['artikelbezeichnung'] }}</a></div>
                                <div class="product-infomation">
                                    réf. : {{$article['artikelnummer']}}<br>
                                    Catégorie : {{$article['vgruppenname']}}<br>
                                </div>
                                <div class="group-btn-share">
                                    <a href="{{ get_product_url($type, $model, $article['artikelnummer'], $article['vgruppenname'], $article['vgruppenid']) }}" class="btn btn-primary more">+ d'informations</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="product-info-price">
                                <div class="transportation">
                                    <span>item with Free Delivery</span>
                                </div>
                                <span class="price">
                                    @if(isset($article["final_price"]))
                                    <ins><span class="currency">€</span>{{ $article["final_price"] }}<span class="price_ttc">TTC</span></ins>
                                    @else
                                        <ins><span class="currency">€</span>{{ get_price($article['ekpreis']) }}<span class="price_ttc">TTC</span></ins>
                                    @endif
                                </span>
                                <div class="quantity">
                                    <div class="loading-ajax>" >&nbsp;</div>
                                    <p class="info-delivery shipping-rule-pd-page-101458">Livré chez vous le :
                                        <br>
                                        <span class="shipping-rule-101458 delivery_date_text"></span>
                                    </p>
                                </div>
                                <div class="single-add-to-cart">
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






            <div class="container">
                <div class="tab-details-product">
                    <ul class="box-tab nav-tab">
                        <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
                    </ul>
                    <div class="tab-container">
                        <div id="tab-1" class="tab-panel active">
                            <div class="box-content">
                                <p>Pièces détachées pour</p>
                                <p>{{ "$brand" }}</p>
                                Besoin d'une <strong>pièce détachée </strong><strong>pour réparer votre {{ "$brand" }}</strong> ? Avec plus de 100&nbsp;000 pièces detachées AlloElectromenager vous propose un large choix.
                                <p class="title">Livraison Rapide</p>
                                <p><span class="span1">sous</span> <span class="span2">48h</span></p>
                                <p class="title">Paiement sécurisé</p>
                            </div>
                        </div>
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
            $('.call_external_system').each(function(){
                var product_id = $(this).find('.product_id').val();
                var this_product = $(this);
                $.get('/get_delivery_date/' + product_id, function(data){
                    this_product.find('.delivery_date_text').html(data);
                });
            });
        });

    </script>
@endsection