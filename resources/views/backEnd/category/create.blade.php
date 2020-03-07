@extends('backEnd.layouts.master')
@section('title','Add Category')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Acceuil</a> <a href="{{route('category.index')}}">CategorCathégorie</a> <a href="{{route('category.create')}}" class="current">Ajouter une nouvelle cathégorie</a> </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                    <h5>Ajouter une cathégorie</h5>
                </div>
                <div class="widget-content nopadding">
                    <form class="form-horizontal" method="post" action="{{route('category.store')}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
                        @csrf
                        <div class="control-group{{$errors->has('name')?' has-error':''}}">
                            <label class="control-label">Nom de la Cathégorie :</label>
                            <div class="controls">
                                <input type="text" name="c_libelle" id="name" value="{{old('c_libelle')}}" required>
                                <span class="text-danger" id="chCategory_name" style="color: red;">{{$errors->first('c_libelle')}}</span>
                            </div>
                        </div>
                       
                        <div class="control-group">
                            <label class="control-label">Description :</label>
                            <div class="controls">
                                <textarea name="c_description" id="description" rows="5">{{old('c_description')}}</textarea>
                            </div>
                        </div>
                        
                       <!-- <div class="control-group{{$errors->has('status')?' has-error':''}}">
                            <label class="control-label">Actif :</label>
                            <div class="controls">
                                <input type="checkbox" name="status" id="status" value="1">
                                <span class="text-danger">{{$errors->first('status')}}</span>
                            </div>
                        </div>-->
                        <div class="control-group">
                            <label for="control-label"></label>
                            <div class="controls">
                                <input type="submit" value="Ajouter" class="btn btn-success">
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