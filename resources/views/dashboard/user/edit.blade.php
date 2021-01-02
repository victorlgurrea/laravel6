
@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-form')

<form action="{{ route('user.update', $user->id)}}" method="POST">
    @method('PUT')
    @include('dashboard.user._form', ['pass' => false])
</form>
@endsection
   