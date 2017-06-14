                <h3>La presse</h3>
                <div class="row">
                    <div class="administration" id="creerEdition">
                        <button type="button" id="btn-show-form" class="btn btn-default btn-lg btn-add-press">Ajouter un article de presse</button>
                        <form class="form-add-press">
                            <div class="form-group">
                                <label>Nom du journal</label>
                                <input type="text" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Date de l'article</label>
                                <input type="date" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label>Lien de l'article</label>
                                <input type="url" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label>Texte</label>
                                <textarea class="form-control" rows="3" placeholder="Ecrire ici..."></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-default btnAddPress">Ajouter</button>
                            </div>
                        </form>
                    </div>

                    <div id="modPress">
                        @include('pages.presse.edit')
                    </div>
                </div>
