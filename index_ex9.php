<?php

    require_once 'Model/pdo.php';

?>

<p> <strong>Prenom et nom des étudiants :</strong></p>
    <?php
        $sql = "SELECT prenom, nom FROM etudiants;";
        $result = $dbPDO->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        while ($row = $result->fetch()) {
            echo $row['prenom']. " ".$row['nom']. "<br>";
        }
    ?>

<p> <strong>Liste des classes </strong></p>
    <?php
        $sql = "SELECT libelle FROM classes;";
        $result = $dbPDO->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        while ($row = $result->fetch()) {
            echo $row['libelle']."<br>";
        }
    ?>

<p> <strong>Prenom et nom des professeurs :</strong></p>
    <?php
        $sql = "SELECT prenom, nom FROM professeurs;";
        $result = $dbPDO->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        while ($row = $result->fetch()) {
            echo $row['prenom']. " ".$row['nom']. "<br>";
        }
    ?>