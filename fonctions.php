<?php
    include "connexion.php";


    function pays ($connexion) {
        $rep = $connexion->prepare(
            'SELECT *
             FROM pays'
        );
        $rep->execute();
        return $rep->fetchALL(PDO::FETCH_ASSOC);
    }
?>