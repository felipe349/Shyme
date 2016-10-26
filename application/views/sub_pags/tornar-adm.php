<style>
#pessoas{
    margin-top: 5px;
    border-radius: 5px;
    background-color: rgba(125, 197, 204, 0.2);
}
</style>
<div class="container-fluid">
    <form>
        <div class="input-group">
            <label for="name_user">Procure por um membro</label>
            <input class="form-control" type="text" id="name_user2" name="txt_name_user"/>
            <br><input class="btn btn-shyme-default" id="btn-tornar-membro" type="button" value="Tornar Administrador">
        </div>
    </form>
        <div class="pessoas_selecionadas">
            <ul id="pessoas2">
                
            </ul>
            <div id="matched2">
                
            </div>
        </div>

        <div class="row">
    <div class="col-md-offset-1 col-md-10 conteudo">
        <?php foreach($membros as $i){ ?>
        <div class="post-objeto" id="post-objeto"> <!-- Inicio do loop -->
            <div class="media-left">
                <img class="media-object" src="" alt="Icone usuario">
            </div>
            <div class="media-body">
                <a href='#<?= $i['cd_matricula'] ?>'><h4 class="media-heading name_usr" id="nome-adm"><?= $i['nm_aluno'] ?></h4></a><!-- banco -->
            </div>
            <div class="media-right rank">
                <h4 class="media-heading">*Rank 7*</h4> <!-- Banco -->
            </div>
        </div><?php } ?> <!-- Fim do loop -->
        
        <div class="col-md-offset-2 col-md-8">
                <center><a href="#"><h2><span id="mais_posts" class="glyphicon glyphicon-option-horizontal"></h2></span></a>
        </div>
    </div>
</div>
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            
          
           var selected;
           $('#post-objeto').on('click', function(){
                selected = $('#nome-adm').text();
                selected = selected.split('#');
           });
           
           $('#btn-tornar-membro').click(function(){
               var codigo = "codigo="+selected;
                alert(codigo);

               var url  = '.././index.php/Grupo?'+items[0]+'&'+items[1];
               $.ajax({
                  type: 'POST',
                  url: url,
                  data: codigo,
                  dataType: 'json',
                  success: function (data) {
                       
                    }
               });
           });
        });
    </script>
</div>