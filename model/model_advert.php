<?php

class Advert

{
    private $bdd;

    /**
     * @param method __construct() qui fait le lien avec la base de données
     */
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
     * Méthode pour publier une annonce par un utilisateur
     */
    public function addAdvert($title, $object, $desc, $date, $user)
    {
        $query = 'INSERT INTO `advert` (advert_title, advert_object, advert_desc, advert_date, advert_validate, id_user)
        VALUES (:advert_title, :advert_object, :advert_desc, :advert_date, 0, :id_user)';

        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':advert_title', $title);
            $resultQuery->bindValue(':advert_object', $object);
            $resultQuery->bindValue(':advert_desc', $desc);
            $resultQuery->bindValue(':advert_date', $date);
            $resultQuery->bindValue(':id_user', $user);
            $resultQuery->execute();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    /**
     * Méthode pour récuperer les annonces publiées
     * @return type array when succcess
     * @return type booleen when fail
     */
    public function getAdvert()
    {
        $query = 'SELECT `id_advert`, `advert_title`, `advert_object`, `advert_desc`, `advert_date`, `user_mail`, `volunteer_firstname`, `volunteer_lastname`, `organization_name`, `organization_mail`, `activity_name`, `id_usertypes`, `advert_validate`
        FROM `advert`
        LEFT JOIN `user`
        ON `advert`.`id_user` = `user`.`id_user`
        LEFT JOIN `activity`
        ON `user`.`id_activity` = `activity`.`id_activity`';

        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->execute();

            $resultAdvertInfos = $resultQuery->fetchAll();

            if ($resultAdvertInfos) {

                return $resultAdvertInfos;
            } else {

                return false;
            }
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    /**
     * Méthode pour récuperer une annonce publié par un utilisateur pour afficher le détail de celle-ci
     * @param type integer id du user qui a posté l'annonce
     * @return type array when succcess
     * @return type booleen when fail
     */
    public function getAdvertById($idAdvert)
    {
        $query = 'SELECT `id_advert`, `advert_title`, `advert_object`, `advert_desc`, `advert_date`, `user_mail`, `volunteer_firstname`, `volunteer_lastname`, `organization_name`, `organization_mail`, `activity_name`, `id_usertypes`
        FROM `advert`
        LEFT JOIN `user`
        ON `advert`.`id_user` = `user`.`id_user`
        LEFT JOIN `activity`
        ON `user`.`id_activity` = `activity`.`id_activity`
        WHERE `id_advert` = :id_advert';

        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue('id_advert', $idAdvert);
            $resultQuery->execute();

            $resultAdvertInfos = $resultQuery->fetchAll();

            if ($resultAdvertInfos) {

                return $resultAdvertInfos;
            } else {

                return false;
            }
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    /**
     * Méthode pour récuperer une annonce publié par l'utilisateur connecté et l'afficher dans son espace personnel
     * @param type integer id du user qui a posté l'annonce
     * @return type array when succcess
     * @return type booleen when fail
     */
    public function getAdvertByUser($idUser)
    {
        $query = 'SELECT `id_advert`, `advert_title`, `advert_object`, `advert_desc`, `advert_date`, `user_mail`, `volunteer_firstname`, `volunteer_lastname`, `organization_name`, `organization_mail`, `activity_name`, `id_usertypes`
        FROM `advert`
        LEFT JOIN `user`
        ON `advert`.`id_user` = `user`.`id_user`
        LEFT JOIN `activity`
        ON `user`.`id_activity` = `activity`.`id_activity`
        WHERE `advert`.`id_user` = :id_user';

        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':id_user', $idUser);
            $resultQuery->execute();

            $resultAdvertInfos = $resultQuery->fetchAll();

            if ($resultAdvertInfos) {

                return $resultAdvertInfos;
            } else {

                return false;
            }
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    /**
     * Méthode pour modifier une annonce publié par l'utilisateur connecté dans son espace personnel
     * @param type integer id de l'advert modifié
     */
    public function updateAdvert($title, $object, $desc, $date, $idAdvert)
    {
        $query = 'UPDATE advert 
        SET `advert_title` = :advert_title, `advert_object` = :advert_object, `advert_desc` = :advert_desc, `advert_date` = :advert_date, `advert_validate` = 0
        WHERE `advert`.`id_advert` = :id_advert';

        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':advert_title', $title);
            $resultQuery->bindValue(':advert_object', $object);
            $resultQuery->bindValue(':advert_desc', $desc);
            $resultQuery->bindValue(':advert_date', $date);
            $resultQuery->bindValue(':id_advert', $idAdvert);
            $resultQuery->execute();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    /**
     * Méthode pour valider une annonce publié par un utilisateur depuis l'espace de modération
     * @param type integer id de l'advert modifié
     */
    public function updateAdvertValidate($idAdvert)
    {
        $query = 'UPDATE advert SET `advert_validate` = 1 WHERE `id_advert` = :id_advert';

        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':id_advert', $idAdvert);
            $resultQuery->execute();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    /**
     * Méthode pour supprimer une annonce depuis l'espace modération et depuis l'espace personnel de l'utilisateur connecté
     * @param type integer id de l'advert
     */
    public function deleteAdvert($idAdvert)
    {
        $query = 'DELETE FROM `advert` WHERE `advert`.`id_advert` = :id_advert';

        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':id_advert', $idAdvert);
            $resultQuery->execute();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
