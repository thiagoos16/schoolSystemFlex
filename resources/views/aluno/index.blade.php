@extends("template.app")

@section("content")
    <div class="container">
        <h3 style="margin-bottom:40px;"> {{ Session::get('successMessage') }} </h3>
        <h5 style="margin-bottom:40px;"> {{ Session::get('errorMessage') }} </h5>

        <div class="row">
            <div class="col s4">
                <a href="{{ url('aluno/new') }}" class="waves-effect waves-light btn">
                    <i class="material-icons left">add_box</i>Novo Aluno
                </a>
            </div>
            <div class="col s4">
                <a href="{{ url('aluno/pdf') }}" class="waves-effect waves-light btn">
                    <i class="material-icons left">picture_as_pdf</i>Gerar PDF
                </a>
            </div>
        </div> 

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
                    <th> Ações </th>
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
                            <td> 
                                <a href="{{ url('aluno/edit', $aluno->id) }}" title="Editar">
                                    <i class="material-icons">edit</i>
                                </a> 
                                <a href="{{ url('aluno/delete', $aluno->id) }}" title="Deletar">
                                    <i class="material-icons">delete</i>
                                </a>
                                <a href="{{ url('aluno/turmas', $aluno->id) }}" title="Matricular-se em Turma">
                                    <i class="material-icons">title</i>
                                </a> 
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection
        
