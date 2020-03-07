@extends('backEnd.layouts.master')
@section('title','Ajout de produits')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Acceuil</a> <a href="{{route('product.index')}}">Produits</a> <a href="{{route('product.create')}}" class="current">Ajouter nouveau produit</a> </div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Effectué! &nbsp;</strong>{{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Ajouter de nouveaux produits</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="{{route('product.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="control-group">
                        <label class="control-label">Selectionner la cathégorie</label>
                        <div class="controls">
                            <select name="p_cathegorie_id" style="width: 415px;">
                                @foreach($categories as $key=>$value)
                                    <option value="{{$key}}">{{$value}}</option>
                                   
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_libelle" class="control-label">Nom du produit</label>
                        <div class="controls{{$errors->has('p_libelle')?' has-error':''}}">
                            <input type="text" name="p_libelle" id="p_name" class="form-control" value="{{old('p_libelle')}}" title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('p_libelle')}}</span>
                        </div>
                   
                        
                   
                    </div>
                    
                    <div class="control-group">
                        <label for="p_description" class="control-label">Description</label>
                        <div class="controls{{$errors->has('p_description')?' has-error':''}}">
                            <textarea class="textarea_editor span12" name="p_description" id="description" rows="6" placeholder="Description du produit" style="width: 580px;">{{old('p_description')}}</textarea>
                            <span class="text-danger">{{$errors->first('p_description')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_prixancien" class="control-label">Prix</label>
                        <div class="controls{{$errors->has('p_prixancien')?' has-error':''}}">
                            <div class="input-prepend"> <span class="add-on">$</span>
                                <input type="number" name="p_prixancien" id="price" class="" value="{{old('p_prixancien')}}" title="" required="required">
                                <span class="text-danger">{{$errors->first('p_prixancien')}}</span>
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="stock" class="control-label">Stock disponible</label>
                        <div class="controls{{$errors->has('stock')?' has-error':''}}">
                            <div class="input-prepend"> <span class="add-on"></span>
                                <input type="number" name="stock" id="price" class="" value="{{old('stock')}}" title="" required="required">
                                <span class="text-danger">{{$errors->first('stock')}}</span>
                            </div>
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label">Image du produit</label>
                        <div class="controls">
                            <input type="file" name="p_image1" id="image"/>
                            <span class="text-danger">{{$errors->first('p_image1')}}</span>



</div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Seconde image du produit</label>
                        <div class="controls">
                            <input type="file" name="p_image2" id="image"/>
                            <span class="text-danger">{{$errors->first('p_image2')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="" class="control-label"></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Ajouter le produit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{asset('ad/js/jquery.min.js')}}"></script>
    <script src="{{asset('ad/js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('ad/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('ad/js/bootstrap-colorpicker.js')}}"></script>
    <script src="{{asset('ad/js/jquery.toggle.buttons.js')}}"></script>
    <script src="{{asset('ad/js/masked.js')}}"></script>
    <script src="{{asset('ad/js/jquery.uniform.js')}}"></script>
    <script src="{{asset('ad/js/select2.min.js')}}"></script>
    <script src="{{asset('ad/js/matrix.js')}}"></script>
    <script src="{{asset('ad/js/matrix.form_common.js')}}"></script>
    <script src="{{asset('ad/js/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('ad/js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('ad/js/bootstrap-wysihtml5.js')}}"></script>
    <script>
        $('.textarea_editor').wysihtml5();
    </script>
@endsection