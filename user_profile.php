<?php
include'header.html';
?>
<?php
include 'conn.php';
session_start();
if(isset($_SESSION['userid'])){
    $user_id=$_SESSION['userid'];

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>user</title>
    <style>
        .u,.e{
            font-size: 25px;
            padding-left:20px;

        }
        #btn1{
            margin-right: 1500px;
            width: auto;
            background-color: darkorange;
        }

        }
        .form-group{
            margin-bottom: 15px;
            margin-left: 1087px;
        }

        body{
            background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
        }
        .dropdown{
            margin-left: 50%;
        }

    </style>
</head>
<body>
<?php
$sql="select * from register_copy where user_id=$user_id";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)){
    while($row=mysqli_fetch_array($result)){
        ?>

        <form class="form-group" method="post" action="del_user.php">
            <button style="float: right;"type="submit" name="del_user" class="btn btn-danger nm">Delete user</button>
        </form>

    <h4><span class="u">user name:</span><?php echo $row['username']; ?></p></h4>
        <h4><span class="e">user email:</span><?php echo $row['email']; ?></p></h4>
        <h4><span class="e">user signin time:</span><?php echo $row['time']; ?></p></h4>
        <h4><span class="e">user signin date:</span><?php echo $row['date']; ?></p></h4>
        <!-- opening change password dialog box-->
       <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="btn1">Change password</button>-->

        <div class="dropdown">
            <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                change password
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <form method="post" action="user_profile.php">
                                <div class="form-group">
                                    <label>old Password</label>
                                    <div class="col-sm-10" id="show_hide_password">
                                        <input class="form-control" type="password" name="oldpass">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>new Password</label>
                                    <div class="col-sm-10" id="show_hide_password">
                                        <input class="form-control" type="password" name="newpass">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>conf Password</label>
                                    <div class="col-sm-10" id="show_hide_password">
                                        <input class="form-control" type="password" name="cnfpass">

                                    </div>
                                </div>
                                <div class="row">
                                    <button type="submit"  name="submit" class="btn btn-primary">change password</button>

                                </div>

                            </form>
                        </div>
                    </div>
            </div>
        </div>


        <!-- Modal
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">


                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Change password</h4>
                    </div>
                    <div class="modal-body">


                        <form method="post" action="change_pass.php">
                             <div class="form-group row">
                               <div class="col-xs-7">
                                    <label for="pass1">old password:</label>
                                    <input class="form-control" id="pass1" type="password" name="oldpass">
                                </div>

                                <div class="col-xs-7">
                                    <label for="pass2">new password:</label>
                                    <input class="form-control" id="pass2" type="password" name="newpass">
                                </div>
                                    <div class="col-xs-7">
                                        <label for="pass3">confirm password:</label>
                                        <input class="form-control" id="pass3" type="password" name="confrpass">
                                    </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" name="change">Submit</button>
                    </div>
                        </form>
                </div>

                </div>

            </div>
        </div>

        </div>
        ends here -->
    <?php

    }
}

?>


</body>

<?php

if(isset($_POST['submit'])){

    $oldpass=sha1(mysqli_real_escape_string($con,$_POST['oldpass']));
    $newpass=mysqli_real_escape_string($con,$_POST['newpass']);
    $confr=mysqli_real_escape_string($con,$_POST['cnfpass']);
    $sql="select password from register where user_id=$user_id";
    $res=mysqli_query($con,$sql);
    while ($ro=mysqli_fetch_array($res))
    {
        $passoo=$ro['password'];

    }
     if($oldpass==$passoo){

         if($newpass==$confr){

             $haspass=sha1($confr);
             $sql="update register set password='$haspass'where user_id='$user_id'";
             $res=mysqli_query($con,$sql);
             if($res){
                 echo "<script>alert('password changed successfully');
                            window.location.href='user_profile.php'</script>";

             }


         }else{


             echo "<script>alert('new passwords does not match');
                            window.location.href='user_profile.php'</script>";

         }

     }else{




         echo "<script>alert('old passwords does not match');
                            window.location.href='user_profile.php'</script>";
     }
}

?>

