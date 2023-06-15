<body class="body formnouveausujet">
  <div class="main-container">
    <form action="" method="post">
      <h1 class="form-title">Créez un nouveau sujet</h1>
      <?php if (isset($error["Titre_sujet"])) { ?>
        <p class="form-error"><?php echo $error["Titre_sujet"]; ?></p>
      <?php } ?>
      <textarea name="Titre_sujet" value="" class="form-textarea"></textarea>
      <br><br>
      <button type="submit" name="Valider" class="form-submit">Valider</button>
    </form>
  </div>
</body>

