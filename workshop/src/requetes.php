<?php
    require "connexion.php";
    session_start();

    function getConnexionEtu() {
        $p_requete = $p_base->query('SELECT Mail, mot_de_passe FROM etudiant');
			while($donnee = $p_requete->fetch()) {
            $mail = $donnee["Mail"];
            $mdp = $donnee["mot_de_passe"];
            }
            $p_requete->closeCursor();
    }
?>