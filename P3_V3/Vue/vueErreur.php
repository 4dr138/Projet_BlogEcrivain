<?php $titre = 'Erreur'; ?>

<?php ob_start() ?>
<p>Une erreur est survenue : <?= $msgErreur ?></p>
<?php $contenu = ob_get_clean(); ?>


<?php ob_start() ?>
<p>Une erreur est survenue : <?= $msgErreur ?></p>
<?php $bloc_droite = ob_get_clean(); ?>

<?php include_once(GABARIT . 'template.php'); ?>