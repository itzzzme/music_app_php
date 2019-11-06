<?php
include('conn.php');
?>
<!DOCTYPE>
<html>
<title>
    login
</title>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{padding: 0;margin: 0; list-style:none;text-align: center;}

        .first{background:-webkit-linear-gradient(top, blue ,red);
            width:600px;height:655px;  margin: 0 auto;padding: 5px; position: fixed;left: 25%;}
        .second{width: 300px;
            height: 300px;
            position: absolute;
            top: 50%; left: 50%;
            margin-top: -150px;
            margin-left: -150px;}
        .email{padding: 3px;}
        .password{padding: 3px;}
        .submit{padding: 3px;}
        .signup{}
        #input2{border-color: chartreuse;}
        #input3{border-color: chartreuse;}
        #input4{border-color:dodgerblue; }
        a{color:dimgray;}
        @media(max-width:900px){
            .firstdiv{width: 100%}

        }
        @media(max-width:400px){
            .firstdiv{width: 100%}
        }
    </style>
</head>
<body>
<div class="first">
    <form action="login_pro.php" method="post">
        <div class="second">
            <div class="email"> <input  id="input2" type="email" name="email" placeholder="email"></div>
            <div class="password"> <input id="input3"  type="password" name="password" placeholder="password"></div>
            <div class="submit">  <input id="input4" type="submit" name="submit" value="signup"></div>
            <div class="signup"> <p> NOT REGISTERD!<a href="signup.php">register</a></p></div>
        </div>
    </form>
</div>
</body>
</html>


