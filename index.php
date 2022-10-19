
<?php
include __DIR__ . '/database.php';
var_dump($database);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    <title>PHP-AJAX-DISCHI</title>
</head>
<body>

 <div class="container">
    <div class="albumContainer row d-flex  justify-content-evenly">
    <?php
           foreach($database as $album){
            ?>
        
        <div class="card col-12 col-xxl-4">
            <img src="<?= $album['cover']?>" alt="<?=$album['title']?>" srcset="">
            <h1><?=$album['title']?></h1>
            <hr>
            <p>
                <?=$album['author'] ?>
            </p>
            <p>
                <?=$album['releaseDate']?>
            </p>
            <p>
                <?=$album['genre']?>
             </p>
        </div>
        <?php
        }
           ?> 
     
    </div>
</div>
</body>
</html>




<?php
          // foreach($database as $album){
           // echo '<p>' . $album['title'] . '</p>' ;$database;
           // echo '<p>' . $album['author'] . '</p>' ;$database;
           // echo '<p>' . $album['cover'] . '</p>' ;$database;
           // echo '<p>' . $album['releaseDate'] . '</p>' ;$database;
          //  echo '<p>' . $album['genre'] . '</p>' ;$database;
        // }

        ?>
        