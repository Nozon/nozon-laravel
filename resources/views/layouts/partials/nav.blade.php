<nav class="container" id="main-sidenav">
    <div class="row">
        <div class="nav-edition">
            <h4>édition</h4>
            <ul class="nav-edition-liste">

<<<<<<< HEAD
                    <li class="nav-edition-circle circle-activ" id="cercle">
                    @foreach($editions as $edition)
                      <div class="nav-edition-container-year">
                        <a href="/{{$edition->annee}}" class="nav-edition-year year-activ">{{$edition->annee}}</a>
                      </div>
                    </li>
                    @endforeach
=======
                <li class="nav-edition-circle circle-activ" id="cercle">
                    <div class="nav-edition-container-year">
                        <a href="/" class="nav-edition-year year-activ">2017</a>
                    </div>
                </li>

                <li class="nav-edition-circle" id="cercle">
                    <div class="nav-edition-container-year">
                        <a href="/" class="nav-edition-year">2016</a>
                    </div>
                </li>
>>>>>>> f933d8e3f6533ecd66278bdb991380e1ab5df754

            </ul>
        </div>
    </div>
</nav>