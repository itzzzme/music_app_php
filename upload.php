<?php
 include 'header.html';
 include_once ('conn.php');

 ?>
<?php
    if(isset($_POST['submit'])){
        //$file=$_FILES['song'];
        //print_r($file);
        $song_name=$_FILES['songs']['name'];
        echo $song_name;
    }


