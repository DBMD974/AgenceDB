<?php
// Récupère l'ID unique de l'article depuis la requête GET
if (isset($_GET['id'])) {
  $articleId = $_GET['id'];
  // Utilisez $articleId pour récupérer les détails de l'article de votre base de données
  // par exemple, $article = getArticleById($articleId);
}

include ('connexion.php');
$uneconnexion -> select_where_articles($_POST['image'],$_POST ['titre_bien'],$_POST['description'],
$_POST['id_propriete'],$_POST['prix_bien'],$_POST['localisation_bien'],$_POST['type_bien'],$_POST['status']);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGE ARTICLES</title>
</head>
<body>
    
</body>
</html>




<div class="property-list">
  <?php foreach ($biens_immobiliers as $bien_immobilier) : ?>
    <div class="property-card">
      <!-- Contenu de la carte (image, description, etc.) -->
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

      <a href="article.php?id=<?= $bien_immobilier['id']; ?>" class="article-link">
        Voir l'article
      </a>
    </div>
  <?php endforeach; ?>
</div>


<?php if (isset($article)) : ?>
  <div class="article-details">
    <img src="<?= $article['image']; ?>" alt="<?= $article['titre']; ?>">
    <h2><?= $article['titre']; ?></h2>
    <p><?= $article['description']; ?></p>
    <p>Prix : <?= $article['prix']; ?></p>
    <!-- Autres détails de l'article -->
  </div>
<?php else : ?>
  <p>L'article n'a pas pu être trouvé.</p>
<?php endif; ?>

</body>
</html>
