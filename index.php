<?php
    include 'db_baglan.php';

    if(isset($_GET["ara"])) {
        $ARANANAD = $_GET["ara"];
        // Çalıştırılacak sorgu
        $SORGU = $DB->prepare("SELECT * FROM records
            WHERE adisoyadi LIKE '%$ARANANAD%' ");
    } else {
        // Çalıştırılacak sorgu
        $SORGU = $DB->prepare("SELECT * FROM records");
    }
    // Sorguyu çalıştır
    $SORGU->execute();
    // Kayıtları Getir
    $KAYITLAR = $SORGU->fetchAll();
?>
