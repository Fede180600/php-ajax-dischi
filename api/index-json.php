<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../style/style.css">
    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- LINK FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- VUEJS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

</head>

<body>
    <div class="app-container">
        <header>
            <img src="../img/logo.png" alt="">
        </header>

        <main id="root">
            <div class="albums_list py-4">
                <div class="container">
                    <div class="row row-cols-3 row-cols-md-6 justify-content-between">
                        <div class="album_card" v-for="album in albums">
                            <div class="card_img">
                                <img :src="album.poster" alt="">
                            </div>
                            <div class="album_description">
                                <h3>{{ album.title }}</h3>
                                <p>{{ album.author }}</p>
                                <p>{{ album.year }}</p>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </main>

    </div>

    <script src="../js/script.js"></script>

</body>

</html>