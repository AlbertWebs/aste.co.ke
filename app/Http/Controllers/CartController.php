<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use Darryldecode\Cart\Cart;
use Darryldecode\Cart\CartCondition;
use Redirect;
use Session;


class CartController extends Controller
{
    public function index(){
        $SiteSettings = DB::table('_site_settings')->get(); 
        return view('cart.index',compact('SiteSettings'));
    }

    public function checkout(){
        $SiteSettings = DB::table('_site_settings')->get(); 
        return view('cart.checkout',compact('SiteSettings'));
    }

    public function addToCarts(Request $request){
        // dd($items = \Cart::getContent());
        $customAttributes = [
                'color_attr' => [
                    'label' => 'red',
                    'price' => 10.00,
                ],
                'size_attr' => [
                    'label' => 'xxl',
                    'price' => 15.00,
                ]
        ];
        $userId = 1; 
        $productId = $request->product_id;
        $getProduct = Product::find($productId);
        \Cart::add(array(
            'id' => $productId, // inique row ID
            'name' => $getProduct->name,
            'price' => $getProduct->price,
            'quantity' => 1,
            'attributes' => array()
        ));
        $content =  \Cart::getContent();
        $contentCount = $content->count();
        return $contentCount;
    }

    public function aaddToCart($id){
        
        $productId = $id;
        $getProduct = Product::find($productId);
        \Cart::add(array(
            'id' => $productId, // inique row ID
            'name' => $getProduct->name,
            'price' => $getProduct->price,
            'quantity' => 1,
            'attributes' => array()
        ));
        $content =  \Cart::getContent();
        $contentCount = $content->count();
        return $contentCount;
    }

    public function addToCart($id){
        $product = Product::find($id); //This gets product by id
        if($product->stock == "Out of Stock"){

        }else{
            // Cart::add($id, $product->name, 1,$product->price, array());
            \Cart::add(array(
                'id' => $id, // inique row ID
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'attributes' => array()
            ));
        }
        return redirect()->route('shopping-cart');

    }

    
    
    public function remover(Request $request){
         $id= $request->product_id;
        \Cart::remove($id);
        $content =  \Cart::getContent();
        $contentCount = $content->count();
        return $contentCount;
    }

    public function remove($id){

        \Cart::remove($id);
        Session::flash('message', "Changes have been saved");
        return Redirect::back();
    }
    public function delete($id){
        \Cart::remove($id);
    }
}
