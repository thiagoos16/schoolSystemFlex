@extends("template.app")

@section("content")
    <div class="container">
        <div class="row">
            <form method="POST" action="{{ url('professor/edit') }}" class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Ex: Mario Fernandes" id="nome" name="nome" value="{{ $professor->nome }}" type="text" class="validate">
                        <label for="nome">Nome do Professor</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input type="date" class="datepicker" name="data_nascimento" value="{{ $professor->data_nascimento}}">
                        <label for="data_nascimento">Data de Nascimento</label>
                    </div>
                </div>
                <input type="hidden" name="id" value="{{ $professor->id }}">
                <button type="submit" class="waves-effect waves-light btn">Salvar</button>
            </form>
        </div>
    </div> 
@endsection
