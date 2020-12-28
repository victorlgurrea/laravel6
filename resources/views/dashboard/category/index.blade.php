

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
            <a type="button" href="{{ route('category.create') }}" class="btn btn-sm btn-outline-success">Nueva categoria</a>
        </div>
        <div class="col-12 mt-2">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th>Titulo</th>
                        <th>Fecha Creacion</th>
                        <th>Fecha Actualizacion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td><a href="{{ route('category.show', $category->id) }}">{{ $category->title}}</a></td>
                            <td class="text-center">{{ $category->created_at->format("d-m-Y H:i:s") }}</td>
                            <td class="text-center">{{ $category->updated_at->format("d-m-Y H:i:s") }}</td>
                            <td class="text-right">
                                <a class="btn btn-outline-info" href="{{ route('category.show', $category->id) }}"><i class="fas fa-search"></i></a>
                                <a class="btn btn-outline-warning" href="{{ route('category.edit', $category->id) }}"><i class="fas fa-pen"></i></a>
                                <button class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{ $category->id }}"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                {{ $categories->links() }}
        </div>
    </div>

    @include('dashboard.partials.modal-confirm-delete',['route' => 'category.destroy'])
@endsection