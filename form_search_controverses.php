<form action="<?= $formLink ?>" method="GET">

    <!-- Définition des champs nécessaires à la recherche -->

    <div class="row g-3">

        <div class="col">

            <label for="colFormLabelSm" class="form-label">Type de controverse</label>

            <input type="text" class="form-control" name="contr_type" placeholder="Type de controverse" id="controverse_nom"
            
            data-col="controverse_nom" data-table="controverse" data-target-value="CONTROVERSE_NOM" autocomplete="off">

        <input type="hidden" name="CONTROVERSE_NOM" id="CONTROVERSE_NOM">



            <br>

            <label for="colFormLabelSm" class="form-label">Taxon ancien</label>

            <input type="text" class="form-control" name="contr_taxon" placeholder="Taxon" id="ta_nom_ancien"

                   data-col="ta_nom_ancien" data-table="ta_taxon_ancien" data-target-value="ID_TA_NOM" autocomplete="off">

            <input type="hidden" name="ID_TA_NOM" id="ID_TA_NOM">



            <br>

            <label for="colFormLabelSm" class="form-label">Personne</label>

            <input type="text" class="form-control" name="contr_personne" placeholder="Personne" id="pe_nom"

                   data-col="pe_nom" data-table="pe_personne" data-target-value="ID_PERSONNE_NOM" autocomplete="off">

            <input type="hidden" name="ID_PERSONNE_NOM" id="ID_PERSONNE_NOM">



            <br>


            <label for="colFormLabelSm" class="form-label">Texte</label>

            <input type="text" class="form-control" name="contr_texte" placeholder="Texte" id="texte_titre"

                   data-col="texte_titre" data-table="texte" data-target-value="ID_TEXTE_NOM" autocomplete="off">

            <input type="hidden" name="ID_TEXTE_NOM" id="ID_TEXTE_NOM">



            <br>

        </div>

    </div>



    <input type="submit" class="btn phyto-btn form_button" value="Rechercher">

</form>

