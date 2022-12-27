<?php
    $conn = new mysqli("localhost", "root", "", "sinav");

    $id = $_POST["id"];

    $sil = "DELETE FROM gorusler WHERE id=".$id;
    $conn->query($sil);

    echo "Görüş Silinmiştir!";

    header("Refresh: 3; url=index.php");
?>