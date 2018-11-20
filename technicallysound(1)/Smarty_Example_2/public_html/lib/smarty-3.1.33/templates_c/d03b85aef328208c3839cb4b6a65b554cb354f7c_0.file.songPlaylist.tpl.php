<?php
/* Smarty version 3.1.33, created on 2018-11-19 20:49:14
  from 'C:\MAMP1\htdocs\Smarty_Example_2\public_html\templates\songPlaylist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf3681af2cfd2_55421240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd03b85aef328208c3839cb4b6a65b554cb354f7c' => 
    array (
      0 => 'C:\\MAMP1\\htdocs\\Smarty_Example_2\\public_html\\templates\\songPlaylist.tpl',
      1 => 1542654433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:subNav.tpl' => 1,
  ),
),false)) {
function content_5bf3681af2cfd2_55421240 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link type="text/css" rel="stylesheet" href="style.css" /> -->
    <meta charset="UTF-8">
    <title>View Playlist</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="one-page-wonder.css"/> <!-- this css sheet was taken from Bootstrap -->

    <! -- CSS from Andre's ViewArtist.html to incorporate modal -->
    <link href="ViewArtistStyle.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

<?php $_smarty_tpl->_subTemplateRender("file:subNav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Title -->
<div class="row">
    <div class="col-md-8 offset-md-2">
        <h1 class="my-4">Playlist</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-4 offset-md-8">
        <form class="example m-2" action="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
songList.php" method="post">
            <input class ="searchbar" type="text" placeholder="Search by song title.." name="search2">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

</div>

<!-- Song List -->
<div class="row">
    <div class="col-md-8 offset-md-2">
        <ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['song_list']->value, 'songs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['songs']->value) {
?>
            <li class="list-group-item">
                <span class="d-inline-block w-25"><a class="song-link" href="songView.php?id=<?php echo $_smarty_tpl->tpl_vars['songs']->value['Song_ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['songs']->value['Title'];?>
</a></span>
                <span class="d-inline-block w-25"><a class="song-link" href="ViewArtist.php"><?php echo $_smarty_tpl->tpl_vars['songs']->value['Artist_Name'];?>
</a></span>
                <span class="d-inline-block w-25"><a class="song-link" href="review.php"><?php echo $_smarty_tpl->tpl_vars['songs']->value['Album_Name'];?>
</a></span>
                <span class="float-right">
                    <a class="icon_tag" href="#"><i class="mx-2 fas fa-plus"></i></a>
                </span>
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div>

<!-- Footer -->
<footer id="footer" class="py-3 bg-dark" style="margin-top: 110px;" >
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; TechnicallySound 2018</p>
    </div>
</footer>

<!-- Bootstrap javaScript -->
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"><?php echo '</script'; ?>
>

<!-- Font Awesome javaScript -->
<?php echo '<script'; ?>
 defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
