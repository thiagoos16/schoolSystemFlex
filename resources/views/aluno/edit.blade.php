@extends("template.app")

@section("content")
    <div class="container">
        <div class="row">
            <form method="POST" action="{{ url('aluno/edit') }}" class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Ex: Mario Fernandes" id="nome" name="nome" type="text" value="{{ $aluno->nome }}" class="validate">
                        <label for="nome">Nome do Aluno</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input type="date" class="datepicker" name="data_nascimento" value="{{$aluno->data_nascimento}}">
                        <label for="data_nascimento">Data de Nascimento</label>
                    </div>
                    <div class="input-field col s6">
                        <select name="id_curso">
                            <option value = "{{$aluno->id_curso}}" disabled selected>{{$aluno->nome_curso}}</option>
                            @foreach($cursos as $curso)
                                <option value="{{$curso->id}}"> {{$curso->nome}} </option>
                            @endforeach
                        </select>
                        <label>Curso</label>
                    </div>
                </div> 

                <h4> Endereço </h4>

                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Ex: 69087590" id="cep" name="cep" value="{{$aluno->cep}}" type="number" class="validate" onblur="pesquisacep(this.value);">
                        <label for="cep">CEP</label>
                        <span class="helper-text" data-error="wrong" data-success="O endereço foi preenchido">
                            Digite o CEP e ao sair(TAB) o endereço será completado.
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="" id="rua" name="rua" type="text" value="{{$aluno->rua}}" class="validate">
                        <label for="rua">Rua</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="" id="numero" name="numero" type="number" value="{{$aluno->numero}}" class="validate">
                        <label for="numero">Numero</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="" id="bairro" name="bairro" type="text" value="{{$aluno->bairro}}" class="validate">
                        <label for="bairro">Bairro</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="" id="logradouro" name="logradouro" type="text" value="{{$aluno->logradouro}}" class="validate">
                        <label for="logradouro">Logradouro</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="" id="cidade" name="cidade" type="text" value="{{$aluno->cidade}}" class="validate">
                        <label for="cidade">Cidade</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="" id="estado" name="estado" type="text" value="{{$aluno->estado}}" class="validate">
                        <label for="estado">Estado</label>
                    </div>
                </div>
                <input type="hidden" name="id" value="{{ $aluno->id }}">

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
    <script type="text/javascript">
        function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('estado').value=("");
        }

        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.
                document.getElementById('rua').value=(conteudo.logradouro);
                document.getElementById('bairro').value=(conteudo.bairro);
                document.getElementById('cidade').value=(conteudo.localidade);
                document.getElementById('estado').value=(conteudo.uf);
            } //end if.
            else {''
                //CEP não Encontrado.
                limpa_formulário_cep();
                alert("CEP não encontrado.");
            }
        }
            
        function pesquisacep(valor) {

            //Nova variável "cep" somente com dígitos.
            var cep = valor.replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if(validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    document.getElementById('rua').value="...";
                    document.getElementById('bairro').value="...";
                    document.getElementById('cidade').value="...";
                    document.getElementById('estado').value="...";

                    //Cria um elemento javascript.
                    var script = document.createElement('script');

                    //Sincroniza com o callback.
                    script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                    //Insere script no documento e carrega o conteúdo.
                    document.body.appendChild(script);

                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        };
    </script>
@endsection