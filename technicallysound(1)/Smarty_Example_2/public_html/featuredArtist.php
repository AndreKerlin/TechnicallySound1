<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 11/6/18
 * Time: 4:08 PM
 */

//$Smarty = new Smarty;

require_once "../private_html/config.inc.php";
require_once "../private_html/dbconfig.inc.php";
//{include file = "templates/FeaturedArtist.tpl"}

$get_artist = "SELECT *
	FROM Artist";

$stmt = $pdo->prepare($get_artist);
$stmt->execute();

$artist_list = array();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $artist_list[] = $row;
}
if(isset($_POST["search2"])) {
    $search_var = '%'.$_POST["search2"].'%';
    $sql2 = "SELECT * FROM Artist WHERE Artist_Name LIKE ':search'";
    $stmt2 = $pdo->prepare($sql2);
    $stmt2->bindParam(':search', $search_var);
    $stmt2->execute();
    $artist_list = array();
    while($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {
        $artist_list[] = $row;
    }
}

$smarty->assign("artist_list", $artist_list);
$smarty->assign("active", "Artists");
$smarty->display('FeaturedArtists.tpl');