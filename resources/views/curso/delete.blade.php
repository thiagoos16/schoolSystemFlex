<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema Escolar Flex</title>

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
                        <li><a href="*">Professor</a></li>
                        <li><a href="*">Disciplina</a></li>
                        <li><a href="*">Alunos</a></li>
                        <li><a href="*">Turma</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="container">
            <h4> Deletar o Curso: <b>{{ $curso->nome }}</b>? </h4>
            <div class="row">
                <div class="col s12">
                    <a href="{{ url('curso/') }}" class="waves-effect waves-light btn">
                        <i class="material-icons left">chevron_left</i>Cancelar
                    </a>
                    <a href="{{ url('curso/destroy', $curso->id) }}" class="waves-effect waves-light btn">
                        <i class="material-icons left">close</i>Excluir
                    </a>
                </div>
            </div>
        </div>
        
        <script type="text/javascript" src="/js/materialize.min.js"></script>
    </body>
</html>
