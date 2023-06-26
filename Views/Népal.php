<body class="body">

    <!-- Présentation -->
    <section class="présentation">
        <div class="image-text">
        <div class="img_container">
            <img class="img_background" src="image/Cartes/Népal/thiago-klafke-screenshot-16-12-23-10-54-34-000.jpg" alt="Népal">
            <div class="overlay">
                <h1>Népal</h1>
                <div class="icones">
                    <img src="image/227.jpg">
                    <p>Monastère, Népal, Himalaya</p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Textes -->
    <section class="Paragraphes">
        <div class="container-fluid col-sm-12 col-lg-6 px-5 mt-3 ">
            <!-- Les origines -->
            <div class="Origines_text">
                <h1 class="Origines">Histoire</h1>

                <p class="paragraphe2 ">
                    Il y a quelques années, un groupe de robots omniaques
                    a vécu ce qu'il a décrit comme un éveil spirituel.
                    Ils ont abandonné leur vie programmée pour fonder
                    un monastère dans les hauteurs de l'Himalaya,
                    où les omniaques partageant les mêmes idées pourraient
                    se réunir pour méditer sur la nature de leur existence.
                    Dirigés par leur chef spirituel, Tekhartha Mondatta,
                    ils ont repris les ruines d'un ancien monastère et
                    en ont fait la maison de Shambali,
                    un lieu où les omniaques et les humains se rendent
                    en pèlerinage dans l'espoir de trouver une plus grande vérité.
                </p>
            </div>
            <iframe class="Origine_video" src="https://www.youtube.com/embed/15UrRvLVIVc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </section>

    <!-- Personnages liés -->
    <section class="Personnages-liés">
        <h1 class="linked-characters">Personnages liés</h1>
        <?php
        $personnages = [
            [
                'lien' => 'Index.php?Ashe#',
                'image' => 'image/8dc2a024c9b7d95c7141b2ef065590dbc8d9018d12ad15f76b01923986702228.png',
                'alt' => 'Image du personnage 1'
            ],
            [
                'lien' => 'Index.php?Ashe#',
                'image' => 'image/4edf5ea6d58c449a2aeb619a3fda9fff36a069dfbe4da8bc5d8ec1c758ddb8dc (1).png',
                'alt' => 'Image du personnage 2'
            ],
            [
                'lien' => 'Index.php?Ashe#',
                'image' => 'image/aecd8fa677f0093344fab7ccb7c37516c764df3f5ff339a5a845a030a27ba7e0.png',
                'alt' => 'Image du personnage 3'
            ],
            [
                'lien' => 'Index.php?Ashe#',
                'image' => 'image/8dc2a024c9b7d95c7141b2ef065590dbc8d9018d12ad15f76b01923986702228.png',
                'alt' => 'Image du personnage 4'
            ],
            [
                'lien' => 'Index.php?Ashe#',
                'image' => 'image/8dc2a024c9b7d95c7141b2ef065590dbc8d9018d12ad15f76b01923986702228.png',
                'alt' => 'Image du personnage 5'
            ]
        ];
        ?>

        <?php foreach ($personnages as $personnage) : ?>
            <div class="link-container">
                <a href="<?php echo $personnage['lien']; ?>">
                    <div class="placeholder-circle">
                        <img class="linked-character-image" alt="<?php echo $personnage['alt']; ?>" src="<?php echo $personnage['image']; ?>">
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </section>
    <!-- Images -->
    <section class="images">
        <div class="container">
            <div class="row mt-5 section_images">
                <?php
                $images = [
                    'image/Cartes/Népal/Nepal_loading_screen.webp',
                    'image/Cartes/Népal/Nepal_Sanctum.webp',
                    'image/Cartes/Népal/Nepal_Shrine.webp',
                    'image/Cartes/Népal/Nepal_Village.webp',
                    'image/Cartes/Népal/Mon projet.jpg',
                    'image/Cartes/Népal/thiago-klafke-screenshot-16-12-23-10-54-34-000.jpg'
                ];
                ?>

                <?php foreach ($images as $image) : ?>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                        <div class="card-image">
                            <img class="img-fluid" src="<?php echo $image; ?>" alt="imgMaps">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>