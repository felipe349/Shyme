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
            <br><input class="btn btn-shyme-default" id="btn-tornar-adm" type="button" value="Tornar Administrador">
        </div>
    </form>
        <div class="pessoas_selecionadas">
            <ul id="pessoas2">
                
            </ul>
            <div id="matched2">
                
            </div>
        </div>

        <div class="row">
          <div class="scroll"> 
              <form>
              <?php foreach($membros as $membro){ ?>
                  <div class="objeto-tornar-adm col-md-4">
                   
                      <center><label>
                        <input type="radio" name="adm" id="cd" value="<?php echo $membro['cd_matricula']; ?>" />
                        <img class="foto-usuario-post" src="<?php echo $membro['img_aluno']; ?>" alt="Icone usuario">
                        <p> <?php echo $membro['nm_aluno']; ?></p>
                      </label></center>
                  </div>
                  <?php } ?> 
              </form>
          </div>
        <div>
        
        
        <div class="col-md-offset-2 col-md-8">
                <center><a href="#"><h2><span id="mais_posts" class="glyphicon glyphicon-option-horizontal"></h2></span></a>
        </div>
    </div>
</div>
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script type="text/javascript">
        /*$(document).ready(function(){
            

          
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
        });*/

         $(document).ready(function(){
                $('#btn-tornar-adm').click(function() {
                    var cdAdm = "";
                    //Executa Loop entre todas as Radio buttons com o name de valor
                    $('input:radio[id=cd]').each(function() {
                        //Verifica qual está selecionado
                        if ($(this).is(':checked'))
                            cdAdm = parseInt($(this).val());
                    })

              
              var url_atual = location.search.slice(1);
              var items = url_atual.split("&");
              var texto = "cdadm="+cdAdm;   
              var url  = '.././index.php/Grupo?'+items[0]+'&'+items[1];

                    alert(url);
             $.ajax({
                type: 'POST',
                url: url,
                data: texto,
                dataType: 'json',
                success: function (data) {
                     
                  }
             });


                  /*  var data = "gp="+grupri+"&gs="+grusec;
                    $.ajax({
                    type: 'GET',
                    url: '../index.php/Perfil',
                    data: data,
                    dataType: 'json',
                    success: function (data) {
                        
                    }
                }); */


        });
        });

    </script>
</div>










        <!--$('#asd').click(function() {
                    var privacidade = "";
                     $('input:checkbox[id=a]').each(function() {
    if ($(this).is(':checked'))
     privacidade =parseInt($(this).val());
                    })
alert(privacidade);
});*/-->