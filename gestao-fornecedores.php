<?php $nomePagina = "Gestão de Fornecedores"; include_once("includes/head.inc.php"); ?>

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
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="titos-title">Lista de Fornecedores</h5>    
                            <button class="btn btn-success">
                                Cadastrar fornecedor
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
</main>

<?php include_once("includes/footer.inc.php"); ?>