<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login - Shyme</title>
        <script src="js/jquery.min.js"></script>
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/login.css" />
    </head>    
    
    <body>
        <nav class="navbar navbar-default" >
            <a class="navbar-brand" href="index.php">Shyme</a>
        </nav>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 wrapper">
                    <h2 class="titulo_login">Bem-vindo ao Shyme</h2>
                    <form method="POST">
                        <!-- Formulario -->
                        <fieldset>        
                            <div class="form-group has-warning">
                                <label class="sr-only" for="txt_login">Login</label>
                                <input type="text" id="txt_login" name="txt_login" placeholder="Login" 
                                  pattern=".{1,}"/>
                            </div>
                            
                            <div class="form-group has-warning">
                                <label class="sr-only" for="txt_senha">Senha</label>
                                <input type="password" id="txt_senha" name="txt_senha" placeholder="Senha"/>
                            </div>
                            
                            <button type="submit" class="btn btn-shyme-default  botao-logar" name="submit">Logar</button>
                        </fieldset>
                      
                    </form> <!-- Formulario -->
                </div> <!-- Coluna -->
            </div> <!-- row -->
        </div> <!-- container -->
        
        
        <script src="<?php echo asset_url(); ?>js/bootstrap.min.js"></script>
        
    </body>
</html>