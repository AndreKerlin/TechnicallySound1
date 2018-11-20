<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link type="text/css" rel="stylesheet" href="style.css" /> -->
    <meta charset="UTF-8">
    <title>My Playlists</title>

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
        <h1 class="my-4">My Playlists</h1>
    </div>
</div>

<div class="row">

    {*<div class="col-md-4 offset-md-8">*}

    {*</div>*}
    <div class="col-md-4 offset-md-8">

        <form class="example m-2" action="{$WEB_URL}songList.php" method="post">
            <input class ="searchbar" type="text" placeholder="Search by song title.." name="search2">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <span>
            <button id="newlist" class="icon_tag" href="#">Create a new playlist<i class="mx-2 fas fa-plus"></i></button>
    </span>
    </div>

</div>
<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Create a new playlist!</h2>
        </div>
        <div class="container">
            <div class="row">
                <table width="100%" border="0">
                    <div class="col-md-9 col-md-offset-0">
                        <tr><td width="77%">
                                <div class="">
                                    <form class="form-horizontal" action="send.php" method="post">
                                        <fieldset>

                                            <!-- Name input-->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="newplay">Playlist Name</label>
                                                <div class="col-md-9">
                                                    <input id="newplay" name="newplay" type="text" placeholder="A name for your playlist" class="form-control">
                                                </div>
                                            </div>



                            </td>
                            <td align="center" valign="top" width="23%">
                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-md">Submit</button>
                                        <button type="reset" class="btn btn-default btn-md">Clear</button>
                                    </div>
                                </div>
                                </fieldset>
                                </form>
                    </div>
            </div>
            </td>
            </tr>
            </table>
        </div>
        <div class="modal-footer">
        </div>
    </div>

</div>

</div>

<script>// Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("newlist");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</div
<!-- Song List -->
<div class="row">
    <div class="col-md-8 offset-md-2">
        <ul class="list-group">
            {*use mysql to view my playlists from database, maybe as a table*}
            {*{foreach $song_list as $songs}*}
                {*<li class="list-group-item">*}
                    {*<span class="d-inline-block w-25"><a class="song-link" href="songView.php?id={$songs['Song_ID']}">{$songs['Title']}</a></span>*}
                    {*<span class="d-inline-block w-25"><a class="song-link" href="ViewArtist.php">{$songs['Artist_Name']}</a></span>*}
                    {*<span class="d-inline-block w-25"><a class="song-link" href="review.php">{$songs['Album_Name']}</a></span>*}
                    {*<span class="float-right">*}
                    {*<a class="icon_tag" href="#"><i class="mx-2 fas fa-plus"></i></a>*}
                {*</span>*}
                {*</li>*}
            {*{/foreach}*}
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