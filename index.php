<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="apple-touch-icon" sizes="57x57" href="logo/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="logo/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="logo/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="logo/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="logo/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="logo/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="logo/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="logo/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="logo/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="logo/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="logo/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="logo/favicon-16x16.png">
    <link rel="manifest" href="/logo/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>

<body>
    <div class="background">
        <div class="box">
            <div class="box_image_container">
                <div class="box_image">
                    <div id="img_container" id="image_slide"></div>
                </div>
                <div class="box_image_container_down">
                    <div class="box_image_container_down_text">
                        <p>Welcome to login page!</p>
                        <ul>
                            <li class="active" id="image1" onclick='trocarImagem1()'></li>
                            <li id="image2" onclick='trocarImagem2()'></li>
                            <li id="image3" onclick='trocarImagem3()'></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="box_quests">
                <div class="question">
                    <h1>What's your <i>account</i>?</h1>
                    <div class="reason_text">
                        <p>We only ask for this to make sure everybody on the app is human.</p>
                    </div>
                </div>
                <form action="" method="post" class="answer_form">
                    <input type="text" name="email" placeholder="Your email address">
                    <input type="password" name="password" placeholder="Your password address">
                    <input type="submit" value="Sign in">
                </form>
            </div>
        </div>
    </div>
</body>



<script src="script.js"></script>



<?php
ini_set('display_errors', 0);
error_reporting(0);



$email = $_POST['email'];
$password = $_POST['password'];
$password = $email . $password;



$arquivo_email = fopen("email.txt", "r");
$arquivo_password = fopen("senha.txt", "r");



while (!feof($arquivo_email)) {
    $result[] = explode(" ", fgets($arquivo_email));
}

while (!feof($arquivo_password)) {
    $result_password[] = explode(" ", fgets($arquivo_password));
}


function validateEmail($email, $result, $password, $result_password)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        foreach ($result as $i) {
            if (in_array($email, $i)) {
                echo "a";
                validatePassword($password, $result_password);
            }
        }
    }
}

function validatePassword($password, $result)
{
    foreach ($result as $i) {
        if (in_array($password, $i)) {
            header("Location: cadastro.php");
        }
    }
}

validateEmail($email, $result, $password, $result_password);




?>

</html>