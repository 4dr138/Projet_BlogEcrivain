<?php
//
class identification extends bddmanager
{

//    On récupère les variables pseudo et password pour les comparer aux valeurs des champs de la bdd
    public function connexion($pseudo, $password)
    {
        $bdd = $this->bdd;
        if (!empty($pseudo) && !empty($password))
            {
                // on recupère le password de la table qui correspond au login du visiteur
                $query = "SELECT * FROM t_authentification WHERE AUT_PSEUDO= :pseudo";
                $req = $bdd->prepare($query);
                $req->execute(array(':pseudo' => $pseudo));
                while ($row = $req->fetch(PDO::FETCH_ASSOC))
                    {
                        if ($row['AUT_PASSWORD'] != $_POST['password'])
                            {
                            return false;
                            }
                        else
                            {
            //                    On sécurise le login et le mdp
                                $_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);
                                $_POST['password'] = htmlspecialchars($_POST['password']);

            //                    On enregistre le login et le mdp en session
                                $_SESSION['pseudo'] = $_POST['pseudo'];
                                $_SESSION['password'] = $_POST['password'];

                                setcookie('pseudo', $_SESSION['pseudo'], time() + 365*24*3600, null, null, false, true);
                                setcookie('password', $_SESSION['password'], time() + 365*24*3600, null, null, false, true);


                                return true;
                             }
                     }
            }
    }
}

?>