<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Dunk's</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
<?php 
    $sneakers="Sneakers";

    $schoenen[0] = ["naam"=>"Dunk Low Safari Mix", "gender"=>"Woman", "color"=>"1 color", "prijs"=>126.99];
    $schoenen[1] = ["naam"=>"Dunk Low Retro Sun Club Multi", "gender"=>"Woman", "color"=>"1 color", "prijs"=>153.99];
    $schoenen[2] = ["naam"=>"Dunk Low University Blue UNC (2021)", "gender"=>"Men", "color"=>"1 color", "prijs"=>489.99];
    $schoenen[3] = ["naam"=>"Dunk Low Retro White Black (2021)", "gender"=>"Unisex", "color"=>"1 color", "prijs"=>217.99];
    $schoenen[4] = ["naam"=>"Dunk Low SP Syracuse (2020)", "gender"=>"Unisex", "color"=>"1 color", "prijs"=>637.99];
    $schoenen[5] = ["naam"=>"SB Dunk Low Cherry fruity pack", "gender"=>"Unisex", "color"=>"1 color", "prijs"=>779.99];
    echo "<pre>";
    print_r($schoenen);
    echo "</pre>";
?>



    <ul class="H1">
        <h1><?= $sneakers ?></h1>
    </ul>

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="box">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                    <h3>Nike Dunk's:</h3>

                    <img src="img/dunk-low-se-damesschoenen-jtWcqp.png.jpeg" width="250" class="img-responsive">
                    <h4><?= $schoenen[0]["naam"] ?></h4>
                    <p><?= $schoenen[0]["gender"] ?><br>
                    <?= $schoenen[0]["color"] ?><br>
                        <?php echo "&euro; ".number_format($schoenen[0]["prijs"], 2, ",", "") ?></p>
                        
                    <img src="img/dunk-low-se-damesschoenen-rwJWss.png.jpeg" width="250" class="img-responsive">
                    <h4><?= $schoenen[1]["naam"] ?></h4>
                    <p><?= $schoenen[1]["gender"] ?><br>
                    <?= $schoenen[1]["color"] ?><br>
                    <?php echo "&euro; ".number_format($schoenen[1]["prijs"], 2, ",", "") ?></p>
                        
                    <img src="img/nike-dunk-low-university-blue-unc-2021-DD1391-102_1_xhdpeg_1800x1800_83de393d-d425-4f1a-aad4-e70144f01910.jpg" width="250" class="img-responsive">
                    <h4><?= $schoenen[2]["naam"] ?></h4>
                    <p><?= $schoenen[2]["gender"] ?><br>
                    <?= $schoenen[2]["color"] ?><br>
                    <?php echo "&euro; ".number_format($schoenen[2]["prijs"], 2, ",", "") ?></p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="box">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                
                    <img src="img/nike-dunk-low-retro-dd1391-100_1_srbtb4_1800x1800_fdcaf108-49fb-48c9-a10c-12e7fadc81e6_1200x1200.jpg" width="250" class="img-responsive">
                    <h4><?=$schoenen[3]["naam"] ?></h4>
                    <p><?= $schoenen[3]["gender"] ?><br>
                    <?= $schoenen[3]["color"] ?><br>
                    <?php echo "&euro; ".number_format($schoenen[3]["prijs"], 2, ",", "") ?></p>

                    <img src="img/dunk-low-orange-blaze-release-date.jpg" width="250" class="img-responsive">
                    <h4><?=$schoenen[4]["naam"] ?></h4>
                    <p><?= $schoenen[4]["gender"] ?><br>
                    <?= $schoenen[4]["color"] ?><br>
                    <?php echo "&euro; ".number_format($schoenen[4]["prijs"], 2, ",", "") ?></p>

                    <img src="img/sb-dunk-low-cherry-dm0807-600-—-releasedatum.jpg" width="250" class="img-responsive">
                    <h4><?=$schoenen[5]["naam"] ?></h4>
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
