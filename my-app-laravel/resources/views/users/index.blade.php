@extends('template.users2')
@section('title', 'Listagem de Usuários')
@section('body')

    @if (session()->has('create'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session()->get('create')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session()->has('edit'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{session()->get('edit')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('destroy'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session()->get('destroy')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <h1>Listagem de Usuários</h1>

    <table class="table table-hover">
        <thead class="text-center">
            <tr>
                <th scope="col">Foto</th>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Postagens</th>
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
                    <td><a href="{{ route('posts.show', $user->id)}}" class="btn btn-sm btn-outline-dark">Postagens - {{$user->posts->count()}}</a></td>
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