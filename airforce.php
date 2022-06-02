<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Air Force 1's</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
<?php 
    $sneakers="Sneakers";

    $schoenen[0] = ["naam"=>"Air Force 1 Low Pecan", "gender"=>"Unisex", "color"=>"1 color", "prijs"=>192.99];
    $schoenen[1] = ["naam"=>"Air Force 1 Low Leopard", "gender"=>"Woman", "color"=>"1 color", "prijs"=>158.99];
    $schoenen[2] = ["naam"=>"Air Force 1 Low 1/1 Animal Print", "gender"=>"Unisex", "color"=>"1 color", "prijs"=>191.99];
    $schoenen[3] = ["naam"=>"Air Force 1 Low Fontanka Flowers", "gender"=>"Woman", "color"=>"1 color", "prijs"=>224.99];
    $schoenen[4] = ["naam"=>"Air Force 1 Low React Split", "gender"=>"Men", "color"=>"1 color", "prijs"=>197.99];
    $schoenen[5] = ["naam"=>"Air Force 1 Low Travis Scott Cactus Jack", "gender"=>"Unisex", "color"=>"1 color", "prijs"=>575.99];
    
?>



    <ul class="H1">
        <h1><?php echo $sneakers?></h1>
    </ul>

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="box">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                    <h3>Nike Air Force 1's:</h3>
                    <img src="img/nike-air-force-1-low-pecan-1-1000.png" width="250" class="img-responsive">
                    <h4><?= $schoenen[0]["naam"] ?></h4>
                    <p><?= $schoenen[0]["gender"] ?><br>
                    <?= $schoenen[0]["color"] ?><br>
                        <?php echo "&euro; ".number_format($schoenen[0]["prijs"], 2, ",", "") ?></p>

                    <img src="img/nike-air-force-1-low-leopard-1-1000.png" width="250" class="img-responsive">
                    <h4><?= $schoenen[1]["naam"] ?></h4>
                    <p><?= $schoenen[1]["gender"] ?><br>
                    <?= $schoenen[1]["color"] ?><br>
                        <?php echo "&euro; ".number_format($schoenen[1]["prijs"], 2, ",", "") ?></p>

                    <img src="img/nike-air-force-low-1-1-animal-print-1-1000.png" width="250" class="img-responsive">
                    <h4><?= $schoenen[2]["naam"] ?></h4>
                    <p><?= $schoenen[2]["gender"] ?><br>
                    <?= $schoenen[2]["color"] ?><br>
                        <?php echo "&euro; ".number_format($schoenen[2]["prijs"], 2, ",", "") ?></p>

                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="box">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                
                    <img src="img/nike-air-force-1-low-fontanka-flowers-1-1000.png" width="250" class="img-responsive">
                    <h4><?= $schoenen[3]["naam"] ?></h4>
                    <p><?= $schoenen[3]["gender"] ?><br>
                    <?= $schoenen[3]["color"] ?><br>
                        <?php echo "&euro; ".number_format($schoenen[3]["prijs"], 2, ",", "") ?></p>

                    <img src="img/nike-air-force-1-low-react-split-1-1000.png" width="250" class="img-responsive">
                    <h4><?= $schoenen[4]["naam"] ?></h4>
                    <p><?= $schoenen[4]["gender"] ?><br>
                    <?= $schoenen[4]["color"] ?><br>
                        <?php echo "&euro; ".number_format($schoenen[4]["prijs"], 2, ",", "") ?></p>

                    <img src="img/nike-air-force-1-low-travis-scott-cactus-jack-1-1000.png" width="250" class="img-responsive">
                    <h4><?= $schoenen[5]["naam"] ?></h4>
                    <p><?= $schoenen[5]["gender"] ?><br>
                    <?= $schoenen[5]["color"] ?><br>
                        <?php echo "&euro; ".number_format($schoenen[5]["prijs"], 2, ",", "") ?></p>
                </div>
            </div>
        </div>

        <footer>
        2022
    </footer>
</body>
</html>