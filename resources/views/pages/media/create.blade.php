                <h3>Les médias</h3>
                <div class="row">
                    <div class="administration" id="creerEdition">
                        <button type="button" id="btn-show-form" class="btn btn-default btn-lg btn-add-media">Ajouter un médias</button>
                        <form class="form-add-media">
                            <div class="form-group" id="media">
                                <label>Insérer une image</label>
                                <input type="file" name="imgMedias"/>
                                <button class="btn btn-default btnAddMediaImg">Ajouter photo</button>
                            </div>
                            
                            <div class="form-group" id="media">
                                <label>Insérer une vidéo</label>
                                <input type="file" name="vidMedias"/>
                                <button class="btn btn-default btnAddMediaVideo">Ajouter vidéo</button>
                            </div>
                        </form>
                    </div>

                    <div id="modMedia">
                        @include('pages.media.edit')
                    </div>
                </div>