<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;
// use Wishlistable;
use App\Models\User;
use Pesapal;
use App\Models\orders;
use Auth;
use App\Models\Payment;
use AmrShawky\LaravelCurrency\Facade\Currency;
use Session;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;


class ShopController extends Controller
{




    public function make_payments()
    {

        $SiteSettings = DB::table('_site_settings')->get();
         // getOrderID
        // PlaceOrder
        orders::createOrder();
        $latest = orders::orderBy('date','DESC')->first();
        $OrderId = $latest->id;

        $amount = "1";
        $description = Session::get('description');
        $payments = new Payment;
        $payments -> businessid = 1; //Business ID
        $payments -> transactionid = Pesapal::random_reference();
        $payments -> status = 'NEW'; //if user gets to iframe then exits, i prefer to have that as a new/lost transaction, not pending
        $payments -> amount = (int)$amount;
        $payments -> currency = "KES";
        $payments -> user_id = Auth::User()->id;
        $payments -> order_id = $OrderId;
        $payments -> save();


        $details = array(
            'amount' => $payments -> amount,
            'description' => $description,
            'type' => 'MERCHANT',
            'first_name' => Auth::User()->name,
            'last_name' => Auth::User()->id,
            'email' => Auth::User()->email,
            'phonenumber' => Auth::User()->mobile,
            'reference' => $payments -> transactionid,
            'height'=>'380px',
            'currency' => 'KES'
        );
        // dd($details);
        $iframe=Pesapal::makePayment($details);
        $cartItems = \Cart::getContent();

        // return view('payments.business.pesapal', compact('iframe'));
        return view('shop.checkout-payment', compact('iframe','cartItems','SiteSettings'));
    }



    public function update(Request $request){
        $name = $request->name;
        $notes = $request->notes;
        $email = $request->email;
        $mobile = $request->mobile;
        $company = $request->company;
        $address = $request->address;
        $country = $request->country;

        $updateDetails = array(
            'name'=>$name,
            'notes'=>$notes,
            'email'=>$email,
            'mobile'=>$mobile,
            'company'=>$company,
            'address'=>$address,
            'country'=>$country,
        );

        DB::table('users')->where('id', Auth::User()->id)->update($updateDetails);
        return redirect()->route('payment');

    }

 
}
