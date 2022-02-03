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

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <title>php Dischi</title>
</head>

<body>
    <!-- header -->
    <?php include_once __DIR__ . '/partials/header.php' ?>

    <!-- main -->
    <main id="app">
        <ul class="container flex" >
            <li v-for="card in cards" class="card flex">
                <div class="card-img">
                    <img :src="card.poster" :alt="card.title">
                </div>
                <div class="card-txt text-center">
                    <h2 class="album">{{ card.title }}</h2>
                    <h3 class="artist">{{ card.author }}</h3>
                    <h4 class="year">{{ card.year }}</h4>
                </div>
            </li>
        </ul>
    </main>

    <!-- footer -->
    <?php include_once __DIR__ . '/partials/footer.php' ?>

    <!-- js -->
    <script src="js/script.js"></script>
</body>

</html>