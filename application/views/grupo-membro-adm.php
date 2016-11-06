<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Perfil - busca</title>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/grupo.css" /></head>

<body>
<div class="navbar navbar-fixed-top">
            <?php include("header.php"); 
            ?>
        </div>


     <!-- NAV -->
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-inverse bg-faded col-md-offset-1 col-md-10">
                    <ul class="nav navbar-nav col-md-12">
                        <li class="nav-item  col-md-6">
                          <a class="nav-link" href="Grupo?id=<?php echo $_GET['id']; ?>">Postagens <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active col-md-6">
                          <a class="nav-link " href="Grupo?id=<?php echo $_GET['id']; ?>&pg=2">Membros</a>
                        </li>
                    </ul>
            </nav>

             <section id="main-content">
                  <div class="row titulo">
                    <div class="col-md-offset-1 col-md-10">
                        <h3>Informações</h3>
                        <form method="POST">
                            <input type="button" id="sairGrupo" name="sairGrupo" class="btn btn-shyme-default" value="Sair do Grupo">
                            <input type="button" id="excluirGrupo" name="excluirGrupo" class="btn btn-shyme-default" value="Excluir Grupo">
                        </form>
                    </div>
                </div>

                <!-- INFO -->
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 conteudo post-objeto">
                        <!--Alteração-->
                        <div class="">
                            <div class="col-md-2">

                                <?php foreach($info as $i){?>

                                <img class="media-object img-perfil" src="<?php echo $i['IMG_GRUPO']; ?>" height="130" width="130">
                                <div class="hoverzoom">
                                    <span class="img-perfil"></span>
                                    <div class="retina">
                                        <a href="#" data-toggle="modal" data-target="#myModal1">Alterar Imagem</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Upload foto do Grupo</h4>
                                        </div>
                                        <div class="modal-body">
                                            <?php include("sub_pags/upload-foto-grupo.php"); ?>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default btn-shyme-default">Salvar</button>
                                        </div>
                                    </div>
                                    <!-- Modal content -->
                                </div>
                                <!-- Modal dialog -->
                            </div>
                            <!-- modal -->
                            <div class="col-md-10">
                                <style type="text/css">
                                    .titulogrupo * {
                                        display: inline;
                                    }
                                    
                                    .titulogrupo span {
                                        font-size: 20px;
                                    }
                                </style>
                                <div class="titulogrupo">
                                        <h2 class="media-heading" id="nomeg"><?php echo $i['NM_GRUPO']; ?></h2>
                                    
                                    <a href="#" onClick="preencherGrupoInfo()" class="cog" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-cog"></span></a>
                                </div>

                                <p id="descricao"><?php echo $i['DS_GRUPO']; ?></p>

                                <?php } ?>
                            </div>
                        </div>
                        <div class="modal" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            
                        <a class="close remover-post" href="Grupo?id=<?php echo $_GET['id']; ?>&removerMembro=<?php echo $resP['CD_POSTAGEM']; ?>">X<span aria-hidden="true">&times;</span></a>
                                            <h4 class="modal-title" id="myModalLabel">Alterar Informações</h4>
                                        </div>
                                        <div class="modal-body">
                                            <?php include("sub_pags/alterar-info-grupo.php"); ?>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default btn-shyme-default" data-dismiss="modal" id="alterar-info">Alterar</button>
                                        </div>
                                    </div>
                                    <!-- Modal content -->
                                </div>
                                <!-- Modal dialog -->
                            </div>
                        <!--Alteração-->
                    </div>
                </div>
            </section>
        </div>
    </div>


    <!-- MEMBROS -->
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
                                        <button type="button" class="btn btn-default btn-shyme-default">Adicionar</button>
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
                                        <button type="button" class="btn btn-default btn-shyme-default">Nomear</button>
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
                        

                        <div class="post-objeto col-md-4">
                            <a href="" class="close remover-membro"><p>x</p></a>
                            <div class=" col-md-12">
                                <img class="media-object" src="<?php echo $membro['img_aluno']; ?>" alt="Icone usuario">
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4 class="media-heading name_usr"><?php echo $membro['nm_aluno']; ?></h4>
                                </a>
                                <!-- banco -->
                            </div>
                            <div class="media-right rank">
                                <h4 class="media-heading"></h4>
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
    <script src="<?php echo asset_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo asset_url(); ?>js/grupo.js"></script>
</body>

</html>