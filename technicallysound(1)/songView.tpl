<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>View Songs</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="one-page-wonder.css"/> <!-- this css sheet was taken from Bootstrap -->

    <! -- CSS from Andre's ViewArtist.html to incorporate modal -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>

<body>

{include "subNav.tpl"}

<!-- Page Content -->
<div class="container">

    <!-- Portfolio Item Heading -->
    <h1 class="my-4">$_GET["Song_ID"]</h1>

    <!-- Portfolio Item Row -->
    <div class="row">

        <div class="col-md-8">
            <img class="img-fluid" src="pictures/alissa_hearts.jpg" alt="">
        </div>

        <div class="col-md-4">
            <h3 class="my-3">Lyrics</h3>
            <p>[Verse 1: Arlissa]</br>
                It's not what you said, it's how you said it</br>
                And don't you say you love me when you know you'll regret it</br>
                It's not what we did, it's what we didn't</br>
                We've been losing time and don't know how to admit it</br>
                </br>
                [Pre-Chorus: Arlissa]</br>
                When love don't feel right</br>
                We get along, get along on the outside</br>
                Head out the door, but our hearts on the inside</br>
                Love don't feel right</br>
                We get along, get along on the outside</br>
                But hearts ain't gonna, hearts ain't gonna lie</br>
                </br>
                [Chorus: Arlissa]</br>
                We're half of the same</br>
                Don't take that the wrong way</br>
                You know what I mean</br>
                Hearts ain't gonna, hearts ain't gonna lie</br>
                Won't do this again</br>
                Don't take that the wrong way</br>
                You know what I mean</br>
                Hearts ain't gonna, hearts ain't gonna lie</br>
                Hearts ain't gonna, hearts ain't gonna lie (oh-oh, oh-oh-oh, oh-oh)</br>
                </br>
                [Verse 2: Arlissa]</br>
                You were the one, the one that I wanted</br>
                But you know people change, we're not the same as we started</br>
                We're not running away, we're moving forward</br>
                And though we're trying to stay ahead, we're just treading water</br>
                </br>
                [Pre-Chorus: Arlissa]</br>
                </br>
                [Chorus: Arlissa]</br>
                </br>
                [Outro: Arlissa]</br>
                We're half of the same</br>
                Don't take that the wrong way</br>
                You know what I mean</br>
                Hearts ain't gonna, hearts ain't gonna lie</br>
                Won't do this again</br>
                Don't take that the wrong way</br>
                You know what I mean</br>
                Hearts ain't gonna, hearts ain't gonna lie</p>
            <h3 class="my-3">Song Details</h3>
            <ul>
                <li>Artist: Arlissa</li> <!-- It might be good to link these to the artist/album pages -->
                <li>Album: Single</li>
            </ul>
        </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <h3 class="my-4">Related Songs</h3>

    <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
                <img class="img-fluid" src="pictures/adam_original_high.jpg" alt="">
            </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
                <img class="img-fluid" src="pictures/macklemore_gemini.jpg" alt="">
            </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
                <img class="img-fluid" src="pictures/jonas_blue_rise.jpg" alt="">
            </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
                <img class="img-fluid" src="pictures/troye_sivan_there_for_you.jpg" alt="">
            </a>
        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; TechnicallySound 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>