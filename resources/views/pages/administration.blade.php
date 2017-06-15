@extends('layouts.admin')

@section('administration')

			<div class="page" id="page_accueil">
                
                @include('pages.accueil.create')

            </div>


            <div id="page_edition" class="page">

                @include('pages.concours.create')

            </div>
            
            <div id="page_equipe" class="page">
                
                @include('pages.equipe.create')

            </div>

            <div id="page_membre" class="page">
                
                @include('pages.team.create')

            </div>


            <div id="page_membreSec" class="page">
                
                @include('pages.teamsec.create')

            </div>


            <div id="page_sponsors" class="page">
                
                @include('pages.sponsor.create')

            </div>


            <div id="page_medias" class="page">
                
                @include('pages.media.create')

            </div>



            <div id="page_news" class="page">
                
                @include('pages.news.create')

            </div>


            <div id="page_presse" class="page">

                @include('pages.presse.create')

            </div>


            <div id="page_prix" class="page">
                
            	@include('pages.prix.create')

            </div>


            <div id="page_devSponsors" class="page">
                @include('pages.devenirsponsor.create')
            </div>


            <div id="page_compte" class="page">
                @include('pages.compte.create')
            </div>

        </div>

@endsection