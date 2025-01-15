<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--------- recupere les données depuit contact.php  ---------------->

    <?php
    if (isset($_POST["envoyez"])){

        $nom = $_POST["name"]; 
        $email = $_POST["email"]; 
        $mesage = $_POST["text"];
        echo "Monsieur/Madame ". $nom. "<br>";
        echo "un accusé de reception serait envoyer sur le mail ". $email;
    }
    else{
        echo "Erreur 404";
    }




    ?>
</body>
</html>