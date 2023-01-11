<?php
    $conn = new mysqli("localhost", "root", "", "school");

    if(isset($_POST['pfpUpdate']) && $_FILES['new_pfp']['error'] == 0){
        $dosyaAdi = uniqid();
        $dizi = explode(".", $_FILES['new_pfp']['name']);
        $maxFileLimit = 1024 * 1024 * 5;
        
        if($_FILES['new_pfp']['size'] > $maxFileLimit){
            echo "Dosya Boyutu Çok Büyük, Lütfen 5Mb'dan Küçük Bir Dosya Yükleyin!";
        }else{
            $uzanti = $dizi[count($dizi) - 1];
            $izinliUzantilar = ["image/png", "image/jpeg", "image/gif"];
            $type = ($_FILES['new_pfp']['type']);

            if(in_array($type, $izinliUzantilar)){
                $path = $dosyaAdi.".".$uzanti;

                move_uploaded_file($_FILES['new_pfp']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/phpDosya/upload/".$path);
            }else{
                echo "Dosya Tipi Uygun Değil!";
            }
        }
        $userId = $_POST['userId'];
        $conn->query("UPDATE uyeler SET pfp='".$path."' WHERE userId='$userId'");

        echo "Profile Picture Updated Successfully!";
    }

    header("Refresh: 2; url=index.php");
?>