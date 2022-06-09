<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use App\Models\orders;
use App\Models\ReplyMessage;
use Darryldecode\Cart\Cart;
use Darryldecode\Cart\CartCondition;
use javcorreia\Wishlist\Facades\Wishlist;
use Redirect;
use Session;
use Auth;
use Dymantic\InstagramFeed\Profile;

class CartController extends Controller
{
    public function index(){
        $profile = \Dymantic\InstagramFeed\Profile::where('username', 'aste.co.ke')->first();
        $data = [
            'instagram_feed' => Profile::where('username', 'aste.co.ke')->first()->feed(9),
        ];
        $SiteSettings = DB::table('_site_settings')->get(); 
        return view('cart.index',compact('SiteSettings','data'));
    }

    public function checkout(){
        $page_title = 'Checkout';
        $CartItems = \Cart::getContent();
        $SiteSettings = DB::table('_site_settings')->get();
        $page_name = 'Cobfirm'; 
        $keywords = '';
        if(Auth::check()){
            // return redirect()->route('cart/checkout/payment','CheckoutController@payment');
            return redirect()->route('payment');
        }
        else{
            
            return view('checkout.index', compact('keywords','CartItems','page_title','SiteSettings','page_name'));
        }
    }

    public function place_order(){
        $SiteSettings = DB::table('_site_settings')->get(); 
        return view('cart.place_order',compact('SiteSettings'));
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

    public function addWishlist($id){
        // Check Session
        if(Auth::user()){
             $User = Auth::user()->id;
        }else{
             $User = \Request::ip();
        }
        Wishlist::add($id, $User);
        return redirect()->route('wish-list');
    }

    public function wishlist(){
        $profile = \Dymantic\InstagramFeed\Profile::where('username', 'aste.co.ke')->first();
        $data = [
            'instagram_feed' => Profile::where('username', 'aste.co.ke')->first()->feed(9),
        ];
        $SiteSettings = DB::table('_site_settings')->get(); 
        return view('cart.wishlist',compact('SiteSettings','data'));
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
    public function remove_wishlist($id){

        if(Auth::user()){
            $User = Auth::user()->id;
        }else{
            $User = \Request::ip();
        }
       Wishlist::removeByItem($id, $User);
       return Redirect::back();
    }

    
    public function delete($id){
        \Cart::remove($id);
    }

    public function complete_ordera(){
        // Get Cart
        // Email
        // Clear
        // Redirect
    }

    public function complete_order(){
        Orders::createOrder();
        //destroy cart
        
        $page_title = 'Thank you!';
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        $phone = Auth::user()->mobile;
        $service = 'Order';
        $pricee = \Cart::getContent();
        foreach ($pricee as $key => $value) {
            $price = $value->price;
        
        $budget = 'Order';
        $content = 'Order';

        $InvoiceNumber = session()->get('Invoice');
        $OrderNumberNumber = session()->get('Order');
        $ShippingFee = session()->get('Shipping');
        $TotalCost = session()->get('TotalCost');;
        ReplyMessage::mailclient($email,$name,$InvoiceNumber,$ShippingFee,$TotalCost);
        ReplyMessage::mailmerchant($email,$name,$phone);

        // Cart::destroy();
        // Destrony Invoice & Order Sessions
        session()->forget('Invoice');
        session()->forget('Order');
        session()->forget('Shipping');
        session()->forget('TotalCost');

       
        $id = Auth::user()->id;
        $page_name = '';
        $page_title = '';
        $keywords = 'Aste Company Limited';
    
        $page_title = 'Thank You for your order';
        Session::forget('coupon');
        Session::forget('coupon-code');
        Session::forget('coupon-total');
        $Orders = DB::table('orders')->where('user_id',$id)->get();
        $SiteSettings = DB::table('_site_settings')->get(); 
        return view('dashboard.index',compact('page_title','page_name','page_title','keywords','Orders','SiteSettings'));

        /** Load The Thank You Page */
        }
}
}
