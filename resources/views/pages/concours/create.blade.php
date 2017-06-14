                <h3>L'édition</h3>
                <div class="row">
                    <div class="administration" id="creerEdition">
                        <button type="button" id="btn-show-form" class="btn btn-default btn-lg">Créer une nouvelle édition</button>
                        <form class="form-create">
                            <div class="form-group">
                                <label>Année</label>
                                <input type="number" class="form-control" placeholder="Année">
                            </div>
                            <div class="form-group">
                                <label>Insérer une image du concours</label>
                                <input type="file" name="imgConcours"/>
                            </div>
                            <div class="form-group">
                                <label>Date du concours</label>
                                <input type="date" name="dateConcours" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label>Decription</label>
                                <textarea class="form-control" rows="3" placeholder="Entrer du texte ici..."></textarea>
                            </div>
                            <button class="btn btn-nozon" id="btnCreer">Créer</button>
                        </form>
                    </div>
                    <div class="administration" id="modEdition">
                        <h4><button type="button" id="year" class="btn btn-default year-edition">Modifier l'édition</button></h4>
                        <form class="form-mod">
                            <div class="form-group">
                                <label>Année</label>
                                <input type="number" class="form-control" placeholder="Année">
                            </div>
                            <div class="form-group">
                                <label>Insérer une image du concours</label>
                                <input type="file" name="imgConcours"/>
                            </div>
                            <div class="form-group">
                                <label>Date du concours</label>
                                <input type="date" name="dateConcours" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label>Decription</label>
                                <textarea class="form-control" rows="3" placeholder="Ecrire ici..."></textarea>
                            </div>
                            <button class="btn btn-nozon" id="btnModifier">Modifier l'édition</button>
                        </form>
                    </div>
                </div>