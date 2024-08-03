<?php $nomePagina = "Gestão de Clientes"; include_once("includes/head.inc.php"); ?>

<main>
    <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 50px;">
        <h5 class="titos-title"><?=  $nomePagina ?></h5>  
        <a href="#" class="nav-link nav-link-user">
            <ion-icon name="person-circle-outline"></ion-icon>
            Olá, Usuário!
        </a>
    </div>

    <div class="row me-1">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="d-flex justify-content-between align-items-center" data-bs-toggle="modal" data-bs-target="#cadastro-cliente">
                            <h5 class="titos-title">Lista de Clientes</h5>    
                            <button class="btn btn-success">
                                Cadastrar cliente
                            </button>
                        </div>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome completo</th>
                                <th>Telefone/Celular</th>
                                <th>E-mail</th>
                                <th>Última compra</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="cadastro-cliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastro de Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                aria-selected="true">Dados do Cliente</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link disabled" id="contato-tab" data-bs-toggle="tab"
                                data-bs-target="#contato" type="button" role="tab" aria-controls="contato"
                                aria-selected="false" disabled>Dados de Contato</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link disabled" id="endereco-tab" data-bs-toggle="tab"
                                data-bs-target="#endereco" type="button" role="tab" aria-controls="endereco"
                                aria-selected="false" disabled>Dados de Endereço</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Nome"
                                        aria-label="Nome" id="nome" onblur="validaCampo(this)">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Sobrenome"
                                        aria-label="Sobrenome" id="sobrenome" onblur="validaCampo(this)">
                                </div>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <select name="genero" id="genero" class="form-control" onblur="validaCampo(this)" onchange="validaCampo(this)">
                                            <option value="">Gênero</option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Feminino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <input type="date" id="data-nascimento" class="form-control" onblur="validaCampo(this)">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary" onclick="criarUsuario()" id="btn-cadastrar-cliente">Cadastrar dados</button>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="contato" role="tabpanel" aria-labelledby="contato-tab">
                            <div class="row new_user_form">
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Telefone</label>
                                        <input type="tel" class="form-control" id="formGroupExampleInput">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Método de
                                            contato</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Tipo de contato</option>
                                            <option value="1">Whatsapp</option>
                                            <option value="2">E-mail</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2 mt-4">
                                    <button type="button" class="btn btn-primary">Incluir</button>
                                </div>
                                <table class="table">
                                    <thead class="table-light">
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Numero</td>
                                            <td>Tipo de contato</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Nome</td>
                                            <td>Idade</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Ted</td>
                                            <td>22</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>Ralf</td>
                                            <td>26</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="endereco" role="tabpanel" aria-labelledby="endereco-tab">
                            <div class="row g-3 new_user_form">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">CEP</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col">
                                    Endereço principal
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios"
                                            id="gridRadios1" value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Sim
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios"
                                            id="gridRadios2" value="option2">
                                        <label class="form-check-label" for="gridRadios2">
                                            Não
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="inputEmail4" class="form-label">Logradouro</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword4" class="form-label">Nº</label>
                                    <input type="password" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword4" class="form-label">Complemento</label>
                                    <input type="password" class="form-control" id="inputPassword4">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="inputEmail4" class="form-label">Bairro</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputPassword4" class="form-label">Cidade</label>
                                    <input type="password" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputPassword4" class="form-label">UF</label>
                                    <input type="password" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-md-1 mt-4">
                                    <button class="btn btn-primary" type="button">Incluir</button>
                                </div>
                            </div>
                            <table class="table table-striped">
                                <thead class="table-light">
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>CEP</td>
                                        <td>Endereço</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>Nome</td>
                                        <td>Idade</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>Ted</td>
                                        <td>22</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>Ralf</td>
                                        <td>26</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    function validaCampo(input){
        let campo = $(input);

        if(campo.val() == ""){            
            $(campo).addClass("is-invalid");
        } else {
            $(campo).removeClass("is-invalid");
            $(campo).addClass("is-valid");
        }
    }
    function criarUsuario(){
        let nome = $("#nome").val();
        let sobrenome = $("#sobrenome").val();
        let dataNasc = $("#data-nascimento").val();
        let genero = $("#genero option:selected").val();

        let msg = "";

        if(nome == ""){
            $("#nome").addClass("is-invalid");
        } else if(sobrenome == ""){
            $("#sobrenome").addClass("is-invalid");
        }  else if(dataNasc == ""){
            $("#data-nascimento").addClass("is-invalid");
        } else if(genero == ""){
            $("#genero").addClass("is-invalid");
        } else {
            $("#nome").addClass("is-valid");
            $("#sobrenome").addClass("is-valid");
            $("#data-nascimento").addClass("is-valid");
            $("#genero").addClass("is-valid");

            $.ajax({
                "url": 'api/cadastroCliente.php',
                "type": "POST",
                "dataType": "JSON",
                "data": {
                    nome: nome,
                    sobrenome: sobrenome,
                    dataNasc: dataNasc,
                    genero: genero
                },
                beforeSend: function(){
                    $("#btn-cadastrar-cliente").html('Aguarde...');
                    $("#btn-cadastrar-cliente").prop('disabled', true);

                    Swal.fire({
                        icon: 'info',
                        title: 'Aguarde...',
                        text: 'Salvando os dados informados.',
                        showConfirmButton: false,
                        allowEnterKey: false,
                        allowEscapeKey: false,
                        allowOutsideClick: false
                    });
                },
                success: function(resposta){
                    $("#btn-cadastrar-cliente").html('Cadastrar dados');

                    $("#contato-tab").prop('disabled', false);
                    $("#endereco-tab").prop('disabled', false);

                    $("#endereco-tab").removeClass('disabled');
                    $("#contato-tab").removeClass('disabled');

                    if(resposta.cod == 0) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Sucesso',
                            text: 'Os dados foram salvos com sucesso.',
                            allowEnterKey: false,
                            allowEscapeKey: false,
                            allowOutsideClick: false
                        });
                    } else if(resposta.cod == 1) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Atenção',
                            text: 'Não foi possível salvar os dados.',
                            allowEnterKey: false,
                            allowEscapeKey: false,
                            allowOutsideClick: false
                        });
                    }                   
                    
                }
            });
        }
    }
</script>

<?php include_once("includes/footer.inc.php"); ?>