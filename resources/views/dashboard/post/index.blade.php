

<style>
    .pagination{
        justify-content: center;
    }
    .table a{
        color:black !important;
    }
    .table a:hover {
        text-decoration:none !important;
    }
</style>

@extends('dashboard.master')
@section('content')
    <div class="row mt-2">
        <div class="col-12 text-right">
            <a type="button" href="{{ route('post.create') }}" class="btn btn-sm btn-outline-success">Nuevo post</a>
        </div>
        <div class="col-12 mt-2">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th>Titulo</th>
                        <th>Posteado</th>
                        <th>Fecha Creacion</th>
                        <th>Fecha Actualizacion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td><a href="{{ route('post.show', $post->id) }}">{{ $post->title}}</a></td>
                            <td><img class="mx-auto d-block" src="{{ ($post->posted == 'yes') ? asset('img/check.png') : asset('img/error.png') }}" width="20px" height="20px"/></td>
                            <td class="text-center">{{ $post->created_at->format("d-m-Y H:i:s") }}</td>
                            <td class="text-center">{{ $post->updated_at->format("d-m-Y H:i:s") }}</td>
                            <td class="text-right">
                                <a class="btn btn-outline-info" href="{{ route('post.show', $post->id) }}"><i class="fas fa-search"></i></a>
                                <a class="btn btn-outline-warning" href="{{ route('post.edit', $post->id) }}"><i class="fas fa-pen"></i></a>
                                <button class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{ $post->id }}"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                {{ $posts->links() }}
        </div>
    </div>

    @include('dashboard.partials.modal-confirm-delete')
@endsection