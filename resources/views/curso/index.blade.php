<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema Escolar Flex</title>

        <!-- Fonts -->
        <link href="css/materialize.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <style>
            .container .row {
                margin-top:5%
            }
        </style>
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

            @if(isset($successMessage))
                <h3> {{ $successMessage }} </h3>
            @endif

            <div class="row">
                <div class="col s6">
                    <a href="{{ url('curso/new') }}" class="waves-effect waves-light btn">
                        <i class="material-icons left">add_box</i>Novo Curso
                    </a>
                </div>
                <div class="col s6">
                    <a href="{{ url('curso/pdf') }}" class="waves-effect waves-light btn">
                        <i class="material-icons left">picture_as_pdf</i>Gerar PDF
                    </a>
                </div>
            </div> 

            <table>
                <thead>
                    <tr>
                        <th> Id </th>
                        <th> Nome </th>
                        <th> Data de Criação </th>
                        <th> Última Atualização </th>
                        <th> Ações </th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($cursos))
                        @foreach ($cursos as $curso)
                            <tr>
                                <td> {{ $curso->id }} </td>
                                <td> {{ $curso->nome }} </td>
                                <td> {{ $curso->created_at }} </td>
                                <td> {{ $curso->update_at }} </td>
                                <td> 
                                    <a href="{{ url('curso/edit', $curso->id) }}" title="Editar">
                                        <i class="material-icons">edit</i>
                                    </a> 
                                    <a href="{{ url('curso/delete', $curso->id) }}" title="Deletar">
                                        <i class="material-icons">delete</i>
                                    </a> 
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>
