<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Links -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title>Team HEIG-VD | HydroContest</title>
    

  </head>
  <body>
    
    <!-- VIDEO CONTAINER -->

    <section class="content-section video-section" id="intro-content">

      <header>
        <nav class="navbar navbar-fixed-top">
          <div class="container">
            <ul class="main-nav">
              <li class="main-nav-link"><a href="#team">team</a></li>
              <li class="main-nav-link"><a href="#concours">concours</a></li>
              <li class="main-nav-link"><a href="#news">news</a></li>
              <li class="main-nav-link"><a href="#médias">médias</a></li>
              <li class="main-nav-link"><a href="#presse">presse</a></li>
              <li class="main-nav-link"><a href="#prix">récompenses</a></li>
              <li class="main-nav-link"><a href="#sponsors">sponsors</a></li>
            </ul>
          </div>
        </nav>
      </header>

      <div class="video-background-container">
          <video preload="auto" autoplay loop muted class="video-background">
              <source src="videos/home.mp4" type="video/mp4" />
              <source src="videos/home.webm" type="video/webm" />
              <source src="videos/home.ogv" type="video/ogg" />
          </video>
      </div>

      <div class="logo-home">
          <img src="img/logoteamheig.png" id="img-index" class="img-responsive" alt="Image team HEIG-VD">
          <div class="menu-persistant-container">
            <ul class="menu-persistant">
              <li><a href="#">Contact</a></li>
              <li><a href="#"><img class="img-responsive socials-icone" src="img/mail.png"></a></li>
              <li><a href="https://www.facebook.com/teamheigvd.hydrocontest/"><img class="img-responsive socials-icone" src="img/facebooklogo.png"></a></li>
              <li><a href="https://www.instagram.com/hydrocontest_heig_vd/"><img class="img-responsive socials-icone" src="img/instagramlogo.png"></a></li>
              <li><a href="https://www.youtube.com/channel/UCM3d-hi1emSK0ua6oWWjd_g"><img class="img-responsive socials-icone" src="img/youtubelogo.png"></a></li>
            </ul>
          </div>
      </div>

      <div class="container-compteur">
        <div class="row leCompteur">
          <div class="compteur-titre"> 
            <h4 id="compteAReboursTitre"></h4>
          </div>
          <div class="row compteur">
            
            <div class="col-md-2 compteur-jours">
              <div class="cadran">
                <p><span id="jours"></span></p>
              </div>
              <p>J</p>
            </div>
            <div class="col-md-2 compteur-heures">
              <div class="cadran">
                <p><span id="heures"></span></p>
              </div>
              <p>H</p>
            </div>
            <div class="col-md-2 compteur-minutes">
              <div class="cadran">
                <p><span id="minutes"></span></p>
              </div>
              <p>MIN</p>
            </div>
            <div class="col-md-2 compteur-secondes">
              <div class="cadran">
                <p><span id="secondes"></span></p>
              </div>
              <p>SEC</p>
            </div>
          </div>
        </div>
      </div>


      

      
    </section>
    <div class="content-down">
      <a class="js-scrollTo" href="#content-pages">
        <span id="fleche-bas" class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
      </a>
    </div>
    <section id="main-content">

      <div class="row pattern-overlay">


          

          <div id="content-pages">
            <!-- partie a templater -->

            @yield('content')


            <!-- fin partie a templater -->

          </div>

        </div>
      </section>
      <!--
      <footer>
        <div class="footer-container">
          <div class="row">
            <div class="col-md-4">
              <h3>salut</h3>
            </div>
            <div class="col-md-4">
              <h3>salut</h3>
            </div>
            <div class="col-md-4">
              <h3>salut</h3>
            </div>
          </div>
        </div>
      </footer>
      -->

  </body>
</html>