<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les informations du formulaire
    $informations = $_POST['informations'];

    // Chemin du fichier où vous souhaitez enregistrer les informations
    $fichier = 'chemin/vers/votre/dossier/informations.txt'; // Remplacez par le chemin correct

    // Vérifier si le fichier existe
    if (file_exists($fichier)) {
        // Enregistrement des informations dans le fichier
        // FILE_APPEND permet d'ajouter les données à la fin du fichier
        file_put_contents($fichier, $informations . PHP_EOL, FILE_APPEND);
        echo "Les informations ont été enregistrées avec succès.";
    } else {
        echo "Le fichier n'existe pas.";
    }
} else {
    echo "Aucune donnée reçue.";
}
?>
