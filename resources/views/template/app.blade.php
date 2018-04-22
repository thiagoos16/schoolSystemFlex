<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema Escolar Flex</title>
        <style>
            header {
                margin-bottom:40px;
            }
        </style>    
        <!-- Fonts -->
        <link href="/css/materialize.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav>
                <div class="nav-wrapper">
                    <a href="{{ route('index') }}" class="brand-logo">Logo</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="{{ url('curso/') }}">Curso</a></li>
                        <li><a href="{{ url('professor/') }}">Professor</a></li>
                        <li><a href="*">Disciplina</a></li>
                        <li><a href="*">Alunos</a></li>
                        <li><a href="*">Turma</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        @yield('content')
        <script type="/text/javascript" src="/js/materialize.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    </body>
</html>
