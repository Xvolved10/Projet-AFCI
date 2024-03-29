<body class="body">

<div class="carousel-inner" id="myCarousel">
  <?php
  $imageFolder = 'image/carrousel';

  // Récupère la liste des fichiers du dossier
  $images = glob($imageFolder . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

  // Parcours la liste des images et les affiche dans le carousel
  foreach ($images as $index => $image) {
    $isActive = ($index === 0) ? 'active' : ''; // Ajoute la classe 'active' à la première image

    echo '<div class="carousel-item ' . $isActive . '">';
    echo '<img src="' . $image . '" class="d-block w-100" alt="">';
    echo '</div>';
  }
  ?>
</div>


  <!-- <div class="container-fluid column">
    <div class="btn-group" role="group" aria-label="Basic  example">
      <button type="button" class="btn">Tout</button>
      <button type="button" class="btn">Tank</button>
      <button type="button" class="btn">Dégâts</button>
      <button type="button" class="btn">Soutien</button>
      <br><br><br>
    </div>

  </div> -->

  <!-- Section Personnage -->
  <section class="character-section">
    <div class="container-fluid Home">
      <div class="row character_Home">
        <!-- Début de la boucle -->
        <?php
        $characters = array(
          array("Ana", "1600_Ana.jpg", "soutien"),
          array("Ange", "1600_Mercy.jpg", "soutien"),
          array("Ashe", "1600_Ashe.jpg", "dégâts"),
          array("Baptiste", "1600_Baptiste.jpg", "soutien"),
          array("Bastion", "1600_Bastion.jpg", "dégâts"),
          array("Bouldozer", "1600_Wrecking_Ball.jpg", "tank"),
          array("Brigitte", "1600_Brigitte.jpg", "soutien"),
          array("Cassidy", "1600_Cassidy.jpg", "dégâts"),
          array("Chacal", "1600_Junkrat.jpg", "dégâts"),
          array("Chopper", "1600_Roadhog.jpg", "tank"),
          array("D.Va", "1600_Dva.jpg", "tank"),
          array("Doomfist", "1600_Doomfist.jpg", "tank"),
          array("Écho", "1600_Echo.jpg", "dégâts"),
          array("Fatale", "1600_Widowmaker.jpg", "dégâts"),
          array("Faucheur", "1600_Reaper.jpg", "dégâts"),
          array("Genji", "1600_Genji.jpg", "dégâts"),
          array("Hanzo", "1600_Hanzo.jpg", "dégâts"),
          array("Kiriko", "1600_Kiriko.jpg", "soutien"),
          array("Lúcio", "1600_Lucio.jpg", "soutien"),
          array("Mei", "1600_Mei_02.jpg", "dégâts"),
          array("Moira", "1600_Moira.jpg", "soutien"),
          array("Orisa", "1600_Orisa.jpg", "tank"),
          array("Pharah", "1600_Pharah.jpg", "dégâts"),
          array("Ramattra", "1600_Ramattra.jpg", "tank"),
          array("Reine des Junkers", "1600_Junker_Queen.jpg", "tank"),
          array("Reinhardt", "1600_Reinhardt.jpg", "tank"),
          array("Sigma", "1600_Sigma.jpg", "tank"),
          array("Sojourn", "1600_Sojourn.jpg", "dégâts"),
          array("Soldat : 76", "1600_Soldier_76.jpg", "dégâts"),
          array("Sombra", "1600_Sombra.jpg", "dégâts"),
          array("Symmetra", "1600_Symmetra.jpg", "dégâts"),
          array("Torbjörn", "1600_Torbjorn.jpg", "dégâts"),
          array("Tracer", "1600_Tracer.jpg", "dégâts"),
          array("Winston", "1600_Winston.jpg", "tank"),
          array("Zarya", "1600_Zarya.jpg", "tank"),
          array("Zenyatta", "1600_Zenyatta.jpg", "soutien")
        );

        foreach ($characters as $character) {
          $name = $character[0];
          $image = $character[1];
          $type = $character[2];
        ?>
          <div class="col-sm-12 col-md-6 col-lg-6 héros-home">
            <div class="character" data-type="<?php echo $type; ?>">
              <a href="http://localhost/PHP/Evaluation/Index.php?<?php echo $name; ?>#">
                <div class="image-container">
                  <img src="image/<?php echo $image; ?>">
                  <div class="Heroes_names">
                    <h2><?php echo $name; ?></h2>
                  </div>
                </div>
              </a>
            </div>
          </div>
        <?php } ?>
        <!-- Fin de la boucle -->
      </div>
    </div>
  </section>