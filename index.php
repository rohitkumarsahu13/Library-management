<?php
$ademailmsg="";
$adpassmsg="";
 
if(!empty($_REQUEST['ademailmsg'])){
    $ademailmsg=$_REQUEST['ademailmsg'];
}
if(!empty($_REQUEST['adpassmsg'])){
    $adpassmsg=$_REQUEST['adpassmsg'];
}




?>
<html>

<head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>


    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form-1">
                <h3>Admin Login <?php  ?></h3>
                <form action="adminlogin.php" method="post">
                    <div class="form-group">
                        <input type="text" name="admin_email" class="form-control" placeholder="Your Email *" value="" />
                    </div>
                    <label style="color: red;" >*<?php echo $ademailmsg;?></label>
                    <div class="form-group">
                        <input type="password" name="admin_password" class="form-control" placeholder="Your Password *" value="" />
                    </div>
                    <label style="color: red;" >*<?php echo $adpassmsg;?></label>
                    <div class="form-group">
                        <input type="submit" name="admin_submit" class="btnSubmit" value="Login" />
                    </div>
                    <div class="form-group">
                        <a href="#" class="ForgetPwd">Forget Password?</a>
                    </div>
                </form>
            </div>
            <div class="col-md-6 login-form-2">
                <h3>Student Login</h3>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Your Password *" value="" />
                    </div>
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