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
            <div class="row">
                <form method="POST" action="{{ url('curso/create') }}" class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Ex: Engenharia da Computação" id="nome" name="nome" type="text" class="validate">
                            <label for="nome">Nome do Curso</label>
                            <button type="submit" class="waves-effect waves-light btn">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <script type="text/javascript" src="/js/materialize.min.js"></script>
    </body>
</html>