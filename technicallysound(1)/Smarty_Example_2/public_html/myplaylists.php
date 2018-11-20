<?php
/**
 * Created by PhpStorm.
 * User: bshs1
 * Date: 11/6/2018
 * Time: 10:00 PM
 */

require_once "../private_html/config.inc.php";
require_once "../private_html/dbconfig.inc.php";
//    Use FROM Playlist after we make a table for the playlist
$get_songs = "SELECT *
	FROM Artist
	LEFT JOIN Song ON Artist.Artist_ID = Song.Artist_FK
    LEFT JOIN Album ON Album.Album_ID = Song.Album_FK;";
$stmt = $pdo->prepare($get_songs);
$stmt->execute();

$song_list = array();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $song_list[] = $row;
}
$smarty->assign('song_list', $song_list);
$smarty->assign("active", "Playlist");
$smarty->display("myplaylists.tpl");

