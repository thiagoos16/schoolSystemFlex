@extends("template.app")

@section("content")
    <div class="container">
        <h3 style="margin-bottom:40px;"> {{ Session::get('successMessage') }} </h3>

        <div class="row">
            <div class="col s6">
                <a href="{{ url('curso/new') }}" class="waves-effect waves-light btn">
                    <i class="material-icons left">add_box</i>Novo Curso
                </a>
            </div>
            <div class="col s6">
                <a href="{{ url('curso/pdf') }}" class="waves-effect waves-light btn">
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
                @if (isset($cursos))
                    @foreach ($cursos as $curso)
                        <tr>
                            <td> {{ $curso->id }} </td>
                            <td> {{ $curso->nome }} </td>
                            <td> {{ $curso->created_at }} </td>
                            <td> {{ $curso->updated_at }} </td>
                            <td> 
                                <a href="{{ url('curso/edit', $curso->id) }}" title="Editar">
                                    <i class="material-icons">edit</i>
                                </a> 
                                <a href="{{ url('curso/delete', $curso->id) }}" title="Deletar">
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
        
