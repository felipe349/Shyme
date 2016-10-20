<style>
#pessoas{
	margin-top: 5px;
	border-radius: 5px;
	background-color: rgba(125, 197, 204, 0.2);
}
.gerenciar-grupos{
    max-height: 100%;
}
.radio{

}
.grupo_principal h3{
    text-align: center;
    color: #05747E;
}
.grupo_secundario{
     border-top: 2px solid #000;

}
.scroll{
  height:300px;
   overflow:auto;
    background:#fff;
}
.grupo_secundario h3{
    text-align: center;
    color: #05747E;
}
label > input{ /* HIDE RADIO */
  visibility: hidden; /* Makes input not-clickable */
  position: absolute; /* Remove input from document flow */
}
label > input + img{ /* IMAGE STYLES */
  cursor:pointer;
  border:2px solid transparent;
}
label > input + img:hover{ /* IMAGE STYLES */
  opacity: 0.8;
}
label > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
  border:10px solid #05747E;
  opacity: 0.5;
}
.grupo p{
    text-align: center;
    color: #05747E;
}
.imagem{
    height:140px; 
    width:140px;
}
</style>
<script src="<?php echo base_url(); ?>js/gerenciar-grupos.js"></script>
<div class="container-fluid gerenciar-grupos">
    <div class="grupo_principal">
        <h3>Grupos Principais</h3>
        <form>
        
            <?php 
            $i=1;
            foreach($grupoPrimario as $res2){
              if($res2['CD_GRUPO'] > 4 && $res2['CD_GRUPO'] != 11){
                if($i % 2 !== 0){
              ?>
                <div class="grupo col-md-offset-1 col-md-6">
            <?php } else{ ?>
                  <div class="grupo">
            <?php } ?>
                    <label>
                      <input type="radio" name="grupo" id="gp" value="<?php echo $res2['CD_GRUPO']; ?>" />
                      <img src="http://eyosongive.us/lolk/data/img/aatrox_1.jpg" class="imagem">
                      <p> <?php echo $res2['NM_GRUPO']; ?></p>
                    </label>
                </div>
            <?php $i++; ?>
            <?php } } ?>
        </form>
    </div>
    <div class="grupo_secundario">
        <h3>Grupos Secundarios</h3>
        <div class="scroll"> 
            <form>

            <?php 
            $i=1;
            foreach($grupoSecundario as $res){
                    if($i % 2 !== 0){
              ?>
                <div class="grupo col-md-offset-1 col-md-6">
                <?php } else{ ?>
                  <div class="grupo">
                  <?php } ?>
                 
                    <label>
                      <input type="radio" name="grupo" id="gs" value="<?php echo $res['CD_GRUPO']; ?>" />
                      <img src="http://eyosongive.us/lolk/data/img/aatrox_1.jpg" class="imagem">
                      <p> <?php echo $res['NM_GRUPO']; ?></p>
                    </label>
                </div>
                 <?php $i++; ?>
                   <?php } ?>
            </form>
        </div>
    </div>

    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
</div>
