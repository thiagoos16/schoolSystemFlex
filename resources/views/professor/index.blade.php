@extends("template.app")

@section("content")
    <div class="container">
        <h3 style="margin-bottom:40px;"> {{ Session::get('successMessage') }} </h3>

        <div class="row">
            <div class="col s6">
                <a href="{{ url('professor/new') }}" class="waves-effect waves-light btn">
                    <i class="material-icons left">add_box</i>Novo Professor
                </a>
            </div>
            <div class="col s6">
                <a href="{{ url('professor/pdf') }}" class="waves-effect waves-light btn">
                    <i class="material-icons left">picture_as_pdf</i>Gerar PDF
                </a>
            </div>
        </div> 

        <table>
            <thead>
                <tr>
                    <th> Id </th>
                    <th> Nome </th>
                    <th> Data de Nascimento </th>
                    <th> Data de Criação </th>
                    <th> Última Atualização </th>
                    <th> Ações </th>
                </tr>
            </thead>
            <tbody>
                @if (isset($professores))
                    @foreach ($professores as $professor)
                        <tr>
                            <td> {{ $professor->id }} </td>
                            <td> {{ $professor->nome }} </td>
                            <td> {{ $professor->data_nascimento }} </td>
                            <td> {{ $professor->created_at }} </td>
                            <td> {{ $professor->updated_at }} </td>
                            <td> 
                                <a href="{{ url('professor/edit', $professor->id) }}" title="Editar">
                                    <i class="material-icons">edit</i>
                                </a> 
                                <a href="{{ url('professor/delete', $professor->id) }}" title="Deletar">
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
        
