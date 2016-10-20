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
                        <li class="nav-item  col-md-4">
                          <a class="nav-link" href="Grupo?id=<?php echo $_GET['id']; ?>">Postagens <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active col-md-4">
                          <a class="nav-link " href="Grupo?id=<?php echo $_GET['id']; ?>&pg=2">Membros</a>
                        </li>
                        <li class="nav-item col-md-4">
                          <a class="nav-link" href="Grupo?id=<?php echo $_GET['id']; ?>&pg=3">Informações</a>
                        </li>
                    </ul>
            </nav>

            <section>
                <div class="row titulo">
                    <div class="col-md-offset-1 col-md-10">
                        <h3>Membros</h3>
                        
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 conteudo">
                   <?php  foreach($membros as $membro){ ?>
                        

                        <div class="post-objeto">
                            <div class="media-left">
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