<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Featured Artists</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/FeaturedArtistsStyle.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">



</head>

<body>

{include "subNav.tpl"}
<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class = "col-md-4 offset-md-8">
        <form class="example m-2" action="featuredArtist.php" method="post">
            <input class ="searchbar" type="text" placeholder="Search By Artist" name="search2">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        </div>
    </div>

    <!-- Page Heading -->
    <h1 class="my-4">Featured Artists</h1>

    <div class="row">
                <div class="row">
                    {foreach $artist_list as $Artists}
                    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <a href="ViewArtist.php?id={$Artists['Artist_ID']}"><img class="card-img-top" src="../../pictures/{$Artists['Picture_File']}" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="ViewArtist.php?id={$Artists['Artist_ID']}">{$Artists['Artist_Name']}</a>
                                    <a aria-label="Delete" class="btn btn-primary" href="#">
                                        <i aria-hidden class="fas fa-plus" title="Add this Artist?"></i></a>
                                    <a aria-label="Delete" class="btn btn-danger" href="#">
                                        <i aria-hidden class="fas fa-trash" title="Delete this item?"></i></a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    {/foreach}
                </div>
    </div>


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
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>

</body>

</html>