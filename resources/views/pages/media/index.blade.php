<!-- PARTIE MEDIA-->


<div class="content-media-hydro" id="medias">
    <div class="row media-description">
        <div class="team-hydro-titre">
            <h1>Les médias</h1>
        </div>
        <h2>Galerie photos</h2>
        <div class="row gallery-img">

            @foreach($medias as $media)
                <div class="col-md-3">
                    <a data-lightbox="photos" href="{{$media->name}}">
                        <img src="{{$media->name}}" alt="Bridge">
                    </a>
                </div>
            @endforeach
        </div>
        

    </div>
</div>
<!-- FIN PARTIE MEDIA--> 