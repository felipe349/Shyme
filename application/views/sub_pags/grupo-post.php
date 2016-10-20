<div class="row titulo">
    <div class="col-md-offset-1 col-md-10">
        <h3>Postagens</h3>
        
        <div class="row">
            <div class="col-md-5 objeto-postar">
                <div>
                    <!-- <alteracao> -->
                    <form method="post">
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Digite alguma coisa para postar." name="txt_content_post" rows="3"></textarea>
                        </div>
                        <div class="form-inline">
                            <div class="form-group"> <!-- USAR O NAME -->
                            
                                <button class="btn btn-default"><span id="anexar_arquivo" class="glyphicon glyphicon-paperclip"></span>Anexar</button>
                                
                                <select class="form-control" name="select">
                                  <option selected>Tipo de postagem</option>
                                  <option value="opt_comunicado">Comunicado</option>
                                  <option value="opt_duvida">Dúvida</option>
                                  <option value="opt_material">Material</option>
                                </select>
                                
                                <!--
                                <div class="radio">
                                    <label><input type="radio" id="rad_comunicado" name="rad_tipoPostagem" value="comunicado"/>Comunicado</label>
                                </div>
                                
                                <div class="radio">
                                    <label><input type="radio" id="rad_duvida" name="rad_tipoPostagem" value="duvida"/>Dúvida</label>
                                </div>
                                
                                <div class="radio">
                                    <label><input type="radio" id="rad_material" name="rad_tipoPostagem" value="material"/>Material</label>
                                </div>
                                -->
                                <button name="submit" type="submit" id="bt_criar_post" class="btn btn-default" >Criar postagem</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- </alteracao> -->
            </div>
        </div>
    </div>
</div>
    
<div class="row">
  <div class="col-md-offset-1 col-md-9 conteudo">
    
        <div class="post-objeto">
            <div class="media-left">
                <img class="media-object" src="" alt="Icone usuario">
            </div>
            <div class="media-body">
                <a href="#"><h4 class="media-heading">*Adilson*</h4></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum.
                </p>
                <!-- <alteracao> -->
                <span id="fav_post" class="glyphicon glyphicon-star-empty"></span>
                <!-- </alteracao> -->
                
                <!-- <button class="btn-shyme-avaliar">-</button> -->
                <span class="span-tipo-post">Comunicado</span>
            </div>
        </div>
        
        <div class="post-objeto">
            <div class="media-left">
                <img class="media-object" src="" alt="Icone usuario">
            </div>
            <div class="media-body">
                <a href="#"><h4 class="media-heading">*Gustavo*</h4></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum.
                </p>
                
                <!-- <alteracao> -->
                <span id="fav_post" class="glyphicon glyphicon-star-empty"></span>
                <!-- </alteracao> -->
                
                <!-- <button class="btn-shyme-avaliar">-</button> -->
                <span class="span-tipo-post">Comunicado</span>
            </div>
        </div>
        
        <div class="post-objeto">
            <div class="media-left">
                <img class="media-object" src="" alt="Icone usuario">
            </div>
            <div class="media-body">
                <a href="#"><h4 class="media-heading">*Felipe*</h4></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum.
                </p>
                
                <!-- <alteracao> -->
                <span id="fav_post" class="glyphicon glyphicon-star-empty"></span>
                <!-- </alteracao> -->
                
                <!-- <button class="btn-shyme-avaliar">-</button> -->
                <span class="span-tipo-post">Dúvida</span>
            </div>
        </div>
        
        <div class="post-objeto">
            <div class="media-left">
                <img class="media-object" src="" alt="Icone usuario">
            </div>
            <div class="media-body">
                <a href="#"><h4 class="media-heading">*Denis*</h4></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum.
                </p>
                
                <!-- <alteracao> -->
                <span id="fav_post" class="glyphicon glyphicon-star-empty"></span>
                <!-- </alteracao> -->
                
                <!-- <button class="btn-shyme-avaliar">-</button> -->
                <span class="span-tipo-post">Material</span>
            </div>
        </div>
  </div>
</div>