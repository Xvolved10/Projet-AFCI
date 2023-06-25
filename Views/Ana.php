<body class="body">
    <!-- Présentation -->
    <section class="présentation">
        <div class="image-text">
            <img class="img_background" src="image/1600_Ana.jpg" alt="Ana">
            <div class="overlay">
                <h1>Ana</h1>
                <p>Membre fondateur d’Overwatch, Ana met son talent et son expertise au service de la défense de sa patrie et de ses proches.</p>
                <div class="icones">
                    <img src="image/picto_-coval-180_pxl.jpg">
                    <p>Soutien</p>
                    <img src="image/227.jpg">
                    <p>Le Caire, Égypte</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Textes -->
    <section class="Paragraphes">
        <div class="container-fluid col-sm-12 col-lg-6 px-5 mt-3 ">
            <!-- Les origines -->
            <div class="Origines_text">
                <h1 class="Origines">Les origines</h1>

                <p class="paragraphe2 ">
                    Impliquée dans la fondation d’Overwatch et reconnue autrefois comme la meilleure tireuse d’élite au monde, Ana Amari est issue d’une longue lignée de soldats maintes fois décorés. Présumée morte après une fusillade avec la Griffe, Ana a repris du service pour protéger son pays, sa famille et ses camarades les plus proches.
                </p>
            </div>
            <iframe class="Origine_video" src="https://www.youtube.com/embed/2Yo23DQKMsA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> <!-- Histoire -->
            <div class="accordion-container">
                <button id="jeunesse-button" class="accordion active title">
                    <h1>Overwatch</h1><i class="arrow down"></i>
                </button>
                <div id="jeunesse-panel" class="panel show">
                    <p class="Histoire">L’Égypte ayant payé un lourd tribut lors de la crise des Omniums, les services armés du pays, affaiblis et en sous-effectif, choisirent de se tourner vers des snipers tels qu’Ana Amari, alors considérée comme l’un des meilleurs éléments du pays. Son adresse, sa capacité à prendre des décisions et son instinct l’amenèrent naturellement à rejoindre les troupes d’Overwatch, qui mirent fin à la guerre.
                        Suite au succès de cette mission, Ana fut promue au rang de capitaine et servit de nombreuses années en tant que second du commandant Morrison. Malgré ses responsabilités accrues, Ana refusa d’être éloignée des opérations de combat. Elle continua d’opérer sur le terrain jusqu’à la cinquantaine, mais fut déclarée morte après avoir été neutralisée par un agent de la Griffe connu sous le nom de « Fatale », lors d’une prise d’otages.
                    </p>
                </div>
                <button id="deadlock-button" class="accordion title">
                    <h1>Post-Overwatch</h1><i class="arrow down"></i>
                </button>
                <div id="deadlock-panel" class="panel">
                    <p class="Histoire">Ana survécut à des blessures graves et à la perte de son œil droit. Pendant sa convalescence, le poids d’une vie entière consacrée au combat se fit sentir et elle décida qu’il valait mieux rester morte aux yeux du monde. Les années passant, et voyant son foyer de plus en plus menacé, elle réalisa qu’elle avait toujours le désir de protéger les siens. C’est pourquoi elle rejoignit le combat, cette fois en tant que guérisseuse, et se consacra à la prévention des menaces planétaires. Avant de perturber les agissements de la Griffe au Caire, elle intercepta un message improbable : le rappel d’Overwatch de la part de son ancien ami, Winston.
                    </p>
                </div>
                <button id="deadlock-button" class="accordion title">
                    <h1>Le Rappel</h1><i class="arrow down"></i>
                </button>
                <div id="deadlock-panel" class="panel">
                    <p class="Histoire">Même si elle restait dubitative quant au bien-fondé du rappel, elle décida toutefois d’aider ses camarades depuis les ombres. Elle contacta Cole Cassidy, qui avait survécu à la chute d’Overwatch et était revenu en tant que pistolero mercenaire. Ana savait que l’organisation avait besoin de sang neuf - des gens comme Cassidy et sa propre fille, Pharah - pour avoir une chance de l’emporter, et craignait que la vieille garde n’empêche son retour. Après en avoir parlé à sa fille lors d’une réunion tardive, elle se lança dans sa propre mission avec Soldat : 76.
                        Ayant l’esprit enfin libre, Ana traque désormais la Griffe et les fantômes qui hantent ses anciens alliés partout dans le monde. Même si elle n’a pas rejoint Overwatch, Ana garde un œil attentif sur leurs accomplissements.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Vidéos -->
    <section>
        <div class=" container-fluid md-6 col-sm-12">
            <div>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/8ZKtp0m36Og" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/w0R-GHdbE4s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <strong>----------------------------</strong>
            </div>
    </section>
    <section class="section_bd">
        <a class="bd_link" href="https://overwatch.blizzard.com/fr-fr/media/stories/legacy/" target="_blank"><img class="bd" src="image/Anabd.png" alt="AnaBd"></a>
    </section>
    <!-- Images -->
    <section class="images">
        <div class="container">
            <div class="row mt-5 section_images">
                <?php
                $images = [
                    'image/pharah-00.jpg',
                    'image/overwatch-ana-mere-pharah-personnages-jeu-video.avif',
                    'image/un-leak-d-overwatch-2-aurait-devoile-les-nouveaux-talents-et-competences-d-ana-couv.jpg',
                    'image/ana_00.webp',
                    'image/captain-ana-overwatch-video-game-wallpaper-2048x1536_26.jpg',
                    'image/Screen_20Shot_202016-07-22_20at_2011.21.21_20AM.0.jpg'
                ];
                ?>

                <?php foreach ($images as $index => $image) : ?>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                        <div class="card-image">
                            <img class="img-fluid" src="<?php echo $image; ?>" alt="Ashe-<?php echo $index + 1; ?>">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>