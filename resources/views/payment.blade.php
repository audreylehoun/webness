

@extends('layouts.paymentstructure')
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

@section('payement')
 <!-- cart-main-area start -->


 <div class="container">
    <div class='row'>
        <div class='col-md-4 col-md-offset-4'>
            <form accept-charset="UTF-8" action="/payment"  id="payment-form" method="post" novalidate>
           @csrf
                
                @method ('put')
                <div class='form-row'>
                    <div class='col-xs-12 form-group'>
                        <label class='control-label'>Nom sur la carte</label>
                        <input class='form-control' size='4' type='text' name="name">
                    </div>
                </div>
                <div class='form-row'>
                    <div class='col-xs-12 form-group card'>
                        <label class='control-label'>Numéro de carte</label>
                        <input autocomplete='off' class='form-control card-number' size='20' type='text' name="card_no">
                    </div>
                </div>
                <div class='form-row'>
                    <div class='col-xs-4 form-group cvc'>
                        <label class='control-label'>CVC</label>
                        <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text' name="cvc">
                    </div>
                    <div class='col-xs-4 form-group expiration'>
                        <label class='control-label'>Expiration</label>
                        <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text' name="expiration_month">
                    </div>
                    <div class='col-xs-4 form-group expiration'>
                        <label class='control-label'> </label>
                        <input class='form-control card-expiry-year' placeholder='AAAA' size='4' type='text' name="expiration_year">
                    </div>
                </div>

                <div class='form-row'>
                    <div class='col-xs-12 form-group'>
                        <label class='control-label'>Total (€)</label>
                        <input class='form-control' type='text' name="amount">
                    </div>
                </div>

                <div class='form-row'>
                    <div class='col-md-12 form-group'>
                        <button class='form-control btn btn-primary submit-button' type='submit'>Payer »</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


        <!-- cart-main-area end -->

@endsection