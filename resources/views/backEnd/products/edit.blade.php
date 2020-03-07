@extends('backEnd.layouts.master')
@section('title','Ajout de produits')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Acceuil</a> <a href="{{route('product.index')}}">Produits</a> <a href="#" class="current">Modification de produitt</a> </div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong> &nbsp;</strong>{{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Ajouter nouveau produit</h5>
            </div>
            <div class="widget-content nopadding">

           
                <form action="{{route('product.update',$edit_product->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    {{method_field("PUT")}}
                    <div class="control-group">
                        <label class="control-label">Cathégorie</label>
                        <div class="controls">
                       
                            <select name="p_cathegorie_id" style="width: 415px;">
                                @foreach($categories as $key=>$value)
                                <option value="{{$key}}"{{$edit_category->id==$key?' selected':''}}>{{$value}}</option>
                              <!--  <option value="{{$key}}">{{$value}}</option>-->
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="p_libelle" class="control-label">Nom du produit</label>
                        <div class="controls{{$errors->has('p_libelle')?' has-error':''}}">
                            <input type="text" name="p_libelle" id="p_name" class="form-control" value="{{$edit_product->p_libelle}}" title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('p_libelle')}}</span>
                        </div>
                    </div>                  
                   
                    <div class="control-group">
                        <label for="p_description" class="control-label">Description</label>
                        <div class="controls{{$errors->has('p_description')?' has-error':''}}">
                            <textarea class="textarea_editor span12" name="p_description" id="description" rows="6" placeholder="Description du produit" style="width: 580px;">{{$edit_product->p_description}}</textarea>
                            <span class="text-danger">{{$errors->first('p_description')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_prixancien" class="control-label">Prix</label>
                        <div class="controls{{$errors->has('p_prixancien')?' has-error':''}}">
                            <div class="input-prepend"> <span class="add-on">$</span>
                                <input type="number" name="p_prixancien" id="price" class="" value="{{$edit_product->p_prixancien}}" title="" required="required">
                                <span class="text-danger">{{$errors->first('p_prixancien')}}</span>
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="stock" class="control-label">Stock disponible</label>
                        <div class="controls{{$errors->has('stock')?' has-error':''}}">
                            <div class="input-prepend"> <span class="add-on"></span>
                                <input type="number" name="stock" id="price" class="" value="{{$edit_product->stock}}" title="" required="required">
                                <span class="text-danger">{{$errors->first('stock')}}</span>
                            </div>
                        </div>
                    </div>



                    <div class="control-group">
                        <label class="control-label">Image du produit</label>
                        <div class="controls">
                            <input type="file" name="p_image1" id="image"/>
                            <span class="text-danger">{{$errors->first('p_image1')}}</span>
                            @if($edit_product->p_image1!='')
                                &nbsp;&nbsp;&nbsp;
                                <a href="javascript:" rel="{{$edit_product->id}}" rel1="delete-image" class="btn btn-danger btn-mini deleteRecord">Supprimer l'ancienne image</a>
                                <img src="{{url('images/product/Images1/small/',$edit_product->p_image1)}}" width="35" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Deuxième image</label>
                        <div class="controls">
                            <input type="file" name="p_image2" id="image"/>
                            <span class="text-danger">{{$errors->first('p_image2')}}</span>
                            @if($edit_product->p_image2!='')
                                &nbsp;&nbsp;&nbsp;
                                <a href="javascript:" rel="{{$edit_product->id}}" rel1="delete-image" class="btn btn-danger btn-mini deleteRecord">Supprimer l'ancienne image</a>
                                <img src="{{url('images/product/Images2/small/',$edit_product->p_image2)}}" width="35" alt="">
                            @endif
                        </div>
                    </div>


                    
                    <div class="control-group">
                        <label for="" class="control-label"></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Modifier le produit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> 




    </div>
@endsection
@section('jsblock')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-colorpicker.js')}}"></script>
    <script src="{{asset('js/jquery.toggle.buttons.js')}}"></script>
    <script src="{{asset('js/masked.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.form_common.js')}}"></script>
    <script src="{{asset('js/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-wysihtml5.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
        $(".deleteRecord").click(function () {
            var id=$(this).attr('rel');
            var deleteFunction=$(this).attr('rel1');
            swal({
                title:'Are you sure?',
                text:"You won't be able to revert this!",
                type:'warning',
                showCancelButton:true,
                confirmButtonColor:'#3085d6',
                cancelButtonColor:'#d33',
                confirmButtonText:'Yes, delete it!',
                cancelButtonText:'No, cancel!',
                confirmButtonClass:'btn btn-success',
                cancelButtonClass:'btn btn-danger',
                buttonsStyling:false,
                reverseButtons:true
            },function () {
                window.location.href="/admin/"+deleteFunction+"/"+id;
            });
        });
        $('.textarea_editor').wysihtml5();
    </script>
@endsection