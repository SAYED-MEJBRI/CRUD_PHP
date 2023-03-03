<?php
class Connexion {
    private static $instance = null;
    private $connexion;

    private function __construct() {
        // informations de connexion à la base de données
        $serveur = "localhost";
        $utilisateur = "root";
        $mot_de_passe = "";
        $nom_base_de_donnees = "testphp";

        // connexion à la base de données en utilisant PDO
        try {
            $this->connexion = new PDO("mysql:host=$serveur;dbname=$nom_base_de_donnees", $utilisateur, $mot_de_passe);
            // configuration des options PDO
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    public static function getInstance() {
        if(self::$instance == null) {
            self::$instance = new Connexion();
        }
        return self::$instance->connexion;
    }
}
?>