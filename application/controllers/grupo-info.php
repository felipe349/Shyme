<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Perfil - busca</title>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/grupo.css" />

</head>

<body>
    <?php include("header.php"); ?>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-default bg-faded col-md-offset-1 col-md-10">
                    <ul class="nav navbar-nav col-md-12">
                        <li class="nav-item  col-md-4">
                          <a class="nav-link" href="Grupo">Postagens <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item col-md-4">
                          <a class="nav-link" href="?pg=2">Membros</a>
                        </li>
                        <li class="nav-item active col-md-4">
                          <a class="nav-link" href="?pg=3">Informações</a>
                        </li>
                    </ul>
            </nav>

            <section id="main-content">
                <div class="row titulo">
                    <div class="col-md-offset-1 col-md-10">
                        <h3>Informações</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-offset-1 col-md-10 conteudo post-objeto">
                        <!--Alteração-->
                        <div class="">
                            <div class="col-md-2">

                                <img class="media-object img-perfil" src="" height="130" width="130">
                                <div class="hoverzoom">
                                    <span class="img-perfil"></span>
                                    <div class="retina">
                                        <a href="#" data-toggle="modal" data-target="#myModal2">Alterar Imagem</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                            <button type="button" class="btn btn-default btn-shyme-default" data-dismiss="modal">Fechar</button>
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
                                    <a href="#">
                                        <h2 class="media-heading">*Fatec*</h2>
                                    </a>
                                    <a href="#"><span class="glyphicon glyphicon-cog"></span></a>
                                </div>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum mauris elit, vel faucibus turpis vestibulum at. Proin sit amet congue risus. Pellentesque sit amet sapien feugiat, sodales augue blandit, aliquam ante. Praesent vitae justo a orci pulvinar scelerisque sit amet ac mi. Aliquam vitae sollicitudin turpis. Etiam non porttitor orci. Etiam in tristique ligula. Proin at dignissim odio, non bibendum ligula. Donec nec neque efficitur, porttitor lectus sit amet, elementum sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum mauris elit, vel faucibus turpis vestibulum at. Proin sit amet congue risus. Pellentesque sit amet sapien feugiat, sodales augue blandit, aliquam ante. Praesent vitae justo a orci pulvinar scelerisque sit amet ac mi. Aliquam vitae sollicitudin turpis. Etiam non porttitor orci. Etiam in tristique ligula. Proin at dignissim odio, non bibendum ligula. Donec nec neque efficitur, porttitor lectus sit amet, elementum sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum mauris elit, vel faucibus turpis vestibulum at. Proin sit amet congue risus. Pellentesque sit amet sapien feugiat, sodales augue blandit, aliquam ante. Praesent vitae justo a orci pulvinar scelerisque sit amet ac mi. Aliquam vitae sollicitudin turpis. Etiam non porttitor orci. Etiam in tristique ligula. Proin at dignissim odio, non bibendum ligula. Donec nec neque efficitur, porttitor lectus sit amet, elementum sapien.
                                </p>
                            </div>
                        </div>
                        <!--Alteração-->
                    </div>
                </div>
            </section>
        </div>
    </div>


    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/grupo.js"></script>
</body>

</html>