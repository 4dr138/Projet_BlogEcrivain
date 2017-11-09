
<!--Formulaire de contact dont les données sont envoyées au fichier formulairecontact.php-->
<div id ='contenu'>
    <h1>Formulaire de contact :</h1>
        <form method="post" action="index.php?action=contact">
            <p>Votre nom et prénom  <span style="color:#ff0000;">*</span>: <br /><input type="text" name="nom" size="30" /></p>
            <p>Votre email: <span style="color:#ff0000;">*</span>: <br /><input type="text" name="email" size="30" /></p>
            <p>Message <span style="color:#ff0000;">*</span>:</p>
            <textarea name="message" cols="60" rows="10"></textarea>
            <p>Combien font 1+3: <span style="color:#ff0000;">*</span>: <input type="text" name="captcha" size="2" /></p>
            <p><input type="submit" name="submit" value="Envoyer" /></p>
        </form>
</div>

<div id ='bloc_droite'>
    <div class="photo_contact">
        <img src='assets/img_contact.jpg' alt="img_contact" />
    </div>
</div>
