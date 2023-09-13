<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des élèves</title>
</head>
<body>
    <h1>Liste des élèves</h1>
    
    <ul id="liste-eleves">
        <li>
            <span>Nom: John</span>
            <span>Prénom: Doe</span>
            <button onclick="supprimerEleve(this)">Supprimer</button>
        </li>
        <li>
            <span>Nom: Jane</span>
            <span>Prénom: Smith</span>
            <button onclick="supprimerEleve(this)">Supprimer</button>
        </li>
    </ul>

    <script>
        function supprimerEleve(bouton) {
            // Récupérer l'élément <li> parent du bouton
            var eleve = bouton.parentElement;
            
            // Supprimer l'élément <li> de la liste
            eleve.remove();
        }
    </script>
</body>
</html>
