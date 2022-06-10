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
</head>

<body>

    <div class="albums_list py-4">
        <div class="container">
            <div class="row row-cols-3 row-cols-md-6 justify-content-center">
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
</body>

</html>