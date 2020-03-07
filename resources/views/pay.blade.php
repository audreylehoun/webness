<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Page de démonstration de paiement par Craftyx">
    <meta name="author" content="Craftyx">
    <title>Page de démonstration de paiement par Craftyx</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <div class='row'>
        <div class='col-md-4 col-md-offset-4'>
            <form accept-charset="UTF-8" action="/pay"  id="payment-form" method="post">
                {!! csrf_field() !!}
                
                @method ('POST')
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>