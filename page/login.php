<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SESSION['user_id']))
{
    header('Location: index.php');
}
$title = 'login'; include("top.php");
?>

<style>
#all-panel{
    box-shadow: 5px 4px 8px 5px rgba(0, 0, 0, 0), 0 0 60px 0 rgba(0, 0, 0, 0.19);      
}

</style>

<div class="col-md-4 col-md-offset-4">
<div id="all-panel" class="login-panel panel panel-default">
    <div class="panel-heading" style="background-color: #D9EDF7" style="font-color: #7EA5B9" >
        <h3 class="panel-title">เข้าสู่ระบบ</h3>
    </div>
    <div class="panel-body">
        <form role="form" action="check_login.php" method="POST">
            <fieldset>
                <div class="form-group">
                    <input class="form-control" placeholder="username" name="username" type="text" autofocus>
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="password" name="password" type="password" value="">
                </div>
                
                <!-- Change this to a button or input when using this as a form -->
                <input type="submit" class="btn btn-lg btn-success btn-block" value = "Login">
            </fieldset>
        </form>
    </div>
</div>
</div>

<?php include("bottom.php");?>