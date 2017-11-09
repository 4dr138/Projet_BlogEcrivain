   
<?php foreach ($contenu as $contenu_central): ?>
<!-- Formulaire de contact -->
    <p> Pour toute demande d'informations, ou simplement pour laisser un petit message à l'auteur, merci de remplir ce petit formulaire : </p>
       <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
            <div class="row">
              <label for="name">Votre nom:</label><br />
               <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
            </div>
            <div class="row">
              <label for="email">Votre email:</label><br />
               <input id="email" class="input" name="email" type="text" value="" size="30" /><br />
            </div>
            <div class="row">
              <label for="message">Votre message:</label><br />
                <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
            </div>
               <input id="submit_button" type="submit" value="Envoyer" />
            </form>     

<?php endforeach ?>


  <!--       <?php ob_start(); ?>
          <div class="photo_contact">
           <img src='Contenu/img_contact.jpg' alt="img_contact" />
          </div> 
        <?php $bloc_droite = ob_get_clean(); ?> -->