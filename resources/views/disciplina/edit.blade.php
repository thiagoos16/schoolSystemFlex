@extends("template.app")

@section("content")
    <div class="container">
        <div class="row">
            <form method="POST" action="{{ url('disciplina/edit') }}" class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Ex: Validação de Software" id="nome" value="{{ $disciplina->nome }}" name="nome" type="text" class="validate">
                        <input type="hidden" name="id" value="{{ $disciplina->id }}">
                        <label for="nome">Nome da Disciplina</label>
                        <button type="submit" class="waves-effect waves-light btn">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
