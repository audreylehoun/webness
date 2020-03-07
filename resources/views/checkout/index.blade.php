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

      <form action="" class="my-4" id="payment-form">
      
                <div id="iban-element">
                    <!-- Elements will create input elements here -->
              
              
                </div>

                <!-- We'll put the error messages in this element -->
                <div id="error-message" role="alert"></div>


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
// Create a Stripe client.


// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    },
    ':-webkit-autofill': {
      color: '#32325d',
    },
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a',
    ':-webkit-autofill': {
      color: '#fa755a',
    },
  }
};

// Create an instance of the iban Element.
var iban = elements.create('iban', {
  style: style,
  supportedCountries: ['SEPA'],
});

// Add an instance of the iban Element into the `iban-element` <div>.
iban.mount('#iban-element');

var errorMessage = document.getElementById('error-message');
var bankName = document.getElementById('bank-name');

iban.on('change', function(event) {
  // Handle real-time validation errors from the iban Element.
  if (event.error) {
    errorMessage.textContent = event.error.message;
    errorMessage.classList.add('visible');
  } else {
    errorMessage.classList.remove('visible');
  }

  // Display bank name corresponding to IBAN, if available.
  if (event.bankName) {
    bankName.textContent = event.bankName;
    bankName.classList.add('visible');
  } else {
    bankName.classList.remove('visible');
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();
  showLoading();

  var sourceData = {
    type: 'sepa_debit',
    currency: 'eur',
    owner: {
      name: document.querySelector('input[name="name"]').value,
      email: document.querySelector('input[name="email"]').value,
    },
    mandate: {
      // Automatically send a mandate notification email to your customer
      // once the source is charged.
      notification_method: 'email',
    }
  };

  // Call `stripe.createSource` with the iban Element and additional options.
  stripe.createSource(iban, sourceData).then(function(result) {
    if (result.error) {
      // Inform the customer that there was an error.
      errorMessage.textContent = result.error.message;
      errorMessage.classList.add('visible');
      stopLoading();
    } else {
      // Send the Source to your server to create a charge.
      errorMessage.classList.remove('visible');
      stripeSourceHandler(result.source);
    }
  });
});
</script>
@endsection
