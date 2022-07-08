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
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <div class="nav-item">
                <a class="nav-link text-white" href="/users">Lista</a>
            </div>
            <div class="nav-item">
                <a class="nav-link text-white" href="/users/create">Novo Usuário</a>
            </div>
            <div class="nav-item">
                <a class="nav-link text-white" href="/posts">Posts</a>
            </div>
            <div class="nav-item">
                <form action="{{ route('users.index') }}" method="GET">
                    <div class="input-group">
                        <input type="search" class="form-control rounded" placeholder="Pesquisar Usuário" name="search"/>
                        <button type="submit" class="btn btn-outline-light">🔍</button>
                    </div>
                </form>
            </div>
        </div>
      </nav>
    <div class="container p-3 w-75">
        @yield('body')
    </div>
</body>
</html>