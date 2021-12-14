<form action="<?= $formLink ?>" method="GET">

    <!-- Passage du paramètre de la page de destination pour le router -->

    <input type="hidden" name="page" value="result_plantes_modernes"/>


    <div class="row g-3">

        <!-- Préparation des champs pour la recherche -->

        <div class="col">

            <label for="colFormLabelSm" class="form-label">Nom</label>

            <input type="text" class="form-control" name="nom" placeholder="Nom" id="pm_nom"

                data-col="pm_nom" data-table="pm_plante_moderne" data-target-value="PM_NOM" autocomplete="off">

            <input type="hidden" name="PM_NOM" id="PM_NOM">


            <br>

            <label for="colFormLabelSm" class="form-label">Image</label>

            <input type="text" class="form-control" name="image" placeholder="Nom" id="pm_nom"

                   data-col="pm_image_url" data-table="pm_plante_moderne" data-target-value="PM_IMAGE" autocomplete="off">

            <input type="hidden" name="PM_IMAGE" id="PM_IMAGE">


            <br>

            <label for="colFormLabelSm" class="form-label">Légende de l'image</label>

            <input type="text" class="form-control" name="legende" placeholder="Legende" id="pm_legende_image"

                   data-col="pm_legende_image" data-table="pm_plante_moderne" data-target-value="PM_LGENDE_IMAGE" autocomplete="off">

            <input type="hidden" name="PM_LEGENDE_IMAGE" id="PM_LEGENDE_IMAGE">


            <br>

            <label for="colFormLabelSm" class="form-label">Diagnose</label>

            <input type="text" class="form-control" name="diagnose" placeholder="Diagnose" id="pm_diagnose"

                   data-col="pm_diagnose" data-table="pm_plante_moderne" data-target-value="PM_DIAGNOSE" autocomplete="off">

            <input type="hidden" name="PM_DIAGNOSE" id="PM_DIAGNOSE">


            <br>

            <label for="colFormLabelSm" class="form-label">Identifiant</label>

            <input type="text" class="form-control" name="identifiant" placeholder="Nom" id="pm_identifiant_reference"

                   data-col="pm_identifiant_reference" data-table="pm_plante_moderne" data-target-value="PM_IDENTIFIANT_REFERENCE" autocomplete="off">

            <input type="hidden" name="PM_IDENTIFIANT_REFERENCE" id="PM_IDENTIFIANT_REFERENCE">


            <br>



            <label for="colFormLabelSm" class="form-label">Espèce</label>

            <input type="text" class="form-control" name="espece" placeholder="Espèce" id="pm_espece_nom"
            
                data-col="pm_espece_nom" data-table="pm_espece" data-target-value="PM_ESPECE_NOM" autocomplete="off">

            <input type="hidden" name="PM_ESPECE_NOM" id="PM_ESPECE_NOM">



            <br>



            <label for="colFormLabelSm" class="form-label">Sous-Espèce</label>

            <input type="text" class="form-control" name="sous_espece" placeholder="Sous-Espèce" id="pm_sous_espece_nom"
            
                data-col="pm_sous_espece_nom" data-table="pm_sous_espece" data-target-value="PM_SOUS_ESPECE_NOM" autocomplete="off">

            <input type="hidden" name="PM_SOUS_ESPECE_NOM" id="PM_SOUS_ESPECE_NOM">



        </div>



        <div class="col">



            <label for="colFormLabelSm" class="form-label">Variété</label>

            <input type="text" class="form-control" name="variete" placeholder="Variété" id="pm_variete_nom"
            
                data-col="pm_variete_nom" data-table="pm_variete" data-target-value="PM_VARIETE_NOM" autocomplete="off">

            <input type="hidden" name="PM_VARIETE_NOM" id="PM_VARIETE_NOM">



            <br>



            <label for="colFormLabelSm" class="form-label">Cultivar</label>

            <input type="text" class="form-control" name="cultivar" placeholder="Cultivar" id="pm_cultivar_nom"
            
                data-col="pm_cultivar_nom" data-table="pm_cultivar" data-target-value="PM_CULTIVAR_NOM" autocomplete="off">

            <input type="hidden" name="PM_CULTIVAR_NOM" id="PM_CULTIVAR_NOM">



            <br>


            <label for="colFormLabelSm" class="form-label">Referentiel</label>

            <input type="text" class="form-control" name="referentiel" placeholder="Referentiel" id="pm_referentiel_nom"

                   data-col="pm_referentiel_nom" data-table="pm_referentiel" data-target-value="PM_REFERENTIEL_NOM" autocomplete="off">

            <input type="hidden" name="PM_REFERENTIEL_NOM" id="PM_REFERENTIEL_NOM">

<br>

            <label for="colFormLabelSm" class="form-label">Biotope</label>

            <select class="form-select" name="biotope"  id="biotope" data-col="pm_biotope"

                data-table="pm_plante_moderne" autocomplete-list="off">

                <option selected value>Tout biotope</option>

                <input type="hidden" name="PM_BIOTOPE_NOM" id="PM_BIOTOPE_NOM">



            </select>



            <br>



            <label for="colFormLabelSm" class="form-label">Toxicité</label>

            <div class="row">

                <div class="col">

                    <div class="form-check">

                        <input class="form-check-input" type="radio" aria-label="pm_toxic_oui" name="toxicite">

                        <label class="form-check-label">Oui</label>

                    </div>

                </div>



                <div class="col">

                    <div class="form-check">

                        <input class="form-check-input" type="radio" aria-label="pm_toxic_non" name="toxicite">

                        <label class="form-check-label">Non</label>

                    </div>

                </div>

            </div>



        </div>

    </div>



    <input type="submit" class="btn phyto-btn form_button" value="Rechercher">

</form>