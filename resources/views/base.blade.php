<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ForumTier</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary">
            <a class="navbar-brand" href="{{ url('post') }}">FORUM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{$activeHome ?? ''}}">
                        <a class="nav-link" href="{{ url('post') }}">Forum</a>
                    </li>
                    <li class="nav-item {{$activeLogin ?? ''}}">
                        <a class="nav-link" href="{{ url('usuario') }}">Login</a>
                    </li>
                    <li class="nav-item {{$activeLogout ?? ''}}">
                        <a class="nav-link" href="{{ url('usuario/logout') }}">Logout</a>
                    </li>
                    <li class="nav-item {{$activeRegister ?? ''}}">
                        <a class="nav-link" href="{{ url('usuario/create') }}">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('modalContent')
    </body>
</html>