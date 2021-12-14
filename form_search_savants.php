<form action="<?= $formLink ?>" method="GET">

    <!-- Définition des champs nécessaires à la recherche -->



    <div class="row g-3">

        <div class="col">



            <label class="col-form-label col-form-label-sm">Nom </label>

            <input type="text" class="form-control" placeholder="Nom" name="sa_nomPrincipal" id="pe_nom"

                   data-col="pe_nom" data-table="pe_personne" data-target-value="PE_NOM" autocomplete="off">

            <input type="hidden" name="PE_NOM" id="PE_NOM">



            <br>



            <label class="col-form-label col-form-label-sm">Confession</label>

            <select class="form-select" name="sa_confession" id="pe_confession" data-col="pe_confession"

                    data-table="pe_confession" autocomplete-list="off">

                <option selected value="">Toutes confessions</option>

            </select>



            <br>



            <label class="col-form-label col-form-label-sm">Formation</label>

            <input type="text" class="form-control" id="pe_form_discipline" name="sa_formation" placeholder="Formation"

                   data-col="pe_form_discipline" data-table="pe_form_discipline" data-target-value="PE_FORM_ID"

                   autocomplete="off">

            <input type="hidden" name="PE_FORM_ID" id="PE_FORM_ID">



            <br>



            <label class="col-form-label col-form-label-sm">Relation </label>

            <input type="text" class="form-control" placeholder="En relation avec" name="enRelAvec" id="pe_nom_rel"

                   data-col="pe_nom" data-table="pe_personne" data-target-value="ID_PE_IN_REL" autocomplete="off">

            <input type="hidden" name="ID_PE_IN_REL" id="ID_PE_IN_REL">



            <br>

            <label for="colFormLabelSm" class="form-label">Type de relation</label>

            <select class="form-select" name="pe_type_relation"  id="type_relation" data-col="pe_type_relation"

                    data-table="pe_type_relation" autocomplete-list="off">

                <option selected value>Type de relation</option>

            </select>

            <br>



            <div class="row">

                <div class="col-12 col-md-6">



                    <label for="colFormLabelSm" class="form-label">Date de naissance</label>

                    <br>

                    <input id="pe_nai_dateAvant" type="checkbox" class="form-check-input" name="pe_nai_dateAvant"

                           onclick="datesChecking('pe_nai_dateAvant','pe_nai_dateApres','pe_nai_dateEntre','pe_nai_divEt','pe_nai_divYearTwo')">

                    <label class="form-check-label" for="pe_dateAvant">Avant</label><br>



                    <input id="pe_nai_dateApres" type="checkbox" class="form-check-input" name="pe_nai_dateApres"

                           onclick="datesChecking('pe_nai_dateApres', 'pe_nai_dateAvant','pe_nai_dateEntre','pe_nai_divEt','pe_nai_divYearTwo')">

                    <label class="form-check-label" for="pe_nai_dateApres">Après</label><br>



                    <input type="checkbox" class="form-check-input" name="pe_nai_dateEntre" id="pe_nai_dateEntre"

                           onclick="addDatePeriodInput('pe_nai_dateAvant','pe_nai_dateApres','pe_nai_dateEntre','pe_nai_divEt','pe_nai_divYearTwo')">

                    <label class="form-check-label" for="pe_nai_dateEntre">Entre</label><br><br>



                    <div class="row mb">

                        <div class="col-sm-4"><input type="number" class="form-control" name="pe_nai_dateYearOne"

                                                     placeholder="AAAA"></div>

                        <div id="pe_nai_divEt" class="col-sm-1" style="display: none"><p>et</p></div>

                        <div id="pe_nai_divYearTwo" class="col-sm-4" style="display: none">

                            <input type="number"

                                   class="form-control"

                                   name="pe_nai_dateYearTwo"

                                   placeholder="AAAA">

                        </div>

                    </div>

                    <br><br>



                </div>

                <div class="col-12 col-md-6">



                    <label for="colFormLabelSm" class="form-label">Date de décès</label>



                    <br>

                    <input id="pe_deces_dateAvant" type="checkbox" class="form-check-input" name="pe_deces_dateAvant"

                           onclick="datesChecking('pe_deces_dateAvant','pe_deces_dateApres','pe_deces_dateEntre','pe_deces_divEt','pe_deces_divYearTwo')">

                    <label class="form-check-label" for="pe_deces_dateAvant">Avant</label><br>



                    <input id="pe_deces_dateApres" type="checkbox" class="form-check-input" name="pe_deces_dateApres"

                           onclick="datesChecking('pe_deces_dateApres', 'pe_deces_dateAvant','pe_deces_dateEntre','pe_deces_divEt','pe_deces_divYearTwo')">

                    <label class="form-check-label" for="pe_deces_dateApres">Après</label><br>



                    <input type="checkbox" class="form-check-input" name="pe_deces_dateEntre" id="pe_deces_dateEntre"

                           onclick="addDatePeriodInput('pe_deces_dateAvant','pe_deces_dateApres','pe_deces_dateEntre','pe_deces_divEt','pe_deces_divYearTwo')">

                    <label class="form-check-label" for="pe_deces_dateEntre">Entre</label><br><br>



                    <div class="row mb">

                        <div class="col-sm-4"><input type="number" class="form-control" name="pe_deces_dateYearOne"

                                                     placeholder="AAAA"></div>

                        <div id="pe_deces_divEt" class="col-sm-1" style="display: none"><p>et</p></div>

                        <div id="pe_deces_divYearTwo" class="col-sm-4" style="display: none"><input type="number"

                                                                                           class="form-control"

                                                                                           name="pe_deces_dateYearTwo"

                                                                                           placeholder="AAAA"></div>

                    </div>



                    <br>

                </div>

            </div>

        </div>



    </div>



    <input type="submit" class="btn phyto-btn form_button" value="Rechercher">



    <br>

    <br>

</form>