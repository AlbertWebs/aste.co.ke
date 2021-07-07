<?php $Cart = \Cart::getContent(); ?>
	<div class="productStack disable hide_on_scroll">
		<a href="{{url('/')}}/shopping-cart" class="toggleStack"><i class="icon icon-cart"></i> <span class="new-qty">(<?php echo $Cart->count(); ?>) items</span></a>
		<div class="productstack-content">
			<div class="products-list-wrapper" >
				<ul class="products-list" id="mydiv">
                    @foreach($Cart as $row)
                    <?php $Product = DB::table('products')->where('id',$row->id)->get(); ?> 
                    @foreach ($Product as $product)
					<li>
						<a href="{{url('/')}}/product/{{$product->slung}}" title="{{$product->name}}"><img class="product-image-photo" src="{{url('/')}}/uploads/products/{{$product->image_one}}" alt=""></a>
						<span class="item-qty">{{$row->quantity}}</span>
						<div class="actions">
							<a href="#" class="action edit" title="Edit item"><i class="icon icon-pencil"></i></a>
							<button class="action delete" onclick="deleteCart(this)" data-product-id="{{$product->id}}" data-product="{{$product->id}}"  title="Delete item"><i class="icon icon-trash-alt"></i> </button>
							<div class="edit-qty">
								<input type="number" value="{{$row->qty}}">
								<button type="button" class="btn">Apply</button>
							</div>
						</div>
					</li>
                    @endforeach
                  
                    @endforeach
				</ul>
			</div>
			<div class="action-cart">
				<a href="{{url('/')}}/shopping-cart/checkout" type="button" class="btn" title="Checkout"> <span>Checkout</span> </a>
				<a href="{{url('/')}}/shopping-cart" type="button" class="btn" title="Go to Cart"> <span>Go to Cart</span> </a>
			</div>
			<div class="total-cart myDiv2">
                <?php $cartCollection = Cart::getContent(); ?>
				<div class="items-total">Items <span class="count">{{$cartCollection->count()}}</span></div>
				<div class="subtotal">Subtotal <span class="price">$ {{\Cart::getTotal()}}</span></div>
			</div>
		</div>
	</div>
	<!-- /ProductStack -->