@extends('layouts.home')

@section('content')
            <div class="container container-edition" id="edition-2017">
              

              <!--TEAM HYDRO-->

              @includeIf('pages.team.hydro')

              <!-- FIN TEAM -->

              <!-- TEAM SOUTIEN -->

              @includeIf('pages.team.soutien')
              
              <!-- FIN TEAM SOUTIEN -->

              <!-- CONCOURS -->
              @include('pages.concours.concours')
              <!-- FIN CONCOURS -->

              <!-- NEWS -->
              @include('pages.news.news')
              <!-- FIN NEWS -->
              
              <!-- MEDIA -->
              @include('pages.media.media')
              <!-- FIN MEDIA -->
              
              <!-- PRESSE -->
              @include('pages.presse.presse')
              <!-- FIN PRESSE -->
              
              <!-- PRIX -->
              @include('pages.prix.prix')
              <!-- FIN PRIX -->
              
              <!-- SPONSOR -->
              @include('pages.sponsor.sponsor')
              <!-- FIN SPONSOR -->
              
            </div>
@endsection