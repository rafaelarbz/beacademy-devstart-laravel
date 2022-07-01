@extends('template.users')
@section('title', $title)
@section('body')
    <h1>Usuário {{ $user->name }}</h1>
    <table class="table table-hover">
        <thead class="text-center">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Cadastro</th>
                <th scope="col">Informações</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody class="text-center">
                <tr>
                    <td scope="row">{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ date('d-m-Y - H:i',strtotime($user->created_at)) }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning text-white">✏️</a>
                    </td>
                    <td>  
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger text-white">🗑️</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>
@endsection