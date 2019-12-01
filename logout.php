<?php
include'conn.php';
if(session_start()){
    if(session_destroy()){
        echo"logout successfull";
        header('Location:login.php');
    }

}
