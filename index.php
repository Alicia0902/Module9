<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 9</title>
    <link rel="stylesheet" href="css/css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
   
    
<?php 
    $sneakers="Sneakers";
    
?>



    <ul class="H1">
        <h1><?php echo $sneakers?></h1>
    </ul>

<div class="container">
    <div class="row">
    <div class="col-6 col-sm-4"><a href="blazers.php">Nike Blazers</a></div>
    <div class="col-6 col-sm-4"><a href="airforce.php">Nike Air Force 1's</a></div>

    <!-- Force next columns to break to new line at md breakpoint and up -->
    <div class="w-100 d-none d-md-block"></div>

    <div class="col-6 col-sm-4"><a href="jordans.php">Nike Air Jordan 1's</a></div>
    <div class="col-6 col-sm-4"><a href="dunks.php">Nike Dunk's</a></div>
  </div>
</div>

    <footer>
    © 2022 Nike, Inc. Alle rechten voorbehouden aan Nike
    </footer>

</body>
</html>