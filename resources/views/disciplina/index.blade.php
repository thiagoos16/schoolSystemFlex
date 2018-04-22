@extends("template.app")

@section("content")
    <div class="container">
        <h3 style="margin-bottom:40px;"> {{ Session::get('successMessage') }} </h3>

        <div class="row">
            <div class="col s6">
                <a href="{{ url('disciplina/new') }}" class="waves-effect waves-light btn">
                    <i class="material-icons left">add_box</i>Novo Disciplina
                </a>
            </div>
            <div class="col s6">
                <a href="{{ url('disciplina/pdf') }}" class="waves-effect waves-light btn">
                    <i class="material-icons left">picture_as_pdf</i>Gerar PDF
                </a>
            </div>
        </div> 

        <table>
            <thead>
                <tr>
                    <th> Id </th>
                    <th> Nome </th>
                    <th> Data de Criação </th>
                    <th> Última Atualização </th>
                    <th> Ações </th>
                </tr>
            </thead>
            <tbody>
                @if (isset($disciplinas))
                    @foreach ($disciplinas as $disciplina)
                        <tr>
                            <td> {{ $disciplina->id }} </td>
                            <td> {{ $disciplina->nome }} </td>
                            <td> {{ $disciplina->created_at }} </td>
                            <td> {{ $disciplina->updated_at }} </td>
                            <td> 
                                <a href="{{ url('disciplina/edit', $disciplina->id) }}" title="Editar">
                                    <i class="material-icons">edit</i>
                                </a> 
                                <a href="{{ url('disciplina/delete', $disciplina->id) }}" title="Deletar">
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
        
