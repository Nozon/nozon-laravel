<!-- PRIX -->              
<div class="content-prix-hydro">
<div class="row">
  <div class="team-hydro-titre">
    <h1>Les prix/récompenses</h1>
  </div>
  <div class="grid presse-description">

      <table class="table table-hover" id="tabPrix">
          <tbody>
            @foreach($recompenses as $key => $value)
                <tr>
                    <td><i class="fa fa-trophy fa-2x" aria-hidden="true"></i>{{ $value->type}}</td>
                    <td>{{ $value->description}}</td>
                </tr>
            @endforeach
          </tbody>
        </table>

  </div>
</div>
</div>
