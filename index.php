<?php


?>


<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="style.css">
        
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <div class="container login-container">
    <div class="row"><h4><?php echo $msg ?> </h4> </div>        
                    <div class="row">
                        <div class="col-md-6 login-form-1">
                            <h3>Student Login</h3>
                            <form action="loginstud_server_page.php" method="get">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="stlogin_email" placeholder="Student Email *" value="" />
                                </div>
                                <label style="color: red;">*<?php echo $stemailmsg ?></label>
                                <div class="form-group">
                                    <input type="password" name="stlogin_pass" class="form-control" placeholder="Password *" value="" />
                                </div>
                                <label style="color: red;">*<?php echo $stpassmsg ?></label>
                                
                                <div class="form-group">
                                    <input type="submit" class="btnSubmit" value="Login" />
                                </div>
                                <div class="form-group">
                                    <a href="#" class="ForgetPwd">Forget Password?</a>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 login-form-2">
                            <h3>Admin Login</h3>
                            <form action="loginadmin_server_page.php" method="get">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="adlogin_email" placeholder="Admin Email *" value="" />
                                </div>
                                <label style="color: white;">*<?php echo $ademailmsg ?></label>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="adlogin_pass" placeholder="Password *" value="" />
                                </div>
                                <label style="color: white;">*<?php echo $adpassmsg ?></label>
                                <div class="form-group">
                                    <input type="submit" class="btnSubmit" value="Login" />
                                </div>
                                <div class="form-group">

                                    <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>    
            
        </body>
        </html>


