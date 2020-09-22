<?php

class Contact

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

    public function getContactInfos()
    {
        $query = 'SELECT `user_mail`, `contact_object`, `contact_claim`, `id_contact`, `id_user` 
        FROM `contact`
        LEFT JOIN `user` 
        ON `contact`.`id_user` = `user`.`id_user`';
        
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

    public function getContactInfoById($idContact)
    {
        $query = 'SELECT `user_mail`, `contact_object`, `contact_claim`, `id_contact`, `id_user` 
        FROM `contact`
        LEFT JOIN `user` 
        ON `contact`.`id_user` = `user`.`id_user`
        WHERE `id_contact` = :id_contact';
        
        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue('id_contact', $idContact);
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

    public function deleteContact($idContact)
    {
        $query = 'DELETE FROM `contact` WHERE `id_contact` = :id_contact';

        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':id_contact', $idContact);
            $resultQuery->execute();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}