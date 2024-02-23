<?php
    $varParagraph = $_POST["paragraph"];
    $varBadword = $_POST["badword"];
    $varCensoredParagraph = str_replace($varBadword, "***" , $varParagraph);
?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badword thingy page</title>

     <!-- Boostrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="./style.css">

</head>
<body>
    <div class="container mt-5 text-danger">
        <p>
            <?php echo $varParagraph; ?>
        </p>
        <p>
            <?php echo strlen($varParagraph); ?>
        </p>
    </div>
    <div class="container">
        Parola censurata
        <span>
            <h1><?php echo $varBadword; ?></h1>
        </span>
    </div>

    <div class="container mt-5 text-danger">
        
        <p>
            <?php echo $varCensoredParagraph; ?>
        </p>
        <p>
            <?php echo strlen($varCensoredParagraph); ?>
        </p>
    </div>
</body>
</html>