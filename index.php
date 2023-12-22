<!-- error variable initialize -->
<?php
$ademailmsg = "";
$adpasdmsg = "";
$emailmsg = "";
$pasdmsg = "";
$msg = "";

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Form</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .login-form-3 .btnSubmit {
        font-weight: 600;
        color: #0062cc;
        background-color: #fff;
    }

    .login-form-3 h3 {
        text-align: center;
        color: #fff;
    }

    .login-form-1 h3 {
        text-align: center;
        color: #fff;
    }

    .login-form-3 {
        padding: 5%;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    }

    .forDiv {
        margin: auto;
        background-color: rgba(0, 0, 0, .9);
        border-radius: 10px;
    }

    .forDiv a {
        color: white;
    }

    .btnSubmit {
        width: 100%;
        border: none;
        padding: 7px;
        letter-spacing: 2px;
        text-transform: uppercase;
        border-radius: 3px;
        color: black !important;
    }

    .logincls {
        border: 1px solid white;
        height: 50px;
        width: 300px;
        margin-top: 20px;
        padding: 7px 15px;
        border-radius: 5px;
        letter-spacing: 1px;
    }
</style>

<body style="display:flex; align-items:center; justify-content:center;">
    <div class="container login-container">
        <div class="row">
            <h4><?php echo $msg ?></h4>
        </div>
        <div class="row">
            <div class="col-md-6 login-form-3 forDiv">
                <h3>Admin Login</h3>
                <!-- server connection in action attribute -->
                <form action="loginadmin_server_page.php" method="get">
                    <div class="form-group">
                        <input type="text" required class="form-control" name="login_email" placeholder="Your Email *" value="" />
                    </div>
                    <Label style="color:red"><?php echo $ademailmsg ?></label>
                    <div class="form-group">
                        <input type="password" required class="form-control" name="login_pasword" placeholder="Your Password *" value="" />
                    </div>
                    <Label style="color:red"><?php echo $adpasdmsg ?></label>
                    <div class="form-group">
                        <input type="submit" required class="btnSubmit" value="Login" />
                    </div>
                    <div class="form-group">
                        <a href="./studentlogin.php" class="logincls" value="Login">Member Login</a> <br>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="" async defer></script>

</html>