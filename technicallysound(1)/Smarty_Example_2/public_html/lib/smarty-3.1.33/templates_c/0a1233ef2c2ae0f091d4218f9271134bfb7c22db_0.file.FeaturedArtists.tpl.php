<?php
/* Smarty version 3.1.33, created on 2018-11-12 20:13:31
  from '/Applications/MAMP/htdocs/technicallysound(1)/Smarty_Example_2/public_html/templates/FeaturedArtists.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bea253b130982_36423539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a1233ef2c2ae0f091d4218f9271134bfb7c22db' => 
    array (
      0 => '/Applications/MAMP/htdocs/technicallysound(1)/Smarty_Example_2/public_html/templates/FeaturedArtists.tpl',
      1 => 1542071610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bea253b130982_36423539 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>a
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>4 Col Portfolio - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/FeaturedArtistsStyle.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">



</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"><a class="navbar-brand" href="http://localhost:63342/technicallysound(1)/home.html?_ijt=iho76uredcmf2f84ab6a8li4vp">Technically Sound</a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="navbarSupportedContent"><ul class="navbar-nav ml-auto"><li class="nav-item "><a class="nav-link" href="#">My Account<span class="sr-only">(current)</span></a></li><li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="http://localhost:63342/technicallysound(1)/addSongs.html?_ijt=jg1sr6d8ihar769jvg74ur94fs#" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">Songs</a><div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="#">Add Song</a><div class="dropdown-divider"></div><a class="dropdown-item" href="#">Songs List</a><a class="dropdown-item" href="http://localhost:63342/technicallysound(1)/ViewArtist.html?_ijt=7snho6nn2d8rcmq6hh4pgqghb8">Song Reviews</a></div></li><li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">Artists</a><div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="#">Add Artist</a><div class="dropdown-divider"></div><a class="dropdown-item" href="#">Artist List</a><div class="dropdown-divider"></div><a class="dropdown-item" href="#">Artist Reviews</a></div></li><li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="http://localhost:63342/technicallysound(1)/review.html?_ijt=pb6db6gv2j118u10ra093n0bqd" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">Albums</a><div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="#">Add Album</a><div class="dropdown-divider"></div><a class="dropdown-item" href="#">Album List</a><div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Album Reviews</a></div></li></ul></div></nav>

<!-- Page Content -->
<div class="container">

    <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
        <input class ="searchbar" type="text" placeholder="Search.." name="search2">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>

    <!-- Page Heading -->
    <h1 class="my-4">Featured Artists</h1>

    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="http://localhost:63342/technicallysound(1)/ViewArtist.html?_ijt=7snho6nn2d8rcmq6hh4pgqghb8"><img class="card-img-top" src="../../pictures/post_malone%20.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="http://localhost:63342/technicallysound(1)/ViewArtist.html?_ijt=7snho6nn2d8rcmq6hh4pgqghb8">Post Malone</a>
                        <a aria-label="Delete" class="btn btn-primary" href="#">
                            <i aria-hidden class="fas fa-plus" title="Add this Artist?"></i>
                        </a>
                        <a aria-label="Delete" class="btn btn-danger" href="#">
                            <i aria-hidden class="fas fa-trash" title="Delete this item?"></i>
                        </a>
                    </h4>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="../../pictures/Adele.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Adele</a>
                        <a aria-label="Delete" class="btn btn-primary" href="#">
                            <i aria-hidden class="fas fa-plus" title="Add this Artist?"></i>
                        </a>
                        <a aria-label="Delete" class="btn btn-danger" href="#">
                            <i aria-hidden class="fas fa-trash" title="Delete this item?"></i>
                        </a>
                    </h4>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="../../pictures/Drake.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Drake</a>
                        <a aria-label="Delete" class="btn btn-primary" href="#">
                            <i aria-hidden class="fas fa-plus" title="Add this Artist?"></i>
                        </a>
                        <a aria-label="Delete" class="btn btn-danger" href="#">
                            <i aria-hidden class="fas fa-trash" title="Delete this item?"></i>
                        </a>
                    </h4>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="../../pictures/chance_the_rapper.png" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Chance the Rapper</a>
                        <a aria-label="Delete" class="btn btn-primary" href="#">
                            <i aria-hidden class="fas fa-plus" title="Add this Artist?"></i>
                        </a>
                        <a aria-label="Delete" class="btn btn-danger" href="#">
                            <i aria-hidden class="fas fa-trash" title="Delete this item?"></i>
                        </a>
                    </h4>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="../../pictures/Taylor_swift.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Taylor Swift</a>
                        <a aria-label="Delete" class="btn btn-primary" href="#">
                            <i aria-hidden class="fas fa-plus" title="Add this Artist?"></i>
                        </a>
                        <a aria-label="Delete" class="btn btn-danger" href="#">
                            <i aria-hidden class="fas fa-trash" title="Delete this item?"></i>
                        </a>
                    </h4>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="../../pictures/Johnny_Cash.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Johnny Cash</a>
                        <a aria-label="Delete" class="btn btn-primary" href="#">
                            <i aria-hidden class="fas fa-plus" title="Add this Artist?"></i>
                        </a>
                        <a aria-label="Delete" class="btn btn-danger" href="#">
                            <i aria-hidden class="fas fa-trash" title="Delete this item?"></i>
                        </a>
                    </h4>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="../../pictures/Billy_Joel.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Billy Joel</a>
                        <a aria-label="Delete" class="btn btn-primary" href="#">
                            <i aria-hidden class="fas fa-plus" title="Add this Artist?"></i>
                        </a>
                        <a aria-label="Delete" class="btn btn-danger" href="#">
                            <i aria-hidden class="fas fa-trash" title="Delete this item?"></i>
                        </a>

                    </h4>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="../../pictures/Freddie_mercury.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Freddie Mercury</a>
                        <a aria-label="Delete" class="btn btn-primary" href="#">
                            <i aria-hidden class="fas fa-plus" title="Add this Artist?"></i>
                        </a>
                        <a aria-label="Delete" class="btn btn-danger" href="#">
                            <i aria-hidden class="fas fa-trash" title="Delete this item?"></i>
                        </a>
                        <!--<i href = "#" class="fa fa-plus-square fa-2x" aria-hidden="true"></i>-->
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>

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
<?php echo '<script'; ?>
 defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
