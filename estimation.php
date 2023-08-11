<?php
include ('connexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTIMATION</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="estime">

<form class="estimation-form" action="traitement_estimation.php" method="POST">
  <h2>Estimation de Bien Immobilier</h2>
  <div class="form-group">
    <label for="type_bien">Type de Bien :</label>
    <select id="type_bien" name="type_bien" required>
      <option value="appartement">Appartement</option>
      <option value="maison">Maison</option>
      <option value="villa">Villa</option>
      <!-- Ajoutez d'autres options si nécessaire -->
    </select>
  </div>
  <div class="form-group">
    <label for="surface">Surface (m²) :</label>
    <input type="number" id="surface" name="surface" required>
  </div>
  <div class="form-group">
    <label for="nombre_pieces">Nombre de Pièces :</label>
    <input type="number" id="nombre_pieces" name="nombre_pieces" required>
  </div>
  <div class="form-group">
    <label for="annee_construction">Année de Construction :</label>
    <input type="number" id="annee_construction" name="annee_construction" required>
  </div>
  <div class="form-group">
    <label for="localisation">Localisation :</label>
    <input type="text" id="localisation" name="localisation" required>
  </div>
  <div class="form-group">
    <label for="email">Votre Email :</label>
    <input type="email" id="email" name="email" required>
  </div>
  <button type="submit" class="btn">Estimer</button>
</form>

    <script src="script.js"></script>
</body>
</html>