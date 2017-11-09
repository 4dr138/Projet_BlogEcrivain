<?php
//
class identification extends bddmanager
{

//    On récupère les variables pseudo et password pour les comparer aux valeurs des champs de la bdd
    public function connexion($pseudo, $password)
    {
        $bdd = $this->bdd;
        if(!empty($pseudo) && !empty($password)) {
            // on recupère le password de la table qui correspond au login du visiteur
            $query = "SELECT * FROM t_authentification WHERE AUT_PSEUDO= :pseudo";
            $req = $bdd->prepare($query);
            $req->execute(array(':pseudo'=>$pseudo));
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                if ($row['AUT_PASSWORD'] != $_POST['password']) {
                    echo 'Le nom d\'utilisateur et le mot de passe ne correspondent pas';
                } else {
                    // On ouvre la session
                    session_start();
//                    On redirige vers la page de back_end
                    header('Location: index.php?action=back_end');
                }
            }
        }
            else {
                echo 'Vous avez oublié de remplir un champ.';
            }
        }
}