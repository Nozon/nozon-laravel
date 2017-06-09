@extends('accueil')
@section('prix')
<div class="content-sponsor-hydro">
    <div class="row">
      <div class="team-hydro-titre">
        <h1>Les prix/récompenses</h1>
      </div>
      <div class="grid presse-description">

          <table class="table table-hover" id="tabPrix">
              <tbody>
                <!--DEBUT TMPL-->
                <tr>
                  <td><i class="fa fa-trophy fa-2x" aria-hidden="true"></i>{{METTRE TITRE}}</td>
                  <td>{{DESCRIPTION}}</td>
                </tr>

                <!--FIN TMPL-->
              </tbody>
            </table>

      </div>
    </div>
</div>
@endsection