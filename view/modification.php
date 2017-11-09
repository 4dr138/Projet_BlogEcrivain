
<!--On récupère les billets à l'aide du tableau créé par la méthode getbilletbyid-->
<?php if(is_array($billet_unique))
    foreach ($billet_unique as $billet): ?>

    <!--    Premier formulaire qui fait appel à la méthode update-->
        <form name="formulaire" id="formulaire" action="index.php?action=updateBillet" method="post">
            <label for="texte" ><br><strong>Article à modifier : </strong> <br></label><br />

        <!--On récupère les données (id/contenu/titre) de chaque billet pour les intégrer à l'éditeur TinyMCE-->
            <label for="titre" ><strong>Titre de l'épisode <?php echo $billet->getbilId(); ?>: <input type = "text" rows="5" class="input" size="50" style="height:25px;"
            name = "params[titre]" id = "titre" value = "<?php echo $billet->getbilTitre(); ?>"</strong></label>

        <!--    Champ caché pour récupérer l'id-->
            <input type="hidden" name = 'params[id]'  value="<?php echo $billet->getbilId(); ?>"/>
            <br /><br />

        <!--    Récupération du contenu-->
            <textarea id="texte" class="input" name="params[contenu]" rows="25" ><?php echo $billet->getbilContenu(); ?></textarea>
            <br />
            <input id="submit_button" type="submit" value="Modifier" />
        <!--    Fermeture du formulaire = fin de l'appel à la méthode update-->
        </form>

        <!--    Second formulaire qui appelle la méthode delete-->
            <form name="formulaire" id="formulaire" action="index.php?action=deleteBillet" method="post">
        <!--        On récupère seulement l'id du billet pour supprimer la ligne correspondante dans la table-->
                <input type="hidden" name = 'params[id]'  value="<?php echo $billet->getbilId(); ?>"/>
                <input id="submit_button" type="submit" value="Supprimer" />
        <!--        Fin de la méthode delete-->
            </form>
    <!--    Fermeture du parcours de données du tableau-->
    <?php endforeach ?>

<!--On parcours le tableau créé par la méthode getCommentaires pour récupérer les informations stockées dans les champs du commentaire (en utilisant l'id du billet)-->
<div id="commentaires">
    <header>
        <h3 id="titreReponses">Commentaires :</h3>
    </header>
    <?php if(is_array($commentaires)) : ?>
       <?php foreach ($commentaires as $commentaire): ?>
            <p><strong><?php echo $commentaire->getcomAuteur(); ?><br /></strong><?php echo $commentaire->getcomDate(); ?></p>
            <p><?php echo $commentaire->getcomContenu(); ?></p>
            <!--    formulaire qui appelle la méthode delete-->
            <form name="formulaire" id="formulaire" action="index.php?action=deleteCommentaire" method="post">
                <!--        On récupère seulement l'id du commentaire pour supprimer la ligne correspondante dans la table-->
                <input type="hidden" name = 'params[id]'  value="<?php echo $commentaire->getcomId(); ?>"/>
                <input id="submit_button" type="submit" value="Supprimer" />
                <!--        Fin de la méthode delete-->
            </form>
            <hr />
        <?php endforeach; ?>
    <?php endif; ?>
</div>


