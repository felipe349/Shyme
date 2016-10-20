<div class="row titulo">
                    <div class="col-md-offset-2 col-md-8 col-md-offset-2">
                        <h3>Publicar Material</h3>

                        <div class="row">
                            <div class="col-md-12 objeto-postar">
                                <div>
                                    <!-- <alteracao> -->
                                    <form>
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Digite alguma coisa para postar." name="txt_content_post" rows="3"></textarea>
                                        </div>
                                        <div class="">
                                            <div class="form-group">
                                                <!-- USAR O NAME -->
                                                <button class="btn btn-shyme-default btn-anexar fileinput-button">
                                                        <span id="anexar_arquivo" class="glyphicon glyphicon-paperclip">Anexar</span>

                                                    <input type="file" name="file">
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <button   class="btn btn-shyme-default btn-post" data-toggle="modal" data-target="#myModal3">Publicar</button>
                                </div>
                                <!-- </alteracao> -->
                            </div>
                        </div>
                    </div>
                </div>

                    <!-- Modal -->
                        <div class="modal" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Valor do Material</h4>
                                    </div>
                                    <div class="modal-body">
                                          <?php include("sub_pags/valor-tempo-duvida.php"); ?>
                                    </div>
                                      
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default btn-shyme-default" data-dismiss="modal">Publicar</button>
                                    </div>
                                </div> <!-- Modal content -->
                            </div><!-- Modal dialog -->
                        </div> <!-- modal -->