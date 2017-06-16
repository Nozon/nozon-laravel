<h4>Modifier un membre</h4>
<div class="row">
  <table class="liste" id="liste-memmbre">
      <tbody>
          <tr>
              <td>
                  @foreach($membresPrincipaux as $membrePrincipal)
                      <tr>
                          <td>
                              <div class="description">
                                  <input type="hidden" value="{{$membrePrincipal->id}}">
                                  <p class="nom">{{$membrePrincipal->nom}}</p>
                                  <p class="prenom">{{$membrePrincipal->prenom}}</p>
                              </div>
                          </td>
                      </tr>
                      <!-- supprimer -->
                      <tr>
                          <td>
                              <form method="POST" action="{{url('admin/2017/membre')}}">
                                  {{csrf_field()}}
                                  <input type="hidden" name="_method" value="DELETE">
                                  <input type="submit">
                                      <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
                                  </input>
                              </form>
                          </td>
                      </tr>

                      <!-- modifier -->
                      <tr>
                          <td>
                              <form method="POST" action="{{url('admin/2017/membre')}}">
                                  {{csrf_field()}}
                                  <input type="hidden" name="_method" value="PUT">
                                  <input type="submit">
                                      <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
                                  </input>
                              </form>
                          </td>
                      </tr>
                  @endforeach
              </td>
          </tr>
      </tbody>
  </table>
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
