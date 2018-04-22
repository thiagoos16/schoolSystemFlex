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
            input[type=number]::-webkit-inner-spin-button {
               -webkit-appearance: none;
            }
            .nav-wrapper {
                background-color: #668cff;
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
                    <a href="{{ route('index') }}" class="brand-logo">Sistemas Escolar FLEX</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="{{ url('curso/') }}">Curso</a></li>
                        <li><a href="{{ url('professor/') }}">Professor</a></li>
                        <li><a href="{{ url('disciplina/') }}">Disciplina</a></li>
                        <li><a href="{{ url('aluno/') }}">Alunos</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        @yield('content')
        <script type="text/javascript" src="/js/materialize.min.js"></script>
        <script type="text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
    </body>
</html>
