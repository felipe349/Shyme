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
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-inverse bg-faded col-md-offset-1 col-md-10">
                    <ul class="nav navbar-nav col-md-12">
                        <li class="nav-item  col-md-6">
                          <a class="nav-link" href="Grupo?id=<?php echo $_GET['id']; ?>">Postagens <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active col-md-6">
                          <a class="nav-link " href="Grupo?id=<?php echo $_GET['id']; ?>&pg=2">Grupo</a>
                        </li>
                    </ul>
            </nav>

            <section>
                <div class="row titulo">
                    <div class="col-md-offset-1 col-md-10">
                    <?php foreach($info as $i){?>

                        <h3>Informações</h3>
                            <input type="button" id="sairGrupo" name="sairGrupo" class="btn btn-shyme-default" value="Sair do Grupo">
                       
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-offset-1 col-md-10 conteudo post-objeto">
                        <!--Alteração-->
                        <div class="">
                            <div class="col-md-2">

                                <img class="media-object  img-grupo-info" src="<?php echo $i['IMG_GRUPO']; ?>" >
                                <div class="hoverzoom">
                                    <span class="img-grupo-info"></span>
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
                                    <a href="#">
                                        <h2 class="media-heading"><?php echo $i['NM_GRUPO']; ?></h2>
                                    </a>
                                </div>

                                <p><?php echo $i['DS_GRUPO']; ?>  </p>


                                <?php } ?>
                            </div>
                        </div>
                        <!--Alteração-->
                    </div>
                </div>
                <div class="row titulo">
                    <div class="col-md-offset-1 col-md-10">
                        <h3>Membros</h3>
                    </div>
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 conteudo">
                   <?php  foreach($membros as $membro){ ?>
                        

                        <div class="post-objeto membro-objeto col-md-4 col-sm-6">
                            <img class="crown-adm" src="<?php echo asset_url(); ?>img/crown.png" style="height:40px;width: 40px;position:absolute;top:4px;left:-6px;"/>
                            <div class="media-left">
                                <img class="media-object foto-membro" src="<?php echo $membro['img_aluno']; ?>" alt="Icone usuario">
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
<script type="text/javascript">
        
    $(document).ready(function(){
        $('#sairGrupo').click(function(){
            var url_atual = location.search.slice(1);
            var items = url_atual.split("&");
            var data = "sairGrupo=1";
            var url  = '.././index.php/Grupo?'+items[0]+'&'+items[1];
            alert('oi');
        $.ajax({
            type: 'GET',
            url: url,
            data: data,
            dataType: 'json',
            success: function (data) {
                
            }
        });
        header('Location:Perfil'); 
    });
    });
                
    </script>
</body>

</html>