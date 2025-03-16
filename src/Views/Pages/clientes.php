<?php
use App\Dictionary\Dictionary;
?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php
    include('Components/Clientes/modalcriarusuario.php');
?>
<div class="wrapper">

    <?php
    include('Components/leftmenu.php');
    ?>

    <div class="content-wrapper">

        <?php
        $titlePage = $vars['title'];
        include('Components/titlepage.php');
        ?>
        <section class="content">
            <div class="container-fluid">
                <div class="row m-b-1em">
                    <div class="col-md-10" >
                    </div>
                    <div class="col-md-2" >
                        <button type="button" class="btn btn-block btn-primary" onclick="criarNovoCliente()">Criar Novo Cliente</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($clientes as $id => $cliente) { ?>
                                <tr>
                                    <td><?= $cliente['nome'] ?></td>
                                    <td>Botões de ação</td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

    </div>
    