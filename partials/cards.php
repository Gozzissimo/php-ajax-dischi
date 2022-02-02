<?php
    include __DIR__ . '/../server/db.php';
?>

<?php
foreach ($albums as $value) { ?>
    <li class="card flex">
            <div class="card-img">
                <img src="<?php echo($value["poster"]) ?>" :alt="">
            </div>
            <div class="card-txt text-center">
                <h2 class="album"><?php echo($value["title"]) ?></h2>
                <h3 class="artist"><?php echo($value["author"]) ?></h3>
                <h4 class="year"><?php echo($value["year"]) ?></h4>
            </div>
        </li>
<?php } ?>