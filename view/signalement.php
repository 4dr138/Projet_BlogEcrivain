
<!--On parcours le tableau créé par la méthode getCommentaires pour récupérer les informations stockées dans les champs du commentaire (en utilisant l'id du billet)-->
<div id="commentaires">
    <?php if(is_array($commSignale)) :?>
        <?php foreach ($commSignale as $commentaire):?>
            <header>
                <h3 id="titreReponses">Commentaires :</h3>
            </header>
                <p><strong><?php echo $commentaire->getcomAuteur(); ?><br /></strong><?php echo $commentaire->getcomDate(); ?></p>
                <p><?php echo $commentaire->getcomContenu(); ?></p>
            <form name="formulaire" id="formulaire" action="index.php?action=deleteCommentaireSignale" method="post">
                <!--        On récupère seulement l'id du commentaire pour le faire remonter dans l'administration -->
                <input type="hidden" name = 'params[id]'  value="<?php echo $commentaire->getcomId(); ?>"/>
                <input id="submit_button" type="submit" value="Supprimer" />
                <!--        Fin de la méthode delete-->
            </form>
            <hr />
        <?php endforeach; ?>
    <?php endif; ?>

<!--    Si il n'y a pas de commentaires, le message de session est retourné -->
    <?php if(isset($_SESSION['message'])) echo $_SESSION['message']; unset($_SESSION['message']); ?>
</div>

