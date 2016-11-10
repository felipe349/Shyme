<head>
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/header.css" />
    <script>
    $(document).ready(function() {
        $( '.dropdown' ).hover(
            function(){
                $(this).children('.sub-menu').slideDown(200);
            },
            function(){
                $(this).children('.sub-menu').slideUp(200);
            }
        );
    }); // end ready
</script>
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
                    <div align="center" class="sc-bar" >
                        <input id="sc_box" class="form-control sb_input" type="text" name="q" placeholder="Procurar" />
                        
                        <button type="submit" class="btn btn-default sb_search" title="Procurar pessoas ou grupos">
                            <span class="glyphicon glyphicon-search search-icon"></span>
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
            

            <ul class="nav navbar-nav navbar-right dropdown-ul"><!-- Dropdown Usuario.-->
                <div id="container-moeda">
                    <img src="<?php echo asset_url(); ?>img/coin.png"  />
                    <p> <!-- Exemplo --><!-- Exemplo --> <?php 
                           echo $_SESSION['moeda'];  
                        ?>
                    </p>
                </div>
                <li class="icon-li">
                    <a href="#"class="dropdown-toggle " data-toggle="dropdown" title="Notificações" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon bell icon-nav glyphicon-bell"></span></a>
                    <ul class="dropdown-menu dropdown-notification">
                        <div class="triangle"></div>
                        <div class="scroll"> 
                            <a href="#"><div class="notification-objeto">
                                <table>
                                    <tr>
                                        <td rowspan=2><img class="media-object img-notification" src="" alt="Icone usuario">
    </td>
                                        <td ><h4 class="media-heading titulo-notification">Titulo</h4></td>
                                    </tr>
                                    <tr>
                                         <td ><p class="descricao-notification">descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição </p>
    </td>
                                    </tr>
                                </table>
                            </div></a>
                            <a href="#"><div class="notification-objeto">
                                <table>
                                    <tr>
                                        <td rowspan=2><img class="media-object img-notification" src="" alt="Icone usuario">
    </td>
                      
                      <td ><h4 class="media-heading titulo-notification">Titulo</h4></td>
                                    </tr>
                                    <tr>
                                         <td ><p class="descricao-notification">descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição </p>
    </td>
                                    </tr>
                                </table>
                            </div></a>
                            <a href="#"><div class="notification-objeto">
                                <table>
                                    <tr>
                                        <td rowspan=2><img class="media-object img-notification" src="" alt="Icone usuario">
    </td>
                      
                      <td ><h4 class="media-heading titulo-notification">Titulo</h4></td>
                                    </tr>
                                    <tr>
                                         <td ><p class="descricao-notification">descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição </p>
    </td>
                                    </tr>
                                </table>
                            </div></a>
                            <a href="#"><div class="notification-objeto">
                                <table>
                                    <tr>
                                        <td rowspan=2><img class="media-object img-notification" src="" alt="Icone usuario">
    </td>
                      
                      <td ><h4 class="media-heading titulo-notification">Titulo</h4></td>
                                    </tr>
                                    <tr>
                                         <td ><p class="descricao-notification">descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição </p>
    </td>
                                    </tr>
                                </table>
                            </div></a>
                            <a href="#"><div class="notification-objeto">
                                <table>
                                    <tr>
                                        <td rowspan=2><img class="media-object img-notification" src="" alt="Icone usuario">
    </td>
                      
                      <td ><h4 class="media-heading titulo-notification">Titulo</h4></td>
                                    </tr>
                                    <tr>
                                         <td ><p class="descricao-notification">descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição </p>
    </td>
                                    </tr>
                                </table>
                            </div></a>
                            <a href="#"><div class="notification-objeto">
                                <table>
                                    <tr>
                                        <td rowspan=2><img class="media-object img-notification" src="" alt="Icone usuario">
    </td>
                      
                      <td ><h4 class="media-heading titulo-notification">Titulo</h4></td>
                                    </tr>
                                    <tr>
                                         <td ><p class="descricao-notification">descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição </p>
    </td>
                                    </tr>
                                </table>
                            </div></a>
                            
                            

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
                        </div>

                        <center><a href="#"><li class="Ver-mais-notificacoes"><p>Ver tudo</p></li></a></center> <!-- Fechar a session quando clicar em sair, ver acima -->
                    </ul>
                </li>
                <li class="icon-li">
                    <a href="Perfil"  title="Página Inicial"  role="button" ><span class="glyphicon icon-nav glyphicon-home home"></span></a>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo strtok($_SESSION['nome'], ' ')?><span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-user">
                        <div class="triangle"></div>
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
            <!-- fim dropdown -->
            <!--Alteração-->
            <!-- Dropdown Usuario.-->
                
            
           
                
            </ul>
            
        </div>
        
    </div>
    <script src="<?php echo asset_url(); ?>js/header.js"></script>
    <script src="<?php echo asset_url(); ?>js/jquery.min.js"></script>

</nav>
