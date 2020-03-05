<?php
header("Content-type: text/html; chartset=UTF-8") ;
if(isset($_SESSION['idUser'])){
    require("enteteConnect.inc.php") ;
}else{
    require("entete.inc.php") ;
}


// S'il y des données de postées
if ($_SERVER['REQUEST_METHOD']=='POST') {

  // (1) Code PHP pour traiter l'envoi de l'email
 
  // Récupération des variables et sécurisation des données
$nom = htmlentities($_POST['nom']);
  $email   = htmlentities($_POST['mail']);
  $message = htmlentities($_POST['message']);
 
  // Variabl es concernant l'email
 
  $destinataire = 'mathilde.nardeux@gmail.com'; // Adresse email du webmaster (à personnaliser)
  $sujet = '[ASPHALT] Formulaire de contact'; // Titre de l'email
  $contenu = '<html>
  <head>
  <meta charset="UTF-8">
  <title>Titre du message</title></head><body>';
  $contenu .= '<p>ASPHALT Messagerie.</p>';
  $contenu .= '<p><strong>Objet</strong>: '.$objet.'</p>';
  $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
  $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
  $contenu .= '<a href="https://mathildenardeux.github.io/portfolio">Voir le site</a>';
    
  $contenu .= '</body></html>'; // Contenu du message de 
$headers = 'From: Mathilde Nardeux - Le site<projet.asphalt@gmail.com>'."\r\n";
$headers .= 'Mime-Version: 1.0'."\r\n";
  $headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
 
  // Envoyer l'email
    if(($_POST['objet'] != "" ) && ( $_POST['mail'] !="") && ( $_POST['message'] != "")){
  mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
    echo '<div class="champRempli"><p>Message envoyé</p></div>'; // Afficher un message pour indiquer que le message a été envoyé
  // (2) Fin du code pour traiter l'envoi de l'email
    }
}

?>

<main>
    <section class="nousContacter">
        <h2>Une suggestion ?</h2>
        <form action="nousContacter.php" method="post" class="oubliMdpFormulaire">
            <div class="fenetre">

                <div class="contact">
                    <div class="informationMail">
                        <label for="mail"></label>
                        <input type="text" name="mail" id="mail" placeholder="Adresse mail" required class="saisie">
                        <input type="text" name="objet" id="objet" placeholder="Objet du message" class="saisie" required>
                    </div>

                    <div class="message">
                        <label for="message"></label>
                        <textarea id="message" name="message" row="3" cols="54" class="saisie" placeholder="Saisissez votre commentaire"></textarea>
                    </div>
                </div>



            </div>
            <button type="submit" class="boutonBlanc ">Envoyer le mail</button>
        </form>

    </section>
</main>
<?php 
require("pied.inc.php");
?>