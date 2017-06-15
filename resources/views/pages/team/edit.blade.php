<h4>Modifier un membre</h4>
<div class="row">
    <ul class="liste" id="liste-memmbre">
        @foreach($membres as $membre)
            <li>
                <button type="button" id="year" class="btn btn-default membre">{{$membre->nom}}</button>
                <div class="delModMembre">
                    <div class=" icone-modif-sponsor">
                        <a class="modif-membre" href="#modifierLemembre" value="{{$membre->id}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                    </div>
                    <div class=" icone-sup-sponsor">
                        <a class="sup-membre" href="#supprimerLeMembre" value="{{$membre->id}}><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                </div>

            </li>
        @endforeach
    </ul>
</div>
<form method="POST" action="{{ url('equipe')}}" class="form-mod-membre">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="hidden" name="principale">
        <label for="nom">Nom</label>
        <input type="text" name="nom" class="form-control" placeholder="Nom" value="{{ old('titre') }}">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" class="form-control" placeholder="Prénom" value="{{ old('prenom')}}" />
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" placeholder="email@email.com" value="{{ old('email')}}" />
        <label for="fonction">Fonction</label>
        <input type="text" name="fonction" class="form-control" placeholder="fonctions" value="{{ old('fonction')}}"/>
        <label for="departement">Département</label>
        <input type="text" name="departement" class="form-control" placeholder="Département" value="{{ old('departement')}}" />
        <label for="etude">Année(s) d'étude</label>
        <input type="number" name="etude" class="form-control" placeholder="2 ans" value="{{ old('etude')}}}" />
        <label for="imgMembre">Insérer une image</label>
        <input type="file" name="imgMembre" value="{{ old('imageMembre')}}" />
        <label for="descrMembre">Description</label>
        <textarea class="form-control" rows="3" name="descrMembre" placeholder="Ecrire ici..."></textarea>
        <button class="btn btn-nozon" id="btnCreer">Ajouter membre</button>
    </div>
</form>