<?php
use App\Dictionary\Dictionary;
?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php
    include('Components/Enderecos/modalcriarendereco.php');
    include('Components/Enderecos/modaldeleteendereco.php');
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
                        <button type="button" class="btn btn-block btn-primary" onclick="criarNovoEndereco()">
                            <i class="nav-icon fas fa-plus"></i>
                            Criar Novo Endereco
                        </button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 50%;">Rua</th>
                                    <th style="width: 10%;">Estado</th>
                                    <th style="width: 20%;">Cidade</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($enderecos as $id => $endereco) { ?>
                                <tr>
                                    <td><?= $endereco['rua'] ?></td>
                                    <td><?= $endereco['estado'] ?></td>
                                    <td><?= $endereco['cidade'] ?></td>
                                    <td>
                                    <div class="row">
                                        <div class="col-md-1" ></div>
                                        <div class="col-md-5" >
                                            <button title="Editar" type="button" class="btn btn-block btn-success" onclick='editarEndereco(<?= json_encode($endereco) ?>)'>
                                                <i class="nav-icon fas fa-edit"></i>
                                            </button>
                                        </div>
                                        <div class="col-md-5" >
                                            <button title="Deletar" type="button" class="btn btn-block btn-danger" onclick="showDeletarEndereco(<?= $endereco['id'] ?>)">
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
    