<?php
include 'header.html';
?>
<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html>
<body>
<?php
if(session_start()){
    If(isset($_SESSION['userid']))
    {
        $user_id=$_SESSION['userid'];
    }
}?>


<?php
$sql="SELECT * from songs where user_id=$user_id";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_array($result)) {
        echo $row['song_nmae'];
        ?>

        <form method="post" action="fav.php">
            <input type="hidden" name="hid" value="<?= $row['song_id'] ?>">
            <audio controls="controls" preload="metadata" autoplay width="100px" height="100px">

                <source src="music/songs/<?php echo $row['song_nmae']; ?>" type="audio/mpeg">

            </audio>
            <div>
                <button type="submit" name="fav" class="b1"></button>
                <button type="submit" name="del" class="b2"></button>

            </div>
        </form>


        <style>
            form{
                background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);

            }
            .b1 {
                background-image: url(img/fav.png);
                width: 24px;
                background-repeat: no-repeat;
                height: 24px;
                background-color: transparent;
                border: none;
            }
            .b2 {
                background-image: url(img/delete.png);
                width: 24px;
                background-repeat: no-repeat;
                height: 24px;
                background-color: transparent;
                border: none;
            }
        </style>

        <?php

    }
}
else{
    ?>
    <center><strong><h2>no songs found </h2></strong></center>
    <center><h3> <a href="create_playlist.php">create your own playlist</a></h3></center>


<?php
}

?>
        </body>
</html>

