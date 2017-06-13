<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Enregistrer Membre</title>
    </head>
    <body>
        @if (session('error'))
        <div> Erreur </div>
        @endif
        <form method="POST" action="{{ url('membre') }}">
            {{ csrf_field() }}
            <input type="checkbox" name="dejamembre" value="Bike"> Deja membre<br>

            <label for="Nom">Nom</label>
            <input type="text" placeholder="nom" name="nom" value="{{ old('nom') }}">

            <label for="prenom">Prenom</label>
            <input type="text" placeholder="prenom" name="prenom" value="{{ old('prenom') }}">

            <label for="email">email</label>
            <input type="email" placeholder="email" name="email" value="{{ old('email') }}">

            <label for="fonction">Fonction</label>
            <input type="text" placeholder="fonction" name="fonction" value="{{ old('fonction') }}">

            <label for="departement">Departement</label>
            <input type="text" placeholder="departement" name="departement" value="{{ old('departement') }}">

            <label for="annee_etude">Année etude</label>
            <input type="text" placeholder="annee_etude" name="annee_etude" value="{{ old('annee_etude') }}">

            <input type="submit" value="Enregistrer">
        </form>
    </body>
</html>
