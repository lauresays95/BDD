<?phpglobal $pdo;// Résultats de la recherche via des cartes clicables qui renvoient à la fiche concernée$resultats = [];$resultats = selectIdPersonne($pdo);if(!empty($resultats)){foreach ($resultats as $savant){    //Requête globale    $sql = 'SELECT * FROM pe_personne WHERE id_pe_personne=' . $savant['id_pe_personne']; // requete sql    $stmt = $pdo->prepare($sql); // préparation de la requete sql    $stmt->execute(); // execution avec affectation de la valeur :formInput    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); // stockage en tableau des résultats    //Requête s'il y a des auteurs    $sqlAlias = 'SELECT pe_alias_nom FROM pe_alias    JOIN pe_personne ON FK_id_pe_personne  = id_pe_personne     WHERE id_pe_personne=' .  $savant['id_pe_personne'];    $stmtAlias = $pdo->prepare($sqlAlias); // préparation de la requete sql    $stmtAlias->execute(); // execution avec affectation de la valeur :formInput    $resultAlias = $stmtAlias->fetchAll(PDO::FETCH_ASSOC); // stockage en tableau des résultats    ?>    <!-- Les informations affichées sur la card (ici, le nom, la date et l'alias du savant) -->    <div class="card mb-3 phyto_card">        <a style="text-decoration: none" href="./fiche?idSavant=<?= $savant['id_pe_personne'] ?>">            <div class="row g-0">                <div class="col-md-8">                    <div class="card-body">                        <h5 style="display: inline;"><?= $result[0]['pe_nom'] ?></h5>                        <!-- <span><?= viewDate($result[0],"pe_date_naissance"); ?> - <?= viewDate($result[0],"pe_date_mort"); ?></span> -->                        <?php if(isset($resultAlias) AND $resultAlias != []){                            print '<p class="card-text">';                            foreach ($resultAlias as $alias){                                print ' - '. $alias['pe_alias_nom'].'  ';                            }                            print '</p>';                        }?>                    </div>                </div>                <div class="col-md-4">                    <?php if ($result[0]['pe_image_url']) { ?>                        <img src="<?= $result[0]['pe_image_url']; ?>" alt="<?= $result[0]['pe_legende_image']; ?>"                             class="img-fluid rounded" style="float: right; height:160px; width=auto; ">                    <?php } ?>                </div>            </div>        </a>    </div><?php }} else { ?>    <h4 style="text-align: center">Aucun résultat.</h4><?php }