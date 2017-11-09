

<!--On parcours le tableau créé par la méthode getBilletById pour récupérer les informations stockées dans les champs du billet-->
    <?php if(is_array($billet_unique)) : ?>
        <?php foreach ($billet_unique as $billet): ?>
            <article>
                <header>
                    <h1 class="titreBillet">Billet numéro <?php echo $billet->getbilId(); ?><br />
                    <br /><?php echo $billet->getbilTitre(); ?></h1>
                    <time><?= $billet->getbilDate(); ?></time>
                </header>
                <p><?= $billet->getbilContenu(); ?></p>
            </article>
            <hr />

<!--On parcours le tableau créé par la méthode getCommentaires pour récupérer les informations stockées dans les champs du commentaire (en utilisant l'id du billet)-->
<div id="commentaires">
    <header>
        <h3 id="titreReponses">Commentaires :</h3>
    </header>
    <?php if(is_array($commentaires)) : ?>
        <?php foreach ($commentaires as $commentaire): ?>
            <p><strong><?php echo $commentaire->getcomAuteur(); ?><br /></strong><?php echo $commentaire->getcomDate(); ?></p>
            <p><?php echo $commentaire->getcomContenu(); ?></p>

        <form name="formulaire" id="formulaire" action="index.php?action=signalerCommentaire" method="post">
            <!--        On récupère seulement l'id du commentaire pour le faire remonter dans l'administration -->
            <input type="hidden" name = 'params[id]'  value="<?php echo $commentaire->getcomId(); ?>"/>
            <input type="hidden" name = 'params[signalement]' value="<?php echo $commentaire->getComSignalement(); ?>" />
            <input id="submit_button" type="submit" value="Signaler" />
            <!--        Fin de la méthode delete-->
        </form>
        <hr />
        <?php endforeach; ?>
    <?php endif; ?>


<!--    On appelle la méthode de création de commentaire (addComment) qui récupère les informations du formulaire pour les faire passer dans la méthode du commentaireManager-->
        <p> Pour poster un commentaire, veuillez remplir ces champs :</p>
    <form id="commentaire_form" action='index.php?action=addComment' method="POST" enctype="multipart/form-data">
        <input type="hidden" name="params[id]" value="<?php echo $billet->getbilId(); ?>"/>
            <div class="row">
                <label for="auteur">Votre pseudo:</label><br />
                <input id="auteur" class="input" name="params[auteur]" type="text" value="" size="30" /><br />
            </div>
            <div class="row">
                <label for="commBillet">Votre commentaire:</label><br />
                <textarea id="commBillet" class="input" name="params[commBillet]" rows="7" cols="30"></textarea><br />
            </div>
        <input id="submit_button" type="submit" value="Envoyer" />
    </form>
        <?php endforeach ?>
     <?php endif; ?>
</div>

