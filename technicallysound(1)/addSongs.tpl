<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link type="text/css" rel="stylesheet" href="style.css" /> -->
    <meta charset="UTF-8">
    <title>View Songs (Administrator)</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="one-page-wonder.css"/> <!-- this css sheet was taken from Bootstrap -->

    <! -- CSS from Andre's ViewArtist.html to incorporate modal -->
    <link href="css/ViewArtistStyle.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
    <div class="col-md-2 offset-md-9">

        <!-- Trigger/Open The Modal -->
        <button id="myBtn"><i class="my-2 fas fa-plus"></i></button>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Add a song</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <table width="100%" border="0">
                            <div class="col-md-9 col-md-offset-0">
                                <tr>
                                    <td width="77%">
                                        <div class="">
                                            <form class="form-horizontal" action="send.php" method="post">
                                                <fieldset>

                                                    <!-- Song Title input-->
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Song Title</label>
                                                        <div class="col-md-9">
                                                            <input name="song_title" type="text"
                                                                   placeholder="Enter title here" class="form-control">
                                                        </div>
                                                    </div>

                                                    <!-- Artist input -->
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Artist Name</label>
                                                        <div class="col-md-9">
                                                            <input name="artist_title" type="text"
                                                                   placeholder="Enter artist here" class="form-control">
                                                        </div>
                                                    </div>


                                                    <!-- Album input -->
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Album Title</label>
                                                        <div class="col-md-9">
                                                            <input name="album_title" type="text"
                                                                   placeholder="Enter album here" class="form-control">
                                                        </div>
                                                    </div>
                                    </td>
                                    <td align="center" valign="top" width="23%">
                                        <!-- Form actions -->
                                        <div class="form-group">
                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="btn btn-primary btn-md">Submit</button>
                                                <button type="reset" class="btn btn-primary btn-md">Clear</button>
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
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
</div>

</div>
</div>
</div>

<!-- Song List -->
<div class="row">
    <div class="col-md-8 offset-md-2">
        <ul class="list-group">
            <li class="list-group-item">
                <span class="d-inline-block w-25">Rise</span>
                <span class="d-inline-block w-25">Jonas</span>
                <span class="d-inline-block w-25">Blue Single - Rise</span>
                <span class="float-right">
                    <a class="icon_tag" href="#"><i class="mx-2 fas fa-search"></i></a>
                    <a class="icon_tag" href="#"><i class="mx-2 fas fa-pen"></i></a>
                    <a class="icon_tag" href="#"><i class="mx-2 fas fa-trash-alt"></i></a>
                </span>
            </li>
            <li class="list-group-item">
                <span class="d-inline-block w-25">Hearts Ain't Gonna Lie</span>
                <span class="d-inline-block w-25">Arlissa</span>
                <span class="d-inline-block w-25">Single - Hearts Ain't Gonna Lie</span>
                <span class="float-right">
                    <a class="icon_tag" href="#"><i class="mx-2 fas fa-search"></i></a>
                    <a class="icon_tag" href="#"><i class="mx-2 fas fa-pen"></i></a>
                    <a class="icon_tag" href="#"><i class="mx-2 fas fa-trash-alt"></i></a>
                </span>
            </li>
            <li class="list-group-item">
                <span class="d-inline-block w-25">Ghost Town</span>
                <span class="d-inline-block w-25">Adam Lambert</span>
                <span class="d-inline-block w-25">The Original High</span>
                <span class="float-right">
                    <a class="icon_tag" href="#"><i class="mx-2 fas fa-search"></i></a>
                    <a class="icon_tag" href="#"><i class="mx-2 fas fa-pen"></i></a>
                    <a class="icon_tag" href="#"><i class="mx-2 fas fa-trash-alt"></i></a>
                </span>
            </li>
            <li class="list-group-item">
                <span class="d-inline-block w-25">Ain't Gonna Die Tonight</span>
                <span class="d-inline-block w-25">Macklemore</span>
                <span class="d-inline-block w-25">Gemini</span>
                <span class="float-right">
                    <a class="icon_tag" href="#"><i class="mx-2 fas fa-search"></i></a>
                    <a class="icon_tag" href="#"><i class="mx-2 fas fa-pen"></i></a>
                    <a class="icon_tag" href="#"><i class="mx-2 fas fa-trash-alt"></i></a>
                </span>
            </li>
        </ul>
    </div>
</div>

{include "subFooter.tpl"}

<!-- Bootstrap javaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<!-- Font Awesome javaScript -->
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"
        integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB"
        crossorigin="anonymous"></script>
</body>
</html>