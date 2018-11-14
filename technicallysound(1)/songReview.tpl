<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Song Reviews</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="one-page-wonder.css"/> <!-- this css sheet was taken from Bootstrap -->

    <! -- CSS from Andre's ViewArtist.html to incorporate modal -->
    <link href="ViewArtistStyle.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

{include "subNav.tpl"}

<!-- Page Content -->
<div class="container">

    <!-- Heading Row -->
    <div class="row my-4">
        <div class="col-lg-8">
            <img class="img-fluid rounded" src="img/songView/jonas_blue_rise.jpg" alt="">
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
            <h1>Rise by Jonas Blue</h1>
            <p>"Rise" is a song by English DJ and music producer Jonas Blue featuring American pop-rap duo Jack & Jack.
                It was released on 25 May 2018 by Positiva Records and Virgin EMI Records. The song has peaked at number
                three on the UK Singles Chart, becoming Blue's fourth UK top 10 hit.</p>
            <a class="btn btn-primary btn-lg" href="ViewArtist.html">View Artist</a>
        </div>
        <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
            <h3>Write what you think about this song!</h3>
            <!-- Trigger/Open The Modal -->
            <button id="myBtn" class = "btn btn-primary">Write a Review</button> <!-- adding btn btn-primary class gives the button the look it needs -->

        </div>
    </div>

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


                                            <!-- Rating -->
                                            <div class="rating">
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
</script>
</div>

</div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">InSynic</h2>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <p class="card-text">I can't really stand Jack and Jack. I like Jonas Blue, but I'm disappointed
                    with this collaboration. The lyrics are wack and it just encourages recklessness. I also don't like
                    the flute sounds at the beginning. What's up with that?</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">PopSoul</h2>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <p class="card-text">I absolutely love this artist. He really tells it as it is without any apologies.
                        The whole idea behind the song really resonates with me. I hope other people enjoy as much as I
                        do; it's something I can really jam to. You can bet I will be requesting this song at my cousin's
                        quinceanera.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Read More</a>
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
                    <span class="fa fa-star checked"></span>
                    <p class="card-text">This is a great jam. The flute sounds at the beginning - love it. I am so glad
                        Jonas Blue featured Jack and Jack on this song. I am OBSESSED. This song just gets me. I can
                        just feel each word reverberating in my soul when I listen to this song. It doesn't get much
                        better than this!</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->

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