<?php
    $conn = new mysqli("localhost", "root", "", "sinav");
    $sec = "SELECT * FROM gorusler";
    $gorusler = $conn->query($sec)->fetch_all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yağız Alp Sürmeneli - 1109</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="form">
            <h1 class="text-center">Görüşler Formu</h1><hr>
            <form action="kayit.php" method="post">
                İsim: <input type="text" name="isim" id="isim" class="form-control"><br>
                Email: <input type="text" name="email" id="email" class="form-control"><br>
                Görüşler: <input type="text" name="gorus" id="gorus" class="form-control"><br>
                <input type="submit" value="Gönder" class="btn btn-success">
            </form>
        </div><br>
        <div class="gorusler text-center">
            <h1>Görüşler</h1><hr>
            <table width="100%">
                <?php
                    foreach($gorusler as $a):
                ?>  
                <tr>
                    <td><?= $a[1] ?></td>
                    <td><?= $a[2] ?></td>
                    <td><?= $a[3] ?></td>
                    <td><?= $a[4] ?></td>
                    <td>
                        <form action="sil.php" method="post">
                            <input type="hidden" name="id" value="<?= $a[0] ?>">
                            <input type="submit" value="Sil" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
                <?php
                    endforeach;
                ?>
            </table>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>