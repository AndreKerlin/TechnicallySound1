<?php
/**
 * Created by PhpStorm.
 * User: bshs1
 * Date: 11/6/2018
 * Time: 10:00 PM
 */

include "../private_html/config.inc.php";
include "../private_html/dbconfig.inc.php";

if(isset($_POST)) {
    $search_var = "%".$_POST["search2"]."%";
    $sql = "SELECT * FROM Song WHERE Title LIKE ':search'";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':search', $search_var);
    $stmt->execute();
} else {
    $message = "There are no search results.";
    $smarty->assign("message", $message);
}

$smarty->assign("active", "Songs");
$smarty->display("songView.tpl");
