                <h3>L'édition</h3>
                <div class="row">
                    <div class="administration" id="creerEdition">
                        <button type="button" id="btn-show-form" class="btn btn-default btn-lg">Créer une nouvelle édition</button>
                        <form class="form-create">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="annee">Année</label>
                                <input type="number" name="annee" class="form-control" placeholder="Année">
                            </div>
                            <div class="form-group">
                                <label for="">Insérer une image du concours</label>
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
                        @include('pages.concours.edit')
                    </div>
                </div>