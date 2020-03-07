@extends('layouts.pagestructure')
@section('content')
<!-- End Search Popup -->
	  
<!-- Start Slider area -->
        <div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme opacity: 0.75">
        	<!-- Start Single Slide -->
	        <div class="slide animation__style10 bg-image--1 fullscreen align__center--left opacity: 0.75">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            			<!--	<h2>Buy <span>your </span></h2>
		            				<h2>favourite <span>Book </span></h2>
									<h2>from <span>Here </span></h2> -->
									
									<h3>Faites vos achats   <span>et  </span></h3>
		            				<h3>vente en toute sécurité <span> </span></h3>
		            				<h2>ici </span></h2>
				                   
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
			</div>

			<!--
<div class="container">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
		  <div class="carousel-item active">
			<img src="{{asset('/images/bg/1.jpg')}}" class="d-block w-100" alt="...">
		  </div>
		  <div class="carousel-item">
			<img src="{{asset('/images/bg/1.jpg')}}" class="d-block w-100" alt="...">
		  </div>
		  <div class="carousel-item">
			<img src="{{asset('/images/bg/1.jpg')}}" class="d-block w-100" alt="...">
		  </div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</a>
	  </div>

</div>
-->
            <!-- End Single Slide -->
        	<!-- Start Single Slide -->
	        <div class="slide animation__style10 bg-image--7 fullscreen align__center--left">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12"> 
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2>Achetez  <span>vos </span></h2>
		            				<h2>produits <span>préférés </span></h2>
		            				<h2>ici </span></h2>
				                   	
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
            <!-- End Single Slide -->
        </div>
		<!-- End Slider area -->
		
<!--<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<img class="kwirpnuq-image" src="https://beninwebtv.com/wp-content/uploads/2020/02/Moov-Bénin_Pass-Bonus-Jour_Décembre_Bénin-Web-TV_1050x150px_111219-01.png" alt="MOOV">
-->
</div>

</div>
</div>


		@endsection

		@section("nouvoproduit")
		
		<!-- Start BEst Seller Area -->
		<section class="wn__product__area brown--color pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
						<div class="col-lg-9">
						<div class="section__title text-center">
							
							<h2 class="title__be--2">Nos derniers Arrivages <span class="color--theme">(nouveaux produits)</span></h2>
							<p>Voici les derniers produits ajoutés dans notre gamme de produits. Les nouveaux produits ajoutés récemment.</p>
						<br><br>
						</div>
						<div class="row">
								
								@foreach ($produits as $produit) 
								
							
								<div class="product product__style--3 col-md-3">
									<div class="product__thumb">
										<a class="first__img" href="{{ route('produit.detail', $produit->id)}}"><img src="{{url('images/product/Images1/medium',$produit->p_image1)}}" alt="Product image"></a>
										<a class="second__img animation1" href="{{ route('produit.detail', $produit->id)}}"><img src="{{url('images/product/Images2/medium' , $produit->p_image2)}}" alt="Image du produit"></a>
										<div class="hot__box">
											<span class="hot-label">Arrivage</span>
										</div>
									</div>
									<div class="product__content content--center">
										<h4><a href="{{ route('produit.detail', $produit->id)}}">{{$produit->p_libelle}}</a></h4>
										<ul class="prize d-flex">
											<li>$35.00</li>
											<li class="old_prize">${{$produit->p_prixancien}}</li>
										</ul>
										<div class="action">
											<div class="actions_inner">
												<ul class="add_to_links">
													<!--<li><a class="cart" title="Voir le produit" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
													-->	
							<!--						
										<li><a class="wishlist" type="submit" href="javascript:document.{{$produit->id}}.submit()" title="Ajouter au panier"><i class="bi bi-shopping-cart-full"></i></a></li>

										<li><button class="wishlist" type="submit"  title="Ajouter au panier"><i class="bi bi-shopping-cart-full">    Ajouter </i></a></li>
								-->		


													<li><a  title="Voir le produit"  href="{{ route('produit.detail', $produit->id)}}"><i class="bi bi-search"></i></a></li>
												</ul>

												<form action="{{route('addToCart')}}" method="post" role="form" name="aud{{$produit->id}}" novalidate>
										@csrf
															_
											<input type="hidden" name="c_produit_id" value="{{$produit->id}}">
											<input type="hidden" name="c_produit_libelle" value="{{$produit->p_libelle}}">
											<input type="hidden" name="c_produit_price" value="{{$produit->p_prixancien}}" id="dynamicPriceInput">
											
											
        									
        									<input id="qty"  name="c_produit_quantite" min="1" value="1" title="Qte" type="hidden" style="diplay:none;">
												</br>


										
										
										
											


									
										</form>


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
								<!-- End Single Product -->


@endforeach

</div>
<br>

						
						
						
						
						
						</div>
						
						<div class="col-lg-3 md-6" style="background-color:red; padding:7px;">
						<h3>Espace publicitaire</h3>

						<div class="card" style="width: 18rem;">
  <img src="{{asset('images/publicite/livre.jpg')}}" class="card-img-top img-fluid" alt="...">
  <div class="card-body">
    <h5 class="card-title">Vente</h5>
    <p class="card-text">Bonnes pratiques, trucs et astuces  pour redinamiser vos performences commerciales.  .</p>
    <a href="#" class="btn btn-primary">En savoir plus</a>
  </div>
</div>
<br>

<div class="card" style="width: 18rem;">
  <img src="{{asset('images/publicite/prospection-commerciale-5-conseils.png')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Céminaire</h5>
    <p class="card-text">Des techniques de ventes et tout ce qu'il faut pour booster votre activité commerciale...</p>
    <a href="#" class="btn btn-primary">Inscrivez vous</a>
  </div>
</div>

						
						</div>
						
						
						</div>
						
						
					</div>
				</div>
				
			
				
				<!-- Start Single Tab Content -->
				
				<!--<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
				-->
				
				<!-- Start Single Product -->
					<!-- SECTION DE CODE POUR LES PRODUITS-->
				
				
				
				
					
					
	
<br>

		<!--	<div class="container">
				<div class="row">
						<div class="col-lg-12">
							<div class="text-center">
								<button type="button" class="btn btn-warning">Voir plus de produits</button>
							</div>
						</div>
					</div>
				</div>				
				<br>								
			</div>  -->
	        					
	        				</div>

			

				
				
					
				<!-- End Single Tab Content -->
			<!--</div> -->
			
		</section>
		<!-- Start BEst Seller Area -->

		@endsection
@section('touslesproduits')
<!-- Start Best Seller Area -->
<section class="wn__bestseller__area bg--white pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center" id="touslesproduits">
							<h2 class="title__be--2">Tous <span class="color--theme">les produits</span></h2>
							<p>Retrouver ici tous les produits disponibles en sélectionnant la cathégorie que vous souhaitez consulter.</p>
						<br><br>
						</div>
					</div>
				</div>
				<div class="row mt--50">
					<div class="col-md-12 col-lg-12 col-sm-12">
						<div class="product__nav nav justify-content-center" role="tablist">
						<a  href="{{route('acceuil.nouveauproduit')}}" >Tous</a>

						<div class="row">
							
						</div>
						@foreach($cathegoriespeu as $cathegorie)
					 <!--  <a class="nav-item nav-link" data-toggle="tab" onclick="location.href='{{route('cats',$cathegorie->id)}}'" role="tab">{{$cathegorie->c_libelle}}</a>
					 
				 	  <button type="button" onclick="{{route('cats',$cathegorie->id)}}" class="btn btn-secondary">{{$cathegorie->c_libelle}}</button>
-->
					 
					   <!-- <a class="nav-item nav-link" data-toggle="tab" href="{{route('cats',$cathegorie->id)}}" role="tab">{{$cathegorie->c_libelle}}</a>
-->
					 <a  href="{{route('cats',$cathegorie->id)}}">{{$cathegorie->c_libelle}}</a>

					   @endforeach
						
						
						<!--<a class="nav-item nav-link active" data-toggle="tab" href="#nav-all" role="tab">Tous</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-biographic" role="tab">BIOGRAPHIC</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-adventure" role="tab">ADVENTURE</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-children" role="tab">CHILDREN</a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-cook" role="tab">COOK</a>
-->
						</div>
					</div>
				</div>
			
				
	<br><br><br>
				<div class="tab__container">
	        				<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
	        					<div class="row">
			
			
			<!--	<div class="tab__container">
					 Start Single Tab Content 
					<div class="row single__tab tab-pane fade show active" id="nav-all" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							<div class="single__product"> -->
									<!-- Start Single Product -->
								
									@foreach ($list_product as $productsbycat)
									<div class="product product__style--3 col-md-3">
			        					<div class="product__thumb">
											<a class="first__img" href="{{ route('produit.detail', $produit->id)}}"><img src="{{url('images/product/Images1/medium',$productsbycat->p_image1)}}" alt="product image"></a>
											<a class="second__img animation1" href="{{ route('produit.detail', $produit->id)}}"><img src="{{url('images/product/Images2/medium',$productsbycat->p_image2)}}" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">Disponible</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="{{ route('produit.detail', $produit->id)}}">{{$productsbycat->p_libelle}}</a></h4>
											<ul class="prize d-flex">
												<li>$35.00</li>
												<li class="old_prize">${{$productsbycat->p_prixancien}}</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<!--<li><a class="cart" title="Ajouter au panier" href="#"><i class="bi bi-shopping-bag4"></i></a></li>
													
														<li><a class="wishlist" title="Ajouter au panier" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
														-->
													
														<li><a  title="Voir le produit" href="{{ route('produit.detail', $produit->id)}}"><i class="bi bi-search"></i></a></li>
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
		        					<!-- End Single Product -->


@endforeach
								<!-- Start Single Product -->
								
							</div>
						</div>
					</div>
					<!-- End Single Tab Content -->
				</div>
				<div class="container">
							<div class="row">
									<div class="col-lg-12">
										<div class="text-center">
											<a href="{{route('produit.liste')}}"><button type="button"  class="btn btn-outline-danger">Voir plus de produits</button></a>
									
										</div>
									</div>
							</div>

						</div>

			</div>
		</section>
		<!-- Start BEst Seller Area -->
@endsection

@section('newsletter')
	<!-- Start NEwsletter Area -->
	<section class="wn__newsletter__area bg-image--2" style="background-image: url({{asset('images/bg/2.jpg')}});">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 offset-lg-5 col-md-12 col-12 ptb--150">
						<div class="section__title text-center">
							<h2>Les nouveautés dans votre mail</h2>
						</div>
						<div class="newsletter__block text-center">
							<p>Abonnez-vous  maintenant et restez au courant des nouvels arrivares, des nouvelles collections de derniers looks, et des offres exclusives..</p>
							<form action="#">
								<div class="newsletter__box">
									<input type="email" placeholder="Entrer votre email ou Numero whatsapp" style="color:#e59285;">
									
									<button type="button" class="btn btn-outline-danger" style="color:#e59285";>S'abonner</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End NEwsletter Area -->

@endsection

@section('pointdevente')

	<!-- Start Recent Post Area -->
	<section class="wn__recent__post bg--gray ptb--80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">Nos <span class="color--theme">Points de vente</span></h2>
							<p>Nos différents points de vente et Boutiques Partenaires</p>
						</div>
					</div>
				</div>
				<div class="row mt--50">
					<div class="col-md-6 col-lg-4 col-sm-12">
						<div class="post__itam">
							<div class="content">
								<h3><a href="blog-details.html">Lolo Endoch Full Design </a></h3>
								<p>La boutique Lolo  Endoch est spécialisé dans l'importations des tenues et vêtement de qualités irreprochables. Des modes et styles de dernières génération.</p>
								<p style="color:#e59285;">Elle est située à Akpkpa Kaboma. </p>
								<p>2ième Rue après la Pharmacie Laylay en quittant Meko Prod</p>
								<div class="post__time">
									<span class="day">Tel:+229 65 65 65 65 / +229 95 95 66 62</span>
									
									
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 col-sm-12">
						<div class="post__itam">
							<div class="content">
							<h3><a href="blog-details.html">Maki Fashion Brillant </a></h3>
								<p>La boutique Lolo  Endoch est spécialisé dans l'importations des tenues et vêtement de qualités irreprochables. Des modes et styles de dernières génération.</p>
								<p style="color:#e59285;">Elle est située à Akpkpa Kaboma. </p>
								<p>2ième Rue après la Pharmacie Laylay en quittant Meko Prod</p>
								<div class="post__time">
									<span class="day">Tel:+229 65 65 65 65 / +229 95 95 66 62</span>
									
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 col-sm-12">
						<div class="post__itam">
							<div class="content">
							<h3><a href="blog-details.html">Milk Gourou Style </a></h3>
								<p>La boutique Lolo  Endoch est spécialisé dans l'importations des tenues et vêtement de qualités irreprochables. Des modes et styles de dernières génération.</p>
								<p style="color:#e59285;">Elle est située à Akpkpa Kaboma. </p>
								<p>2ième Rue après la Pharmacie Laylay en quittant Meko Prod</p>
								<div class="post__time">
									<span class="day">Tel:+229 65 65 65 65 / +229 95 95 66 62</span>
									
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Recent Post Area -->

@endsection