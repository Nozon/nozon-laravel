                <h3>Les sponsors</h3>
                <div class="row">
                    <div class="administration" id="creerEdition">
                        <button type="button" id="btn-show-form" class="btn btn-default btn-lg btn-add-sponsor">Ajouter un sponsor</button>
                        <form class="form-add-sponsor">
                            <div class="form-group">
                                <label>Insérer une image</label>
                                <input type="file" name="imgSponsors"/>
                            </div>
                            <div class="form-group">
                                <label>Categorie</label>
                                <select class="form-control">
                                    <option>Principal</option>
                                    <option>Or</option>
                                    <option>Argent</option>
                                    <option>Bronze</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btnd-nozon btnAddSponsors">Ajouter</button>
                            </div>
                            <div class="form-group">
                                <label>Ajouter une catégorie</label>
                                <input type="text" class="form-control">
                                <button class="btn btn-nozon btnAddSponsorsCateg">Ajouter</button>
                            </div>
                            <div class="form-group">
                                <label>Ajouter le site web du sponsor</label>
                                <input type="text" class="form-control">
                            </div> 
                        </form>
                    </div>

                    <div id="modSponsors">
                        @include('pages.sponsor.edit')
                    </div>
                </div>