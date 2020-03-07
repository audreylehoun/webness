@extends('backEnd.layouts.master')
@section('title','Liste des produits')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Acceuil</a> <a href="{{route('product.index')}}" class="current">Produits</a></div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Effectué!  </strong> {{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>Liste des produits</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Nom du produit</th>
                        <th>Cathégorie</th>
                        
                        <th>Prix</th>
                       
                        
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <?php $i++; ?>
                        <tr class="gradeC">
                            <td>{{$i}}</td>
                            <td style="text-align: center;"><img src="{{url('images/product/Images1/small',$product->p_image1)}}" alt="" width="50"></td>
                            <td style="vertical-align: middle;">{{$product->p_libelle}}</td>

                            <?php
$latestProduct = App\Cathegorie::where('id', $product->p_cathegorie_id)->first();
                                                     
if ($latestProduct!=NULL){
    ?>
      <td style="vertical-align: middle;"><?php echo htmlspecialchars($latestProduct->c_libelle) ; ?></td>

<?php 
} ?>


                       
                         
   




                            <td style="vertical-align: middle;">{{$product->p_prixancien}}</td>
                            <td style="text-align: center; vertical-align: middle;">
                                <a href="#myModal{{$product->id}}" data-toggle="modal" class="btn btn-info btn-mini">Voir le produit</a>
                                <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary btn-mini">Modifier</a>
                                <a href="javascript:" rel="{{$product->id}}" rel1="delete-product" class="btn btn-danger btn-mini deleteRecord">Supprimer</a>
                            </td>
                        </tr>
                        {{--Pop Up Model for View Product--}}
                        <div id="myModal{{$product->id}}" class="modal hide">
                            <div class="modal-header">
                                <button data-dismiss="modal" class="close" type="button">×</button>
                                <h3>{{$product->p_libelle}}</h3>
                            </div>
                            <div class="modal-body">
                                <div class="text-center"><img src="{{url('images/product/Images1/small',$product->p_image1)}}" width="100" alt="{{$product->p_libelle}}"></div>
                                <p class="text-center">{{$product->p_description}}</p>
                            </div>
                        </div>
                        {{--Pop Up Model for View Product--}}
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{asset('ad/js/jquery.min.js')}}"></script>
    <script src="{{asset('ad/js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('ad/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('ad/js/jquery.uniform.js')}}"></script>
    <script src="{{asset('ad/js/select2.min.js')}}"></script>
    <script src="{{asset('ad/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('ad/js/matrix.js')}}"></script>
    <script src="{{asset('ad/js/matrix.tables.js')}}"></script>
    <script src="{{asset('ad/js/matrix.popover.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
        $(".deleteRecord").click(function () {
            var id=$(this).attr('rel');
            var deleteFunction=$(this).attr('rel1');
            swal({
                title:'?Etes-vous sûr ?',
                text:"Cette oppération est irreversible",
                type:'warning',
                showCancelButton:true,
                confirmButtonColor:'#3085d6',
                cancelButtonColor:'#d33',
                confirmButtonText:'Oui, supprimer';
                cancelButtonText:'Non, Annuler!',
                confirmButtonClass:'btn btn-success',
                cancelButtonClass:'btn btn-danger',
                buttonsStyling:false,
                reverseButtons:true
            },function () {
                window.location.href="/admin/"+deleteFunction+"/"+id;
            });
        });
    </script>
@endsection