<?php
    $conn = new mysqli("localhost", "root", "", "school");

    if($_POST['delete']){
        $userId = $_POST['userId'];
        $sec = $conn->query("SELECT * FROM uyeler WHERE userId = '$userId'")->fetch_array(MYSQLI_ASSOC);
        $silinecekDosya = $sec['pfp'];

        if(file_exists($_SERVER['DOCUMENT_ROOT'].'/phpDosya/upload/'.$silinecekDosya)){
            unlink($_SERVER['DOCUMENT_ROOT'].'/phpDosya/upload/'.$silinecekDosya);
        }

        $sql = "DELETE FROM uyeler WHERE userId = '$userId'";
        $conn->query($sql);

        echo '<div class="msg-info">User Deleted Successfully!</div>';
    }

    header("Refresh: 2; url=index.php");
?>