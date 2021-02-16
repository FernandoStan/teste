<?php

    $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';

    $url = ucfirst($url);
 
    $url = 'Home';

    if($url == 'Home') {
        include('home.php');
    }

    echo 'teste';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Treino php</title>

</head>
<body>


</body>
</html>