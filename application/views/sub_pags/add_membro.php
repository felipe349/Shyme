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
            <br><input class="btn btn-shyme-default" id="btn-add-membro" type="button"  value="Pesquisar">
        </div>
    </form>
    	<div class="pessoas_selecionadas">
    		<p id="pessoas">arhutr</p>
    	</div>
        <div id="test"></div>
    	<div class="row">
    <div class="col-md-offset-1 col-md-10 conteudo">
    <?php 
                        foreach ($membrosPesquisados as $mp) { ?>     
                        <?php echo $mp['NM_ALUNO']; ?>
                            <!-- Inicio do loop -->
                            <?php } ?>
        <div class="post-objeto"> <!-- Inicio do loop -->
            <div class="media-left">
                <img class="media-object" src="" alt="Icone usuario">
            </div>
            <div class="media-body">
                <a href="#"><h4 class="media-heading name_usr"></h4></a><!-- banco -->
            </div>
            <div class="media-right rank">
                <h4 class="media-heading">*Rank 7*</h4> <!-- Banco -->
            </div>
        </div> <!-- Fim do loop -->

            
       
        <div class="col-md-offset-2 col-md-8">
                <center><a href="#"><h2><span id="mais_posts" class="glyphicon glyphicon-option-horizontal"></h2></span></a>
        </div>
    </div>
</div>
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
</div>

    <script src="js/jquery.min.js"></script>
    <script type="text/javascript">
        
    $(document).ready(function(){
        $('#btn-add-membro').click(function(){
            var txt = $('#name_user').val();
            var data = "q="+txt;
            $.ajax({
                    type: 'GET',
                    url: '../index.php/Grupo',
                    data: data,
                    dataType: 'json',
                    success: function (data) {
                        
                    }
                });
        });
    });
                
    </script>


