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
              
              <!-- FIN CONCOURS -->

              <!-- NEWS -->
              
              <!-- FIN NEWS -->
            </div>
@endsection