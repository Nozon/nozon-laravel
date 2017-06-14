<h4><button type="button" id="year" class="btn btn-default prix">Modifier une récompenses</button></h4>
<div id="listePrix">
    <div class="row">
        <div class="grid sponsor-description">
            <div class="row">
                <table class="table table-hover" id="tabPrix">
                  <tbody>
                    <!--DEBUT TMPL-->
                    <tr>
                        <td>
                            <i class="fa fa-trophy fa-2x" aria-hidden="true"></i>Prix de communication
                        </td>
                        <td>
                            La team HEIG-VD a remporter le prix de la meilleure communication. Nous sommes très fière de ce prix car on a sucé beaucoup de queues :)
                        </td>
                        <td>
                            <div class="delMod">
                                <div class="icone-modif-sponsor">
                                    <a class="modif-prix" href="#modifierLePrix"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                    </div>
                                <div class="icone-sup-sponsor">
                                    <a class="sup-prix" href="#supprimerLaNews"><span class="glyphicon glyphicon-remove-sign"></span></a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!--FIN TMPL-->
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<form method="POST" action="{{ url('prix')}}" class="form-mod-prix" id="modifierLePrix">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" name="type" class="form-control" value=""/>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" rows="3" placeholder="Ecrire ici..." value=""></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-default btnAddPrix">Modifier</button>
    </div>
</form>