<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 
    {
        $users = [
            'nomes' => [
                'Rafaela Rabelo',
                'Rafaela Souza'
            ]
        ];
        dd($users);
    }

    public function show($id) 
    {
        dd('O ID do usuário é ' . $id);       
    }
}
