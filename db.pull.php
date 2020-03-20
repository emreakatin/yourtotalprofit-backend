<?php
    include 'db_baglan.php';

    // Çalıştırılacak sorgu
    $SORGU = $DB->prepare("SELECT *
    FROM menuler
    ORDER BY fiyat");
    // Sorguyu çalıştır
    $SORGU->execute();
    // Kayıtları Getir
    $KAYITLAR = $SORGU->fetchAll();

    // Çalıştırılacak sorgu
    $SORGU_PUAN = $DB->prepare("SELECT *
    FROM menuler
    ORDER BY puan DESC");
    // Sorguyu çalıştır
    $SORGU_PUAN->execute();
    // Kayıtları Getir
    $KAYITLAR_PUAN = $SORGU_PUAN->fetchAll();
?>
