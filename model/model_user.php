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

        $query = 'SELECT `user_mail`, `user_password` FROM `user` WHERE `user_mail` = :user_mail ';

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

    public function addContact($object, $claim, $userId) 
    {
        $query = 'INSERT INTO `contact` (contact_object, contact_claim, id_user) VALUES (:contact_object, :contact_claim, :id_user)';

        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':contact_object', $object);
            $resultQuery->bindValue(':contact_claim', $claim);
            $resultQuery->bindValue(':id_user', $userId);
            $resultQuery->execute();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function updateVolunteer($firstname, $lastname, $age, $idUser)
    {
        $query = 'UPDATE user SET `volunteer_firstname` = :volunteer_firstname,  `volunteer_lastname` = :volunteer_lastname, `volunteer_age` = :volunteer_age WHERE `id_user` = :id_user';

        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':volunteer_firstname', $firstname);
            $resultQuery->bindValue(':volunteer_lastname', $lastname);
            $resultQuery->bindValue(':volunteer_age', $age);
            $resultQuery->bindValue(':id_user', $idUser);
            $resultQuery->execute();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function updateOrganization($name, $adress, $phone, $orgaMail, $siren, $desc, $activity, $idUser)
    {
        $query = 'UPDATE user SET `organization_name` = :organization_name, `organization_adress` = :organization_adress, `organization_phone` = :organization_phone, `organization_mail` = :organization_mail, `organization_siren` = :organization_siren, `organization_desc` = :organization_desc, `id_activity` = :id_activity WHERE `id_user` = :id_user';

        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':organization_name', $name);
            $resultQuery->bindValue(':organization_adress', $adress);
            $resultQuery->bindValue(':organization_phone', $phone);
            $resultQuery->bindValue(':organization_mail', $orgaMail);
            $resultQuery->bindValue(':organization_siren', $siren);
            $resultQuery->bindValue(':organization_desc', $desc);
            $resultQuery->bindValue(':id_activity', $activity);
            $resultQuery->bindValue(':id_user', $idUser);
            $resultQuery->execute();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function getUserMail($mail)
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

    public function getUserInfos($idUser)
    {
        $query = 'SELECT `volunteer_firstname`, `volunteer_lastname`, `volunteer_age`, `organization_name`, `organization_adress`, `organization_phone`, `organization_mail`, `organization_siren`, `organization_desc`, `activity_name` FROM `user` LEFT JOIN `activity` ON `user`.`id_activity` = `activity`.`id_activity` WHERE `id_user` = :id_user';

        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':id_user', $idUser);
            $resultQuery->execute();

            $resultUserInfos = $resultQuery->fetchAll();

            if ($resultUserInfos) {

                return $resultUserInfos;
            } else {

                return false;
            }
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function getOrgaInfos()
    {
        $query = 'SELECT `organization_name`, `organization_adress`, `organization_phone`, `organization_mail`, `organization_siren`, `organization_desc`, `activity_name` FROM `user` LEFT JOIN `activity` ON `user`.`id_activity` = `activity`.`id_activity` WHERE `id_usertypes` = 2';

        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->execute();

            $resultOrgaInfos = $resultQuery->fetchAll();

            if ($resultOrgaInfos) {

                return $resultOrgaInfos;
            } else {

                return false;
            }
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function getContactInfos()
    {
        $query = 'SELECT `user_mail`, `contact_object`, `contact_claim` FROM `contact` LEFT JOIN `user` ON `contact`.`id_user` = `user`.`id_user`';
        
        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->execute();

            $resultContactInfos = $resultQuery->fetchAll();

            if ($resultContactInfos) {

                return $resultContactInfos;
            } else {

                return false;
            }
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function deleteUserInfos($idUser)
    {
        $query = 'DELETE FROM `user` WHERE `id_user` = :id_user';

        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':id_user', $idUser);
            $resultQuery->execute();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
