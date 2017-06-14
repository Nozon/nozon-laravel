@extends('layouts.home')

@section('content')
            <div class="container container-edition" id="edition-2017">
              
              <!--TEAM HYDRO-->

              @include('pages.team.index')

              <!-- FIN TEAM -->

              <!-- TEAM SOUTIEN -->

              @include('pages.teamsec.index')
              
              <!-- FIN TEAM SOUTIEN -->

              <!-- CONCOURS -->
              @include('pages.concours.index')
              <!-- FIN CONCOURS -->

              <!-- NEWS -->
              @include('pages.news.index')
              <!-- FIN NEWS -->
              
              <!-- MEDIA -->
              @include('pages.media.index')
              <!-- FIN MEDIA -->
              
              <!-- PRESSE -->
              @include('pages.presse.index')
              <!-- FIN PRESSE -->
              
              <!-- PRIX -->
              @include('pages.prix.index')
              <!-- FIN PRIX -->
              
              <!-- SPONSOR -->
              @include('pages.sponsor.index')
              <!-- FIN SPONSOR -->

            </div>
@endsection