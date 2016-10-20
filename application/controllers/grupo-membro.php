<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Perfil - busca</title>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/grupo.css" /></head>

<body>
    <?php include("header.php"); ?>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-default bg-faded col-md-offset-1 col-md-10">
                    <ul class="nav navbar-nav col-md-12">
                        <li class="nav-item  col-md-4">
                          <a class="nav-link" href="Grupo">Postagens <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active col-md-4">
                          <a class="nav-link " href="?pg=2">Membros</a>
                        </li>
                        <li class="nav-item col-md-4">
                          <a class="nav-link" href="?pg=3">Informações</a>
                        </li>
                    </ul>
            </nav>

            <section>
                <div class="row titulo">
                    <div class="col-md-offset-1 col-md-10">
                        <h3>Membros</h3>
                        <!-- <alteracao> -->
                        <button id="bt_add_membro" class="btn btn-shyme-default" data-toggle="modal" data-target="#myModal">
                            Adicionar Membro
                        </button>

                        <!-- Modal -->
                        <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Adicionar ao grupo</h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php include("sub_pags/add_membro.php"); ?>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default btn-shyme-default" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                                <!-- Modal content -->
                            </div>
                            <!-- Modal dialog -->
                        </div>
                        <!-- modal -->

                        <!-- </alteracao> -->
                        <button id="bt_tornar_adm" class="btn btn-shyme-default" data-toggle="modal" data-target="#myModal2">
                            Nomear Administrador
                        </button>
                        <div class="modal" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Nomear Administrador</h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php include("sub_pags/tornar-adm.php"); ?>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default btn-shyme-default" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                                <!-- Modal content -->
                            </div>
                            <!-- Modal dialog -->
                        </div>
                        <!-- modal -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-offset-1 col-md-10 conteudo">
                   <?php  foreach($membros as $membro){ ?>
                        <div class="post-objeto">
                            <!-- Inicio do loop -->
                            <div class="media-left">
                                <img class="media-object" src="" alt="Icone usuario">
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4 class="media-heading name_usr"><?php echo $membro['nm_aluno']; ?></h4>
                                </a>
                                <!-- banco -->
                            </div>
                            <div class="media-right rank">
                                <h4 class="media-heading">*Rank 7*</h4>
                                <!-- Banco -->
                            </div>
                        </div>
                        <?php } ?>
                        <!-- Fim do loop -->

                        </div>
                        <div class="col-md-offset-2 col-md-8">
                            <center>
                                <a href="#">
                                    <h2><span id="mais_posts" class="glyphicon glyphicon-option-horizontal"></h2></span></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="container-fluid footer">
        <div class="row">
            <div class="col-md-12 ">
                <div class="row">
                    <?php include("footer.php"); ?>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/grupo.js"></script>
</body>

</html>