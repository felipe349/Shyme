<style>
#pessoas{
	margin-top: 5px;
	border-radius: 5px;
	background-color: rgba(125, 197, 204, 0.2);
}
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-offset-2 col-md-10 conteudo">
            <form>
                <div class="input-group">
                    <label for="name_user">Nome</label>
                    <input class="form-control" type="text" id="nome_grupo"/>
                    <br><label for="name_user">Descrição</label>
                    <textarea rows="6" cols="50" id="ds_grupo"></textarea>
                    <form>
                        privado<input type="radio" name="pri" value="1" id="privado">
                        público<input type="radio" name="pri" value="0" id="publico">
                    </form>
                </div>
            </form>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>

</div>
