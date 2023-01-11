<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Dosya İşlemleri</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container"> <br>
        <div class="row">
            <div class="col-md-4">
                <h2>Kayıt Formu</h2><hr>
                <form action="upload.php"  method="post" enctype="multipart/form-data">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username"><br>
                    <input type="text" name="country" class="form-control" id="country" placeholder="Enter Country"><br>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email"><br>
                    <input type="file" name="pfp" class="form-control" id="pfp"><br>
                    <input type="submit" value="Kaydet" class="form-control btn btn-success btn-md">
                </form>
            </div>
            <div class="col-md-8">
                <h2>Üye Tablosu</h2><hr>
                <?php
                    $conn = new mysqli("localhost", "root", "", "school");

                    $sql = "SELECT * FROM uyeler";

                    $uyeler = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);

                    foreach($uyeler as $u):
                ?>
                <table width="100%">
                    <tr>
                        <td><img src="upload/<?= $u['pfp']?>" style="border-radius:500px" width="100" height="100" alt="pfp "></td>
                        <td><?= $u['username']; ?></td>
                        <td><?= $u['email']; ?></td>
                        <td><?= $u['country']; ?></td>
                        <td>
                            <form action="sil.php" method="post">
                                <input type="hidden" name="userId" value="<?= $u['userId'] ?>">
                                <input type="submit" value="Delete" name="delete" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>