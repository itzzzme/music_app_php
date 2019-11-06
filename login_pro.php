<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $pass=mysqli_real_escape_string($con,$_POST['password']);
    $hash_pass=sha1($pass);
    if(empty($email)||empty($pass)){
        echo"<script>alert('empty fields');
               window.location.href='login.php';
               </script>";
        exit();
    }
    else{
        $sql="SELECT email FROM register where email='$email'";
        $result=mysqli_query($con,$sql);
        $check=mysqli_num_rows($result);
        if($check>0){
            $sql="SELECT * FROM register where email='$email'";
            $result=mysqli_query($con,$sql);
            while($row=mysqli_fetch_assoc($result)){
                if($hash_pass==$row['password'])
                {
                    session_start();
                     $user=$row['username'];
                     $uid=$row['user_id'];
                     $_SESSION['username']=$user;
                     $_SESSION['userid']=$uid;
                         header('Location:index.php');
                }
                else{
                    echo"<script>alert('worng password');
               window.location.href='login.php';
               </script>";
                }
            }
        }else{
            echo"<script>alert('empty fields');
               window.location.href='login.php';
               </script>";

        }
    }
    

}else{
    echo"false";
    
}
