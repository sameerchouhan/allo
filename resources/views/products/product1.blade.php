@extends('layouts.application.template')

@section('title', 'Produit')

@section('content')

<?php 

$img_url = str_replace('http://','https://',$img_url);

    $ref = json_decode((file_get_contents("https://tv.allotelecommande.com/references"))); 
    $liste = DB::table('products')->pluck('aswo_id')->toArray(); 
?>
                                    
    <main class="site-main">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb-page">
                    @foreach(array_reverse($product_detail['vgruppenbaum']) as $key => $value)
                    <li>
                        <a href="#" > <span class="first_uppercase">{{ $value['vgruppenname'] }}</span></a>
                    </li>
                    @endforeach
                    <li>
                        {{ $product_detail['artikelbezeichnung'] }}
                    </li>
                </ol>
            </div>
        </div>
        <div class="container">
            <div class="product-content-single">
                <div class="row">
                    <div class="col-md-4 col-sm-12 padding-right">
                        <div class="product-media">
                            <div class="image-preview-container image-thick-box image_preview_container">
                                <img id="img_zoom" alt src="{{ $img_url == '' ? '/img/no_img_avaliable.jpg' : $img_url}}" href="{{ $img_url }}" data-zoom-image="{{ $img_url == '' ? '/img/no_img_avaliable.jpg' : $img_url}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <div class="product-info-main">
                            <div class="product-name">
                                <h1><span itemprop="name">{{ $product_detail['artikelbezeichnung'] }}  
                                    <?php  
                                        foreach ($ref  as $r) {
                                            if(in_array($r->REF_ASWO, $liste)) continue; 
                                                        if ($product_detail['artikelnummer'] == $r->REF_ASWO) {
                                                            echo "RÉF : ".$r->REF_Origine;
                                            }
                                        }
                                    ?>
                                    </span>
                                </h1>
                            </div>
                            <span class="star-rating">
                                <p class="product-rating" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                                    <i class="fa fa-star" aria-hidden="true"></i><span class="rating-md r45">4,5 sur 5</span>
                                    
                                </p>
                            </span>
                            <div class="product-infomation">
                                <p class="lead">
                                    {{ ucfirst(strtolower(isset($product_detail['vgruppenbaum']) ? $product_detail['vgruppenbaum'][0]['vgruppenname'] : '')) }}      <br />
                                    RÉF : {{ $product_detail['artikelnummer'] }}
                                    <br><br>
                                    @if ($product_detail['artikelnummer'] == 5867559)
                                     Ceci est un produit qui est commandé exprès sur demande, c'est avec plaisir que nous le(s) commanderons pour vous, sachez toutefois que le délai de livraison sera plus long et le retour/annulation de cet article ne sera pas accepté.
                                     @endif
                                </p>
                            </div>
                        </div>
                    </div>               
                    <div class="col-sm-3 col-sm-6">
                        <div id="col-basket" class="col-basket"> 
                            <div class="sticky-basket-holder">
                                <div  id="all-basket" class="sticky-basket">
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="basket-related add-item">
                                        <div class="price-large discounted">
                                            <span itemprop="priceCurrency" content="EU"></span><span itemprop="price">
                                            @if(isset($product_detail['final_price']))
                                                {{ $product_detail['final_price'] }}
                                            @else
                                                {{ $product_detail['price'] }}
                                            @endif
                                                €
                                            </span>
                                            <span class="ttc"> TTC </span>
                                            <p>EN STOCK</p>
                                        </div>
                                        <div class="info-delivery">
                                            <p class="title">Livré chez vous le :</p>
                                            <div class="loading-ajax" style="display: none;">&nbsp;</div>
                                            <p class="shipping-rule-pd-page" style="">
                                                <?php
                                                    if ($_SERVER['SERVER_NAME'] == "website.com")
                                                    {
                                                       $number_of_the_day= "%e";
                                                    }
                                                    else 
                                                    {
                                                       $number_of_the_day = "%#d";
                                                    } 
                                                    setlocale(LC_TIME, 'fr_FR.utf8','fra');
                                                    $day = ucfirst(strftime('%A')); 
                                                ?>
                                                <div class="transportation">
                                                <span class="date date1532394 date135581" style="padding-left: 32px;"> {{ $delivery_date }} </span><br>
                                                <span class="date-info">(selon votre choix de transporteur)</span>
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <div class="text-center row">
                                            @if(isset($product_detail['final_price']))
                                            <a class="btn-add-to-cart" href="{{ add_to_cart_url($product_detail['artikelnummer'], $product_detail['artikelbezeichnung'], 1, \App\PriceRule::removeVta($product_detail['final_price'])) }}"><i class="fa fa-cart-plus" aria-hidden="true"></i> Ajouter au panier</a>
                                            @else
                                            <a class="btn-add-to-cart" href="{{ add_to_cart_url($product_detail['artikelnummer'], $product_detail['artikelbezeichnung'], 1, \App\PriceRule::getRawPriceWithoutVta($product_detail['ekpreis'])) }}"><i class="fa fa-cart-plus" aria-hidden="true"></i> Ajouter au panier</a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="under_add">
                                        <ul class="under_add_list" style="list-style: none;">
                                            <li class="under_add_listitem under_add_listitem1"><span><span class="sup">14</span>&nbsp;jours pour changer d’avis</span></li>
                                            <li class="under_add_listitem under_add_listitem4"><span><span class="sup">Service technique</span><br>à votre écoute</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="tab-details-product">
                <ul class="box-tab nav-tab">
                    <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
                    <li><a data-toggle="tab" href="#tab-2">Avis</a></li>
                </ul>
                <div class="tab-container">
                    <div id="tab-1" class="tab-panel active">
                        <div class="box-content">
                            <h2>Description du produit</h2>
                            <p class="productDescription">
                                Cette pièce détachée <b>{{ $product_detail['artikelbezeichnung'] }} {{ $product_detail['artikelhersteller'] }}</b></b> s’adapte  sur plusieurs appareils.
                                Cette pièces détachée <b>{{ $product_detail['artikelhersteller'] }}</b>
                                est également compatible avec les modèles ci-dessous (liste non exhaustive) :
                                <br>
                                @if ($exactly_suggest != null)
                                100% compatible avec le
                                
                                <a href ="/{{ str_slug($exactly_suggest['geraeteart'], '-') }}/{{ $exactly_suggest['geraetennummer'] }}/{{ $exactly_suggest['geraeteid'] }}/{{ str_slug('pièces-detachees', '-') }}" class="pv-name">
                                    <span class="manufacturer">{{ $exactly_suggest['geraetehersteller'] }}</span>
                                    <span class="spare-final_product_list-final_product_name"> {{ $exactly_suggest['geraetennummer'] }} </span>
                                </a>
                                et les modèles
                                suivants :
                                @endif
                            </p>
                            <div class="ref-app-productpage" id="search-pv-from-pd">
                                <div class="search-bar-app">
                                    <input placeholder="Référence de votre appareil, expl : LG 58552" class="search-pv" id="search-pv" name="search-pv" value="">
                                </div>
                                <div class="container-list-app">
                                    <ul class="compatibility-tab-pv-list">
                                        @if(count($suggest_list['treffer']) > 0)
                                        @foreach($suggest_list['treffer'] as $key => $value)
                                            <li>
                                                <a href ="/{{ str_slug($value['geraeteart'], '-') }}/{{ $value['geraetennummer'] }}/{{ $value['geraeteid'] }}/{{ str_slug('pièces-detachees', '-') }}" class="pv-name">
                                                    <span class="spare__final_product_list__final_product_type_name">{{ $value['geraeteart'] }}</span>
                                                    <span class="manufacturer">{{ $value['geraetehersteller'] }}</span>
                                                    <span class="spare__final_product_list__final_product_name"> {{ $value['geraetennummer'] }} </span>
                                                </a>
                                            </li>
                                        @endforeach
                                        @endif
                                    </ul>
                                    <div class="no-pv-found" style="display: none;">
                                        <p class="no-results">Nous n'avons aucun résultat correspondant à votre
                                            recherche.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="brands-links" style="display: block;">
                                Marques compatibles : <a href="{{url( "/recherche?serial=&manufacturer=" . $product_detail['artikelhersteller']) }}"> {{ $product_detail['artikelhersteller'] }}</a>
                            </div>
                            <br>
                            Besoin d’un conseil concernant la catégorie.
                            <a href="{{ url('contact') }}" >
                            {{ ucfirst(strtolower(isset($product_detail['vgruppenbaum']) ? $product_detail['vgruppenbaum'][0]['vgruppenname'] : '')) }}

                            {{ isset($product_detail['vgruppenbaum']) && isset($product_detail['vgruppenbaum'][1]) ? 'de ' . ucfirst(strtolower($product_detail['vgruppenbaum'][1]['vgruppenname'])) : '' }}
                            </a>
                            <p>, n’hésitez pas à nous contacter !</p>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-panel">
                        <div class="box-content">
                            <p class="product-rating" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                                <span class="rating-md r45">4,5 sur 5</span>
                                 <span class="rating-value" itemprop="ratingValue">4,5</span> sur <span itemprop="bestRating">5</span>
                            </p>
                        </div>
                    </div>
                </div>  
            </div> 
        </div>
    </main>
    <script type="text/javascript" src="{!! asset('resources/assets1/js/jquery-2.1.4.min.js') !!}"></script>
    <script type="text/javascript">
        
        $(document).ready(function() {
            
            $('.product-basic-info .slick-slide').click(function(e){
                e.preventDefault();
                
                $('.product-basic-info .main-image-container-cell img').attr('src',$(this).find('a').attr("href"));
            });
            $('.product-images-carousel-modal .slick-slide').click(function(e){
                e.preventDefault();
                
                $('.product-main-image-modal img').attr('src',$(this).find('a').attr("href"));
            });
            
        });
    
    </script>
@endsection