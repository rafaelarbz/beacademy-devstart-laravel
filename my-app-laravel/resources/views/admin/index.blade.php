@extends('template.users')
@section('title', 'Admin')
@section('body')

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('storage/dash.png')}}" alt="Dashboard">
        <div class="card-body">
        <h5 class="card-title">Bem vindo ao Dashboard</h5>
        <p class="card-text">#pay.livre #be.academy #laravel</p>
        </div>
    </div>

@endsection