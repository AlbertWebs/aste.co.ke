<?php $Cart = \Cart::getContent(); ?>
@if($Cart->isEmpty())

@else
<div class="block block-minicart">
    <div class="minicart-content-wrapper">
        <div class="block-title">
            <span>Recently added item(s)</span>
        </div>
        <a class="btn-minicart-close" title="Close">&#10060;</a>
        <div class="block-content cart-updater">
            <div class="minicart-items-wrapper overflowed ">
                <ol class="minicart-items">
                    @foreach($Cart as $row)
                    <?php $Product = DB::table('products')->where('id',$row->id)->get(); ?> 
                    @foreach ($Product as $product)
                    <li class="item product product-item">
                        <div class="product">
                            <a class="product-item-photo" href="#" title="{{$product->name}}">
                                <span class="product-image-container">
                                <span class="product-image-wrapper">
                                <img class="product-image-photo" src="{{url('/')}}/uploads/products/{{$product->image_one}}" alt="{{$product->name}}">
                                </span>
                                </span>
                            </a>
                            <div class="product-item-details">
                                <div class="product-item-name">
                                    <a href="#">{{$product->name}}</a>
                                </div>
                                <div class="product-item-qty">
                                    <label class="label">Qty</label>
                                    <input class="item-qty cart-item-qty" maxlength="12" value="{{$row->quantity}}">
                                    <button class="update-cart-item" style="display: none" title="Update">
                                        <span>Update</span>
                                    </button>
                                </div>
                                <div class="product-item-pricing">
                                    <div class="price-container">
                                        <span class="price-wrapper">
                                            <span class="price-excluding-tax">
                                            <span class="minicart-price">
                                            <span class="price">${{$product->price}}</span> </span>
                                        </span>
                                        </span>
                                    </div>
                                    <div class="product actions">
                                        <div class="secondary">
                                            <a onclick="deleteCart(this)" data-product-id="{{$product->id}}" data-product="{{$product->id}}"  class="action delete" title="Remove item">
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                        <div class="primary">
                                            <a class="action edit" href="{{url('/')}}/shopping-cart" title="Edit item">
                                                <span>Edit</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    @endforeach
                </ol>
            </div>
            <div class="subtotal">
                <span class="label">
                    <span>Subtotal</span>
                </span>
                <div class="amount price-container myDiva2">
                    <span class="price-wrapper"><span class="price">$ {{\Cart::getTotal()}}</span></span>
                </div>
            </div>
            <div class="actions">
                <div class="secondary">
                    <a href="{{url('/')}}/shopping-cart" class="btn btn-alt">
                        <i class="icon icon-cart"></i><span>View and edit cart</span>
                    </a>
                </div>
                <div class="primary">
                    <a class="btn" href="{{url('/')}}/shopping-cart/checkout">
                        <i class="icon icon-external-link"></i><span>Go to Checkout</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif