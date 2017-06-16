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

