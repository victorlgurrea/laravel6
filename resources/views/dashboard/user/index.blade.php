

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
            <a type="button" href="{{ route('user.create') }}" class="btn btn-sm btn-outline-success">Nuevo usuario</a>
        </div>
        <div class="col-12 mt-2">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Fecha Creación</th>
                        <th>Fecha Actualizacion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td><a href="{{ route('user.show', $user->id) }}">{{ $user->name}}</a></td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->rol->key }}</td>
                            <td class="text-center">{{ $user->created_at->format("d-m-Y H:i:s") }}</td>
                            <td class="text-center">{{ $user->updated_at->format("d-m-Y H:i:s") }}</td>
                            <td class="text-right">
                                <a class="btn btn-outline-info" href="{{ route('user.show', $user->id) }}"><i class="fas fa-search"></i></a>
                                <a class="btn btn-outline-warning" href="{{ route('user.edit', $user->id) }}"><i class="fas fa-pen"></i></a>
                                <button class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{ $user->id }}"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                {{ $users->links() }}
        </div>
    </div>

    @include('dashboard.partials.modal-confirm-delete',['route' => 'user.destroy'])
@endsection