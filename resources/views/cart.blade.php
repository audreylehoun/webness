

@extends('layouts.cartstructure')
@section('content')

 <!-- Start Bradcaump area -->
 <div class="ht__bradcaump__area bg-image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Faites vos achats en toute sécurité</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Shop Single</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->

@endsection

@section('lepanier')
 <!-- cart-main-area start -->
 <div class="cart-main-area section-padding--lg bg--white">
            <div class="container">
            @if(Session::has('message'))
                    <div class="alert alert-success text-center" role="alert">
                        {{Session::get('message')}}
                    </div>
                @endif
            
            <div class="row">


                    <div class="col-md-12 col-sm-12 ol-lg-12">
                                      
                            <div class="table-content wnro__table table-responsive">
                                <table>
                                    <thead>
                                        <tr class="title-top">
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Produit</th>
                                            <th class="product-price">Prix</th>
                                            <th class="product-quantity">Quantité</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Supprimer</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($cart_datas as $cart_data)
                                        <tr>
                                            
                                        <?php
$leproduit = App\Produit::select('p_image1')->where('id', $cart_data->c_produit_id)->first();
                                                 
if ($leproduit!=NULL){
	
    
    ?>   <td class="product-thumbnail"><a href="#"><img src="<?php echo htmlspecialchars('images/product/Images1/small/') . $leproduit->p_image1; ?>" alt="product img"></a></td>
                                      
                                      <?php 
   
}
	?>
	







                                           

                                        
                                           
                                            <td class="product-name"><a href="#">{{$cart_data->c_produit_libelle}}</a></td>
                                            <td class="product-price"><span class="amount">${{$cart_data->c_produit_price}}</span></td>
                                            <form action="{{route('panier.modifier.req')}}" method="post" novalidate name="modifieqte" id="modifieqte" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    {{method_field("put")}}       
                                            <td class="product-quantity"><input type="number" name="quantity" value="{{$cart_data->c_produit_quantite}}"> 
                                            <br><br>
                                            <input type="hidden" name="idcart" value="{{$cart_data->id}}">
                                            <button type="submit" class="btn btn-secondary" onclick="document.getElementById('modifieqte').submit();">Actualiser</button>
                                            
                                          
                                            
                                        
                                        </form>
                                            </td>
                                            <td class="product-subtotal">${{$cart_data->c_produit_price*$cart_data->c_produit_quantite}}</td>
                                            <td class="product-remove"><a href="{{route('panier.supprimer',$cart_data->id)}}">X</a></td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        
                   
                        
                    </div>
                </div>
                <div class="cartbox__btn">
                <div class="row">
                   
                                     
                   
                    <div class="col-lg-6  offset-lg-6">
                        <div class="cartbox__total__area ">
                            <div class="cartbox-total d-flex justify-content-between">
                                <ul class="cart__total__list">
                                    <li>Total du Panier</li>
                                   <!--<li>Sous Total</li> -->
                                </ul>
                                <ul class="cart__total__tk">
                                    <li>${{$total_price}}</li>
                                    <!--<li>$70</li> -->
                                </ul>
                            </div>

                            <div class="cartbox-total d-flex justify-content-between">
                                <ul class="cart__total__list">
                                    <li>Frais de livraisons et divers (BENIN)</li>
                                   <!--<li>Sous Total</li> -->
                                </ul>
                                <ul class="cart__total__tk">
                                    <li>$00.00</li>
                                    <!--<li>$70</li> -->
                                </ul>
                            </div>


                            <div class="cart__total__amount">
                                <span>Grand Total</span>
                                <span>${{$total_price}}</span>
                            </div>
                        </div>
                    </div>
                </div></div>


               

                
                </div>
            </div>  
        </div>
        <!-- cart-main-area end -->






@endsection

@section('payement')
<div class="container">
  
   <div class="row">
      <div class="col-md-12"><pre id="token_response"></pre></div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <button class="btn btn-primary btn-block" onclick="pay(80)">Passer au payement de  ${{$total_price}}</button>
      </div>
     
    </div>
</div>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://checkout.stripe.com/checkout.js"></script>
  
<script type="text/javascript">
  $(document).ready(function () {  
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  });
  
  function pay(amount) {
    var handler = StripeCheckout.configure({
      key: 'pk_test_OOTJSMSSGGbh05Hft22sfxDF00W0vHSj0h', // your publisher key id
      locale: 'auto',
      token: function (token) {
        // You can access the token ID with `token.id`.
        // Get the token ID to your server-side code for use.
        console.log('Token Created!!');
        console.log(token)
        $('#token_response').html(JSON.stringify(token));
  
        $.ajax({
          url: '{{ url("store") }}',
          method: 'post',
          data: { tokenId: token.id, amount: amount },
          success: (response) => {
  
            console.log(response)
  
          },
          error: (error) => {
           console.log(error);
           alert('Oops! Une erreur a été détectée')
               

          }
        })
      }
    });
   
    handler.open({
      name: 'Payement',
      description: 'Achat de produit',
      amount: amount * 100
    });
  }
</script>
@endsection