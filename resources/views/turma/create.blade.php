@extends("template.app")

@section("content")
    <div class="container">
        <div class="row">
            <form method="POST" action="{{ url('turma/create') }}" class="col s12">
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
            </form>
        </div>
    </div>
    <script type="text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>    
    <script type="text/javascript">
        $(document).ready(function() {
            $('select').material_select();
         });
    </script> 
@endsection