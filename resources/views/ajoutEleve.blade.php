<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'ajout d'élève</title>
</head>
<body>
    <h1>Formulaire d'ajout d'élève</h1>
    <form action="{{ route(EleveController.store) }}" method="POST" enctype="multipart/form-data">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="date_naissance">Date de naissance :</label>
        <input type="date" id="date_naissance" name="date_naissance" required><br><br>

        <label for="numero_etudiant">Numéro étudiant :</label>
        <input type="text" id="numero_etudiant" name="numero_etudiant" required><br><br>

        <label for="email">E-mail :</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="image">Image :</label>
        <input type="file" id="image" name="image" accept="image/*"><br><br>

        <input type="submit" value="Ajouter l'élève">
        <input type="reset" value="Annuler">
    </form>
    <form action="/"><input type="submit" value="Retour"></form>
</body>
</html>
