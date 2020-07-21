<?php

	$infos = [              // tableau de type associative
	    "firstname" => "",
        "name" => "",
        "email" => "",
        "phone" => "",
        "subject" => "",
        "message" => "",
        "isSuccess" => false
    ];

    function verifyInput($var){
        $var = trim($var); 	                // retire les tabs, les espaces supplémentaires
        $var = stripslashes($var);          // retire tous les antislah
        $var = htmlspecialchars($var);
        return $var;
    }

	if($_SERVER["REQUEST_METHOD"] == "POST")  //moment où l'utilisateur soumet des données
	{
		$infos["firstname"] = verifyInput($_POST["firstname"]);  // $_POST prend la valeur de 'name' dans le tag 'input'
		$infos["name"] = verifyInput($_POST["name"]);
		$infos["email"] = verifyInput($_POST["email"]);
		$infos["phone"] = verifyInput($_POST["phone"]);
		$infos["message"] = verifyInput($_POST["message"]);
		$infos["isSuccess"] = true;

		if($infos["isSuccess"])
		{
			$msg = "Sujet:{$infos["subject"]}" ."\r\n"."{$infos["message"]}";

            $headers = "From: {$infos["firstname"]} {$infos["name"]}" . "\r\n" . "CC: {$infos["email"]}";

			//mail("tchindafabrice@yahoo.fr", "Vous avez reçu un message de votre site internet" , $msg, $headers);              // envoi de l'email à l'aide de la fontion 'mail()'
		}
	}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Form Submit</title>

</head>
<body id="recap-content">

    <div class="recap">
        <h1>Votre formulaire a été envoyé avec succès</h1>
        <h3>les informations saisies sont les suivantes:</h3>
        <div id="data">
            <?php
            echo "<h4>Nom: ".$infos["name"]."</h4>";
            echo "<h4>Prénom: ".$infos["firstname"]."</h4>";
            echo "<h4>Email: ".$infos["email"]."</h4>";
            echo "<h4>Téléphone: ".$infos["phone"]."</h4>";
            echo "<h4>Message: ".$infos["message"]."</h4>";
            ?>
            <h5>Merci d'avoir bien voulu me contacter.<br> A bientôt</h5>
        </div>

    </div>

</body>
</html>
