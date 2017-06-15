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
            @foreach($presses as $presse)
                <tr>
                    <td>{{ $presse->titre}}</td>
                    <td>{{ $presse->date}}</td>
                    <td>
                        <p>{{ $presse->description}}</p>
                        <a href="{{ $presse->url}}" target="_blank">Lire l'article</a>
                    </td>
                </tr>
            @endforeach
            <!--FIN TMPL-->
            
          </tbody>
        </table>

  </div>
</div>
</div>