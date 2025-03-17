<?php
use App\Dictionary\Dictionary;
?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php
    include('Components/Clientes/modalcriarusuario.php');
    include('Components/Clientes/modaldeleteusuario.php');
?>
<div class="wrapper">

    <?php
    include('Components/leftmenu.php');
    ?>

    <div class="content-wrapper">

        <?php
        include('Components/titlepage.php');
        ?>
        <section class="content">
            <div class="container-fluid">
                <div class="row m-b-1em">
                    <div class="col-md-9" >
                    </div>
                    <div class="col-md-3" >
                        <button type="button" class="btn btn-block btn-primary" onclick="criarNovoCliente()">
                            <i class="nav-icon fas fa-user-plus"></i>
                            Criar Novo Cliente
                        </button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 80%;">Nome</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($clientes as $id => $cliente) { ?>
                                <tr>
                                    <td><?= $cliente['nome'] ?></td>
                                    <td>
                                    <div class="row">
                                        <div class="col-md-1" ></div>
                                        <div class="col-md-5" >
                                            <button type="button" class="btn btn-block btn-success" onclick='editarCliente(<?= json_encode($cliente) ?>)'>
                                                <i class="nav-icon fas fa-edit"></i>
                                            </button>
                                        </div>
                                        <div class="col-md-5" >
                                            <button type="button" class="btn btn-block btn-danger" onclick="showDeletarCliente(<?= $cliente['id'] ?>)">
                                                <i class="nav-icon fas fa-trash"></i>
                                            </button>
                                        </div>
                                        <div class="col-md-1" ></div>
                                    </div>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

    </div>
    