<?php
    $paragraph = $_POST['pharagraph'];
    $hide = $_POST['hide'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Ecco il Risultato</h1>
        <h4>
            <?php 
            echo $paragraph. "<br/>" ;
            
            echo strlen($paragraph);
            ?>
        </h4>
        <h4><?php echo $hide ?></h4>

    </div>

</body>
</html>