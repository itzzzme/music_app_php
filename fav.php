<?php
include 'header.html';
?>


<?php
include 'conn.php';
session_start();
if(isset($_SESSION['userid'])){
    $user_id=$_SESSION['userid'];
}
?>
<?php

if(isset($_POST['fav'])){
    $song_id=$_POST['hid'];
    $sql2="select * from fav where song_id=$song_id and user_id=$user_id";
    $result=mysqli_query($con,$sql2);
    if(mysqli_num_rows($result)==0){
        $sql="insert into fav (song_id,user_id)values('$song_id','$user_id') ;";
        $req=mysqli_query($con,$sql);
        if($req==true)
        {
            echo "<script>alert ('added favourites');
                    window.location.href='songs.php'</script>";
        }
            }

    else{
        $sql1="call delete_fav('".$song_id."','".$user_id."')";
        $result1=mysqli_query($con,$sql1);
        if($result1==true){
            echo " <script>alert ('removed from favourites');
                    window.location.href='songs.php'</script>";
        }
    }

}
?>
<?php

    if(isset($_POST['del'])){
        $song_id=$_POST['hid'];
        $sql3="delete from songs where song_id=$song_id and user_id=$user_id";
        $result2=mysqli_query($con,$sql3);
        if($result2==true){
            echo " <script>alert ('song is deleted');
                    window.location.href='songs.php'</script>";
        }

    }
