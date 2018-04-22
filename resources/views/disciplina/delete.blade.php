@extends("template.app")

@section("content")
    <div class="container">
        <h4> Deletar o Disciplina: <b>{{ $disciplina->nome }}</b>? </h4>
        <div class="row">
            <div class="col s12">
                <a href="{{ url('disciplina/') }}" class="waves-effect waves-light btn">
                    <i class="material-icons left">chevron_left</i>Cancelar
                </a>
                <a href="{{ url('disciplina/destroy', $disciplina->id) }}" class="waves-effect waves-light btn">
                    <i class="material-icons left">close</i>Excluir
                </a>
            </div>
        </div>
    </div>
@endsection