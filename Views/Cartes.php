<body class="body">
    <section>
        <div class="">
            <img class="header_cartes" src="image/1129812-maps-ow-article_cover_bd-1.webp" alt="OW_heroes">
        </div>
    </section>
    <section class="Cartes">
        <div class="maps">
            <?php
            $cartes = array(
                "Ayutthaya" => "image/Cartes/Ayutthaya/ayutthaya-screenshot-003.jpeg",
                "Blizzard World" => "image/Cartes/Blizzard World/blizzardworld-screenshot-003.jpeg",
                "Busan" => "image/Cartes/Busan/busan-screenshot-001.jpeg",
                "Castillo" => "image/Cartes/Castillo/helder-pinto-4castillo.jpg",
                "Château Guillard" => "image/Cartes/Château Guillard/chateau-screenshot-001.jpeg",
                "Circuit Royal" => "image/Cartes/Circuit Royal/circuit-royal_screenshot_01.webp",
                "Colonie Lunaire Horizon" => "image/Cartes/Colonie Lunaire Horizon/164033.jpg",
                "Colosseo" => "image/Cartes/Colosseo/colosseo_screenshot_01.webp",
                "Dorado" => "image/Cartes/Dorado/3198829-dorado.jpg",
                "Ecolab Antarctique" => "image/Cartes/Ecolab Antarctique/Ecopoint_Antarctica_BlizzCon_2016 (1).jpeg",
                "Eichenwalde" => "image/Cartes/Eichenwalde/eichenwalde-screenshot-003.jpeg",
                "Esperança" => "image/Cartes/Esperança/Esperança Overwatch-2-a.jpg",
                "Forêt Noire" => "image/Cartes/Forêt Noire/simon-fuchs-blackforest-04.jpg",
                "Hanamura" => "image/Cartes/Hanamura/Hanamura_001.jpg",
                "Hollywood" => "image/Cartes/Hollywood/Hollywood_fixedres.webp",
                "Ilios" => "image/Cartes/Ilios/Mainilios.webp",
                "Junkertown" => "image/Cartes/Junkertown/junkertown-screenshot-003.jpeg",
                "Kanezaka" => "image/Cartes/Kanezaka/kanezaka-screenshot-001.webp",
                "King's Row" => "image/Cartes/King's Row/Kings_row_map.jpg",
                "La Havane" => "image/Cartes/La Havane/havana-screenshot-001.jpeg",
                "Malevento" => "image/Cartes/Malevento/malevento-screenshot-001.webp",
                "Midtown" => "image/Cartes/Midtown/midtown_screenshot_02.webp",
                "Nécropole" => "image/Cartes/Nécropole/Necropolis.jpeg",
                "Népal" => "image/Cartes/Népal/thiago-klafke-screenshot-16-12-23-10-54-34-000.jpg",
                "New Queen Street" => "image/Cartes/New Queen Street/new-queen-street_screenshot_01.webp",
                "Numbani" => "image/Cartes/Numbani/Numbani_Loading_Screen.webp",
                "Oasis" => "image/Cartes/Oasis/oasis-screenshot-003.webp",
                "Observatoire Gibraltar" => "image/Cartes/Observatoire Gibraltar/Gibraltar_04.webp",
                "Paraíso" => "image/Cartes/Paraíso/Paraíso_pvp.webp",
                "Paris" => "image/Cartes/Paris/paris-screenshot-001.jpeg",
                "Péninsule Antarctique" => "image/Cartes/Péninsule Antarctique/Antarctic_Peninsula_1.webp",
                "Petra" => "image/Cartes/Petra/petra-screenshot-001.jpeg",
                "Rialto" => "image/Cartes/Rialto/rialto-screenshot-003.webp",
                "Route 66" => "image/Cartes/Route 66/Route_66.jpg",
                "Temple d'Anubis" => "image/Cartes/Temple d'Anubis/anubis2.jpg",
                "Tour de Lijiang" => "image/Cartes/Tour de Lijiang/Lijiang_Tower_loading_screen.webp",
                "Usine Volskaya" => "image/Cartes/Usine Volskaya/volskaya-industries-4.jpg",
            );

            foreach ($cartes as $nom => $image) {
                $nom_formatte = str_replace(" ", "_", $nom);
                $lien = "Index.php?" . $nom_formatte . "#";

                echo '
                <div>
                    <a class="link_maps" href="' . $lien . '">
                        <img class="image_Cartes" src="' . $image . '">
                        <div class="maps_names">
                            <h2>' . $nom . '</h2>
                        </div>
                    </a>
                </div>
                ';
            }
            ?>
        </div>
    </section>
</body>
