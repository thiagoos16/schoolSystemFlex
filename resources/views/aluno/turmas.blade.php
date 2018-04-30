@extends("template.app")

@section("content")
    <div class="container">
        <h5 style="margin-bottom:40px;"> {{ Session::get('successMessage') }} </h5>
        <h5 style="margin-bottom:40px;"> {{ Session::get('errorMessage') }} </h5>

        <div class="row">
            <form method="POST" action="{{ url('aluno/createTurmaAluno') }}" class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <select name="id_turma">
                            <option value = "" disabled selected>Turma</option>
                            @foreach($turmas as $turma)
                                <option value="{{$turma->id}}"> {{$turma->sigla}} </option>
                            @endforeach
                        </select>
                        <label>Turma</label>
                    </div>
                </div>
                <input type="hidden" name="aluno_id" value="{{ $aluno_id }}">
                <button type="submit" class="waves-effect waves-light btn">Salvar</button> 
            </form>
        </div>

        <table>
            <thead>
                <tr>
                    <th> Id </th>
                    <th> Sigla </th>
                    <th> Professor </th>
                    <th> Disciplina </th>
                    <th> Ações </th>
                </tr>
            </thead>
            <tbody>
                @if (isset($turmasAluno))
                    @foreach ($turmasAluno as $turma)
                        <tr>
                            <td> {{ $turma->id }} </td>
                            <td> {{ $turma->sigla }} </td>
                            <td> {{ $turma->professor_nome }} </td>
                            <td> {{ $turma->disciplina_nome }} </td>
                            <td>  
                                <a href="{{ url('aluno/deleteTurmaAluno', [$aluno_id, $turma->id]) }}" title="Cancelar Matrícula">
                                    <i class="material-icons">delete</i>
                                </a> 
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <script type="text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>    
    <script type="text/javascript">
        $(document).ready(function() {
            $('select').material_select();
         });
    </script> 
@endsection
        
