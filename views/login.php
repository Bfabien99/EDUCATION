<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
            <div class="header">
                <h1>.LEARN</h1>
                <p>Education is like an art; it is a perpetual creation that progresses by provoking ever new encounters. [...] The educational system can therefore be defined as the place where one teaches and where one practices the art of encounter</p>
            </div>
           <form action="" method="post">
                <label for=""><input type="text" name="name" id="" placeholder="Username or email"><img src="assets/images/icons8-utilisateur-100.png" alt="" class="icon"></label>
                <label for=""><input type="password" name="password" id="" placeholder="Password"><img src="assets/images/icons8-mot-de-passe-100.png" alt="" class="icon"></label>
                <?php if(!empty($err)) echo $err;?>
                <?php if(!empty($msg)) echo $msg;?>
                <div class="bottom">
                    <button type="submit" class="button"><span>Sign In</span></button>
                    <a href="signup" class="button">Sign Up</a>
                </div>
                <a href="forgot" class="forgot">Forgot password</a>
           </form>
           <footer>&copy; 2022 - NAN5.22 - PROJETEDUCATION_BKSF</footer>
    </div>
</body>
</html>