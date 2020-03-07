@extends('layouts.contactstructure')

@section('content')

 <!-- Start Bradcaump area -->
 <div class="ht__bradcaump__area bg-image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Faites vos achats en toute sécurité</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Acceuil</a>
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



@section('contact')

<div class="container">
        		<div class="row">
        			<div class="col-lg-8 col-12">
        				<div class="contact-form-wrap">
                            <br><br>
        					<h2 class="contact__title">ENTRER EN CONTACT AVEC NOUS</h2>
        					<p>Entrez en contact avec nous. Posez nous toutes sortes de questions, nous ne tarderons pas à vous répondre. </p>
                            <form id="contact-form" action="#" method="post">
                                <div class="single-contact-form space-between">
                                    <input type="text" name="firstname" placeholder="Nom*">
                                    <input type="text" name="lastname" placeholder="Prénom*">
                                </div>
                                <div class="single-contact-form space-between">
                                    <input type="email" name="email" placeholder="Email*">
                                    <input type="text" name="website" placeholder="Site Web*">
                                </div>
                                <div class="single-contact-form">
                                    <input type="text" name="subject" placeholder="Objet*">
                                </div>
                                <div class="single-contact-form message">
                                    <textarea name="message" placeholder="Tapez votre message ici"></textarea>
                                </div>
                                <div class="contact-btn">
                                    <button type="submit">Envoyer le mail</button>
                                </div>
                            </form>
                        </div> 
                        <div class="form-output">
                            <p class="form-messege">
                        </div>
        			</div>
        			<div class="col-lg-4 col-12 md-mt-40 sm-mt-40">
        				<div class="wn__address">
                            <br><br>
        					<h2 class="contact__title">Obtenir des informations sur la plateforme.</h2>
                            <p><strong>Nous sommes disponibles 7jours / 7  pour répondre à toutes vos préoccupations.</strong></p>
                             <p> - Vous informer sur les conditions de vente,<br> 
                              - les conditions d'achat,<br> 
                              - les termes d'échanges de produits.</br>
                              - etc ...</p>
        					<div class="wn__addres__wreapper">

        						<div class="single__address">
        							<i class="icon-location-pin icons"></i>
        							<div class="content">
        								<span>Address:</span>
        								<p>Siège Agontinkon (Cotonou) Rue Pharmacie EMERIC</p>
        							</div>
        						</div>

        						<div class="single__address">
        							<i class="icon-phone icons"></i>
        							<div class="content">
        								<span>Numéro de télephone:</span>
        								<p>(229) 96 48 27 26</p>
        							</div>
        						</div>

        						<div class="single__address">
        							<i class="icon-envelope icons"></i>
        							<div class="content">
        								<span>Adresse email:</span>
        								<p>info@webness.com</p>
        							</div>
        						</div>

        						<div class="single__address">
        							<i class="icon-globe icons"></i>
        							<div class="content">
        								<span>Site web:</span>
        								<p>www.webnesscenteur.com</p>
        							</div>
        						</div>

        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!-- End Contact Area -->

@endsection