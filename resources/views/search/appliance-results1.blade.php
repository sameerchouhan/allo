@extends('layouts.application.template')

@section('title', 'Résultats de la recherche')

@section('content')
    <?php
        $cur_page = $result['seite'];
        $total_records = $result['gesamtanzahltreffer'];
        $num_rows_per_page = $result['trefferproseite'];

        $num_page = (int)($total_records / $num_rows_per_page) + ($total_records % $num_rows_per_page > 0);

        $page_name = array();
        $left_records = $total_records;
        $page_count = 1;
        while ($left_records > 0)
        {
            $name = ($page_count - 1) * $num_rows_per_page + 1 .'-'.min($left_records, ($page_count - 1) * $num_rows_per_page + $num_rows_per_page);
            $from_record = ($page_count - 1) * $num_rows_per_page + 1;
            $to_record = min($left_records + $from_record, $num_rows_per_page + $from_record) - 1;

            array_push($page_name, $from_record .'-'. $to_record);

            $page_count++;
            $left_records -= $num_rows_per_page;
        }

        array_push($page_name, 'end');

        // remove special characters
    $serial = preg_replace("/[\/\s+]/", '', $request->serial);
    ?>
    <main class="site-main">
            <div class="container">
                <ol class="breadcrumb-page">
                    <li><a href="#">Home </a></li>
                    <li class="active"><a href="#">Detail</a></li>
                </ol>
            </div>
            <div class="container">
                <div class="product-content-single">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 padding-right">
                            <div class="product-media">
                                <div class="image-preview-container image-thick-box image_preview_container">
                                    <img id="img_zoom" data-zoom-image="{!! asset('resources/assets1/images/product/washingdetail.jpg') !!}" src="{!! asset('resources/assets1/images/product/washingdetail.jpg') !!}" alt="">
                                    <a href="#" class="btn-zoom open_qv"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </div>
                                <div class="product-preview image-small product_preview">
                                    <div id="thumbnails" class="thumbnails_carousel owl-carousel nav-style4" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="10" data-responsive='{"0":{"items":3},"480":{"items":5},"600":{"items":5},"1000":{"items":5}}'>
                                        <a href="#" data-image="{!! asset('resources/assets1/images/product/wdetail1.jpg') !!}" data-zoom-image="{!! asset('resources/assets1/images/product/wdetail1.jpg') !!}">
                                            <img src="{!! asset('resources/assets1/images/product/wdetail1.jpg') !!}" data-large-image="{!! asset('resources/assets1/images/product/wdetail1.jpg') !!}" alt="i1" class="imgsize">
                                        </a>
                                        <a href="#" data-image="{!! asset('resources/assets1/images/product/wdetail2.jpg') !!}" data-zoom-image="{!! asset('resources/assets1/images/product/wdetail2.jpg') !!}">
                                            <img src="{!! asset('resources/assets1/images/product/wdetail2.jpg') !!}" data-large-image="{!! asset('resources/assets1/images/product/wdetail2.jpg') !!}" alt="i1" class="imgsize">
                                        </a>
                                        <a href="#" data-image="{!! asset('resources/assets1/images/product/wdetail3.jpg') !!}" data-zoom-image="{!! asset('resources/assets1/images/product/wdetail3.jpg') !!}">
                                            <img src="{!! asset('resources/assets1/images/product/wdetail3.jpg') !!}" data-large-image="{!! asset('resources/assets1/images/product/wdetail3.jpg') !!}" alt="i1" class="imgsize">
                                        </a>
                                        <a href="#" data-image="{!! asset('resources/assets1/images/product/wdetail4.jpg') !!}" data-zoom-image="{!! asset('resources/assets1/images/product/wdetail4.jpg') !!}">
                                            <img src="{!! asset('resources/assets1/images/product/wdetail4.jpg') !!}" data-large-image="{!! asset('resources/assets1/images/product/wdetail4.jpg') !!}" alt="i1" class="imgsize">
                                        </a>
                                        <a href="#" data-image="{!! asset('resources/assets1/images/product/wdetail5.jpg') !!}" data-zoom-image="{!! asset('resources/assets1/images/product/wdetail5.jpg') !!}">
                                            <img src="{!! asset('resources/assets1/images/product/wdetail5.jpg') !!}" data-large-image="{!! asset('resources/assets1/images/product/wdetail5.jpg') !!}" alt="i1"  class="imgsize">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <div class="product-info-main">
                                <div class="product-name"><a href="">Washing Machine</a></div>
                                <span class="star-rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <span class="review">5 Review(s)</span>
                                </span>
                                <div class="product-infomation">
                                    123” class Washing MAchine<br>
                                    With automatic air dry system.<br>
                                    Model type: The Electrolux Aura Logic Super ET65ASMR  <br>
                                    Drain Water: 5ltr
                                </div>
                                <div class="group-btn-share">
                                    <a href="#"><img src="{!! asset('resources/assets1/images/detail/btn1.png') !!}" alt="btn1"></a>
                                    <a href="#"><img src="{!! asset('resources/assets1/images/detail/btn2.png') !!}" alt="btn1"></a>
                                    <a href="#"><img src="{!! asset('resources/assets1/images/detail/btn3.png') !!}" alt="btn1"></a>
                                    <a href="#"><img src="{!! asset('resources/assets1/images/detail/btn4.png') !!}" alt="btn1"></a>
                                </div>
                                <div class="product-description">
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 making it over 2000 years old.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="product-info-price">
                                <div class="product-info-stock-sku">
                                    <div class="stock available">
                                        <span class="label-stock">Availability: </span>In Stock
                                    </div>
                                </div>
                                <div class="transportation">
                                    <span>item with Free Delivery</span>
                                </div>
                                <span class="price">
                                    <ins>$229.00</ins>
                                    <del>$259.00</del>
                                </span>
                                <div class="quantity">
                                    <h6 class="quantity-title">Quantity:</h6>
                                    <div class="buttons-added">
                                        <input type="text" value="1" title="Qty" class="input-text qty text" size="1">
                                        <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                                        <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>
                                    </div>
                                </div>
                                <div class="single-add-to-cart">
                                    <a href="" class="btn-add-to-cart">Add to cart</a>
                                    <a href="" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>
                                    <a href="" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>
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
                        <li><a data-toggle="tab" href="#tab-2">Addtional Infomation</a></li>
                        <li><a data-toggle="tab" href="#tab-3">Reviews</a></li>
                    </ul>
                    <div class="tab-container">
                        <div id="tab-1" class="tab-panel active">
                            <div class="box-content">
                                <p>Lorem ipsum dolor sit amet, an munere tibique consequat mel, congue albucius no qui, at everti meliore erroribus sea. Vero graeco cotidieque ea duo, in eirmod insolens interpretaris nam. Pro at nostrud percipit definitiones, eu tale porro cum. Sea ne accusata voluptatibus. Ne cum falli dolor voluptua, duo ei sonet choro facilisis, labores officiis torquatos cum ei.</p>
                                <p>Cum altera mandamus in, mea verear disputationi et. Vel regione discere ut, legere expetenda ut eos. In nam nibh invenire similique. Atqui mollis ea his, ius graecis accommodare te. No eam tota nostrum cotidieque. Est cu nibh clita. Sed an nominavi, et duo corrumpit constituto, duo id rebum lucilius. Te eam iisque deseruisse, ipsum euismod his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p>
                                <p>Eos cu utroque inermis invenire, eu pri alterum antiopam. Nisl erroribus definitiones nec an, ne mutat scripserit est. Eros veri ad pri. An soleat maluisset per. Has eu idque similique, et blandit scriptorem necessitatibus mea. Vis quaeque ocurreret ea.cu bus scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neentur disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani.</p>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-panel">
                            <div class="box-content">
                                <p>ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non nulla ullamcorper, interdum dolor vel, dictum justo. Vivamus finibus lorem id auctor
                                    placerat. Ut fermentum nulla lectus, in laoreet metus ultrices ac. Integer eleifend urna ultricies enim facilisis, vel fermentum eros porta.
                                </p>
                                <span>Weights & Dimensions</span>
                                <div class="parameter">
                                    <p>Overall: 40" H x 35.5" L x 35.5" W</p>
                                    <p>Bar height:40"</p>
                                    <p>Overall Product Weight: 88 lbs</p>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-panel">
                            <div class="box-content">
                                <form method="post" action="#"  class="new-review-form">
                                    <a href="#" class="form-title">Write a review</a>
                                    <div class="form-content">
                                        <p class="form-row form-row-wide">
                                            <label>Name</label>
                                            <input type="text" value="" name="text" placeholder="Enter your name" class="input-text">
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label>Email</label>
                                            <input type="text" name="text" placeholder="admin@example.com" class="input-text">
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label>Review Title<span class="required">*</span></label>
                                            <input type="email" name="email" placeholder="Give your review a title" class="input-text">
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label>Body of Review (1500)</label>
                                            <textarea aria-invalid="false" class="textarea-control" rows="5" cols="40" name="message"></textarea>
                                        </p>
                                        <p class="form-row">
                                            <input type="submit" value="Submit Review" name="Submit" class="button-submit">
                                        </p>
                                    </div>
                                </form>
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
@endsection