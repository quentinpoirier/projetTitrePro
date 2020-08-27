<?php

class User

{
    private $bdd;

    public function __construct()
    {
        try {
            $this->bdd = new PDO('mysql:host=localhost;dbname=projetpro;charset=utf8', 'root', '');
            // Activation des erreurs PDO
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // mode de fetch par défaut : FETCH_ASSOC / FETCH_OBJ / FETCH_BOTH
            $this->bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function verifyMailExist($mail)
    {
        $query = 'SELECT `user_mail` FROM user WHERE `user_mail` = :userMail ';

        try {
            // Permet de vérifier si le Mail est déja présent dans la base de donnée ou non //
            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':userMail', $mail);
            $resultQuery->execute();
            $count = $resultQuery->rowCount();
            if ($count == 0) {
                // Si mail existe dans bdd = false //
                return false;
            } else {
                // Si mail existe pas dans bdd = true //
                return true;
            }
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function VerifyLogin($mail, $password)
    {

        $query = 'SELECT `user_mail`, `user_password` FROM user WHERE `user_mail` = :user_mail ';

        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':user_mail', $mail);
            $resultQuery->execute();

            $resultUser = $resultQuery->fetch();

            if ($resultUser) {

                return password_verify($password, $resultUser['user_password']);
            } else {

                return false;
            }
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function addUser($mail, $password, $idUsertypes)
    {

        $query = 'INSERT INTO user (user_mail, user_password, id_usertypes, user_validation) VALUES (:user_mail, :user_password, :id_usertypes, 0)';

        try {
            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':user_mail', $mail);
            $resultQuery->bindValue(':user_password', $password);
            $resultQuery->bindValue(':id_usertypes', $idUsertypes);
            $resultQuery->execute();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function GetUserInfos($mail)
    {
    
        $query = 'SELECT * FROM user WHERE `user_mail` = :user_mail '; 

        try {
         
            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':user_mail', $mail);
            $resultQuery->execute();
            
            $resultUser = $resultQuery->fetch();
            
            if ($resultUser) {
                
             return $resultUser;
               
            } else {
               
               return false;

            }

        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

    }

}
