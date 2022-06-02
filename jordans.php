<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" css/css.css">
    <title>Nike Air Jordan 1's</title>
</head>
<body>
<?php 
    $sneakers="Sneakers";
    
    $schoenen[0] = ["naam"=>"Air Jordan 1 Mid SE Fearless Maison Chateau Rouge", "gender"=>"Unisex", "color"=>"1 color", "prijs"=>799.99];
    $schoenen[1] = ["naam"=>"Air Jordan 1 Mid Hyper Pink White", "gender"=>"Woman", "color"=>"1 color", "prijs"=>449.99];
    $schoenen[2] = ["naam"=>"Air Jordan 1 Mid Coconut Milk", "gender"=>"Unisex", "color"=>"1 color", "prijs"=>158.99];
    $schoenen[3] = ["naam"=>"Air Jordan 1 Mid SE Zen Master", "gender"=>"men", "color"=>"1 color", "prijs"=>339.99];
    $schoenen[4] = ["naam"=>"Air Jordan 1 Mid SE Multi-Color", "gender"=>"Unisex", "color"=>"1 color", "prijs"=>448.99];
    $schoenen[5] = ["naam"=>"Air Jordan 1 Mid SE Black Gold Patent Leather", "gender"=>"Unisex", "color"=>"1 color", "prijs"=>499.99];
    

?>



    <ul class="H1">
        <h1><?php echo $sneakers?></h1>
    </ul>

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="box">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                    <h3>Nike Air Jordan 1's:</h3>
                    <img src="img/maison-chateau-rouge-x-air-jordan-1-mid-fearless-1-1000.png" width="250" class="img-responsive">
                    <h4><?= $schoenen[0]["naam"] ?></h4>
                    <p><?= $schoenen[0]["gender"] ?><br>
                    <?= $schoenen[0]["color"] ?><br>
                        <?php echo "&euro; ".number_format($schoenen[0]["prijs"], 2, ",", "") ?></p>

                    <img src="img/air-jordan-1-mid-hyper-pink-white-gs-1-1000.png" width="250" class="img-responsive">
                    <h4><?= $schoenen[1]["naam"] ?></h4>
                    <p><?= $schoenen[1]["gender"] ?><br>
                    <?= $schoenen[1]["color"] ?><br>
                        <?php echo "&euro; ".number_format($schoenen[1]["prijs"], 2, ",", "") ?></p>

                    <img src="img/air-jordan-1-mid-coconut-milk-w-1-1000.png" width="250" class="img-responsive">
                    <h4><?= $schoenen[2]["naam"] ?></h4>
                    <p><?= $schoenen[2]["gender"] ?><br>
                    <?= $schoenen[2]["color"] ?><br>
                        <?php echo "&euro; ".number_format($schoenen[2]["prijs"], 2, ",", "") ?></p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="box">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                
                    <img src="img/air-jordan-1-mid-se-zen-master-1-1000.png" width="250" class="img-responsive">
                    <h4><?= $schoenen[3]["naam"] ?></h4>
                    <p><?= $schoenen[3]["gender"] ?><br>
                    <?= $schoenen[3]["color"] ?><br>
                        <?php echo "&euro; ".number_format($schoenen[3]["prijs"], 2, ",", "") ?></p>

                    <img src="img/air-jordan-1-mid-se-multi-color-w-1-1000.png" width="250" class="img-responsive">
                    <h4><?= $schoenen[4]["naam"] ?></h4>
                    <p><?= $schoenen[4]["gender"] ?><br>
                    <?= $schoenen[4]["color"] ?><br>
                        <?php echo "&euro; ".number_format($schoenen[4]["prijs"], 2, ",", "") ?></p>

                    <img src="img/air-jordan-1-mid-se-852542-007-black-metallic-gold-white-1-1000.png" width="250" class="img-responsive">
                    <h4><?= $schoenen[5]["naam"] ?></h4>
                    <p><?= $schoenen[5]["gender"] ?><br>
                    <?= $schoenen[5]["color"] ?><br>
                        <?php echo "&euro; ".number_format($schoenen[5]["prijs"], 2, ",", "") ?></p>
                </div>
            </div>
        </div>

        <footer>
        © 2022 Nike, Inc. Alle rechten voorbehouden aan Nike
    </footer>
</body>
</html>