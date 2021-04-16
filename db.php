
<?php
$host = "localhost";
$name = "chatroom";
$username = "root";
$password = "";

try{
    $db = new PDO("mysql:dbhost=$host;dbname=$name", "$username", "$password");
echo "*";
}catch(PDOException $e){
    $error_msg = $e->getMessage();
    echo $error_msg;
    exit();
}
?>