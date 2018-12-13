<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SESSION['user_id']))
{
    header('Location: index.php');
}
$title = 'register'; include("top.php");
?>


<style>
#all-panel{
    box-shadow: 5px 4px 8px 5px rgba(0, 0, 0, 0), 0 0 60px 0 rgba(0, 0, 0, 0.19);      
}
.col-centered{
    text-align: center;
vertical-align: middle;  
}

.col-left{
    float: right
}

.text{
    font-size: 20px;
}

</style>

<div class="col-md-4 col-md-offset-4">

<div id="all-panel" class="login-panel panel panel-default">
        
    <div  class="panel-heading">
        <h3 class="panel-title">สมัครสมาชิก</h3>
    </div>
    <div class="panel-body">
        <form role="form" action="./regist.php" method="POST">
            <fieldset>
                <div class="form-group">
                    <span>ชื่อผู้ใช้</span>
                    <input class="form-control" placeholder="นายชาว ไซย่า" name="name" type="text" autofocus>
                </div>
                <div class="form-group">
                    <span>ชื่อสำหรับใช้เข้าสู่ระบบ</span>
                    <input class="form-control" placeholder="username" name="username" type="text" autofocus>
                </div>
                <div class="form-group">
                    <span>รหัสผ่าน</span>
                    <input class="form-control" placeholder="password" name="password" type="password" value="">
                </div>
                <div class="form-group">
                    <span>กรอกรหัสผ่านอีกครั้ง</span>
                    <input class="form-control" placeholder="password" name="password_2" type="password" value="">
                </div>
                
                <!-- Change this to a button or input when using this as a form -->
                <input type="submit" class="btn btn-lg btn-success btn-block" value = "สมัครสมาชิก">
            </fieldset>
        </form>
    </div>
</div>
</div>
<?php 

// var_dump($_SESSION);
if(isset($_SESSION['regist_msg'])){
    echo   '<div class="row">
    <div class="col-lg-12 col-centered">
        <p style="color:red">*'.$_SESSION['regist_msg'].'</span>
    </div>
</div> ';
unset ( $_SESSION['regist_msg'] );
}

?>

<?php include("bottom.php");?>