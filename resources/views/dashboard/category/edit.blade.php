
@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-form')

<form action="{{ route('category.update', $category->id)}}" method="POST">
    @method('PUT')
    @include('dashboard.category._form')
</form>
@endsection
   