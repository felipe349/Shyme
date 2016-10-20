<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Busca - Shyme</title>
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/busca.css" />
    </head>
    
    <body>
        <?php include("header.php"); ?>
        
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-md-offset-3 col md-8">
                    <h3>Resultado da busca</h3>
                    <button class="btn btn-primary">Criar grupo</button>
                    
                </div>
            </div>    
            
            <!-- loop de bloco de usuarios -->
            
            <div class="row"><div class="col-md-offset-3"><h2>Usuários</h2></div></div>
             <div class="row">
            
                <div class="col-md-offset-3 col-md-6 media">
                
                    <a class="grupo-link" href="#">
                        <div class="media-left">
                            <img class="media-object" src="" alt="Icone grupo">
                        </div>
                      
                        <div class="media-body">
                            <h4 class="media-heading">*Adilson Alves*</h4>
                            <p>*ADS 4º ciclo Vespertino*</p>
                        </div>
                    </a>
                </div>

            </div> <!-- fim do loop -->
            
            <div class="row">
                <div class="col-md-offset-3 col-md-6 media">
                
                    <a class="grupo-link" href="#">
                        <div class="media-left">
                            <img class="media-object" src="" alt="Icone grupo">
                        </div>
                      
                        <div class="media-body">
                            <h4 class="media-heading">*Denis do medo*</h4>
                            <p>*ADS 2º ciclo Noturno*</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="row"><div class="col-md-offset-3"><h2>Grupos</h2></div></div>
            
            <div class="row">
            
                <div class="col-md-offset-3 col-md-6 media">
                
                    <a class="grupo-link" href="#">
                        <div class="media-left">
                            <img class="media-object" src="" alt="Icone grupo">
                        </div>
                      
                        <div class="media-body">
                            <h4 class="media-heading">*Fatec*</h4>
                            <p>*Grupo destinado aos alunos da Fatec Praia Grande*</p>
                        </div>
                    </a>
                </div>
                
            </div> <!-- fim do loop -->
            
            <div class="row">
                
            
                <div class="col-md-offset-3 col-md-6 media">
                
                    <a class="grupo-link" href="#">
                        <div class="media-left">
                            <img class="media-object" src="" alt="Icone grupo">
                        </div>
                      
                        <div class="media-body">
                            <h4 class="media-heading">*ADS*</h4>
                            <p>*Grupo destinado aos alunos do curso de Analise e desenvolvimento de software (ADS)*</p>
                        </div>
                    </a>
                </div>
                
            </div>
            
        </div>
        
        <script type="text/javascript" src="<?php echo asset_url(); ?>js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo asset_url(); ?>js/bootstrap.min.js"></script>
    </body>
</html>