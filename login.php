<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="masuk.css">
</head>

<body style="background-color: #a8f1f7;


   <?php
    if (!isset($_session['admin'])) {
        $_session['admin'] = "";
    }
    echo $_session['admin']; ?>
    <div class="container">
        <div class="login-container">
            <div id="output"></div>
            <div class="avatar">
                <p style="margin-top: 40px">Admin</p>
            </div>
            <div class="form-box">
                <form action="proseslogin.php" method="post">
                    <input name="username" type="text" placeholder="username">
                    <input type="password" name="password" placeholder="password">
                    <button class="btn btn-info btn-block login" type="submit">Login</button><br/>
					<br/>
                    <button><a href="user/login_anggota.php" class="btn btn-info btn-block login2">Login Sebagai Anggota</a></button>
                </form>
                <br>
            </div>
        </div>
    </div>

</body>

</html>