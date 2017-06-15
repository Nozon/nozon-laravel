<!-- PARTIE MEDIA-->
<div class="content-media-hydro">
    <div class="row media-description">
        <div class="team-hydro-titre">
            <h1>Les médias</h1>
        </div>
        <h2>Galerie photos</h2>
        <div class="row gallery-img">

            @foreach($medias as $media)
                <div class="col-md-3">
                    <a data-lightbox="photos" href='public/img/news/'.{{$media->nom}}>
                        <img src='public/img/news/'.{{$media->nom}} alt="Bridge">
                    </a>
                </div>
            @endforeach
        </div>
      </div>
</div>
<!-- FIN PARTIE MEDIA-->
