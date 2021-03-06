<?php include("includes/header.php"); 

    if(isset($_GET['id'])) {
       $albumId = $_GET['id'];
    } else  {
        header("Location: index.php");
    }

    // $albumQuery = mysqli_query($con, "SELECT * FROM albums WHERE id='$albumId'");
    // $album = mysqli_fetch_array($albumQuery);
    
    // echo $album['title'] . "<br>";

    $album = new Album($con, $albumId);

    $artist = $album->getArtist();

    // $artistId = $album['artist'];
    // $artist = new Artist($con, $artistId);

    // echo $album['title'] . "<br>";
    // echo $album->getTitle() . "<br>";
    // echo $artist->getName();
?>

<div class = "entityInfo">
    <div class="leftSection">
        <img src="<?php echo $album->getArtworkPath(); ?>">
    </div>

    <div class="rightSection">
        <h2><?php echo $album->getTitle();?></h2>
        <p>By <?php echo $artist->getName(); ?></p>
        <p><?php echo $album->getNumberOfSongs();?> songs</p>
    </div>


</div>



<?php include("includes/footer.php"); ?>
