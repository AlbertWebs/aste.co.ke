<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Product;
use Darryldecode\Cart\Cart;
use Darryldecode\Cart\CartCondition;
use Redirect;
use Session;
use Auth;
use Stevebauman\Location\Facades\Location;
use Dymantic\InstagramFeed\Profile;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function indexs(){
        $profile = \Dymantic\InstagramFeed\Profile::where('username', 'aste.co.ke')->first();
        $data = [
            'instagram_feed' => Profile::where('username', 'aste.co.ke')->first()->feed(9),
        ];
        $SiteSettings = DB::table('_site_settings')->get(); 
        return view('cart.index',compact('SiteSettings','data'));
    }

    public function index(){
        $page_title = 'Checkout';
        $CartItems = \Cart::getContent();
        $SiteSettings = DB::table('_site_settings')->get();
        $page_name = 'Cobfirm'; 
        $keywords = '';
        if(Auth::check()){
            // return redirect()->route('cart/checkout/payment','CheckoutController@payment');
            $this->payments();
            return redirect()->route('payment');
        }
        else{
            
            return view('checkout.index', compact('keywords','CartItems','page_title','SiteSettings','page_name'));
        }
    }

    public function payments(){
        // Check For Empty Carts

        $cartCollection = \Cart::getContent();
        $cart = $cartCollection->count();

        if($cart == 0){
            // Redirect To Cart
            echo "<script>alert('Your Shopping Cart is Empty')</script>";
            return redirect()->route('payment');
        }else{
            // $ip = \Request::ip();
            $ip = '154.76.108.131';

            $data = \Location::get($ip);
            // Get The Delivery Charge
            $AreaCode =  $data->areaCode;
            if($AreaCode == '30'){
                $Shipping = 300;
            }else{
                $Shipping = 400;
            }

            // Create an invoice, Mail and Register
            if(Session::has('Invoice')){
                $InvoiceNumber = session()->get('Invoice');
                $OrderNumberNumber = session()->get('Order');
            }else{
                // Create Invoice
                $MPESA = DB::table('invoices')->orderBy('id','DESC')->Limit('1')->get();
                $count_mpesa = count($MPESA);
                if($count_mpesa == 0){
                    $InvoiceNumber = 'ASTE001';
                    $OrderNumberNumber = 'ASTE001';
                    session()->put('Order', $OrderNumberNumber);
                    session()->put('Invoice', $InvoiceNumber);
                }else{
                    foreach($MPESA as $mpesa){
                        $LastID = $mpesa->id;
                        $Next = $LastID+1;
                        $InvoiceNumber = "ASTE0".$Next;
                        $OrderNumberNumber = "ASTE10".$Next;
                        // Create Session
                        session()->put('Order', $OrderNumberNumber);
                        session()->put('Invoice', $InvoiceNumber);
                        }
                }
            }

            // echo $InvoiceNumber;
            // dd(session()->all());
            if(Session::has('coupon-total')){
                $totalWithCoupon = Session::get('coupon-total');
                // AmountVariables
                if(Session::has('campaign')){
                    $cost = \Cart::getSubTotal();
                    $percentage = 10;
                    $PrepeTotalCart = str_replace( ',', '', $totalWithCoupon);
                    $FormatTotalCart = round($PrepeTotalCart, 0);
                    $discount = ($percentage / 100) * $FormatTotalCart;
                    $TotalCart = ($FormatTotalCart - $discount);
                    $ShippingFee = $Shipping;
                    $TotalCost = $TotalCart+$Shipping;
                }
                else{
                    $TotalCart = \Cart::getSubTotal();
                    $PrepeTotalCart = str_replace( ',', '', $TotalCart );
                    $FormatTotalCart = round($PrepeTotalCart, 0);
                    $ShippingFee = $Shipping;
                    $TotalCost = $FormatTotalCart+$ShippingFee;
                }

            }else{
                // AmountVariables
                if(Session::has('campaign')){
                    $cost = \Cart::getSubTotal();
                    $percentage = 10;
                    $PrepeTotalCart = str_replace( ',', '', $cost );
                    $FormatTotalCart = round($PrepeTotalCart, 0);
                    $discount = ($percentage / 100) * $FormatTotalCart;
                    $TotalCart = ($FormatTotalCart - $discount);
                    $ShippingFee = $Shipping;
                    $TotalCost = $TotalCart+$Shipping;
                }
                else{
                    $TotalCart = \Cart::getSubTotal();
                    $PrepeTotalCart = str_replace( ',', '', $TotalCart );
                    $FormatTotalCart = round($PrepeTotalCart, 0);
                    $ShippingFee = $Shipping;
                    $TotalCost = $FormatTotalCart+$ShippingFee;
                }
                //
            }


            if(Session::has('Invoice')){

            }else{
                $CheckInvoice = DB::table('invoices')->where('number',$InvoiceNumber)->where('status','0')->where('user_id',Auth::user()->id)->get();
                $CountCheckInvoice = count($CheckInvoice);
                if($CountCheckInvoice == 0){
                     // Record Invoice
                     $Invoice = new Invoice;
                     $Invoice->number = $InvoiceNumber;
                     $Invoice->shipping = $Shipping;
                     $Invoice->products = serialize(\Cart::getContent());
                     $Invoice->user_id = Auth::user()->id;
                     $Invoice->amount = $TotalCost;
                     $Invoice->save();
                     // Mail Invoice
                     $email = Auth::user()->email;
                     $name = Auth::user()->name;
                    //  ReplyMessage::mailclientinvoice($email,$name,$InvoiceNumber,$ShippingFee,$TotalCost);

                }else{
                    // The Invoice already Exists

                }
            }
            session()->put('TotalCost', $TotalCost);
            //Go to payments page
            
            
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

        Cart::destroy();
        // Destrony Invoice & Order Sessions
        session()->forget('Invoice');
        session()->forget('Order');
        session()->forget('Shipping');
        session()->forget('TotalCost');

        /**Load The Thank You Page */
        $SEOSettings = DB::table('seosettings')->get();
        foreach($SEOSettings as $Settings){
        SEOMeta::setTitle('Thanks You For Your Order'.$Settings->sitename.' - Orders');
        SEOMeta::setDescription(''.$Settings->welcome.'');
        SEOMeta::setCanonical(''.$Settings->url.'/dashboard/thankyou');

        OpenGraph::setDescription(''.$Settings->welcome.''); 
        OpenGraph::setTitle(''.$Settings->sitename.' - '.$Settings->welcome.'');
        OpenGraph::setUrl(''.$Settings->url.'/dashboard/thanksyou');
        OpenGraph::addProperty('type', 'articles');
        
        
        Twitter::setTitle(''.$Settings->sitename.' - '.$Settings->welcome.'');
        Twitter::setSite(''.$Settings->twitter.'');
        $id = Auth::user()->id;
        $page_name = '';
        $page_title = '';
        $keywords = 'Aste Company Limited';
    
        $page_title = 'Thank You for your order';
        Session::forget('coupon');
        Session::forget('coupon-code');
        Session::forget('coupon-total');


        return view('dashboard.thankyou',compact('page_title','page_name','page_title','keywords'));

        /** Load The Thank You Page */
        }}
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

public function payment(){
    $SiteSettings = DB::table('_site_settings')->get(); 
    return view('cart.checkout',compact('SiteSettings'));
}

}
