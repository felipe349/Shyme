<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Perfil - busca</title>
    <script src="<?php echo asset_url(); ?>js/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/grupo.css" />

</head>

<body>
<div class="navbar navbar-fixed-top">
            <?php include("header.php"); 
            ?>
        </div>
    <div class="container-fluid">
        <div class="row">
            <div class="navbar-grupo">
                <nav class="navbar navbar-inverse  col-md-offset-1 col-md-10 col-xs-12">
                        <ul class="nav navbar-nav col-md-12 col-xs-12" >
                            <li class="nav-item active col-md-6 col-xs-4">
                              <a class="nav-link" href="Grupo?id=<?php echo $_GET['id']; ?>">Postagens <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item col-md-6 col-xs-4">
                              <a class="nav-link" href="Grupo?id=<?php echo $_GET['id']; ?>&pg=2">Grupo</a>
                            </li>
                        </ul>
                </nav>
            <div>
            <section id="main-content">
                <center><div>
                <button onclick="comun()" id="bt_criar_post" class="btn btn-shyme-default btn-post">Publicar Comunicado</button>
                <button onclick="duvid()" id="bt_criar_post" class="btn btn-shyme-default btn-post">Publicar Duvida</button>
                <button onclick="mater()" id="bt_criar_post" class="btn btn-shyme-default btn-post">Publicar Material</button>
                </div></center>
                <div id="com" class="row titulo">
                    <div class="col-md-offset-1 col-md-10">
                        <h3>Postar Comunicado</h3>

                        <div class="row">
                            <div class="col-md-10 objeto-postar">
                                <div>
                                    <!-- <alteracao> -->
                                    <form method="POST">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Digite alguma coisa para postar." name="txt_content_post" rows="3"></textarea>
                                        </div>
                                        <div class="form-inline">
                                            <div class="form-group">
                                                <!-- USAR O NAME -->

                                                <button class="btn btn-shyme-default btn-anexar"><span id="anexar_arquivo" class="glyphicon glyphicon-paperclip"></span>Anexar Imagem</button>
                                                

                                                <button type="submit" id="bt_criar_post" class="btn btn-shyme-default btn-post" name="comunicado">Criar postagem</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- </alteracao> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div id="duv" class="row titulo">
                    <div class="col-md-offset-1 col-md-10">
                        <h3>Postar Dúvida</h3>

                        <div class="row">
                            <div class="col-md-10 objeto-postar">
                                <div>
                                    <!-- <alteracao> -->
                                    <form method="POST">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Digite alguma coisa para postar." name="txt_content_post" rows="3"></textarea>
                                        </div>
                                        <div class="form-inline">
                                            <div class="form-group">
                                                <!-- USAR O NAME -->

                                                <button class="btn btn-shyme-default btn-anexar"><span id="anexar_arquivo" class="glyphicon glyphicon-paperclip"></span>Anexar Imagem</button>
                                                

                                                <button type="submit" id="bt_criar_post" class="btn btn-shyme-default btn-post" data-toggle="modal" name="duvida" data-target="#myModal">Criar postagem</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- </alteracao> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                        <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Upload foto de perfil</h4>
                                    </div>
                                    <div class="modal-body">
                                          <?php include("sub_pags/valor-tempo-duvida.php"); ?>
                                    </div>
                                      
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default btn-shyme-default" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div> <!-- Modal content -->
                            </div><!-- Modal dialog -->
                        </div> <!-- modal -->

                <div id="mat" class="row titulo">
                    <div class="col-md-offset-1 col-md-10">
                        <h3>Postar Material</h3>

                        <div class="row">
                            <div class="col-md-10 objeto-postar">
                                <div>
                                    <!-- <alteracao> -->
                                    <form>
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Digite alguma coisa para postar." name="txt_content_post" rows="3"></textarea>
                                        </div>
                                        <div class="form-inline">
                                            <div class="form-group">
                                                <!-- USAR O NAME -->

                                                <button class="btn btn-shyme-default btn-anexar"><span id="anexar_arquivo" class="glyphicon glyphicon-paperclip"></span>Anexar Imagem</button>
                                                

                                                <button type="submit" id="bt_criar_post" class="btn btn-shyme-default btn-post">Criar postagem</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- </alteracao> -->
                            </div>
                        </div>
                    </div>
                </div>
            <!--<div>
            <section id="main-content">
                <div class="text-center">
                    <button type="submit" id="bt_criar_post" class="btn btn-shyme-default btn-post">Publicar Comunicado</button>
                    <button type="submit" id="bt_criar_post" class="btn btn-shyme-default btn-post">Publicar Duvida</button>
                    <button type="submit" id="bt_criar_post" class="btn btn-shyme-default btn-post">Publicar Material</button>
                </div>
                <div class="row titulo">
                    <div class="col-md-offset-1 col-md-10">
                        <h3>Postagens</h3>

                        <div class="row">
                            <div class="col-md-5 objeto-postar">
                                <div>

                                    <form method="post">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Digite alguma coisa para postar." name="txt_content_post" rows="3"></textarea>
                                        </div>
                                        <div class="form-inline">
                                            <div class="form-group">


                                                <button class="btn btn-shyme-default btn-anexar"><span id="anexar_arquivo" class="glyphicon glyphicon-paperclip"></span>Anexar</button>
                                                <select id="sel_tipoPost" class="form-control" name="select">
                                      <option id="opt_tipo" selected hidden>Tipo de postagem</option>
                                      <option value="opt_comunicado">Comunicado</option>
                                      <option value="opt_duvida">Dúvida</option>
                                      <option value="opt_material">Material</option>
                                    </select>

                                                <button type="submit" id="bt_criar_post" class="btn btn-shyme-default btn-post" name="submit">Criar postagem</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->

                <div class="row">
                    <div class="col-md-offset-1 col-md-10 conteudo">
                <?php  $i=0; foreach($resultadoP as $resP) { if($resP['TIPO_POSTAGEM_cd_tipo_postagem'] == 33) { ?>
                        <div class="post-objeto">
                            <div class="media-left">
                                <img class="media-object foto-usuario-post" src="<?php echo $resP['img_aluno']; ?>" alt="Icone usuario">
                            </div>

                            <div class="media-body">
                                <a href="#">
                                    <h4 class="media-heading"><?php echo $resP['NM_ALUNO'] ;?></h4>
                                </a>
                                <p><?php echo $resP['DS_POSTAGEM']; ?>
                                </p>
                                <!-- <alteracao> -->
                                <span id="fav_post" class="glyphicon glyphicon-star-empty"></span>
                                <!-- </alteracao> -->

                                <!-- <button class="btn-shyme-avaliar">-</button> -->
                                <span class="span-tipo-post">Comunicado</span>
                            </div>
                        </div>
                <?php } else if($resP['TIPO_POSTAGEM_cd_tipo_postagem'] == 26) { ?>
                        <div class="post-objeto">
                            <div class="media-left">
                                <img class="media-object foto-usuario-post" src="<?php echo $resP['img_aluno']; ?>" alt="Icone usuario">
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4 class="media-heading"><?php echo $resP['NM_ALUNO'] ;?></h4>
                                </a>
                                <p><?php echo $resP['DS_POSTAGEM']; ?>
                                </p>

                                <!-- <alteracao> -->
                                <span id="fav_post" class="glyphicon glyphicon-star-empty"></span>
                                <!-- </alteracao> -->

                                <!-- <button class="btn-shyme-avaliar">-</button> -->
                                <span class="span-tipo-post">Duvida</span>
                                <div class="post-resposta col-md-offset-1 col-md-11">
                                    <!--AQUI COMEÇA A PARTE DA RESPOSTA DA DUVIDA!!!!!!-->
                                    <?php foreach($resultadoR[$i] as $resR){ ?>
                                     <div class="media-left">
                                        <img class="media-object" src="" alt="Icone usuario">
                                    </div>
                                    <div class="media-body">
                                        <a href="#">
                                            <h4 class="media-heading"><?php echo $resR['NM_ALUNO']; ?></h4>
                                        </a>
                                        <p><?php echo $resR['DS_RESPOSTA']; ?>
                                        </p>

                                        <!-- <alteracao> -->
                                        <span id="fav_post" class="glyphicon glyphicon-star-empty"></span>
                                        <!-- </alteracao> -->

                                        <!-- <button class="btn-shyme-avaliar">-</button> -->
                                        <span class="span-tipo-post">Resposta</span>
                                    </div>
                                    <?php } ?>
                                    </div>
                                    <!--AQUI TERMINA A PARTE DA RESPOSTA DA DUVIDA!!!!!!-->
                                     <!--AQUI COMEÇA A PARTE DE CAMPO DE RESPOSTA!!!!!!-->
                                     <div class="post-responder col-md-offset-0 col-md-12">
                                        <a class="btn btn-shyme-default" role="button" href="Duvida?id=<?php echo $resP['CD_POSTAGEM'];?>">Responder</a>
                                    </div>
                                     <!--AQUI TERMINA A PARTE DE CAMPO DE RESPOSTA!!!!!!-->
                            </div>
                        </div>

                <?php $i++;} }?>
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