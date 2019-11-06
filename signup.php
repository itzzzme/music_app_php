<?php
include_once 'conn.php';
?>
<!DOCTYPE>
<html>
<title>
signup
</title>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{padding: 0;margin: 0; list-style:none;text-align: center;}

        .firstdiv{background:-webkit-linear-gradient(top, blue ,red);
            width:600px;height:655px;  margin: 0 auto;padding: 5px; position: fixed;left: 25%;}
        .secdiv{width: 300px;
            height: 300px;
            position: absolute;
            top: 50%; left: 50%;
            margin-top: -150px;
            margin-left: -150px;}
        .username{padding: 3px;}
        .email{padding: 3px;}
        .password{padding: 3px;}
        .submit{padding: 3px;}
        .signup{}
        #input1{border-color: chartreuse;}
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
<div class="firstdiv">
  <form action="signup_page.php" method="post">
      <div class="secdiv">
      <div class="username"><input id="input1" type="text" name="username" placeholder="username"></div>
      <div class="email"> <input  id="input2" type="email" name="email" placeholder="email"></div>
      <div class="password"> <input id="input3"  type="password" name="password" placeholder="password"></div>
      <div class="submit">  <input id="input4" type="submit" name="submit" value="signup"></div>
      <div class="signup"> <p>already signup?<a href="login.php">login</a></p></div>
      </div>
  </form>
</div>
</body>
</html>

