<?php
/* Smarty version 3.1.33, created on 2018-11-12 20:29:21
  from '/Applications/MAMP/htdocs/technicallysound(1)/Smarty_Example_2/public_html/templates/ViewArtist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bea28f16ab853_62972250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffee73a8dfe582982a5ffafdd5939beddf7114b1' => 
    array (
      0 => '/Applications/MAMP/htdocs/technicallysound(1)/Smarty_Example_2/public_html/templates/ViewArtist.tpl',
      1 => 1542072560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bea28f16ab853_62972250 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portfolio Item - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/ViewArtistStyle.css" >

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">



</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"><a class="navbar-brand" href="http://localhost:63342/technicallysound(1)/home.html?_ijt=iho76uredcmf2f84ab6a8li4vp">Technically Sound</a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="navbarSupportedContent"><ul class="navbar-nav ml-auto"><li class="nav-item"><a class="nav-link" href="#">My Account<span class="sr-only">(current)</span></a></li><li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="http://localhost:63342/technicallysound(1)/addSongs.html?_ijt=jg1sr6d8ihar769jvg74ur94fs#" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">Songs</a><div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="#">Add Song</a><div class="dropdown-divider"></div><a class="dropdown-item" href="#">Songs List</a><a class="dropdown-item" href="#">Song Reviews</a></div></li><li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" href="http://localhost:63342/technicallysound(1)/FeaturedArtists.html?_ijt=n5k46ct4bqlq6gi0pal1lp32lt#" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">Artists</a><div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="#">Add Artist</a><div class="dropdown-divider"></div><a class="dropdown-item" href="#">Artist List</a><div class="dropdown-divider"></div><a class="dropdown-item" href="#">Artist Reviews</a></div></li><li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="http://localhost:63342/technicallysound(1)/review.html?_ijt=pb6db6gv2j118u10ra093n0bqd" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">Albums</a><div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="#">Add Album</a><div class="dropdown-divider"></div><a class="dropdown-item" href="#">Album List</a><div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Album Reviews</a></div></li></ul></div></nav>

<!-- Page Content -->
<div class="container">

    <!-- Portfolio Item Heading -->
    <h1 class="Post-Malone">Post Malone
    </h1>

    <!-- Portfolio Item Row -->
    <div class="row">

        <div class="col-md-8">
            <img class="artist_image" src="../../pictures/post-malone-view.jpg" alt="">
        </div>

        <div class="col-md-4">
            <h3 class="bio">BIO</h3>
            <p>Austin Richard Post, known proffesionally as Post Malone is an American singer/writer/record producer born on July 4, 1995. He found public attention and fame after his song "White Iverson" took off in 2015, which would later be certified quadruple platinum. Since then Post Malone has established himself well as a talented musical artist with multiple platinum songs and records. </p>
            <h3 class="Related-music-genre">Related Music Genres</h3>
            <ul>
                <li>Hip Hop</li>
                <li>R&B</li>
                <li>Pop</li>
                <li>Rap</li>
            </ul>


            <button class = "btn1" id="AddArtist">Add Artist</button>
            
            <!-- Trigger/Open The Modal -->
            <button class = "btn2" id="DeleteBtn">Delete Artist</button>

            <!-- The Modal -->
            <div id="DeleteModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>Some text in the Modal..</p>
                </div>

            </div>

            <?php echo '<script'; ?>
>
                // Get the modal
                var modal = document.getElementById("DeleteModal");

                // Get the button that opens the modal
                var btn = document.getElementById("DeleteBtn");

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks the button, open the modal
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
            <?php echo '</script'; ?>
>



        </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <h3 class="popular_albums">Popular Albums</h3>

    <div class="album-row">

        <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
                <img class="img-fluid" src="../../../pictures/post%20malone%20album1.jpg" alt="">
            </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
                <img class="img-fluid" src="../../../pictures/post%20malone%20album2.jpg" alt="">
            </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
                <img class="img-fluid" src="../../../pictures/post%20malone%20album3.jpg" alt="">
            </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
                <img class="img-fluid" src="../../../pictures/post%20malone%20album4.jpg" alt="">
            </a>
        </div>

    </div>
    <!-- /.row -->

<!-- Call to Action Well -->
<div class="card text-white bg-secondary my-4 text-center">
    <div class="card-body">
        <h3 class="text-white m-0">WRITE A REVIEW FOR THIS ARTIST</h3>
        <!-- Trigger/Open The Modal -->
        <button id="myBtn">WRITE A REVIEW</button>
        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Leave a Review!</h2>
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
                                                    <label class="col-md-3 control-label" for="name">Full Name</label>
                                                    <div class="col-md-9">
                                                        <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                                    </div>
                                                </div>

                                                <!-- Message body -->
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="message">Your Review</label>
                                                    <div class="col-md-9">
                                                        <textarea class="form-control" id="message" name="Review" placeholder="Please enter your Review here..." rows="5"></textarea>
                                                    </div>
                                                </div>


                                                <fieldset class="rating">
                                                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                                    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                                    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                                    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                                    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                                    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                </fieldset>

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

    <?php echo '<script'; ?>
>// Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

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
    <?php echo '</script'; ?>
>

    </div>
</div>

<!-- Content Row -->
<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h2 class="card-title">PopMatters</h2>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <p class="card-text">In this globalised but fragmented world, now so obsessed with immediacy, rapidity and digestibility, this Artist is a visionary work of protest and power. </p>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h2 class="card-title">Mojo</h2>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <p class="card-text">Hearing the newly recorded album as a completed work instead of dismembered modules is a rollicking reassertion of his compositional genius.  </p>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h2 class="card-title">StillAKidAtHeart</h2>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <p class="card-text">Simply a Masterpiece! I first heard this Artist at the age of 14, and I have the same kind of feeling listening to this today...I can't stop listening to it...Thank you...You reached me.</p>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>

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
<?php echo '<script'; ?>
 src="vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
