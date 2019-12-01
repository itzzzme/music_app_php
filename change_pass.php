<?php
include'header.html';
?>
<?php
include 'conn.php';
session_start();
if(isset($_SESSION['userid'])){
    $user_id=$_SESSION['userid'];
    $password=$_SESSION['password'];
}
?>
<?php
if(isset($_POST['change'])){
    $oldpass=sha1(mysqli_real_escape_string($con,$_POST['oldpass']));
    $newpass=mysqli_real_escape_string($con,$_POST['newpass']);
    $confr=mysqli_real_escape_string($con,$_POST['confrpass']);
    if($oldpass===$password){
        if($newpass===$confr){
            $hash_newpass=sha1($newpass);
            $sql="update register set password='$hash_newpass'where $user_id=user_id";
            $res=mysqli_query($con,$sql);
            if($res){
                echo "<script>alert('password changed successfully');
                            window.location.href='user_profile.php'</script>";

            }
        }else{
            echo "<script>alert('new passwords does not match');
                            window.location.href='user_profile.php'</script>";
        }
    }
    else{

        echo "<script>alert('enter the correct password');
                    window.location.href='user_profile.php'</script>";
    }

}
