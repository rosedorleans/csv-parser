<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV Parser</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="page_result">
        <?php 
            use File1\File1;
            require "File1.php";

           (new File1)->parse($_POST);
        ?>
        <br>
        <button><a href="index.php">Retour</a></button>
    </div>
</body>
</html>