@extends("template.app")

@section("content")
    <div class="container">
        <div class="row">
            <form method="POST" action="{{ url('curso/create') }}" class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Ex: Engenharia da Computação" id="nome" name="nome" type="text" class="validate">
                        <label for="nome">Nome do Curso</label>
                        <button type="submit" class="waves-effect waves-light btn">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
