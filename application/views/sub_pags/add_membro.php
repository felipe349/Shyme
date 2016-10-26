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
            <label for="name_user">Procure por um usuário</label>
            <input class="form-control" type="text" id="name_user" name="txt_name_user"/>
            <br><input class="btn btn-shyme-default" id="btn-add-membro" type="button" value="Adicionar">
        </div>
    </form>
        <div class="pessoas_selecionadas">
            <p id="pessoas">
            <ul id="pessoas-ul">
                
            </ul>
            <div id="matched"></div>
            </p>
        </div>

    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script type="text/javascript">        
        $(document).ready(function(){
           $('#name_user').keyup(function(){
               //$('#pessoas').html($('#name_user').val());
               var type = '&qType=usuario';
               var dado = 'q='+$('#name_user').val()+type;
               $.ajax({
                  type: 'POST',
                  url: '.././index.php/SearchControl',
                  data: dado,
                  dataType: 'json',
                  success: function(data){
                      if(data){
                          var nome = "";
                          var a = 0;
                          var i;
                          $('#pessoas-ul').empty();
                          for(i=0;i<data.length;i++){
                              $('#pessoas-ul').html("<a id='res' href='#"+data[i].cd_matricula+"'><li>"+data[i].nm_aluno+"</li></a>");
                          }
                      }
                  }
               });
           });
           
         var selected='';
           $('#pessoas-ul').on('click', '#res', function(){
               selected = $('#res').attr('href');
               $('#matched').html($('#res').text());
               selected = selected.split('#');
           });
           
           $("#btn-add-membro").click(function(){
               var url_atual = location.search.slice(1);
               var items = url_atual.split("&");
               var texto = "q="+selected[1];
               var url  = '.././index.php/Grupo?'+items[0]+'&'+items[1];
               alert(url);
               $.ajax({
                  type: 'POST',
                  url: url,
                  data: texto,
                  dataType: 'json',
                  success: function (data) {
                        if(data){
                            $('#matched').html("Membro adicionado com sucesso!");
                        }else{
                            $('#matched').html("Ocorreu um erro.");
                        }
                    }
               });
           });
        });
    </script>
</div>