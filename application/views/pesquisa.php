<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width,initial-scale=1">
        <title>Perfil - busca</title>
        <script src="js/jquery.min.js"></script>
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/pesquisa.css" />
    </head>

    <body>
        <?php include("header.php");?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <h2 align="center">Resultado da Pesquisa<h2>
                    <div class="post-objeto">
                        <div class="media-left">
                            <img class="media-object" src="" alt="Icone usuario">
                        </div>
                        <div class="media-body">
                            <a href="#"><h4 class="media-heading">*Denis*</h4></a>
                        </div>
                        <div class="media-right rank">
                            <h4 class="media-heading">Pessoa / Grupo</h4>
                        </div>
                    </div>
                    <div class="post-objeto">
                        <div class="media-left">
                            <img class="media-object" src="" alt="Icone usuario">
                        </div>
                        <div class="media-body">
                            <a href="#"><h4 class="media-heading">*Denis*</h4></a>
                        </div>
                        <div class="media-right ">
                            <h4 class="media-heading">Pessoa / Grupo</h4>
                        </div>
                    </div>
                    <div class="post-objeto">
                        <div class="media-left">
                            <img class="media-object" src="" alt="Icone usuario">
                        </div>
                        <div class="media-body">
                            <a href="#"><h4 class="media-heading">*Denis*</h4></a>
                        </div>
                        <div class="media-right ">
                            <h4 class="media-heading">Pessoa / Grupo</h4>
                        </div>
                    </div>
                    <div class="post-objeto">
                        <div class="media-left">
                            <img class="media-object" src="" alt="Icone usuario">
                        </div>
                        <div class="media-body">
                            <a href="#"><h4 class="media-heading">*Denis*</h4></a>
                        </div>
                        <div class="media-right">
                            <h4 class="media-heading">Pessoa / Grupo</h4>
                        </div>
                    </div>      
                </div>              
            </div>
            <div class="col-md-offset-2 col-md-8">
                <center><a href="#"><h2><span id="mais_posts" class="glyphicon glyphicon-option-horizontal"></h2></span></a>
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