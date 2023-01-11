<?php
    $conn = new mysqli("localhost", "root", "", "school");

    if($_POST){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $path = "";

        if($_FILES['pfp']['error'] == 0){
            $klasorAdi = "upload";

            if(!is_dir($_SERVER['DOCUMENT_ROOT']."/phpDosya/".$klasorAdi)){
                mkdir($_SERVER['DOCUMENT_ROOT']."/phpDosya/".$klasorAdi, 0777, true);
            }

            $dosyaAdi = uniqid();
            $dizi = explode(".", $_FILES['pfp']['name']);
            $maxFileLimit = 1024 * 1024 * 5;
            
            if($_FILES['pfp']['size'] > $maxFileLimit){
                echo "Dosya Boyutu Çok Büyük, Lütfen 5Mb'dan Küçük Bir Dosya Yükleyin!";
            }else{
                $uzanti = $dizi[count($dizi) - 1];
                $izinliUzantilar = ["image/png", "image/jpeg", "image/gif"];
                $type = ($_FILES['pfp']['type']);

                if(in_array($type, $izinliUzantilar)){
                    $path = $dosyaAdi.".".$uzanti;

                    move_uploaded_file($_FILES['pfp']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/phpDosya/".$klasorAdi."/".$path);
                }else{
                    echo "Dosya Tipi Uygun Değil!";
                }
            }
        }
        $conn->query("INSERT INTO uyeler (username, email, country, pfp) VALUES ('$username', '$email', '$country', '$path')") or die("Error!");
    }

    echo "New User Registered Successfully!";

    header("Refresh: 2; url=index.php");
?>