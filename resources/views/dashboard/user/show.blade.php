
@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-form')
    <div class="row mt-2">
        <div class="col-12 text-right">
            <a type="button" href="{{ route('user.index') }}" class="btn bt-sm btn-outline-info">Volver</a>
        </div>
        <div class="col-12 mt-2">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Nombre..." name="name" value="{{ $user->name }}" disabled>
                </div>
                <div class="form-group">
                    <label for="rol">Rol</label>
                    <input type="text" class="form-control" id="rol" aria-describedby="rolHelp" placeholder="Rol..." name="rol" value="{{ $user->rol->name}}" disabled>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email..." name="email" value="{{ $user->email}}" disabled>
                </div>
        </div>
    </div>  
@endsection
   