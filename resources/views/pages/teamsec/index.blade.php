
<div class="article content-team-hydro template-team-soutien">
    <div class="row">
      <div class="team-soutien-titre">
        <h1>TEAM <span class="hydrocontest-text">{{$equipeSecondaire->nom}}</span> <span class="heigvd-text"> HEIG-VD</span></h1>
      </div>
      <div class="team-description">
        <div class="row team">
          @foreach($membresSecondaires as $membreSecondaire)

            <div class="col-md-3 template-membre-soutien team-soutien-member">
              <img src="{{asset('img/johnaesch.jpg')}}" class="img-responsive" id="img-membre-soutien">
              <div class="membre-soutien-description">
                <div class="text-soutien">
                  <h5 id="name">{{$membreSecondaire->nom}}</h5>
                  <p id="fonction">{{$membreSecondaire->fonction}}</p>
                </div>
              </div>
            </div>

          @endforeach
        </div>
      </div>
    </div>
</div>
