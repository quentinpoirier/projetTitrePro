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

    /**
     * Méthode pour vérifier si le mail de l'utilisateur existe déjà au moment de son inscription
     * @param type string email du user
     * @return type array when succcess
     * @return type booleen when fail
     */
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

    /**
     * Méthode pour vérifier si le mail et le password de l'utilisateur existent lors de la connection
     * @param type integer password du user
     * @param type string mail du user
     * @return type array when succcess
     * @return type booleen when fail
     */
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

    /**
     * Méthode pour ajouter un utilisateur lors de son inscription
     */
    public function addUser($mail, $password, $idUsertypes)
    {

        $query = 'INSERT INTO user (user_mail, user_password, id_usertypes, user_validate, user_moderator) VALUES (:user_mail, :user_password, :id_usertypes, 0, 0)';

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

    /**
     * Méthode pour publié un message destiné au staff
     * @param type integer id du user qui poste le message
     */
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

    /**
     * Méthode pour modifier les donnée d'un bénévole connecté dans son espace personnel
     * @param type integer id du user
     */
    public function updateVolunteer($firstname, $lastname, $age, $idUser)
    {
        $query = 'UPDATE user SET `volunteer_firstname` = :volunteer_firstname,  `volunteer_lastname` = :volunteer_lastname, `volunteer_age` = :volunteer_age
        WHERE `id_user` = :id_user';

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

    /**
     * Méthode pour modifier les donnée d'une association connecté dans son espace personnel
     * @param type integer id du user
     */
    public function updateOrganization($name, $adress, $phone, $orgaMail, $siren, $desc, $idUser)
    {
        $query = 'UPDATE user SET `organization_name` = :organization_name, `organization_adress` = :organization_adress, `organization_phone` = :organization_phone, `organization_mail` = :organization_mail, `organization_siren` = :organization_siren, `organization_desc` = :organization_desc 
        WHERE `id_user` = :id_user';

        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':organization_name', $name);
            $resultQuery->bindValue(':organization_adress', $adress);
            $resultQuery->bindValue(':organization_phone', $phone);
            $resultQuery->bindValue(':organization_mail', $orgaMail);
            $resultQuery->bindValue(':organization_siren', $siren);
            $resultQuery->bindValue(':organization_desc', $desc);
            $resultQuery->bindValue(':id_user', $idUser);
            $resultQuery->execute();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    /**
     * Méthode pour valider le profil d'un utilisateur dans l'espace de modération
     * @param type integer id du user
     */
    public function updateUserValidate($idUser)
    {
        $query = 'UPDATE user SET `user_validate` = 1 WHERE `id_user` = :id_user';

        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':id_user', $idUser);
            $resultQuery->execute();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    /**
     * Méthode pour promouvoir un utilisateur en modérateur
     * @param type integer id du user
     */
    public function updateUserModerator($idUser)
    {
        $query = 'UPDATE `user` SET `user_moderator` = 1 WHERE `user`.`id_user` = :id_user';

        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':id_user', $idUser);
            $resultQuery->execute();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    /**
     * Méthode pour rétrograder un modérateur en simple utilisateur
     * @param type interger id du user
     * @return type array when succcess
     * @return type booleen when fail
     */
    public function updateUserModeratorLess($idUser)
    {
        $query = 'UPDATE `user` SET `user_moderator` = 0 WHERE `user`.`id_user` = :id_user';

        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':id_user', $idUser);
            $resultQuery->execute();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    /**
     * Méthode pour récupérer le mail de l'utilisateur connecté pour lancé sa session
     * @param type string email du user
     * @return type string when succcess
     * @return type booleen when fail
     */
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

    /**
     * Méthode pour récupérer les infos des utilisateur et les afficher
     * @return type array when succcess
     * @return type booleen when fail
     */
    public function getUserInfos()
    {
        $query = 'SELECT `user_mail`, `volunteer_firstname`, `volunteer_lastname`, `volunteer_age`, `organization_name`, `organization_adress`, `organization_phone`, `organization_mail`, `organization_siren`, `organization_desc`, `activity_name`, `id_usertypes`, `id_user`, `user_validate`, `user_moderator` 
        FROM `user` 
        LEFT JOIN `activity` 
        ON `user`.`id_activity` = `activity`.`id_activity`';

        try {

            $resultQuery = $this->bdd->prepare($query);
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

    /**
     * Méthode pour récupérer les infos d'un utilisateur et les afficher en détail
     * @param type integer id du user
     * @return type array when succcess
     * @return type booleen when fail
     */
    public function getUserInfosById($idUser)
    {
        $query = 'SELECT `volunteer_firstname`, `volunteer_lastname`, `volunteer_age`, `organization_name`, `organization_adress`, `organization_phone`, `organization_mail`, `organization_siren`, `organization_desc`, `activity_name` 
        FROM `user` 
        LEFT JOIN `activity` 
        ON `user`.`id_activity` = `activity`.`id_activity` 
        WHERE `id_user` = :id_user';

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

    /**
     * Méthode pour récupérer les infos des utilisateurs si se sont des associations
     * @param type integer id_usertypes du user
     * @return type array when succcess
     * @return type booleen when fail
     */
    public function getOrgaInfos()
    {
        $query = 'SELECT `organization_name`, `organization_adress`, `organization_phone`, `organization_mail`, `organization_siren`, `organization_desc`, `activity_name`, `id_user`, `user_validate` 
        FROM `user` 
        LEFT JOIN `activity`
        ON `user`.`id_activity` = `activity`.`id_activity` 
        WHERE `id_usertypes` = 2';

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

    /**
     * Méthode pour récupérer les infos d'un utilisateur et les afficher en détail
     * @param type integer id du user
     * @return type array when succcess
     * @return type booleen when fail
     */
    public function getInfosById($idUser)
    {
        $query = 'SELECT `user_mail`, `volunteer_firstname`, `volunteer_lastname`, `volunteer_age`, `organization_name`, `organization_adress`, `organization_phone`, `organization_mail`, `organization_siren`, `organization_desc`, `activity_name`, `id_usertypes`, `id_user` 
        FROM `user`
        LEFT JOIN `activity` 
        ON `user`.`id_activity` = `activity`.`id_activity`
        WHERE id_user = :id_user';

        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue('id_user', $idUser);
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

    /**
     * Méthode pour supprimer un utilisateur dans l'espace modération et dans son espaces personnel s'il est connecté
     * @param type integer id du user
     */
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
