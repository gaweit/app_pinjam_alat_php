<!DOCTYPE html>
<html>
    <head>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../masuk.css">
    </head>

    <body style="background: #a8f1f7;

<div class="container">
 <div class="login-container">
         <div id="output"></div>
         <div class="avatar">
             <p style="margin-top: 40px">Anggota</p>
         </div>
         <div class="form-box">
             <form action="proseslogin_anggota.php" method="post">
                 <input name="username" type="text" placeholder="username">
                 <input type="password" name="password" placeholder="password">
             <button class="btn btn-info btn-block login" type="submit">Login</button>
             <br/>
             <br/>
            <button><a href="../register.php" class="btn btn-info btn-block">Register</a></button>
            
             </form>
         </div>
  </div>  
</div>
    
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>