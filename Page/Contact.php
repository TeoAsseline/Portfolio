<main>
    <!-- Tous les liens, mon CV, mon cv vidéo lien, et mail -->
    <h1>Contactez-moi</h1>

    <form method="POST">
        
        <label for="email">From Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="name">Objet :</label>
        <input type="text" id="objet" name="objet" required>

        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="5" cols="30" required></textarea>

        <input type="submit" value="Envoyer">
    </form>

    <a href="https://github.com/TeoAsseline" alt="https://github.com/TeoAsseline">GitHub</a>
    <a href="mailto:asselineteo@gmail.com" alt="asselineteo@gmail.com">Mail</a>
    <a href="https://www.linkedin.com/in/teo-asseline" alt="www.linkedin.com/in/teo-asseline">LinkedIn</a>
    <a href="https://www.instagram.com/teoasseline" alt="https://www.instagram.com/teoasseline">Instagram</a>
    <a href="./FICHIER/CV_ASSELINE_TEO.pdf" download>Cliquez pour télécharger</a>
    <a href="https://www.youtube.com/embed/rRQ7ecWcALg?si=1-9JFYKs1McKtqf9" alt="https://www.youtube.com/embed/rRQ7ecWcALg?si=1-9JFYKs1McKtqf9">Mon CV Vidéo</a>
</main>
<?php
    if (isset($_POST['message'])) {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: '. $_POST['email'] . "\r\n";
        $entete .= 'Reply-to: asselineteo@gmail.com';

        $message = '<h1>Message envoyé depuis la page Contact du Portfolio de Asseline Téo</h1>
        <p><b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

        $retour = mail('asselineteo@gmail.com', 'Envoi depuis page Contact', $message, $entete);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
?>