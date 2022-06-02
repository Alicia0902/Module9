<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Blazer's:</title>
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
    
?>



    <ul class="H1">
        <h1><?php echo $sneakers?></h1>
    </ul>

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="box">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                    <h3>Nike Blazer's:</h3>
                    <img src="img/nike-blazer-low-77-off-white-university-red-1-1000.png" width="250" class="img-responsive">
                    <h4>Blazer Low 77 Off-White University Red</h4>
                    <p> Unisex <br>
                        1 color <br>
                        €170,99</p>
                    <img src="img/nike-blazer-low-77-off-white-electro-green-1-1000.png" width="250" class="img-responsive">
                    <h4>Blazer Low 77 Off-White Electro Green</h4>
                    <p> Unisex <br>
                        1 color <br>
                        €149,99</p> <i class="fa fa-question-circle"></i>
                    <img src="img/nike-blazer-low-acronym-night-maroon-1-1000.png" width="250" class="img-responsive">
                    <h4>Blazer Low Acronym Night Maroon</h4>
                    <p> Unisex <br>
                        1 color <br>
                        €109,99</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="box">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                
                    <img src="img/nike-blazer-low-77-paint-splatter-1-1000.png" width="250" class="img-responsive">
                    <h4>Blazer Low 77 Paint Splatter</h4>
                    <p>Unisex <br>
                        1 color <br>
                        €159,99</p>
                    <img src="img/nike-sb-blazer-low-parra-1-1000.png" width="250" class="img-responsive">
                    <h4>SB Blazer Low Parra</h4>
                    <p>Women <br>
                        1 color <br>
                        €299,99<i class="fa fa-question-circle"></i></p>
                    <img src="img/blazer-low-gt-qs-91525-1-1000.png" width="250" class="img-responsive">
                    <h4>Blazer Low GT QS SUPREME</h4>
                    <p>Women  <br>
                        1 color <br>
                        €278,99</p>
                </div>
            </div>
        </div>

        <footer>
        © 2022 Nike, Inc. Alle rechten voorbehouden aan Nike
    </footer>
</body>
</html>