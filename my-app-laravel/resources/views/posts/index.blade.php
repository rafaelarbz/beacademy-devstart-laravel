@extends('template.users')
@section('title', 'Lista de Postagens')
@section('body')
    <h1>Lista de Postagens</h1>
    <table class="table table-hover">
        <thead class="text-center">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Usuário</th>
                <th scope="col">Título</th>
                <th scope="col">Postagem</th>
                <th scope="col">Cadastro</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($posts as $post)
                <tr>
                    <td scope="row">{{ $post->id }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->post }}</td>
                    <td>{{ date('d-m-Y - H:i',strtotime($post->created_at)) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection