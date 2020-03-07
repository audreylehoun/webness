

@extends('layouts.singleproduitstructure')
@section('content')
<head>
<script language="JavaScript">
function afficherActualiser() {

alerct('message a afficher'):

  var a = document.getElementById("auactualise_qte");
  var q = document.getElementById("qty"); 
  
 
  	if (document.getElementById("qty").value <= 0){
		a.style.display = "none";
		alert('Valeur ' +  document.getElementById("qty").value + ' est inférieure à 0');
	}else{
		a.style.display = "block";
		alert('Valeur ' +  document.getElementById("qty").value + ' est supérieure à 0');
	}
		
 
</script>


</head>
 <!-- Start Bradcaump area -->
 <div class="ht__bradcaump__area bg-image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Faites vos achats en toute securite</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.html">Acceuil</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active"></span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
@endsection

@section('leproduit')
     <!-- Start main Content -->
     <div class="maincontent bg--white pt--80 pb--55">
        	<div class="container">
			@if(Session::has('message'))
                    <div class="alert alert-success text-center" role="alert">
                        {{Session::get('message')}}
                    </div>
                @endif
        		<div class="row">
				@foreach($leproduit as $leprod)
        			<div class="col-lg-9 col-12">
        				<div class="wn__single__product">
        					<div class="row">
						
        						<div class="col-lg-6 col-12">
        							<div class="wn__fotorama__wrapper">
	        							<div class="fotorama wn__fotorama__action" data-nav="thumbs">
		        							 <a href="#"><img src="{{url('images/product/Images1/large',$leprod->p_image1)}}" alt="{{$leprod->p_libelle}}"></a>
		        							 <!--  <a href="2.jpg"><img src="images/product/2.jpg" alt=""></a>
		        							  <a href="3.jpg"><img src="images/product/3.jpg" alt=""></a>
		        							  <a href="4.jpg"><img src="images/product/4.jpg" alt=""></a>
		        							  <a href="5.jpg"><img src="images/product/5.jpg" alt=""></a>
		        							  <a href="6.jpg"><img src="images/product/6.jpg" alt=""></a>
		        							  <a href="7.jpg"><img src="images/product/7.jpg" alt=""></a>
		        							  <a href="8.jpg"><img src="images/product/8.jpg" alt=""></a>-->
	        							</div>
        							</div>
        						</div>
							
        						<div class="col-lg-6 col-12">
        							<div class="product__info__main">
        								<h1>{{$leprod->p_libelle}}</h1>
        								<div class="product-reviews-summary d-flex">
        									<ul class="rating-summary d-flex">
    											<li><i class="zmdi zmdi-star-outline"></i></li>
    											<li><i class="zmdi zmdi-star-outline"></i></li>
    											<li><i class="zmdi zmdi-star-outline"></i></li>
    											<li class="off"><i class="zmdi zmdi-star-outline"></i></li>
    											<li class="off"><i class="zmdi zmdi-star-outline"></i></li>
        									</ul>
        								</div>
        								<div class="price-box">
        									<span>${{$leprod->p_prixancien}}</span>
        								</div>
										<div class="product__overview">
        									<p>${{$leprod->p_prixancien}}</p>
        								</div>
										<form action="{{route('addToCart')}}" method="post" role="form" novalidate>
										@csrf
														_
											<input type="hidden" name="c_produit_id" value="{{$leprod->id}}">
											<input type="hidden" name="c_produit_libelle" value="{{$leprod->p_libelle}}">
											<input type="hidden" name="c_produit_price" value="{{$leprod->p_prixancien}}" id="dynamicPriceInput">
											
											<div class="box-tocart d-flex">
        									<span>Qte</span>
        									<input id="qty" class="input-text qty" name="c_produit_quantite" min="1" value="1" title="Qte" type="number" style="diplay:none;">
												</br>


<div class="addtocart__actions">
        										<button class="tocart" type="submit" title="Add to Cart">Ajouter au panier</button>
        									</div>

										
										
											


        								</div>
									
										</form>
										
									



										@foreach($libcathegorie_produit as $libcatprod)
										
										<div class="product_meta">
											<span class="posted_in"> 
												 <p>Cathegorie : {{$libcatprod->c_libelle}}</p>
												
											</span>
										</div>
										@endforeach
        							</div>
        						</div>
        					</div>
        				</div>
        				
                        
                        <div class="product__info__detailed">
							<div class="pro_details_nav nav justify-content-start" role="tablist">
	                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab">Details</a>
	                             </div>
	                        <div class="tab__container">
	                        	<!-- Start Single Tab Content -->
	                        	<div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
									<div class="description__attribute">
										<p>{{$leprod->p_description}}</p>
										
									</div>
	                        	</div>
	                        	<!-- End Single Tab Content -->
	                        	
	                        </div>
        				</div>
                    </div>
                 @endforeach


                    
        			<div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
        				<div class="shop__sidebar">
        					<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title">Cathegories de produits</h3>
        						<ul>

								<li><a href="{{route('produit.liste')}}">Tous les produits</a></li>
								@foreach ($cathegories as $cathegorie)
								
								<?php
$nbrproduit = App\Produit::where('p_cathegorie_id', $cathegorie->id)->count();
                                                     
if ($nbrproduit!=NULL){
    ?>
       <li><a href="{{route('produit.parcategorie', $cathegorie->id)}}">{{$cathegorie->c_libelle}}  <span>({{$nbrproduit}})</span> </a></li>

<?php 
}else{
	?> <li><a href="{{route('produit.parcategorie', $cathegorie->id)}}">{{$cathegorie->c_libelle}}  <span>(0)</span> </a></li>

<?php } ?>





							
        						
								@endforeach
        						
        						</ul>
        					</aside>
        					
        				
        				        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End main Content -->
		<!-- Start Search Popup -->
		<div class="box-search-content search_active block-bg close__top">
			<form id="search_mini_form--2" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="
Parcourez le magasin entrer un texte ici...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>Fermer</span>
			</div>
		</div>
		<!-- End Search Popup -->
@endsection