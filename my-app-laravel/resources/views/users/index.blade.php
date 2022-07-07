@extends('template.users')
@section('title', 'Listagem de Usuários')
@section('body')
    <h1>Listagem de Usuários</h1>
    <table class="table table-hover">
        <thead class="text-center">
            <tr>
                <th scope="col">Foto</th>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Cadastro</th>
                <th scope="col">Detalhes</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($users as $user)
                <tr>
                    @if($user->image)
                        <th><img src=" {{ asset('storage/'.$user->image)}} " width="50px" height="50px" class="rounded-circle"></th>
                    @else 
                        <th><img src=" {{ asset('storage/profile/avatar.png')}} " width="50px" height="50px" class="rounded-circle"></th>
                    @endif
                    <td scope="row">{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ date('d-m-Y - H:i',strtotime($user->created_at)) }}</td>
                    <td><a href="{{ route('users.show', $user->id)}}" class="btn btn-sm btn-primary text-light">Visualizar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="justify-content-center pagination">
        {{$users->links('pagination::bootstrap-4')}}
    </div>
@endsection