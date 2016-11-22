                        <head>
                            <meta charset="utf-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width,initial-scale=1">
                            <title>Perfil - busca</title>
                            <script src="../js/jquery.min.js"></script>
                            <script src="../js/grupo.js"></script>
                            <link rel="stylesheet" href="<?php echo asset_url(); ?>css/bootstrap.min.css" />
                            <link rel="stylesheet" href="<?php echo asset_url(); ?>css/grupo.css" />
                        </head>
                        <body>
                            <div class="navbar navbar-fixed-top">
                            </div>
                        <div class="post-objeto col-md-12">
                            <div class="media-left">
                                <img class="media-object" src="" alt="Icone usuario">
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <?php foreach($resultadoP as $resP){ ?>
                                    <h4 class="media-heading"><?php echo $resP['nm_aluno']; ?></h4> 
                                </a>
                                <p><?php echo $resP['ds_postagem']; ?></p>

                                <!-- <alteracao> -->
                                
                                <!-- </alteracao> -->

                                <!-- <button class="btn-shyme-avaliar">-</button> -->
                                <span class="span-tipo-post">Dúvida</span>
                                </div>
                                    <?php foreach($resultadoR as $resR) {
                                            if($resR['IC_RESPOSTA']==1){ ?>
                                        <form method="post">
                                            <div class="post-resposta col-md-offset-1 col-md-11" style="background-color: #012">
                                                <div class="media-left">
                                                    <img class="media-object" src="" alt="Icone usuario">
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h4 class="media-heading"><?php echo $resR['NM_ALUNO']; ?></h4>
                                                    </a>
                                                    <p><?php echo $resR['DS_RESPOSTA']; ?>
                                                    </p>
                                                    <input type="hidden" value='<?php echo $resR['CD_RESPOSTA']; ?>' name="id">
                                                    <!-- <alteracao> -->
                                                    <?php if($dono == 1 && $escolha == 0) { ?>
                                                    <button class="btn btn-primary" name="escolher">Escolher Resposta</button><br/>
                                                    <?php } ?>
                                                
                                                <!-- </alteracao> -->

                                                <!-- <button class="btn-shyme-avaliar">-</button> -->
                                                <span class="span-tipo-post">Resposta Correta</span>
                                                </div>
                                                <div class="media-right">
                                                </div>
                                            </div>
                                        </form>
                                        <?php } else { ?>
                                            <form method="post">
                                                     <div class="post-resposta col-md-offset-1 col-md-11">
                                                    <div class="media-left">
                                                        <img class="media-object" src="" alt="Icone usuario">
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h4 class="media-heading"><?php echo $resR['NM_ALUNO']; ?></h4>
                                                        </a>
                                                        <p><?php echo $resR['DS_RESPOSTA']; ?>
                                                        </p>
                                                        <input type="hidden" value='<?php echo $resR['CD_RESPOSTA']; ?>' name="id">
                                                        <!-- <alteracao> -->
                                                        <?php if($dono == 1 && $escolha == 0) { ?>
                                                        <button class="btn btn-primary" name="escolher">Escolher Resposta</button><br/>
                                                        <?php } ?>
                                                    
                                                    <!-- </alteracao> -->

                                                    <!-- <button class="btn-shyme-avaliar">-</button> -->
                                                    <span class="span-tipo-post">Resposta</span>
                                                    </div>
                                                    <div class="media-right">
                                                    </div>
                                                </div>
                                        </form>
                                <?php }} ?>
                                <?php } ?>
                                <div class="col-md-offset-1 col-md-11">
                                    <center>
                                        <a href="#">
                                            <h2><span id="mais_posts" class="glyphicon glyphicon-option-horizontal"></h2></span></a>
                                </div>
                                    <div class="post-responder col-md-offset-0 col-md-12">
                                        <h4 class="media-heading">Responder</h4>
                                        <form method="post">
                                            <div class="form-group">
                                                        <textarea class="form-control" placeholder="Digite sua resposta" name="txt_content_post" rows="3"></textarea>
                                            </div>
                                        </div>
                                        
                                            <button name="submitR" class="btn btn-primary" type="submit">Responder</button>
                                    </form>
                        </div>


                         <!-- Modal -->
                        <div class="modal" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                          <?php include("confirma-resposta-certa.php"); ?>
                                    </div>
                                </div> <!-- Modal content -->
                            </div><!-- Modal dialog -->
                        </div> <!-- modal -->

    <script src="<?php echo asset_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo asset_url(); ?>js/grupo.js"></script>
    </body>