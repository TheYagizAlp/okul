<?php
    $conn = new mysqli("localhost", "root", "", "sinav");

    $isim = $_POST["isim"];
    $email = $_POST["email"];
    $gorus = $_POST["gorus"];
    $tarih = date("d-m-Y");

    $sql  = "INSERT INTO gorusler (isim, email, gorus, tarih)
    VALUES ('".$isim."', '".$email."', '".$gorus."', '".$tarih."')";

    $conn->query($sql);

    echo "Kayıt İşlemi Başarılı!";

    header("Refresh: 3; url=index.php");
?>