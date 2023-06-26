<body class="body formnouveausujet">
  <!-- Image du forum -->
  <div class="image-forum">
    <img class="img_background" src="<?php echo htmlspecialchars("image/banniere (1).png"); ?>">
  </div>

  <!-- Conteneur principal -->
  <div class="main-container">
    <!-- Formulaire de création d'un nouveau sujet -->
    <form action="" method="post">
      <h1 class="form-title">Créez un nouveau sujet</h1>
      <?php if (isset($error["Titre_sujet"])) { ?>
        <p class="form-error"><?php echo htmlspecialchars($error["Titre_sujet"]); ?></p>
      <?php } ?>
      <textarea name="Titre_sujet" value="" class="form-textarea"></textarea>
      <br><br>
      <button type="submit" name="Valider" class="form-submit">Valider</button>
    </form>
  </div>
</body>