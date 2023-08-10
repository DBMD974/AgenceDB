<?php
include ('connexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgenceDB</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<?php include('header.php'); ?>



<!-- ma parti de cards d'articles -->
<section class="property-section">
  <div class="property-card">
    <img src="images\chambre (1).jpg" alt="Propriété 1">
    <h2>Appartement Moderne</h2>
    <p>Spacieux appartement récemment rénové avec vue imprenable sur la ville.</p>
    <p><strong>Prix:</strong> 105,000.00 €</p>
    <p><strong>Localisation:</strong> Centre-ville, La possession</p>
    <p><strong>Type:</strong> Appartement</p>
    <p><strong>Status:</strong> A Vendre/Location</p>
    <a href="#" class="btn">Voir l'article</a>
  </div>
  <div class="property-card">
    <img src="images\terrain.jpg" alt="Propriété 2">
    <h2>Maison de Campagne</h2>
    <p>Charmante maison de campagne avec grand jardin et atmosphère paisible.</p>
    <p><strong>Prix:</strong> 250,000.00 €</p>
    <p><strong>Localisation:</strong> Saint Benois</p>
    <p><strong>Type:</strong> Maison et terrain</p>
    <p><strong>Status:</strong> A Vendre</p>
    <a href="#" class="btn">Voir l'article</a>
  </div>
  <div class="property-card">
    <img src="images\maison (2).jpg" alt="Propriété 3">
    <h2>Villa Luxueuse</h2>
    <p>Villa spacieuse avec piscine privée, idéale pour les familles en quête de confort.</p>
    <p><strong>Prix:</strong> 480,000.00 €</p>
    <p><strong>Localisation:</strong> Saint Denis</p>
    <p><strong>Type:</strong> Villa</p>
    <p><strong>Status:</strong> A Vendre</p>
    <a href="#" class="btn">Voir l'article</a>
  </div>
  <!-- Répéter ces blocs pour d'autres propriétés -->
</section>

<div class="texte">
<h2>Nos Agences DBMD974 proches de chez vous</h2>
</div>


<section class="property-section">
  <?php
  // créé une instance de votre classe de connexion à la base de données
  $connexion = new Maconnexion('agencedb','','root','localhost'); // nom réel de votre classe

  // Appel de la fonction pour récupérer les données des biens immobiliers
  $properties = $connexion->selectbien_immo();

  foreach ($properties as $property) :

  ?>
    <div class="property-card">
    <img src="<?php echo $property['image']; ?>" alt="">
      <h2><?php echo $property['titre_bien']; ?></h2>
      <p><?php echo $property['description']; ?></p>
      <ul class="property-info">
        <li><strong>ID Propriété:</strong> <?php echo $property['id_propriete']; ?></li>
        <li><strong>Prix:</strong> <?php echo $property['prix_bien']; ?> €</li>
        <li><strong>Localisation:</strong> <?php echo $property['localisation_bien']; ?></li>
        <li><strong>Type:</strong> <?php echo $property['type_bien']; ?></li>
        <li><strong>Status:</strong> <?php echo $property['status']; ?></li>
      </ul>
      <a href="#" class="btn">Voir l'article</a>
    </div>
  <?php endforeach; ?>
</section>





<br>
<br>
<br>
















<?php include('footer.php') ?>
<script src="script.js"></script>
</body>
</html>