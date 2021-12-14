<?php

global $pdo;

// Résultats de la recherche via des cartes clicables qui renvoient à la fiche concernée

$resultats = visualDataPM($pdo);


if(!empty($resultats)){

    foreach ($resultats as $row) { ?>

        <?php $id = $row['id_pm_plante_moderne'] ?>



        <?php


        //Requête globale

        $sql = 'SELECT *  FROM pm_plante_moderne WHERE id_pm_plante_moderne=' . $id; // requete sql

        $stmt = $pdo->prepare($sql); // préparation de la requete sql

        $stmt->execute(); // execution avec affectation de la valeur :formInput

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC); // stockage en tableau des résultats


    ?>

        <!-- Les informations affichées sur la card (ici, le nom, le commentaire, l'image et la légende de l'image) -->

        <div class="card mb-3">

            <a style="text-decoration: none" href="./fiche?idPlanteModerne=<?= $id; ?>">

                <div class="row g-0">

                    <div class="col-md-8">

                        <div class="card-body">

                            <h5 class="card-title"><?= $result[0]['pm_nom'] ?></h5>

                            <h6> <?php if(isset($result[0]['pm_commentaire'])){ echo $result[0]['pm_commentaire'];} ?></h6>


                        </div>

                    </div>

                    <div class="col-md-4">

                        <?php

                        if ($result[0]['pm_image_url']) { ?>

                            <img src="<?= $result[0]['pm_image_url']; ?>" alt="<?= $result[0]['pm_legende_image']; ?>" class="img-fluid rounded" style="text-decoration: none">

                        <?php } ?>

                    </div>

                </div>

            </a>

        </div><br>



    <?php }

} else {

    ?>

    <h4 style="text-align: center">Aucun résultat.</h4>

<?php }