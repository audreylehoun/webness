

@extends('layouts.produitpagestructure')
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




@section('lesproduits')
<!-- Start Shop Page -->
<div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
        	<div class="container">
			@if(Session::has('message'))
                    <div class="alert alert-success text-center" role="alert">
                        {{Session::get('message')}}
                    </div>
                @endif
			
			<div class="row">
        			<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
        				<div class="shop__sidebar">
        					<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title">Cathégories de produit</h3>
        						<ul>

								<li><a href="{{route('produit.liste')}}">Tous les produits</a></li>
                                @foreach($cathegories as $cathegorie)
								
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
        					<aside class="wedget__categories pro--range">
        						<h3 class="wedget__title">Trier par prix</h3>
        						<div class="content-shopby">
        						    <div class="price_filter s-filter clear">
        						        <form action="#" method="GET">
        						            <div id="slider-range"></div>
        						            <div class="slider__range--output">
        						                <div class="price__output--wrap">
        						                    <div class="price--output">
        						                        <span>Prix :</span><input type="text" id="amount" readonly="">
        						                    </div>
        						                    <div class="price--filter">
        						                        <a href="#">Trier</a>
        						                    </div>
        						                </div>
        						            </div>
        						        </form>
        						    </div>
        						</div>
        					</aside>
        					<aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">Les plus consultés</h3>
        						<ul>
        							
                                    
                                    @foreach($cathegories as $cathegorie)
                                
                                <li><a href="{{route('produit.parcategorie', $cathegorie->id) }}">{{$cathegorie->c_libelle}} </li>
                                @endforeach
                                    
                                
        						</ul>
        					</aside>
        					
        				</div>
        			</div>
        			<div class="col-lg-9 col-12 order-1 order-lg-2">
        				<div class="row">
        					<div class="col-lg-12">
								<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
									<div class="shop__list nav justify-content-center" role="tablist">
			                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>
			                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i class="fa fa-list"></i></a>
			                        </div>
			                        <p>Consulter 1–12 sur 40 résultats</p>
			                       
		                        </div>
        					</div>
        				</div>
        				<div class="tab__container">
	        				<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
							
			
							
							
							<div class="row">
	        						<!-- Start Single Product -->
                                    @foreach($produits as $produit)
                                    <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
			        					<div class="product__thumb">
											<a class="first__img" href="{{ route('produit.detail', $produit->id)}}"><img src="{{url('images/product/Images1/medium',$produit->p_image1)}}" alt="product image"></a>
											<a class="second__img animation1" href="{{ route('produit.detail', $produit->id)}}"><img src="{{url('images/product/Images2/medium',$produit->p_image2)}}" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">Disponible</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product.html">{{$produit->p_libelle}}</a></h4>
											<ul class="prize d-flex">
												<li>{{$produit->p_prixancien}}</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
													<!--	<li><a class="cart" title="Ajouter au panier" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>-->
														<!--<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li> -->
														<li><a title="Voir le produit"  href="{{ route('produit.detail', $produit->id)}}"><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product__hover--content">
												<ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>
		        					</div>
                                  @endforeach


		
	        					</div>
	        					<ul class="wn__pagination">
	        						<li class="active"><a href="#">1</a></li>
	        						<li><a href="#">2</a></li>
	        						<li><a href="#">3</a></li>
	        						<li><a href="#">4</a></li>
	        						<li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
	        					</ul>
	        				</div>
                            
                            
                            <div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
	        					<div class="list__view__wrapper">
	        						<!-- Start Single Product -->
                                    @foreach($produits as $produit)
                                
                                    <div class="list__view">
	        							<div class="thumb">
	        								<a class="first__img" href="{{ route('produit.detail', $produit->id)}}"><img src="{{url('images/product/Images1/large',$produit->p_image1)}}" alt="Image du produit"></a>
	        								<a class="second__img animation1" href="{{ route('produit.detail', $produit->id)}}"><img src="{{url('images/product/Images2/large',$produit->p_image2)}}" alt="Images du produit"></a>
	        							</div>
	        							<div class="content">
	        								<h2><a href="{{ route('produit.detail', $produit->id)}}">{{$produit->p_libelle}}</a></h2>
	        								<ul class="rating d-flex">
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li class="on"><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        									<li><i class="fa fa-star-o"></i></li>
	        								</ul>
	        								<ul class="prize__box">
	        									<li>${{$produit->p_prixancien}}</li>
	        									<li class="old__prize">$220.00</li>
	        								</ul>
	        								<p>{{$produit->p_description}}</p>
											
											<form action="{{route('addToCart')}}" method="post" role="form" novalidate>
										@csrf
														
											<input type="hidden" name="c_produit_id" value="{{$produit->id}}">
											<input type="hidden" name="c_produit_libelle" value="{{$produit->p_libelle}}">
											<input type="hidden" name="c_produit_price" value="{{$produit->p_prixancien}}" id="dynamicPriceInput">
											
											<div class="box-tocart d-flex">
        									
        									<input id="qty" class="input-text qty" name="c_produit_quantite" min="1" value="1" title="Qte" type="hidden" style="diplay:none;">
												

										
													<ul class="cart__action d-flex">
	        									<li><button class="cartbt" style="background-color:#e59285;"type="submit" title="Add to Cart">Ajouter au panier</button></li>
	        								<!--	<li class="wishlist"><a href="cart.html"></a></li>
	        									<li class="compare"><a href="cart.html"></a></li>-->
	        								</ul>
											


        								</div>
									
										</form>
											
											
											

	        							</div>
                                    </div>
                                    <br>
                                    @endforeach
	        						<!-- End Single Product -->
	        						
	        					</div>
	        				</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End Shop Page -->
		<!-- Footer Area -->
@endsection