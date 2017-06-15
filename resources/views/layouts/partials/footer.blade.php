<footer>
    <div class="footer-container">
        <div class="row">
            <div class="col-md-6">
                <p>© 2017 Team HEIG-VD hydrocontest</p>
            </div>
            <div class="col-md-3">
                @if(Session::has('user_id'))
                    <p><a href="/auth/logout"><i class="fa fa-sign-out"></i> Déconnexion</a></p>
                @else
                    <p><a href="" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> Connexion</a></p>
                @endif
            </div>
            <div class="col-md-3">                
                @if(Session::has('user_id'))
                    <p><a href="/admin"><i class="fa fa-cogs"></i> Administration</a></p>
                @else
                    <p></p>
                @endif
            </div>
        </div>
    </div>
</footer>