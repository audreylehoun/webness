@extends('backEnd.layouts.master')
@section('title','Modifier les cathégories')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Acceuil</a> <a href="{{route('category.index')}}">Cathégorie</a> <a href="#" class="current">Modifier les cathégories</a> </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Modifier Cathégorie</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form class="form-horizontal" method="post" action="{{route('category.update',$edit_category->id)}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            {{method_field("PUT")}}
                            <div class="control-group{{$errors->has('c_libelle')?' has-error':''}}">
                                <label class="control-label">Nom de la cathégorie :</label>
                                <div class="controls">
                                    <input type="text" name="c_libelle" id="name" value="{{$edit_category->c_libelle}}" required>
                                    <span class="text-danger" style="color: red;">{{$errors->first('c_libelle')}}</span>
                                </div>
                            </div>
                           
                            <div class="control-group">
                                <label class="control-label">Description :</label>
                                <div class="controls">
                                    <textarea name="c_description" id="description" rows="5">{{$edit_category->c_description}}</textarea>
                                </div>
                            </div>
                           
                            <div class="control-group">
                                <label for="control-label"></label>
                                <div class="controls">
                                    <input type="submit" value="Modifier" class="btn btn-success">
                                </div>
                            </div>
                            <input type="hidden" name="c_parent_id" id="c_parent_id" value="1">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{ asset('ad/js/jquery.min.js') }}"></script>
    <script src="{{ asset('ad/js/jquery.ui.custom.js') }}"></script>
    <script src="{{ asset('ad/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('ad/js/jquery.uniform.js') }}"></script>
    <script src="{{ asset('ad/js/select2.min.js') }}"></script>
    <script src="{{ asset('ad/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('ad/js/jquery.validate.js') }}"></script>
    <script src="{{ asset('ad/js/matrix.js') }}"></script>
    <script src="{{ asset('ad/js/matrix.form_validation.js') }}"></script>
    <script src="{{ asset('ad/js/matrix.tables.js') }}"></script>
    <script src="{{ asset('ad/js/matrix.popover.js') }}"></script>
@endsection