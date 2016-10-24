<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width,initial-scale=1">
        <title>Notificações - Shyme</title>
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/bootstrap.min.css" />
<style> 
body{
margin-top: 80px;
background-color: rgba(28, 136, 146, 0.2);
}
.img-notification{
    background-color:black;
    height: 80px;
    width: 80px;
    margin-right: 10px;
}
a .titulo-notification{
    float:left !important;
}
a .descricao-notification{
    text-align: left;
    float: left;
    padding: 0;
    margin: 0;
    color:black;
}
.notification-objeto {
    position: relative;
    padding: 05px;
    padding-left: 15px;
    margin-bottom: 10px;
    background-color: #EDEFF1;
    background-color: rgba(255, 255, 255, 1);
    border-radius: 15px;
    /*box-shadow: 0px 0px 2px 5px rgba(22, 140, 151, 0.08);*/

}
.notification-objeto:hover{
    background-color: rgba(28, 136, 146, 0.25);
    border-left: 1px solid white;
    border-right: 1px solid white;
}
.notification-objeto:hover .img-notification{
    margin-left: 5px;
}
.notification-objeto:hover a .titulo-notification,
.notification-objeto:hover a .descricao-notification{
    margin-right: 5px;
}
        </style>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <?php include("header.php"); ?>
        </div>
        <div class="container-fluid corpo">
            <div class="col-md-offset-1 col-md-10">
                <center><h2>Notificações</h2></center>
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
            </div>
            <script src="<?php echo asset_url(); ?>js/bootstrap.min.js"></script>

        </div>
    </body>
</html>