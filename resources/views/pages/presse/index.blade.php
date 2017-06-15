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
            @foreach($presses as $press)
                <tr>
                    <td>{{ $press->titre}}</td>
                    <td>{{ $presse->date}}</td>
                    <td>
                        <p>{{ $press->description}}</p>
                        <a href="{{ $press->url}}" target="_blank">Lire l'article</a>
                    </td>
                </tr>
            @endforeach
            <!--FIN TMPL-->
            
          </tbody>
        </table>

  </div>
</div>
</div>