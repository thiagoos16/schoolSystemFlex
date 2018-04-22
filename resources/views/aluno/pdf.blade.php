<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="/css/materialize.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title> Sistema Escolar Flex </title>

        <style>
            table, th, td {
                border: none;
            }

            table {
                width: 100%;
                display: table;
                border-collapse: collapse;
                border-spacing: 0;
            }

            table.striped tr {
                border-bottom: none;
            }

            table.striped > tbody > tr:nth-child(odd) {
                background-color: rgba(242, 242, 242, 0.5);
            }

            table.striped > tbody > tr > td {
                border-radius: 0;
            }

            table.highlight > tbody > tr {
                -webkit-transition: background-color .25s ease;
                transition: background-color .25s ease;
            }

            table.highlight > tbody > tr:hover {
                background-color: rgba(242, 242, 242, 0.5);
            }

            table.centered thead tr th, table.centered tbody tr td {
                text-align: center;
            }

            td, th {
                padding: 15px 5px;
                display: table-cell;
                text-align: left;
                vertical-align: middle;
                border-radius: 2px;
                border-bottom: 1px solid rgba(0, 0, 0, 0.12);
            }

        </style>
    </head>

    <body>
        <table>
            <thead>
                <tr>
                    <th> Nome </th>
                    <th> Data de Nascimento </th>
                    <th> Curso </th>
                    <th> Rua </th>
                    <th> Numero </th>
                    <th> Bairro </th>
                    <th> Cidade </th>
                    <th> Estado </th>
                </tr>
            </thead>
            <tbody>
                @if (isset($alunos))
                    @foreach ($alunos as $aluno)
                        <tr>
                            <td> {{ $aluno->nome }} </td>
                            <td> {{ $aluno->data_nascimento }} </td>
                            <td> {{ $aluno->curso }} </td>
                            <td> {{ $aluno->rua }} </td>
                            <td> {{ $aluno->numero }} </td>
                            <td> {{ $aluno->bairro }} </td>
                            <td> {{ $aluno->cidade }} </td>
                            <td> {{ $aluno->estado }} </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </body>
</html>