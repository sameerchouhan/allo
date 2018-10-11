<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Aswo;
use App\Product;
use Illuminate\Support\Facades\DB;

use Jenssegers\Date\Date;

class SearchController extends Controller
{
    /**
     * Home page
     * @return Response
     */
    public function search_appliance(Aswo $aswo, Request $request)
    {
        $page = isset($request->page) ? $request->page : 1;

        $serial = $request->serial;

        // remove special characters
        $serial = preg_replace("/[^A-Za-z0-9]/", '', $serial);

        // prevent short serial ( < 3 characters)
        while (strlen($serial) < 3) {
            $serial = $serial . '-';
        }

        $result = $aswo->appliance_search(['suchbg'     => $serial,
                                           'hersteller' => $request->manufacturer,
                                           'seite'      => $page
        ]);

        if (count($result['treffer']) >= 1) {
            # Si nombre d'appliance est supérieur à 1, afficher les résultats des appliances (liens vers la page de l'appliance)
            return view('search.appliance-results', compact('result', 'request'));
        } else {
            # Si nombre d'appliance est egal a 0, afficher une page d'aide / Contact
            return redirect('/contact');
        }
    }

    /**
     * Search results page
     * @return Response
     */
    public function search_results(Aswo $aswo, $type, $model, $appliance_id, $vgruppenid = '', $vgruppenname = '')
    {
        //$model
        // https://github.com/jenssegers/date
        Date::setLocale('fr');
      
        $article_families = $aswo->article_families_for_an_appliance(['geraeteid' => $appliance_id]);
        
        $articles_appliance = $aswo->articles_for_an_appliance(['geraeteid' => $appliance_id,
            'suchbg'    => '',
            'attrib'    => 1,
            'sperrgut'  => 1,
            'vgruppe'   => $vgruppenid ?: 'top'
        ]);
        
        for ($i = 1; $i < count($articles_appliance["treffer"]) + 1; $i++) {
            if ($product = Product::where('aswo_id', $articles_appliance["treffer"][$i]['artikelnummer'])->first()) {
                // Modify fields in $article_appliance
                $articles_appliance["treffer"][$i]["final_price"] = $product->price;
                $articles_appliance["treffer"][$i]["artikelbezeichnung"] = $product->name;
            }

            $articles_appliance["treffer"][$i]['img_url'] = $aswo->article_pictures_200(['artnr' => $articles_appliance["treffer"][$i]['artikelnummer'], 'resize' => 200]);
        }

        if (!isset($articles_appliance["treffer"]) or count($articles_appliance["treffer"]) == 0) {
            return redirect('/contact');
        }
        $brands = DB::table('brands')->orderBy('name')->get();
        return view("search.appliance1", array(
            'article_families'     => $article_families["treffer"],
            'articles_appliance'   => $articles_appliance["treffer"],
            'model'                => $model,
            'brand'                => isset($articles_appliance["treffer"][1]["artikelhersteller"]) ? isset($articles_appliance["treffer"][1]["artikelhersteller"]) : '',
            'type'                 => $type,
            'appliance_id'         => $appliance_id,
            'brands'               => $brands
        ));
    }

    public function search_results_id(Aswo $aswo,Request $request)
    {   
        $req = ($_REQUEST['cat']); $output = '';   
        foreach ($req as $value) { // cat foreach
            $expvalue = explode("_", $value);
            $type = $expvalue[3]; 
            $model = $expvalue[2];
            $appliance_id = $expvalue[1]; 
            $vgruppenid = $expvalue[0];        
            $name = $expvalue[4];
        Date::setLocale('fr');
        $article_families = $aswo->article_families_for_an_appliance(['geraeteid' => $appliance_id]);
        
        $articles_appliance = $aswo->articles_for_an_appliance(['geraeteid' => $appliance_id,
            'suchbg'    => '',
            'attrib'    => 1,
            'sperrgut'  => 1,
            'vgruppe'   => $vgruppenid ?: 'top'
        ]);
        for ($i = 1; $i < count($articles_appliance["treffer"]) + 1; $i++) { // for to get img url
            if ($product = Product::where('aswo_id', $articles_appliance["treffer"][$i]['artikelnummer'])->first()) {
                $articles_appliance["treffer"][$i]["final_price"] = $product->price;
                $articles_appliance["treffer"][$i]["artikelbezeichnung"] = $product->name;
            }

            $articles_appliance["treffer"][$i]['img_url'] = $aswo->article_pictures_200(['artnr' => $articles_appliance["treffer"][$i]['artikelnummer'], 'resize' => 200]);
        }
        if (!isset($articles_appliance["treffer"]) or count($articles_appliance["treffer"]) == 0) {
            return redirect('/contact');
        }
        foreach ($articles_appliance["treffer"] as $article) {
            $output.='<div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">
                                <input type="hidden" name="product_id" class="product_id" value="'.$article['artikelnummer'].'">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <span data-link="'.get_product_url($type, $model, $article['artikelnummer'], $article['vgruppenname'], $article['vgruppenid']).'" class="item_visual" >
                                                <img id="img_zoom" data-zoom-image="'.$article['img_url']['tempurl'].'" src="'.$article['img_url']['tempurl'].'" alt="'.$article['artikelbezeichnung'].'" onerror="imgError(this);" style="width: 200px;height: 200px;">
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
                                            <a href="'.get_product_url($type, $model, $article['artikelnummer'], $article['vgruppenname'], $article['vgruppenid']).'" style="margin-top: 85px;">
                                                '.substr($article['artikelbezeichnung'],0,19).'
                                            </a>
                                        </div>';
                                        if(isset($article["final_price"])){
                                        $output .='
                                        <span class="price">
                                            <ins><span class="currency">€</span>'.$article["final_price"].'<span class="price_ttc">TTC</span></ins>
                                        </span>';
                                        }else{
                                            $output .='
                                        <span class="price">
                                            <ins><span class="currency">€</span>"'.get_price($article['ekpreis']).'"<span class="price_ttc">TTC</span></ins>
                                        </span>';
                                        }
                                        $output.='
                                        <span class="star-rating">
                                            <p class="product-rating" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <span class="rating-md r45">4,5 sur 5</span>
                                            </p>
                                        </span>
                                        <div class="info-product">
                                            <p>réf. : '.$article['artikelnummer'].'</p>
                                            <p>Catégorie : '.substr($article['vgruppenname'],0,15).'</p>
                                            <a href="'.get_product_url($type, $model, $article['artikelnummer'], $article['vgruppenname'], $article['vgruppenid']).'">+ d informations</a>
                                        </div>
                                        <div class="single-add-to-cart" style="margin-top: 0px;">';
                                            if(isset($article['final_price'])){
                                                $output.='<a href="'.add_to_cart_url($article['artikelnummer'], $article['artikelbezeichnung'], 1, \App\PriceRule::removeVta($article['final_price'])).'" class="btn-add-to-cart"><i class="fa fa-cart-plus"></i> Ajouter au panier</a>';
                                            }else{
                                                $output.='<a href="'.add_to_cart_url($article['artikelnummer'], $article['artikelbezeichnung'], 1, \App\PriceRule::getRawPriceWithoutVta($article['ekpreis'])).'" class="btn-add-to-cart"><i class="fa fa-cart-plus"></i> Ajouter au panier</a>';
                                            }
                                            $output.='
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';            
        }

        } // cat foreach end here
         $data = array('apend_data' => $output);
         echo json_encode($data);
    }

    /**
     * Search results page
     * @return Response
     */
    public function search_results2(Aswo $aswo, $brand, $type, $model, $appliance_id, $vgruppenid = '', $vgruppenname = '')
    {
        //$model
        // https://github.com/jenssegers/date
        Date::setLocale('fr');

        $article_families = $aswo->article_families_for_an_appliance(['geraeteid' => $appliance_id]);
        
        $articles_appliance = $aswo->articles_for_an_appliance(['geraeteid' => $appliance_id,
            'suchbg'    => '',
            'attrib'    => 1,
            'sperrgut'  => 1,
            'vgruppe'   => $vgruppenid ?: 'top'
        ]);
        
        for ($i = 1; $i < count($articles_appliance["treffer"]) + 1; $i++) {
            // if exists
            if ($product = Product::where('aswo_id', $articles_appliance["treffer"][$i]['artikelnummer'])->first()) {
                // Modify fields in $article_appliance
                $articles_appliance["treffer"][$i]["final_price"] = $product->price;
                $articles_appliance["treffer"][$i]["artikelbezeichnung"] = $product->name;
            }

            $articles_appliance["treffer"][$i]['img_url'] = $aswo->article_pictures_200(['artnr' => $articles_appliance["treffer"][$i]['artikelnummer'], 'resize' => 200]);
        }

        if (!isset($articles_appliance["treffer"]) or count($articles_appliance["treffer"]) == 0) {
            return redirect('/contact');
        }
        
        return view("search.appliance1", array(
            'article_families'     => $article_families["treffer"],
            'articles_appliance'   => $articles_appliance["treffer"],
            'model'                => $model,
            'brand'                => isset($articles_appliance["treffer"][1]["artikelhersteller"]) ? isset($articles_appliance["treffer"][1]["artikelhersteller"]) : '',
            'type'                 => $type,
            'appliance_id'         => $appliance_id
        ));
    }

    /**
     * Return result from aswo suggest list based on term typed by user
     *
     * @param Request $request
     * @return void
     */
    public function sendRequestSearchToAswo(Request $request)
    {
        //https://shop.euras.com/eed.php?format=json&sessionid=auto&id=u8Md(cCX;1dsDF4&art=suggestliste&suchbg="+ request.term
        $url = "https://shop.euras.com/eed.php?format=json&sessionid=auto&id=u8Md(cCX;1dsDF4&art=suggestliste&suchbg=".rawUrlEncode($request->term);
        $json = file_get_contents($url);
        $readjson=json_decode($json, true);
        return $readjson;
    }
    /**
    * New search by geraetet reffer
    *
    * @param Aswo $aswo
    * @param [type] $appliance_id
    * @param string $vgruppenid
    * @param string $vgruppenname
    * @return void
    */
    public function search_autocomplete_appliance(Aswo $aswo, $appliance_id, $vgruppenid = '', $vgruppenname = '')
    {
        //$model
        // https://github.com/jenssegers/date
        Date::setLocale('fr');
        $appliance = $aswo->appliance_details(['geraeteid' => $appliance_id]);
        $appliance = array_slice($appliance['treffer'], 0, 1);
        //dd($appliance[0]['geraeteart']);
        $article_families = $aswo->article_families_for_an_appliance(['geraeteid' => $appliance_id]);
        //dd($article_families);
        $articles_appliance = $aswo->articles_for_an_appliance(['geraeteid' => $appliance_id,
            'suchbg'    => '',
            'attrib'    => 1,
            'sperrgut'  => 1,
            'vgruppe'   => $vgruppenid ?: 'top'
        ]);
        
        for ($i = 1; $i < count($articles_appliance["treffer"]) + 1; $i++) {
            if ($product = Product::where('aswo_id', $articles_appliance["treffer"][$i]['artikelnummer'])->first()) {
                // Modify fields in $article_appliance
                $articles_appliance["treffer"][$i]["final_price"] = $product->price;
                $articles_appliance["treffer"][$i]["artikelbezeichnung"] = $product->name;
            }

            $articles_appliance["treffer"][$i]['img_url'] = $aswo->article_pictures_200(['artnr' => $articles_appliance["treffer"][$i]['artikelnummer'], 'resize' => 200]);
        }

        if (!isset($articles_appliance["treffer"]) or count($articles_appliance["treffer"]) == 0) {
            return redirect('/contact');
        }
        $brands = DB::table('brands')->orderBy('name')->get();
        return view("search.autocomplete.appliance1", array(
            'article_families'     => $article_families["treffer"],
            'articles_appliance'   => $articles_appliance["treffer"],
            'model'                => $appliance[0]['geraetehersteller'],
            'brand'                => $appliance[0]['geraetehersteller'],
            'type'                 => $appliance[0]['geraeteart'],
            'appliance_id'         => $appliance_id,
            'brands'               => $brands
        ));
    }
}
