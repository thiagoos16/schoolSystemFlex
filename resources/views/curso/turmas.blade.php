@extends("template.app")

@section("content")
    <div class="container">
        <h3 style="margin-bottom:40px;"> {{ Session::get('successMessage') }} </h3>
        <h5 style="margin-bottom:40px;"> {{ Session::get('errorMessage') }} </h5>

        <div class="row">
            <form method="POST" action="{{ url('curso/createTurmaCurso') }}" class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Ex: SP01" id="sigla" name="sigla" type="text" class="validate">
                        <label for="sigla">Sigla da Turma</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <select name="id_professor">
                            <option value = "" disabled selected>Professor</option>
                            @foreach($professores as $professor)
                                <option value="{{$professor->id}}"> {{$professor->nome}} </option>
                            @endforeach
                        </select>
                        <label>Professor</label>
                    </div>
                    <div class="input-field col s6">
                        <select name="id_disciplina">
                            <option value = "" disabled selected>Disciplina</option>
                            @foreach($disciplinas as $disciplina)
                                <option value="{{$disciplina->id}}"> {{$disciplina->nome}} </option>
                            @endforeach
                        </select>
                        <label>Disciplina</label>
                    </div>
                </div> 
                <button type="submit" class="waves-effect waves-light btn">Salvar</button> 
                <input type="hidden" name="curso_id" value="{{ $curso_id }}"> 
            </form>
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
                @if (isset($turmasCurso))
                    @foreach ($turmasCurso as $turma)
                        <tr>
                            <td> {{ $turma->id }} </td>
                            <td> {{ $turma->sigla }} </td>
                            <td> {{ $turma->professor_nome }} </td>
                            <td> {{ $turma->disciplina_nome }} </td>
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
    <script type="text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('select').material_select();
         });
    </script> 
@endsection
        
