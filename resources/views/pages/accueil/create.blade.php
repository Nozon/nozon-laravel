                <h3>Page d'accueil</h3>
                 @if (session('error'))
                    <div> Erreur </div>
                @endif
                <form method="POST" class="form-inline" action="{{ url('accueil')}}">
                    <div class="form-group">
                        {{ csrf_field() }}
                        <label for="logo">Modifier le logo</label>
                        <input type="file" name="logo" value="{{ old('logo')}}" />
                        <button class="btn btn-default btn-xs btnModLogo">Modifier</button>
                    </div>
                </form>
                <form method="POST" class="form-inline" action="{{ url('accueil')}}">
                    <div class="form-group">
                        {{ csrf_field() }}
                        <label for="videoMain">Modifier la vidéo de présentation</label>
                        <input type="file" name="videoMain" value="{{ old('videoMain')}}">
                        <button class="btn btn-default btn-xs btnModVideo">Modifier</button>
                    </div>
                </form>
                <form method="POST" class="form-inline" action="{{ url('accueil')}}">
                    <div class="form-group">
                        {{ csrf_field() }}
                        <label for="socials">Modifier les liens des réseaux sociaux</label><br>
                        <span class="fa fa-facebook fa-2x"></span><input type="text" class="form-control" name="facebook" placeholder="Facebook" value="{{ old('facebook')}}"><br>
                        <span class="fa fa-youtube fa-2x"></span><input type="text" class="form-control" name="youtube" placeholder="YouTube" value="{{ old('youtube')}}"><br>
                        <span class="fa fa-instagram fa-2x"></span><input type="text" class="form-control" placeholder="Instagram" value="{{ old('instagram')}}">
                    </div><br>
                    <button class="btn btn-default btnModReseaux">Modifier</button>
                </form>        