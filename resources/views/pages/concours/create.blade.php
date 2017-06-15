                <h3>L'édition</h3>
                <div class="row">
                    <div class="administration" id="creerEdition">
                        <button type="button" id="btn-show-form" class="btn btn-default btn-lg">Créer une nouvelle édition</button>
                        <form class="form-create" method="POST" action="{{ url('edition') }}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="annee">Année</label>
                                <input type="number" name="annee" class="form-control" placeholder="Année" value="{{old('annee')}}">
                            </div>
                            <div class="form-group">
                                <label for="imgConcours">Insérer une image du concours</label>
                                <input type="file" name="imgConcours" value="{{old('imgConcours')}}"/>
                            </div>
                            <div class="form-group">
                                <label for="dateConcours">Date du concours</label>
                                <input type="date" name="dateConcours" class="form-control" value="{{old('dateConcours')}}"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" rows="3" placeholder="Entrer du texte ici..."></textarea>
                            </div>
                            <button class="btn btn-nozon" id="btnCreer">Créer</button>
                        </form>
                    </div>
                    <div class="administration" id="modEdition">
                        @include('pages.concours.edit')
                    </div>
                </div>