<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width,initial-scale=1">
        <title>Perfil - Shyme</title>
        <script src="js/jquery.min.js"></script>
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/perfil.css" />
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <?php include("header.php"); 
            ?>
        </div>
        <div class="container-fluid corpo">
            
            <div class="row">
                <div class="col-md-offset-1 col-md-10 base perfil_top">
                    <div class="row-img ">
                        
                        <div class=" img-perfil col-md-2 col-xs-2">
                                <img src="<?php echo $_SESSION['imagem']; ?>" width="100" height="100" />
                                <div class="hoverzoom">
                                    <span class="img-perfil"> &nbsp</span>
                                    <div class="retina">
                                        <a href="#" data-toggle="modal" data-target="#myModal">Alterar Imagem</a>
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
                                          <?php include("sub_pags/upload-foto-perfil.php"); ?>
                                    </div>
                                      
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default btn-shyme-default">Salvar</button>
                                    </div>
                                </div> <!-- Modal content -->
                            </div><!-- Modal dialog -->
                        </div> <!-- modal -->
                        
                        <div class="col-md-6 col-xs-6 usr-info">
                            <h2><?php echo $_SESSION['nome']; ?></h2> <!-- banco -->
                            <h3><?php echo $_SESSION['curso']; ?></h3> <!-- banco -->
                        </div>
                        
                        <div class="col-md-1 pts-usr"><p><?php echo $_SESSION['moeda']; ?></p></div><!-- banco -->
                    </div>    
                    
                </div>    
            </div>
            
            <div class="row">
                <!--Alteração-->
                <div class="col-md-offset-1 col-md-2 list-group usr-group">
                    <h4 id="titulo_menu_lateral">Grupos Principais
                      <a href="#" data-toggle="modal" data-target="#myModaladd"><span   class="glyphicon glyphicon-plus"></span></a> 
                      <a href="#" data-toggle="modal" data-target="#myModal1"><span  class="glyphicon glyphicon-cog"></span></a>
                    </h4>

                    <?php foreach($grupoPrimario as $res){ ?>

                    <a class="list-group-item" href='<?php echo "Grupo?id=".$res["CD_GRUPO"]?>'><p> <?php echo $res['NM_GRUPO']; ?></p></a>
                     <?php } ?>
 			        <h4 id="titulo_menu_lateral">Grupos Secundarios
                        
                    </h4>
                     <?php foreach($grupoSecundario as $res3){?>
                    <a class="list-group-item" href='<?php echo "Grupo?id=".$res3["CD_GRUPO"]?>'><p> <?php echo $res3['NM_GRUPO']; ?></p></a>
                     <?php } ?>
                    <!-- Adicionar outros grupos -->
                    <br>   
                </div>
                <!--Alteração-->
                
                <!-- Modal -->
                        <div class="modal" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Gerenciar Grupos</h4>
                                    </div>
                                    <div class="modal-body">
                                          <?php include("sub_pags/gerenciar-grupos.php"); ?>
                                    </div>
                                      
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default btn-shyme-default" data-dismiss="modal" id="btn-change-group">Trocar</button>
                                    </div>
                                </div> <!-- Modal content -->
                            </div><!-- Modal dialog -->
                        </div> <!-- modal --> 

                        <div class="modal" id="myModaladd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Gerenciar Grupos</h4>
                                    </div>
                                    <div class="modal-body">
                                          <?php include("sub_pags/criar-grupo.php"); ?>
                                    </div>
                                      
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default btn-shyme-default" data-dismiss="modal" id="btn-create-group">Criar</button>
                                    </div>
                                </div> <!-- Modal content -->
                            </div><!-- Modal dialog -->
                        </div> <!-- modal -->    
                
                <div class="col-md-8">
                    <!-- comunicados -->
                    <div class="div-comunicado">
                        <h3>Comunicados</h3>
                        <div> <!-- loop para gerar os comunicados -->
                            <a href="#"><h4><?php echo'*Titulo comunicado 1*'; ?></h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div>
                        
                        <div>
                            <a href="#"><h4><?php echo'*Titulo comunicado 2*'; ?></h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                            
                        </div> <!-- fim do loop -->
                        
                        <div>
                            <a href="#"><h4><?php echo'*Titulo comunicado 3*';?></h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                            
                        </div> 
                    </div>
                    
                
                    <div class="div-noticias">
                        <!-- Noticias -->
                        <h3>Ultimas Postagens</h3>
                        <?php 
                            if(isset($postPerfil)){
                                foreach ($postPerfil as $pp) {                                 
                        ?>
                        <div> 
                            <a href="#"><h4><?php echo $_SESSION['nome']; ?></h4></a>
                            <p><?php echo $pp['ds_postagem']; ?></p>
                        </div>
                        <?php }} ?>
                        
                        
                    
                    </div>
                </div>
            </div>           
        </div> <!-- container- fluid -->

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
        <script src="<?php echo asset_url(); ?>js/temas.js"></script>
        
    </body>



  <script type="text/javascript">
        
    $(document).ready(function(){
                $('#btn-change-group').click(function() {
                    alert('oi');
                    var grupri = "";
                    var grusec = "";
                    //Executa Loop entre todas as Radio buttons com o name de valor
                    $('input:radio[id=gp]').each(function() {
                        //Verifica qual está selecionado
                        if ($(this).is(':checked'))
                            grupri = parseInt($(this).val());
                    })

                        $('input:radio[id=gs]').each(function() {
                        //Verifica qual está selecionado
                        if ($(this).is(':checked'))
                            grusec = parseInt($(this).val());
                    })


                    var data = "gp="+grupri+"&gs="+grusec;
                    $.ajax({
                    type: 'GET',
                    url: '../index.php/Perfil',
                    data: data,
                    dataType: 'json',
                    success: function (data) {
                        
                    }
                });


        });

    $('#btn-create-group').click(function() {
                    var privacidade = "";
                    //Executa Loop entre todas as Radio buttons com o name de valor
                     $('input:radio[id=publico]').each(function() {
                        //Verifica qual está selecionado
                        if ($(this).is(':checked'))
                            privacidade =parseInt($(this).val());
                    })

                        $('input:radio[id=privado]').each(function() {
                        //Verifica qual está selecionado
                        if ($(this).is(':checked'))
                            privacidade = parseInt($(this).val());
                    })

                    var nome1 = $('#nome_grupo').val();
                    var ds1 = $('#ds_grupo').val();
                    var data1 = "nmgrupo="+nome1+"&dsgrupo="+ds1+"&privacidade="+privacidade;
                    var url1  = '../index.php/Perfil?'+data1;
                    alert(url1);

                    $.ajax({
                    type: 'GET',
                    url: url1,
                    data: data1,
                    dataType: 'json',
                    success: function (data) {
                        
                    }
                   
        });
        });

    });



                
    </script>
</html>