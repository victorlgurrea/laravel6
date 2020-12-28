
@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-form')
    <div class="row mt-2">
        <div class="col-12 text-right">
            <a type="button" href="{{ route('category.index') }}" class="btn bt-sm btn-outline-info">Volver</a>
        </div>
        <div class="col-12 mt-2">
                <div class="form-group">
                    <label for="title">Titulo</label>
                    <input type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Titulo..." name="title" value="{{ $category->title }}" disabled>
                </div>
                <div class="form-group">
                    <label for="url_clean">Url limpia</label>
                    <input type="text" class="form-control" id="url_clean" aria-describedby="url_cleanHelp" placeholder="Url..." name="url_clean" value="{{ $category->url_clean}}" disabled>
                </div>
        </div>
    </div>  
@endsection
   