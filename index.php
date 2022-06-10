<?php
include __DIR__ . "/database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- LINK FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <div class="app-container">
        <header>
            <img src="img/logo.png" alt="">
        </header>

        <main>
            <div class="albums_list py-4">
                <div class="container">
                    <div class="row row-cols-3 row-cols-md-6 justify-content-between">
                        <?php foreach ($database as $album) { ?>
                            <div class="album_card">
                                <div class="card_img">
                                    <img src="<?php echo $album["poster"] ?>" alt="">
                                </div>
                                <div class="album_description">
                                    <h3><?php echo $album["title"]?></h3>
                                    <p><?php echo $album["author"]?></p>
                                    <p><?php echo $album["year"]?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>