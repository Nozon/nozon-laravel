        <button type="button" id="btn-show-form" class="btn btn-default btn-lg btn-add-compte">Modifier le compte</button>
        <form class="form-add-compte" method="POST" action="{{ url('presse') }}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="email">Adresse email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}"/>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" class="form-control" value="{{ old('password')}}" />
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirmer mot de passe</label>
                <input type="password" name="confirmPassword" class="form-control" value="{{ old('password')}}"/>
            </div>

            <div class="form-group">
                <button class="btn btn-default btnCreateCompte">Créer</button>
            </div>
        </form>