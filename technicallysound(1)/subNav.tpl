<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="home.php">Technically Sound</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mr-5" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="change.php">My Account<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown {if $active == "Songs"}active{/if}">
                <a class="nav-link dropdown-toggle" href="songList.php" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Songs</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="addSongs.php">Add Song</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="songList.php">Songs List</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="songReview.php">Song Reviews</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="songReview.php">Playlists</a>
                </div>
            </li>
            <li class="nav-item dropdown {if $active == "Artists"}active{/if}">
                <a class="nav-link dropdown-toggle" href="FeaturedArtists.php" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Artists</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="ViewArtist.php">Add Artist</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="FeaturedArtists.php">Featured Artists</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="ViewArtist.php">Artist Reviews</a>
                </div>
            </li>
            <li class="nav-item dropdown {if $active == "Albums"}active{/if}">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Albums</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="Featured Albums.php">Featured Albums</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="review.php">Album Reviews</a>
                </div>
            </li>
            <li class="nav-item {if $active == "Playlist"}active{/if}">
                <a class="nav-link" href="#">Playlist</a>
            </li>
        </ul>
    </div>
</nav>