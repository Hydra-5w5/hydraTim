<?php
/**
 * «template part» gabarit categorie-cours permet d'afficher un article «block»
 * qui s'intègre dans la liste des cours qu'on accède avec category/cours
 */

$titre = get_the_title();
$sigle = substr($titre, 0, 7);
$session = strlen($sigle) >= 5 ? substr($sigle, 4, 1) : '';
$aTrouver = '(';
$postion = strpos(substr($titre, 7), $aTrouver);
$titre_long = substr($titre, 7, $postion);
$duree = substr($titre, strpos($titre, '('));

if ($session == 1){
    $class__session = 'session1';
}
else if ($session == 2){
    $class__session = 'session2';
}
else if ($session == 3){
    $class__session = 'session3';
}
else if ($session == 4){
    $class__session = 'session4';
}
else if ($session == 5){
    $class__session = 'session5';
}
else if ($session == 6){
    $class__session = 'session6';
}

?>

<article class="blocflex__cours <?= $class__session ?>" id="<?= $sigle ?>__cours">
    <div class="sigle"><h5><?= $sigle; ?></h5></div>
    <div class="titre__cours"><h6><?= $titre_long; ?></h6></div>
</article>

<div class="boite__modale" id="<?= $sigle ?>__boite"> 
    <div class="btn__fermer">x</div>
    <h2><?= $titre_long; ?></h2>
    <h4>description :</h4>
    <p><?= the_content() ?></p>
    <h4>équipements :</h4>
    <p><?php the_field('equipement'); ?></p>
</div>

<div class="superposition"></div>