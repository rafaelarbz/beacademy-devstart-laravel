<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container justify-content-between">
            <div class="row">
                <div class="col-10">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/users">Usuários</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/posts">Posts</a>
                        </li>
                    </ul>
                </div>
                <div class="col-2">
                    <ul class="navbar-nav mr-auto">
                        @if (Auth::user())
                            <li class="nav-item">
                                <a class="nav-link text-white" href="">User</a>
                            </li>
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <x-reponsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                         this.closest('form').submit();">
                                    {{ __('Sair') }}
                                    </x-reponsive-nav-link>
                                </form>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">Username</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('register') }}">Registre-se</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container p-3 w-75">
        @yield('body')
    </div>
</body>
</html>