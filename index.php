<?php
// Récupérer le paramètre de la page à afficher
$page = isset($_GET['page']) ? $_GET['page'] : '';
include './Page/Menu.html';
// Vérifier le paramètre et inclure la page correspondante
switch ($page) {
    case 'Contact':
        include './Page/Contact.html';
        break;
    case 'Competences':
        include './Page/Competence.html';
        break;
    case 'Projets':
        include './Page/Projet.html';
        break;
    default:
        include './Page/Accueil.html';
        break;
}
include './Page/Footer.html';
?>