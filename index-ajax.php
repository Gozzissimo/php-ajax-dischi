<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <title>php Dischi</title>
</head>

<body>
    <!-- header -->
    <?php include_once __DIR__ . '/partials/header.php' ?>

    <!-- main -->
    <main id="app">
        <ul class="container flex" >
            <li v-for="album in albumList" class="card flex">
                <div class="card-img">
                    <img :src="poster" :alt="title">
                </div>
                <div class="card-txt text-center">
                    <h2 class="album">{{ title }}</h2>
                    <h3 class="artist">{{ author }}</h3>
                    <h4 class="year">{{ year }}</h4>
                </div>
            </li>
        </ul>
    </main>

    <!-- footer -->
    <?php include_once __DIR__ . '/partials/footer.php' ?>
</body>

<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="js/script.js"></script>

</html>