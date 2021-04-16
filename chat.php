<?php 


require_once "db.php";

$result = array();
$msg = isset($_POST['msg']) ? $_POST['msg'] : null;
$username = isset($_POST['username']) ? $_POST['username'] : null;

if(!empty($msg) && !empty($username)){
    $sql = "INSERT INTO 'chat' ('msg', 'username') VALUES ('".$msg."','".$username."')";
    $result['send_status'] = $db->query($sql);
}

/*
//print messages
$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
$items = $db->query("SELECT * FROM 'chat' WHERE 'id' > " . $start);
while($row = $items->fetch_assoc()){
    $result['items'][] = $row;
} */ 


//close the connection
$db = null;

header('Access-Control-Allow_Origin: *');
header('Content-Type: application/json');

echo json_encode($result);
?>
