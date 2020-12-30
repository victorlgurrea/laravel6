
@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-form')

<form action="{{ route('post.update', $post->id)}}" method="POST">
    @method('PUT')
    @include('dashboard.post._form')
</form>

<br>

<form action="{{ route('post.image',$post) }}" enctype="multipart/form-data" method="post">
    @csrf
    @method('POST')
    <div class="row">
        <div class="col-12 col-xl-2">
            <img src="{{ URL::to('/') }}/img/images/{{ $post->image->image}}" width="100" height="100"/>
        </div>
        <div class="col-12 col-xl-5">
            <input type="file" name="image" class="form-control">
        </div>
        <div class="col-12 col-xl-5">
            <input type="submit" value="Subir" class="btn btn-primary">
        </div>
    </div>
</form>

@endsection
   