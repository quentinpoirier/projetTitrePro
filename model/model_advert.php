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
}
