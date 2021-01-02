
@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-form')

<form action="{{ route('user.store')}}" method="post">
    @include('dashboard.user._form', ['pass' => true])
</form>

@endsection
   