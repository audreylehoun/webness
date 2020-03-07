@extends('layouts.master')
@section('extra-script')
<script src="https://js.stripe.com/v3/"></script>
@endsection

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">

<a href="" ><h2>Passer au Paiement </h2></a>

<div class="row">
<div class="col-md-6">

      <form action="" class="my-4">
      
                <div id="card-element">
                    <!-- Elements will create input elements here -->
              
              
              
              
              
              
              
                </div>

                <!-- We'll put the error messages in this element -->
                <div id="card-errors" role="alert"></div>



                     <!--  ELEMENT DE CARTE COMPLEMENTAIRE -->

                     <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input
                                    class='form-control' size='4' type='text'>
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Card Number</label> <input
                                    autocomplete='off' class='form-control card-number' size='20'
                                    type='text'>
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text'>
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>
  




                     <!--  FIN DE CARTE -->
              




                <button class="btn btn-success mt-4" id="submit">Procéder au paiement</button>
            
      
      </form>

</div>


</div>


</div>

</div>


</div>
@endsection

@section('extra-js')
<script>

// Set your publishable key: remember to change this to your live publishable key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
var stripe = Stripe('pk_test_wTwP1c64lOpdYJzaznsynqWN00U9BtQKQx');
var elements = stripe.elements();

var style = {
    base: {
      color: "#32325d",
      fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
      fontSmoothing: "antialiased",
      fontSize: "16px",
      "::placeholder": {
        color: "#aab7c4"
      }
    },
    invalid: {
      color: "#fa755a",
      iconColor: "#fa755a"
    }
  };

  var card = elements.create("card", { style: style });
card.mount("#card-element");

card.addEventListener('change', ({error}) => {
  const displayError = document.getElementById('card-errors');
  if (error) {
    displayError.classList.add('alert','alert-warning');
    displayError.textContent = error.message;
  } else {
    displayError.classList.remove('alert','alert-warning');
    displayError.textContent = '';
  }
});



var submitbutton = document.getElementById('submit');

submitbutton.addEventListener('click', function(ev) {
  ev.preventDefault();
  stripe.confirmCardPayment("{{$clientSecret}}", {
    payment_method: {
      card: card

      // retiré pour le moment .
     /* billing_details: {
        name: 'Jenny Rosen'
      } */
    }
  }).then(function(result) {
    if (result.error) {
      // Show error to your customer (e.g., insufficient funds)
      console.log(result.error.message);
    } else {
      // The payment has been processed!
      if (result.paymentIntent.status === 'succeeded') {
        // Show a success message to your customer
        // There's a risk of the customer closing the window before callback
        // execution. Set up a webhook or plugin to listen for the
        // payment_intent.succeeded event that handles any business critical
        // post-payment actions.

            console.log(result.paymentIntent);

      }
    }
  });
});
</script>
@endsection
