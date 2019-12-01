<?php
include 'header.html';
include_once 'conn.php';
if(session_start()){
    If(isset($_SESSION['userid']))
    {
        $user_id=$_SESSION['userid'];
    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>playlist</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<style>
    body{
        background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);

    }
</style>
<body>
<form action="create_playlist.php" method="POST" enctype="multipart/form-data">
<div class="container">
    <h2>Create you playlist</h2>
    <div class="panel panel-default">
        <div class="panel-heading">Add songs</div>
        <div class="panel-body">
            <div class="form-group">
                <label for="u">upload here:</label>
                <input type="file" name="songs">
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="upload">
        </div>
    </div>
</div>
</form>

</body>
</html>


<?php
 if(isset($_POST['submit']))
 {
    // $file=$_FILES['songs'];
     //print_r($file);
     $song_name=$_FILES['songs']['name'];
     $song_temp=$_FILES['songs']['tmp_name'];
     $song_type=$_FILES['songs']['type'];
     $song_size=$_FILES['songs']['size'];
     $tmp=addslashes(file_get_contents($song_temp));
     move_uploaded_file($song_temp,'songs/'.$song_name);

     $sql="insert into songs(user_id,song_nmae,song_type,song_size) values ('$user_id','$song_name','$song_type','$song_size')";
     mysqli_query($con,$sql);




 }




