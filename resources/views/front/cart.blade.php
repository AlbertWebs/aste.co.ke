<script>
    function addToCart(identifier){
        var productID = $(identifier).data('product');    
        $('.loading-gif').show()    
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({
            url: "{{ route('cart.addtocart') }}",
            data: {
              'product_id': productID
            },
            type: "post",
            success: function(result) {
              // $("#mydiv").load(location.href + " #mydiv");
              $( "#mydiv" ).load(window.location.href + " #mydiv" );
              $( ".myDiv2" ).load(window.location.href + " .myDiv2" );
              $('.new-qty').html(result +" Items");
              $( ".cart-updater" ).load(window.location.href + " .cart-updater" );
              $('.new-quantity').html(result);
              $('.loading-gif').hide()
            }
        // });
      });
    }

    function addToCartNow(identifier){
        var productID = $(identifier).data('product');    
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({
            url: "{{ route('cart.addtocartnow') }}",
            data: {
              'product_id': productID
            },
            type: "post",
            success: function(result) {
              // Redirect
              // $(location).attr('href', '{{url('/')}}/shopping-cart')
              window.open('{{url('/')}}/shopping-cart', '_blank');
            }
        // });
      });
    }


    function deleteCart(identity){
        var productID = $(identity).data('product');  
  
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({
            url: "{{ route('cart.removercart') }}",
            data: {
              'product_id': productID
            },
            type: "post",
            success: function(result) {
              // $("#mydiv").load(location.href + " #mydiv");
              $( "#mydiv" ).load(window.location.href + " #mydiv" );
              $( ".myDiv2" ).load(window.location.href + " .myDiv2" );
              $('.new-qty').html(result +" Items");
              $( ".cart-updater" ).load(window.location.href + " .cart-updater" );
              $('.new-quantity').html(result);
         
            }
        // });
      });
    }
</script>