@extends("template.app")

@section("content")
    <div class="container">
        <div class="row">
            <form method="POST" action="{{ url('disciplina/create') }}" class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Ex: Validação de Software" id="nome" name="nome" type="text" class="validate">
                        <label for="nome">Nome da Disciplina</label>
                        <button type="submit" class="waves-effect waves-light btn">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
