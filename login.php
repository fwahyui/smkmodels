<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/login.css">
        <link rel="stylesheet" href="assets/magic/magic.css">
    </head>
    <body>
        <div class="container">
            <div class="text-center">
                <!-- <img src="assets/img/logo.png" alt="Metis Logo">-->
				<br><br><br><br><br><br><br><br><br>
            </div>
            <div class="tab-content">
                <div id="login" class="tab-pane active">
                    <form action="x.php?login=1" class="form-signin" method="post">
                        <input type="text" placeholder="Username" class="input-block-level" name="Username">
                        <input type="password" placeholder="Password" class="input-block-level" name="password">
                        <button class="btn btn-large btn-primary btn-block" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div> <!-- /container -->
    </body>
</html>
