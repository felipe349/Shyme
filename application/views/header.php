<head>
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/header.css" />
</head>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
            data-target="#btn-collapse-nav" aria-expanded="false">
                <span class="sr-only">Recolher barra de navegação</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="Perfil">Shyme</a>
        </div>  
        
        <div class="collapse navbar-collapse" id="btn-collapse-nav">
            
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <div align="center" class="sc-bar">
                        <input id="sc_box" class="form-control sb_input" type="text" name="q" placeholder="Procurar" />
                        
                        <button type="submit" class="btn btn-default sb_search">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>
                    
                    
                    <div class="sb_dropdown">
                		<div class="radio">
                		    <label for="Usuario"><input type="radio" name="qType" id="sc_usr"/>Usuario</label>
            		    </div>
            		    <div class="radio">
                		    <label for="Grupo"><input type="radio" name="qType" id="sc_grp"/>Grupo</label>
                		</div>
                    </div>
                </div>
                
                
            </form>
         

            <ul class="nav navbar-nav navbar-right"><!-- Dropdown Usuario.-->
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo strtok($_SESSION['nome'], ' ')?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a id="change-theme" href="#">Mudar tema</a></li>
                        <li><a href="#">Pontuação</a></li>
                        <li role="separator" class="divider"></li>
                        
                        <?php
                        /*
                            Poderá fazer o sair com o $_GET['sair'];
                            usando um 
                            
                            
                            if(isset($_GET['sair']){
                                $logout = $_GET['sair'];
                                if($logout==1){
                                    metodo para destruir a session, não sei como é em codeIgniter
                                }
                            }
                        */
                        ?>
                        <li><a href="logout">Sair</a></li> <!-- Fechar a session quando clicar em sair, ver acima -->
                    </ul>
                </li>
            </ul><!-- fim dropdown -->
            <!--Alteração-->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#"class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon bell glyphicon-bell"></span></a>
                    <ul class="dropdown-menu">
			<a href="#"><div class="notification-objeto">
                            <table>
                                <tr>
                                    <td rowspan=2><img class="media-object img-notification" src="" alt="Icone usuario"></td>
                                    <td ><h4 class="media-heading titulo-notification">Titulo</h4></td>
                                </tr>
                                <tr>
                                     <td ><p class="descricao-notification">descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição </p></td>
                                </tr>
                            </table>
                        </div></a>                        
			<li><a id="change-theme" href="#">Slide SI</a></li>
                        <li><a href="#">Slide SO</a></li>
                        <li role="separator" class="divider"></li>

                              <?php
                        /*
                            Poderá fazer o sair com o $_GET['sair'];
                            usando um 
                            
                            
                            if(isset($_GET['sair']){
                                $logout = $_GET['sair'];
                                if($logout==1){
                                    metodo para destruir a session, não sei como é em codeIgniter
                                }
                            }
                        */
                        ?>
                        
                        <li><a href="Notificacao">Ver Mais</a></li> <!-- Fechar a session quando clicar em sair, ver acima -->
                    </ul>
                </li>
            </ul>
            <!--Alteração-->
            <ul class="nav navbar-nav navbar-right">
                <div id="container-moeda">
                    <img src=""/><?php echo $_SESSION['moeda']; ?>
                    <p><?php 
                            $connect = new Conn(); 
                            $valMoeda = $connect->verificarMoeda($_SESSION['id']); //Nao sei se precisa verificar se session existe aqui
                            echo($valMoeda);   
                        ?>
                    </p>
                </div>
            </ul>

        </div>
        
    </div>
    <script src="<?php echo asset_url(); ?>js/header.js"></script>
    <script src="<?php echo asset_url(); ?>js/jquery.min.js"></script>
</nav>
