<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TestController extends Controller
{
    public function test()
    {
       $Products= DB::table('products')
       ->join('product_variants','products.id','product_variants.product_id')
       ->join('product_variant_options','product_variants.id','product_variant_options.product_variant_id')
       ->join('skus','products.id','skus.product_id')
       ->get();

      $Product ='';

      foreach($Products as $item){
          $Product .=$item->name;
      }

      return $Product;
    }
}
