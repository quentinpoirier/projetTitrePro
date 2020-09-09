<?php

class Advert

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

    public function getAdvert()
    {
        $query = 'SELECT `id_advert`, `advert_title`, `advert_object`, `advert_desc`, `advert_date`, `user_mail`, `volunteer_firstname`, `volunteer_lastname`, `organization_name`, `organization_mail`, `activity_name`, `id_usertypes`
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

    public function deleteAdvert($idAdvert)
    {
        $query = 'DELETE FROM `advert` WHERE `id_advert` = :id_advert';

        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':id_advert', $idAdvert);
            $resultQuery->execute();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
