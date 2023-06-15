
<body class="body">



  <section>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="header-image2 img-fluid" id="image-id" src="image/ow-heroes.png" alt="OW_heroes">
      </div>

      <div class="carousel-item">
        <img class="header-image2 img-fluid" src="image/thumb_4905_post_big.jpg" alt="OW_heroes">
      </div>

      <div class="carousel-item">
        <img class="header-image2 img-fluid" src="image/Overwatch-héros-Ashe.jpg" alt="OW_heroes">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</section>







    <div class="container-fluid column">
      <div class="btn-group" role="group" aria-label="Basic  example">
        <button type="button" class="btn">Tout</button>
        <button type="button" class="btn">Tank</button>
        <button type="button" class="btn">Dégâts</button>
        <button type="button" class="btn">Soutien</button>
        <br><br><br>
      </div>

    </div>
  </section>


<!-- Section Personnage -->
<section>
  <div class="container-fluid">
    <div class="row character_Home">
      <!-- Début de la boucle -->
      <?php
        $characters = array(
          array("Ana", "1600_Ana.jpg"),
          array("Ange", "1600_Mercy.jpg"),
          array("Ashe", "1600_Ashe.jpg"),
          array("Baptiste", "1600_Baptiste.jpg"),
          array("Bastion", "1600_Bastion.jpg"),
          array("Bouldozer", "1600_Wrecking_Ball.jpg"),
          array("Brigitte", "1600_Brigitte.jpg"),
          array("Cassidy", "1600_Cassidy.jpg"),
          array("Chacal", "1600_Junkrat.jpg"),
          array("Chopper", "1600_Roadhog.jpg"),
          array("D.Va", "1600_Dva.jpg"),
          array("Doomfist", "1600_Doomfist.jpg"),
          array("Écho", "1600_Echo.jpg"),
          array("Fatale", "1600_Widowmaker.jpg"),
          array("Faucheur", "1600_Reaper.jpg"),
          array("Genji", "1600_Genji.jpg"),
          array("Hanzo", "1600_Hanzo.jpg"),
          array("Kiriko", "1600_Kiriko.jpg"),
          array("Lúcio", "1600_Lucio.jpg"),
          array("Mei", "1600_Mei_02.jpg"),
          array("Moira", "1600_Moira.jpg"),
          array("Orisa", "1600_Orisa.jpg"),
          array("Pharah", "1600_Pharah.jpg"),
          array("Ramattra", "1600_Ramattra.jpg"),
          array("Reine des Junkers", "1600_Junker_Queen.jpg"),
          array("Reinhardt", "1600_Reinhardt.jpg"),
          array("Sigma", "1600_Sigma.jpg"),
          array("Sojourn", "1600_Sojourn.jpg"),
          array("Soldat : 76", "1600_Soldier_76.jpg"),
          array("Sombra", "1600_Sombra.jpg"),
          array("Symmetra", "1600_Symmetra.jpg"),
          array("Torbjörn", "1600_Torbjorn.jpg"),
          array("Tracer", "1600_Tracer.jpg"),
          array("Winston", "1600_Winston.jpg"),
          array("Zarya", "1600_Zarya.jpg"),
          array("Zenyatta", "1600_Zenyatta.jpg")
        );

        foreach ($characters as $character) {
          $name = $character[0];
          $image = $character[1];
      ?>
      <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="character">
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

































