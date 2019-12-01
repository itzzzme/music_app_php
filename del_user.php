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
if(isset($_POST['del_user'])){
    $sql="select * from register where user_id=$user_id";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
            $user_name=$row['username'];
            echo $user_name;
            echo $user_id;
            $del="delete from register where user_id=$user_id";
            $RES=mysqli_query($con,$del);

            if($RES==true){
                $sql2="INSERT INTO deleted_user('user_id,user_name') VALUES ($user_id,$user_name);";
                $res=mysqli_query($con,$sql2);
                echo "<script>alert('user deleted'); 
                                window.location.href='login.php'</script>";
            }
            else{
                echo " successfull";

            }
        }
    }else{
        echo"no users";
    }

}
