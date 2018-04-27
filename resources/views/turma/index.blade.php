@extends("template.app")

@section("content")
    <div class="container">
        <h3 style="margin-bottom:40px;"> {{ Session::get('successMessage') }} </h3>
        <h5 style="margin-bottom:40px;"> {{ Session::get('errorMessage') }} </h5>

        <div class="row">
            <div class="col s6">
                <a href="{{ url('turma/new') }}" class="waves-effect waves-light btn">
                    <i class="material-icons left">add_box</i>Nova Turma
                </a>
            </div>
            <div class="col s6">
                <a href="*" class="waves-effect waves-light btn">
                    <i class="material-icons left">picture_as_pdf</i>Gerar PDF
                </a>
            </div>
        </div> 

        <table>
            <thead>
                <tr>
                    <th> id </th>
                    <th> sigla </th>
                    <th> id_professor </th>
                    <th> id_disciplina </th>
                    <th> ações </th>
                </tr>
            </thead>
            <tbody>
                @if (isset($turmas))
                    @foreach ($turmas as $turma)
                        <tr>
                            <td> {{ $turma->id }} </td>
                            <td> {{ $turma->sigla }} </td>
                            <td> {{ $turma->id_professor }} </td>
                            <td> {{ $turma->id_disciplina }} </td>
                            <td> 
                                <a href="*" title="Editar">
                                    <i class="material-icons">edit</i>
                                </a> 
                                <a href="*" title="Deletar">
                                    <i class="material-icons">delete</i>
                                </a> 
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection
        
