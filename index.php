<?php
// includo in QUESTO file.php il db contenuto nel file discsDb
include __DIR__ . "/database/discsDb.php";

// var_dump($discs);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Spootify</title>
</head>
<body>
    <header>
        <img src="./img/spooty.png" alt="logo spooty" />
    </header>

    <div class="macro-container">
        <div class="container">

            <!-- ciclo all'interno dell'array discs e stampo la chiave disc..  -->
            <?php foreach ($discs as $disc) { ?> <!-- *** apertura php -->
            
                <div class="discs-container">
                    <div class="card">
                        <!-- .. e relativi valori sempre della chiave disc -->
                        <img src="<?php echo $disc["poster"]?>" />
                        <h3><?php echo $disc["title"] ?></h3>
                        <div>
                            <p><?php echo $disc["author"]?></p>
                            <p><?php echo $disc["year"]?></p>
                        </div>
                    </div> 
                </div>

            <?php 
                    }   // *** chiusura php
            ?>

        </div>
    </div>

</body>
</html>