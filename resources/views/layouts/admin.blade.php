<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Links -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
        <link href="{{asset('css/admin.css') }}" rel="stylesheet">
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
        <script src="{{asset('js/admin.js')}}"></script>


        <!-- Include all compiled plugins (below), or include individual files as needed -->

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

        <section class="content-section video-section" id="intro-content">

            <div class="logo-home">
                <a href="http://127.0.0.1:8000/"><img src="{{asset('/img/logoteamheig.png')}}" id="img-index" class="img-responsive" alt="Image team HEIG-VD"></a>
                <div class="menu-persistant-container">
                    <ul class="menu-persistant">
                        <li><a href="#">Sociaux</a></li>
                        <li><a href="https://www.facebook.com/teamheigvd.hydrocontest/"><img class="img-responsive socials-icone" src="{{asset('/img/facebooklogo.png')}}"></a></li>
                        <li><a href="https://www.instagram.com/hydrocontest_heig_vd/"><img class="img-responsive socials-icone" src="{{asset('/img/instagramlogo.png')}}"></a></li>
                        <li><a href="https://www.youtube.com/channel/UCM3d-hi1emSK0ua6oWWjd_g"><img class="img-responsive socials-icone" src="{{asset('/img/youtubelogo.png')}}"></a></li>
                    </ul>
                </div>
            </div>

        </section>

        <div class="navbar navbar-admin navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="/nozon/2017" class="navbar-brand"><span id="home" class="glyphicon glyphicon-home"></span></a>
                </div>
                <div class="collaps navbar-collapse">
                    <ul class="nav navbar-nav" id="menu-admin">
                        <li><a href="accueil" id="btn-accueil">Accueil</a></li>
                        <li><a href="edition" id="btn-edition">Edition</a></li>
                        <li><a href="equipe" id="btn-equipe">Equipe</a></li>
                        <li><a href="membre" id="btn-membre">Membre</a></li>
                        <li><a href="membreSec" id="btn-memebreSec">Membre secondaire</a></li>
                        <li><a href="sponsor" id="btn-sponsor">Sponsor</a></li>
                        <li><a href="media" id="btn-medias">Medias</a></li>
                        <li><a href="news" id="btn-news">News</a></li>
                        <li><a href="presse" id="btn-presse">Presse</a></li>
                        <li><a href="prix" id="btn-prix">Prix</a></li>
                        <li><a href="devenirSponsor" id="btn-devSponsors">Devenir sponsor</a></li>
                        <li><a href="compte" id="btn-compte">Compte</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="container" class="content-pages">

            {{-- will be used to show any messages --}}
                    @if ( Session::has('info'))
                    <div class="alert alert-info">{{ Session::get('info') }}</div>
                    @endif
                    @if ( Session::has('warning'))
                    <div class="alert alert-warning">{{ Session::get('warning') }}</div>
                    @endif
                    @if ( Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                    @if ( Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif

                    @if (count($errors) > 0)
                    <div class="card card-inverse card-error mb-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

            @yield('administration')

        </div>
    </body>
    @include('layouts.partials.footer')
</html>
