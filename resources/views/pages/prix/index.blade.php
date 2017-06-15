<!-- PRIX -->              
<div class="content-prix-hydro" id="prix">
<div class="row">
  <div class="team-hydro-titre">
    <h1>Les prix/récompenses</h1>
  </div>
  <div class="grid presse-description">

      <table class="table table-hover" id="tabPrix">
          <tbody
          
            <!--DEBUT TMPL-->

            @foreach($recompenses as $recompense)
                <tr>
                    <td><i class="fa fa-trophy fa-2x" aria-hidden="true"></i>{{ $recompense->type}}</td>
                    <td>{{ $recompense->description}}</td>
                </tr>
            @endforeach

            <!--FIN TMPL-->
            
          </tbody>
      </table>

  </div>
</div>
</div>
