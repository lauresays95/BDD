<?php $title = 'Phytopinax - Recherche '.$sectionName.' '; ?>

<?php ob_start(); ?>

<main class="corpsPage">

    <?php include $formUrl;?>

</main>

<?php $content = ob_get_clean(); ?>

<?php require('../view/template_with_title.php'); ?>
