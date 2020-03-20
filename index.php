<?php
    include 'db_connect.php';

    if(isset($_POST['submit'])){
        // Sorguyu hazırlayalım
        $SORGU = $DB->prepare("INSERT INTO records(salary, country)
        VALUES (:salary,:counrty)");
        $SORGU->bindParam(":salary", $_POST["salary"]);
        $SORGU->bindParam(":counrty",  $_POST["country"]);
        // SQL Sorgumuzu çalıştıralım
        $SORGU->execute();

        // Son eklenen kaydın kayıt numarasını alalım
        $YeniKayitID = $DB->lastInsertId();


        die();
    }
?>
