<?php
include ('connexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM-INSCRIPTION</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="dark-bg">


<!-- formulaire d'inscription -->
<form class="registration-form" action="connection.php" method="POST">
<i class="fa-solid fa-circle-user fa-2xl" style="color: #ffffff;"></i><h2>Inscription</h2>
  <div class="form-group">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>
  </div>
  <div class="form-group">
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>
  </div>
  <div class="form-group">
    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="mot_de_passe">Mot de passe :</label>
    <input type="password" id="mot_de_passe" name="mot_de_passe" required>
  </div>
  <div class="form-group">
    <label for="confirmer_mot_de_passe">Confirmer le mot de passe :</label>
    <input type="password" id="confirmer_mot_de_passe" name="confirmer_mot_de_passe" required>
  </div>
  <button type="submit" class="btn">S'inscrire</button>
</form>

<!-- bouton de retour -->
<a href="index.php" class="back-button">Retour à l'accueil</a>


<?php
$connexion = new MaConnexion('agencedb','','root','localhost'); ?>


    <?php
    // Insérer l'utilisateur dans la base de données lorsque le formulaire est soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $mdp = $_POST['mot_de_passe'];

        // Appeler la fonction d'insertion sécurisée
        $resultat = $connexion->insertion_utilisateur_secure(null, $nom, $prenom, $email, $mdp);

        // Afficher le résultat de l'insertion (succès ou erreur)
        echo $resultat;
    }
    ?>








<script src="script.js"></script>    
</body>
</html>