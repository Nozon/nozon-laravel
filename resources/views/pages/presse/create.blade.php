<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Enregistrer presse</title>
    </head>
    <body>
        @if (session('error'))
        <div> Erreur </div>
        @endif
        <form method="POST" action="{{ url('presse') }}">
            {{ csrf_field() }}
            <label for="titre">Titre</label>
            <input type="text" placeholder="titre" name="titre" value="{{ old('titre') }}">
            <label for="description">Description</label>
            <input type="text" placeholder="description" name="description" value="{{ old('description') }}">
            <label for="url">Date</label>
            <input type="date" placeholder="date" name="date" value="{{ old('date') }}">
            <label for="url">Hyperlien</label>
            <input type="text" placeholder="url" name="url" value="{{ old('url') }}">
            <label for="url">Edition concernée (année)</label>
            <input type="text" placeholder="edition_annee" name="edition_annee" value="{{ old('edition_annee') }}">
            <input type="submit" value="Enregistrer">
        </form>
    </body>
</html>
