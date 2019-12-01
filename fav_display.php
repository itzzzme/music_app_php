<?php
include 'header.html';
?>
<?php
include'conn.php';
session_start();
if(isset($_SESSION['userid'])){
    $user_id=$_SESSION['userid'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>favourite</title>

</head>
<style>
    body{
        background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);

    }
</style>
<body>
<?php
$sql="select * from songs as s ,fav as f where s.song_id=f.song_id and s.user_id=f.user_id";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)) {
        echo $row['song_nmae'];
        ?>
       <br> <audio controls="controls" preload="metadata" autoplay width="100px" height="100px">

            <source src="music/songs/<?php echo $row['song_nmae']; ?>" type="audio/mpeg">

        </audio>
        <?php
    }

}else{
    echo "<script>alert('no favourite to show ');
        window.location.href='songs.php'
</script>";
}
?>
</body>

</html>


