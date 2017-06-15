<!-- PRESSE -->              
<div class="content-presse-hydro" id="presse">
<div class="row">
  <div class="team-hydro-titre">
    <h1>La presse</h1>
  </div>
  <div class="grid presse-description">

      <table class="table table-hover" id="tabPresse">
          <tbody>
          
            <!--DEBUT TMPL-->
            @foreach($presses as $key => $value)
                <tr>
                    <td>{{ $value->titre}}</td>
                    <td>{{ $value->date}}</td>
                    <td>
                        <p>{{ $value->description}}</p>
                        <a href="{{ $value->url}}" target="_blank">Lire l'article</a>
                    </td>
                </tr>
            @endforeach
            <!--FIN TMPL-->
            
          </tbody>
        </table>

  </div>
</div>
</div>