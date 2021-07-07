@extends('front.master-product')
@section('content')
@foreach ($SiteSettings as $Settings)
	<!-- Sidebar -->
    <div class="sidebar-wrapper">
        <div class="sidebar-top"><a href="#" class="slidepanel-toggle"><i class="icon icon-left-arrow-circular"></i></a></div>
        <ul class="sidebar-nav">
            <li> <a href="index.html">HOME</a> </li>
            <li> <a href="gallery.html">GALLERY</a> </li>
            <li> <a href="blog.html">BLOG</a> </li>
            <li> <a href="category-fixed-sidebar.html">SHOP</a> </li>
            <li> <a href="faq.html">FAQ</a> </li>
            <li> <a href="contact.html">CONTACT</a> </li>
        </ul>
        <div class="sidebar-bot">
            <div class="share-button toTop">
                <span class="toggle"></span>
                <ul class="social-list">
                    <li>
                        <a href="#" class="icon icon-google google"></a>
                    </li>
                    <li>
                        <a href="#" class="icon icon-fancy fancy"></a>
                    </li>
                    <li>
                        <a href="#" class="icon icon-pinterest pinterest"></a>
                    </li>
                    <li>
                        <a href="#" class="icon icon-twitter-logo twitter"></a>
                    </li>
                    <li>
                        <a href="#" class="icon icon-facebook-logo facebook"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->
    <?php $Cart = \Cart::getContent(); ?>
    @if($Cart->isEmpty())

    <main class="page-main">
        <div class="block fullheight empty-cart" style="min-height:800px">
            <div class="container">
                <div class="image-empty-cart">
                    <img src="{{asset('theme/images/empty-basket.png')}}" alt="">
                    <div class="text-empty-cart-1">SHOPPING CART IS</div>
                    <div class="text-empty-cart-2">EMPTY</div>
                </div>
                <div><a href="{{url('/')}}" class="btn">back to previous page</a></div>
            </div>
        </div>
    </main>
    @else
    <!-- Page Content -->
    <main class="page-main">
        <div class="block">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="{{url('/')}}"><i class="icon icon-home"></i></a></li>
                    <li>/<span>Shopping Cart</span></li>
                </ul>
            </div>
        </div>
        <div class="block">
            <div class="container">
                <div class="cart-table">
                    <div class="table-header">
                        <div class="photo">
                            Product Image
                        </div>
                        <div class="name">
                            Product Name
                        </div>
                        <div class="price">
                            Unit Price
                        </div>
                        <div class="qty">
                            Qty
                        </div>
                        <div class="subtotal">
                            Subtotal
                        </div>
                        <div class="remove">
                            <span class="hidden-sm hidden-xs">Remove</span>
                        </div>
                    </div>
                    @foreach ($Cart as $item)
                    <?php $Product = DB::table('products')->where('id',$item->id)->get(); ?> 
                    @foreach ($Product as $product)
                    <div class="table-row">
                        <div class="photo">
                            <a href="{{url('/')}}/product/{{$product->slung}}"><img src="{{url('/')}}/uploads/products/{{$product->image_one}}" alt=""></a>
                        </div>
                        <div class="name">
                            <a href="{{url('/')}}/product/{{$product->slung}}">{{$product->name}}</a>
                        </div>
                        <div class="price">
                            ${{$item->price}}
                        </div>
                        <div class="qty qty-changer">
                            <fieldset>
                                <input type="button" value="&#8210;" class="decrease">
                                <input type="text" class="qty-input" value="{{$item->quantity}}" data-min="0" data-max="5">
                                <input type="button" value="+" class="increase">
                            </fieldset>
                        </div>
                        <div class="subtotal">
                            $<?php $Price = $item->price; $qty = $item->quantity; echo $Subtotal = $Price*$qty ?>
                        </div>
                        <div class="remove">
                            <a href="{{url('/')}}/shopping-cart/remove-cart/{{$product->id}}" class="icon icon-close-2"></a>
                        </div>
                    </div>
                    @endforeach
                    @endforeach
                    <div class="table-footer">
                        <button class="btn btn-alt">CONTINUE SHOPPING</button>
                        <button class="btn btn-alt pull-right"><i class="icon icon-bin"></i><span>Clear Shopping Cart</span></button>
                        <button class="btn btn-alt pull-right"><i class="icon icon-sync"></i><span>UPDATE</span></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 total-wrapper">
                        <table class="total-price">
                            <tr>
                                <td>Subtotal</td>
                                <td>{{\Cart::getSubTotal()}}</td>
                            </tr>
                            {{-- <tr>
                                <td>Discount</td>
                                <td>$12.00</td>
                            </tr> --}}
                            <tr class="total">
                                <td>Grand Total</td>
                                <td>{{\Cart::getTotal()}}</td>
                            </tr>
                        </table>
                        <div class="cart-action">
                            <div>
                                <a href="{{url('/')}}/shopping-cart/checkout" class="btn">Proceed To Checkout</a>
                            </div>
                            {{-- <a href="#">Checkout with Multiple Addresses</a> --}}
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5">
                        <h2>Estimate Shipping and Tax</h2>
                        <form class="white" action="#">
                            <label>Country<span class="required">*</span></label>
                            <div class="select-wrapper">
                                <select class="form-control">
                                    <option data-code="US" value="United States">United States</option>
                                    <option data-code="NL" value="Netherlands">Netherlands</option>
                                    <option data-code="MY" value="Malaysia">Malaysia</option>
                                    <option data-code="CA" value="Canada">Canada</option>
                                    <option data-code="IO" value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option data-code="VG" value="Virgin Islands, British">British Virgin Islands</option>
                                    <option data-code="BN" value="Brunei">Brunei</option>
                                    <option data-code="BG" value="Bulgaria">Bulgaria</option>
                                    <option data-code="BF" value="Burkina Faso">Burkina Faso</option>
                                    <option data-code="BI" value="Burundi">Burundi</option>
                                    <option data-code="KH" value="Cambodia">Cambodia</option>
                                    <option data-code="CM" value="Republic of Cameroon">Cameroon</option>
                                    <option data-code="CA" value="Canada">Canada</option>
                                    <option data-code="CV" value="Cape Verde">Cape Verde</option>
                                    <option data-code="KY" value="Cayman Islands">Cayman Islands</option>
                                    <option data-code="CF" value="Central African Republic">Central African Republic</option>
                                    <option data-code="TD" value="Chad">Chad</option>
                                    <option data-code="CL" value="Chile">Chile</option>
                                    <option data-code="CN" value="China">China</option>
                                    <option data-code="CX" value="Christmas Island">Christmas Island</option>
                                    <option data-code="CC" value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option data-code="CO" value="Colombia">Colombia</option>
                                    <option data-code="KM" value="Comoros">Comoros</option>
                                    <option data-code="CG" value="Congo">Congo - Brazzaville</option>
                                    <option data-code="CD" value="Congo, The Democratic Republic Of The">Congo - Kinshasa</option>
                                    <option data-code="CK" value="Cook Islands">Cook Islands</option>
                                    <option data-code="CR" value="Costa Rica">Costa Rica</option>
                                    <option data-code="HR" value="Croatia">Croatia</option>
                                    <option data-code="CU" value="Cuba">Cuba</option>
                                    <option data-code="CW" value="Curaçao">Curaçao</option>
                                    <option data-code="CY" value="Cyprus">Cyprus</option>
                                    <option data-code="CZ" value="Czech Republic">Czech Republic</option>
                                    <option data-code="CI" value="Côte d'Ivoire">Côte d’Ivoire</option>
                                    <option data-code="DK" value="Denmark">Denmark</option>
                                    <option data-code="DJ" value="Djibouti">Djibouti</option>
                                    <option data-code="DM" value="Dominica">Dominica</option>
                                    <option data-code="DO" value="Dominican Republic">Dominican Republic</option>
                                    <option data-code="EC" value="Ecuador">Ecuador</option>
                                    <option data-code="EG" value="Egypt">Egypt</option>
                                    <option data-code="SV" value="El Salvador">El Salvador</option>
                                    <option data-code="GQ" value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option data-code="ER" value="Eritrea">Eritrea</option>
                                    <option data-code="EE" value="Estonia">Estonia</option>
                                    <option data-code="ET" value="Ethiopia">Ethiopia</option>
                                    <option data-code="FK" value="Falkland Islands (Malvinas)">Falkland Islands</option>
                                    <option data-code="FO" value="Faroe Islands">Faroe Islands</option>
                                    <option data-code="FJ" value="Fiji">Fiji</option>
                                    <option data-code="FI" value="Finland">Finland</option>
                                    <option data-code="FR" value="French">French</option>
                                    <option data-code="GF" value="French Guiana">French Guiana</option>
                                    <option data-code="PF" value="French Polynesia">French Polynesia</option>
                                    <option data-code="TF" value="French Southern Territories">French Southern Territories</option>
                                    <option data-code="GA" value="Gabon">Gabon</option>
                                    <option data-code="GM" value="Gambia">Gambia</option>
                                    <option data-code="GE" value="Georgia">Georgia</option>
                                    <option data-code="DE" value="German">German</option>
                                    <option data-code="GH" value="Ghana">Ghana</option>
                                    <option data-code="GI" value="Gibraltar">Gibraltar</option>
                                    <option data-code="GR" value="Greece">Greece</option>
                                    <option data-code="GL" value="Greenland">Greenland</option>
                                    <option data-code="GD" value="Grenada">Grenada</option>
                                    <option data-code="GP" value="Guadeloupe">Guadeloupe</option>
                                    <option data-code="GT" value="Guatemala">Guatemala</option>
                                    <option data-code="GG" value="Guernsey">Guernsey</option>
                                    <option data-code="GN" value="Guinea">Guinea</option>
                                    <option data-code="GW" value="Guinea Bissau">Guinea-Bissau</option>
                                    <option data-code="GY" value="Guyana">Guyana</option>
                                    <option data-code="HT" value="Haiti">Haiti</option>
                                    <option data-code="HM" value="Heard Island And Mcdonald Islands">Heard &amp; McDonald Islands</option>
                                    <option data-code="HN" value="Honduras">Honduras</option>
                                    <option data-code="HK" value="Hong Kong">Hong Kong SAR China</option>
                                    <option data-code="HU" value="Hungary">Hungary</option>
                                    <option data-code="IS" value="Iceland">Iceland</option>
                                    <option data-code="IN" value="India">India</option>
                                    <option data-code="ID" value="Indonesia">Indonesia</option>
                                    <option data-code="IR" value="Iran, Islamic Republic Of">Iran</option>
                                    <option data-code="IQ" value="Iraq">Iraq</option>
                                    <option data-code="IE" value="Ireland">Ireland</option>
                                    <option data-code="IM" value="Isle Of Man">Isle of Man</option>
                                    <option data-code="IL" value="Israel">Israel</option>
                                    <option data-code="IT" value="Italy">Italy</option>
                                    <option data-code="JM" value="Jamaica">Jamaica</option>
                                    <option data-code="JP" value="Japan">Japan</option>
                                    <option data-code="JE" value="Jersey">Jersey</option>
                                    <option data-code="JO" value="Jordan">Jordan</option>
                                    <option data-code="KZ" value="Kazakhstan">Kazakhstan</option>
                                    <option data-code="KE" value="Kenya">Kenya</option>
                                    <option data-code="KI" value="Kiribati">Kiribati</option>
                                    <option data-code="KV" value="Kosovo">Kosovo</option>
                                    <option data-code="KW" value="Kuwait">Kuwait</option>
                                    <option data-code="KG" value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option data-code="LA" value="Lao People's Democratic Republic">Laos</option>
                                    <option data-code="LV" value="Latvia">Latvia</option>
                                    <option data-code="LB" value="Lebanon">Lebanon</option>
                                    <option data-code="LS" value="Lesotho">Lesotho</option>
                                    <option data-code="LR" value="Liberia">Liberia</option>
                                    <option data-code="LY" value="Libyan Arab Jamahiriya">Libya</option>
                                    <option data-code="LI" value="Liechtenstein">Liechtenstein</option>
                                    <option data-code="LT" value="Lithuania">Lithuania</option>
                                    <option data-code="LU" value="Luxembourg">Luxembourg</option>
                                    <option data-code="MO" value="Macao">Macau SAR China</option>
                                    <option data-code="MK" value="Macedonia, Republic Of">Macedonia</option>
                                    <option data-code="MG" value="Madagascar">Madagascar</option>
                                    <option data-code="MW" value="Malawi">Malawi</option>
                                    <option data-code="MY" value="Malaysia">Malaysia</option>
                                    <option data-code="MV" value="Maldives">Maldives</option>
                                    <option data-code="ML" value="Mali">Mali</option>
                                    <option data-code="MT" value="Malta">Malta</option>
                                    <option data-code="MQ" value="Martinique">Martinique</option>
                                    <option data-code="MR" value="Mauritania">Mauritania</option>
                                    <option data-code="MU" value="Mauritius">Mauritius</option>
                                    <option data-code="YT" value="Mayotte">Mayotte</option>
                                    <option data-code="MX" value="Mexico">Mexico</option>
                                </select>
                            </div>
                            <label>State/Province <span class="required">*</span></label>
                            <div class="select-wrapper">
                                <select class="form-control">
                                    <option data-code="US" value="United States">United States</option>
                                    <option data-code="NL" value="Netherlands">Netherlands</option>
                                    <option data-code="MY" value="Malaysia">Malaysia</option>
                                    <option data-code="CA" value="Canada">Canada</option>
                                    <option data-code="IO" value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option data-code="VG" value="Virgin Islands, British">British Virgin Islands</option>
                                    <option data-code="BN" value="Brunei">Brunei</option>
                                    <option data-code="BG" value="Bulgaria">Bulgaria</option>
                                    <option data-code="BF" value="Burkina Faso">Burkina Faso</option>
                                    <option data-code="BI" value="Burundi">Burundi</option>
                                    <option data-code="KH" value="Cambodia">Cambodia</option>
                                    <option data-code="CM" value="Republic of Cameroon">Cameroon</option>
                                    <option data-code="CA" value="Canada">Canada</option>
                                    <option data-code="CV" value="Cape Verde">Cape Verde</option>
                                    <option data-code="KY" value="Cayman Islands">Cayman Islands</option>
                                    <option data-code="CF" value="Central African Republic">Central African Republic</option>
                                    <option data-code="TD" value="Chad">Chad</option>
                                    <option data-code="CL" value="Chile">Chile</option>
                                    <option data-code="CN" value="China">China</option>
                                    <option data-code="CX" value="Christmas Island">Christmas Island</option>
                                    <option data-code="CC" value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option data-code="CO" value="Colombia">Colombia</option>
                                    <option data-code="KM" value="Comoros">Comoros</option>
                                    <option data-code="CG" value="Congo">Congo - Brazzaville</option>
                                    <option data-code="CD" value="Congo, The Democratic Republic Of The">Congo - Kinshasa</option>
                                    <option data-code="CK" value="Cook Islands">Cook Islands</option>
                                    <option data-code="CR" value="Costa Rica">Costa Rica</option>
                                    <option data-code="HR" value="Croatia">Croatia</option>
                                    <option data-code="CU" value="Cuba">Cuba</option>
                                    <option data-code="CW" value="Curaçao">Curaçao</option>
                                    <option data-code="CY" value="Cyprus">Cyprus</option>
                                    <option data-code="CZ" value="Czech Republic">Czech Republic</option>
                                    <option data-code="CI" value="Côte d'Ivoire">Côte d’Ivoire</option>
                                    <option data-code="DK" value="Denmark">Denmark</option>
                                    <option data-code="DJ" value="Djibouti">Djibouti</option>
                                    <option data-code="DM" value="Dominica">Dominica</option>
                                    <option data-code="DO" value="Dominican Republic">Dominican Republic</option>
                                    <option data-code="EC" value="Ecuador">Ecuador</option>
                                    <option data-code="EG" value="Egypt">Egypt</option>
                                    <option data-code="SV" value="El Salvador">El Salvador</option>
                                    <option data-code="GQ" value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option data-code="ER" value="Eritrea">Eritrea</option>
                                    <option data-code="EE" value="Estonia">Estonia</option>
                                    <option data-code="ET" value="Ethiopia">Ethiopia</option>
                                    <option data-code="FK" value="Falkland Islands (Malvinas)">Falkland Islands</option>
                                    <option data-code="FO" value="Faroe Islands">Faroe Islands</option>
                                    <option data-code="FJ" value="Fiji">Fiji</option>
                                    <option data-code="FI" value="Finland">Finland</option>
                                    <option data-code="FR" value="French">French</option>
                                    <option data-code="GF" value="French Guiana">French Guiana</option>
                                    <option data-code="PF" value="French Polynesia">French Polynesia</option>
                                    <option data-code="TF" value="French Southern Territories">French Southern Territories</option>
                                    <option data-code="GA" value="Gabon">Gabon</option>
                                    <option data-code="GM" value="Gambia">Gambia</option>
                                    <option data-code="GE" value="Georgia">Georgia</option>
                                    <option data-code="DE" value="German">German</option>
                                    <option data-code="GH" value="Ghana">Ghana</option>
                                    <option data-code="GI" value="Gibraltar">Gibraltar</option>
                                    <option data-code="GR" value="Greece">Greece</option>
                                    <option data-code="GL" value="Greenland">Greenland</option>
                                    <option data-code="GD" value="Grenada">Grenada</option>
                                    <option data-code="GP" value="Guadeloupe">Guadeloupe</option>
                                    <option data-code="GT" value="Guatemala">Guatemala</option>
                                    <option data-code="GG" value="Guernsey">Guernsey</option>
                                    <option data-code="GN" value="Guinea">Guinea</option>
                                    <option data-code="GW" value="Guinea Bissau">Guinea-Bissau</option>
                                    <option data-code="GY" value="Guyana">Guyana</option>
                                    <option data-code="HT" value="Haiti">Haiti</option>
                                    <option data-code="HM" value="Heard Island And Mcdonald Islands">Heard &amp; McDonald Islands</option>
                                    <option data-code="HN" value="Honduras">Honduras</option>
                                    <option data-code="HK" value="Hong Kong">Hong Kong SAR China</option>
                                    <option data-code="HU" value="Hungary">Hungary</option>
                                    <option data-code="IS" value="Iceland">Iceland</option>
                                    <option data-code="IN" value="India">India</option>
                                    <option data-code="ID" value="Indonesia">Indonesia</option>
                                    <option data-code="IR" value="Iran, Islamic Republic Of">Iran</option>
                                    <option data-code="IQ" value="Iraq">Iraq</option>
                                    <option data-code="IE" value="Ireland">Ireland</option>
                                    <option data-code="IM" value="Isle Of Man">Isle of Man</option>
                                    <option data-code="IL" value="Israel">Israel</option>
                                    <option data-code="IT" value="Italy">Italy</option>
                                    <option data-code="JM" value="Jamaica">Jamaica</option>
                                    <option data-code="JP" value="Japan">Japan</option>
                                    <option data-code="JE" value="Jersey">Jersey</option>
                                    <option data-code="JO" value="Jordan">Jordan</option>
                                    <option data-code="KZ" value="Kazakhstan">Kazakhstan</option>
                                    <option data-code="KE" value="Kenya">Kenya</option>
                                    <option data-code="KI" value="Kiribati">Kiribati</option>
                                    <option data-code="KV" value="Kosovo">Kosovo</option>
                                    <option data-code="KW" value="Kuwait">Kuwait</option>
                                    <option data-code="KG" value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option data-code="LA" value="Lao People's Democratic Republic">Laos</option>
                                    <option data-code="LV" value="Latvia">Latvia</option>
                                    <option data-code="LB" value="Lebanon">Lebanon</option>
                                    <option data-code="LS" value="Lesotho">Lesotho</option>
                                    <option data-code="LR" value="Liberia">Liberia</option>
                                    <option data-code="LY" value="Libyan Arab Jamahiriya">Libya</option>
                                    <option data-code="LI" value="Liechtenstein">Liechtenstein</option>
                                    <option data-code="LT" value="Lithuania">Lithuania</option>
                                    <option data-code="LU" value="Luxembourg">Luxembourg</option>
                                    <option data-code="MO" value="Macao">Macau SAR China</option>
                                    <option data-code="MK" value="Macedonia, Republic Of">Macedonia</option>
                                    <option data-code="MG" value="Madagascar">Madagascar</option>
                                    <option data-code="MW" value="Malawi">Malawi</option>
                                    <option data-code="MY" value="Malaysia">Malaysia</option>
                                    <option data-code="MV" value="Maldives">Maldives</option>
                                    <option data-code="ML" value="Mali">Mali</option>
                                    <option data-code="MT" value="Malta">Malta</option>
                                    <option data-code="MQ" value="Martinique">Martinique</option>
                                    <option data-code="MR" value="Mauritania">Mauritania</option>
                                    <option data-code="MU" value="Mauritius">Mauritius</option>
                                    <option data-code="YT" value="Mayotte">Mayotte</option>
                                    <option data-code="MX" value="Mexico">Mexico</option>
                                </select>
                            </div>
                            <label>Zip/Postal Code</label>
                            <input type="text" class="form-control">
                            <div>
                                <button class="btn btn-alt">Get A Quote</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <h2>Discount Codes</h2>
                        <form class="white" action="#">
                            <label>Enter your coupon code if you have one.</label>
                            <input type="text" class="form-control dashed">
                            <div>
                                <button class="btn btn-alt">Apply Coupon</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endif
    <!-- /Page Content -->
@endforeach
@endsection
