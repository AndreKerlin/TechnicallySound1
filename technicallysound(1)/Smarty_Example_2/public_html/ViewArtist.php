<?php

require_once "../private_html/config.inc.php";
require_once "../private_html/dbconfig.inc.php";


$mysqli = new mysqli('technicallysound.cs.messiah.edu', 'admincis', 'live7heCod3', 'MusicDB');
$artist_ID = $_GET['id'];
$sql = "SELECT *
    FROM Artist
    WHERE Artist_ID = :artist_id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':artist_id', $artist_ID);
$stmt->execute();

if($stmt->rowCount() == 1) {
    $smarty->assign("artist_info", $stmt->fetch(PDO::FETCH_ASSOC));
}
if($mysqli->connect_error){
    die('Connect Error: '.$mysqli->connect_errno . ': ' . $mysqli->connect_error );
}

if (isset($_POST['Review'])) {
    $sql = "INSERT INTO Review(comment,stars, user_fk) VALUES ( ' {$mysqli->real_escape_string($_POST['Review'])}', 3, 1)";
    $insert = $pdo->query($sql);

    if ($insert){
        echo "{$mysqli->insert_id}";
    } else {
        die("Error: ");
    }
}



//if ($insert){
//  echo "{$mysqli->insert_id}";
//} else {
//    die("Error: ");
//}



$mysqli->close();
$smarty->display('ViewArtist.tpl');
