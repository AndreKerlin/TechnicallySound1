<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link type="text/css" rel="stylesheet" href="style.css" /> -->
    <meta charset="UTF-8">
    <title>View Songs</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="one-page-wonder.css"/> <!-- this css sheet was taken from Bootstrap -->

    <! -- CSS from Andre's ViewArtist.html to incorporate modal -->
    <link href="ViewArtistStyle.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

{include "subNav.tpl"}

<!-- Title -->
<div class="row">
    <div class="col-md-8 offset-md-2">
        <h1 class="my-4">Songs List</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-4 offset-md-8">

        <form class="example m-2" action="{$WEB_URL}songView.php" method="post">
            <input class ="searchbar" type="text" placeholder="Search.." name="search2">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>

<!-- Song List -->
<div class="row">
    <div class="col-md-8 offset-md-2">
        <ul class="list-group">
            {foreach $song_list as $songs}
            <li class="list-group-item">
                <span class="d-inline-block w-25"><a class="song-link" href="songView.php?id={$songs['Song_ID']}">{$songs['Title']}</a></span>
                <span class="d-inline-block w-25"><a class="song-link" href="ViewArtist.php">{$songs['Artist_Name']}</a></span>
                <span class="d-inline-block w-25"><a class="song-link" href="review.php">{$songs['Album_Name']}</a></span>
                <span class="float-right">
                    <a class="icon_tag" href="#"><i class="mx-2 fas fa-plus"></i></a>
                </span>
            </li>
            {/foreach}
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Font Awesome javaScript -->
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
</body>
</html>