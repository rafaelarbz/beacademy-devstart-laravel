@extends('template.users')
@section('title', "Lista de Postagens de {$user->name}")
@section('body')
    <h1>Postagens de {{$user->name}}</h1>

    @foreach($posts as $post)
        <div class="mb-3">

            <label class="form-label"><b>Identificação Nº :</b><br>{{ $post->id }}</label>
                <br>            
            <label class="form-label"><b>Status :</b><br>{{ $post->active?'Ativo':'Inativo' }}</label>
                <br>
            <label class="form-label"><b>Título :</b><br>{{ $post->title }}</label>
                <br>
            <label class="form-label"><b>Postagem :</b><br></label>
                <br>
            <textarea class="form-control" rows="3">{{ $post->post }}</textarea>

        </div>
    @endforeach
    
@endsection
    