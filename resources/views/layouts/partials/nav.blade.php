          <nav class="container" id="main-sidenav">
            <div class="row">
              <div class="nav-edition">
                <h4>édition</h4>
                <ul class="nav-edition-liste">

                    <li class="nav-edition-circle circle-activ" id="cercle">
                    @foreach($editions as $edition)
                      <div class="nav-edition-container-year">
                        <a href="/{{$edition->annee}}" class="nav-edition-year year-activ">{{$edition->annee}}</a>
                      </div>
                    </li>
                    @endforeach

                </ul>
              </div>
            </div>
          </nav>