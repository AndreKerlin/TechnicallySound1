<?php
/**
 * Created by PhpStorm.
 * User: bshs1
 * Date: 11/6/2018
 * Time: 10:00 PM
 */

include "../private_html/config.inc.php";
$smarty->assign("active", "Songs");
$smarty->display("addSongs.tpl");
