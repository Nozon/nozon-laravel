

<div class="article content-team-hydro template-team-hydro" id="team">
  <div class="row">
    <div class="team-hydro-titre">
      <h1>TEAM <span class="hydrocontest-text">hydrocontest</span> <span class="heigvd-text"> HEIG-VD</span></h1>
    </div>
    <div class="team-description">
      <div class="row team">
        @foreach($membresPrincipaux as $membrePrincipal)
          <div class="col-md-4 template-membre team-member">
            <img src="img/johnaesch.jpg" class="img-responsive image-membre" id="img-membre">
            <div class="membre-description">
              <div class="text">
                <h5 id="name">{{$membrePrincipal->nom}}</h5>
                <p id="fonction">{{$membrePrincipal->fonction}}</p>
                <p id="description">"{{$membrePrincipal->description}}"</p>
              </div>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </div>
</div>
