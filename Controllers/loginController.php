<?php


$username = $_POST['username'];
$password = $_POST['password'];


// Vérification de la présence de données dans le formulaire
// Si le formulaire est rempli, on post les données pour vérification du user
if($username !== '' && $password !==''){
    $data = [
        "username" => $username,
        "password" => $password,
    ];

//    var_dump($data);

//    # Create a connection
//        $url = '/Back/';
//        $ch = curl_init($url);
//    # Form data string
//        $postString = http_build_query($data, '', '&');
//    # Setting our options
//        curl_setopt($ch, CURLOPT_POST, 1);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//    # Get the response
//        $response = curl_exec($ch);
//    curl_close($ch);

    $response = 'ok';

    if($response == 'ok'){
        header('/Views/home.php');
    }
}
else{   // si pas de datas on relance le formulaire
    header('/Views/login.php');
}