<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
    <link rel="stylesheet" href="19bce7675.css">
    
</head>
<body>
<?php
    $a = "";
    $b = "";
    $c = "";
    $d = "";
    $e = "";
    $f = "";
    $u = "";
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pw'];
        $cp =  $_POST['cpw'];
        $num = $_POST['num'];
        $m = $_POST['msg'];
        $v = TRUE;
        $patt = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";

        if(empty($name)) {
            $v = FALSE;
            $a = 'Empty Field!';
        }
        elseif(!preg_match("/^[a-zA-z]*$/", $name)) {
            $v = FALSE;
            $a = 'No Digits or Special Characters';
        }

        if(empty($email)) {
            $v = FALSE;
            $b = 'Empty Field!';
        }
        elseif(!preg_match ($patt, $email)) {
            $v = FALSE;
            $b = 'Invalid Email';
        }

        if(empty($pass)) {
            $v = FALSE;
            $c = 'Empty Field!';
        }
        elseif(strlen($pass) < 8) {
            $v = FALSE;
            $c = 'Password must be at least 8 characters long';
        }

        if(empty($cp)) {
            $v = FALSE;
            $d = 'Empty Field!';
        }
        elseif($cp != $pass) {
            $v = FALSE;
            $d = 'Passwords do not match!';
        }

        if (!isset($_POST['g'])) {
            $v = FALSE;
            $e = 'Empty Field!';
        }

        if(empty($num)) {
            $v = FALSE;
            $f = 'Empty Field!';
        }
        elseif(!preg_match ("/^[0-9]*$/", $num)) {
            $v = FALSE;
            $f = 'only numerical values are accepted!';
        }
        elseif(strlen($num) != 10) {
            $v = FALSE;
            $f = 'Mobile Number must have 10 digits!';
        }
        if(empty($m)) {
            $v = FALSE;
            $u = 'Empty Field!';
        }
        elseif(strlen($m) > 50) {
            $v = FALSE;
            $u = 'Message must be less than 50 characters!';
        }

        if($v == TRUE) {
            header("Location:19bce7675_validation_success.php?");
        }

       
    }
    ?>

    <form action="" method="post">
    <div>
        <div class='label'>Name</div> 
        <input type="text" name="name" class='ip'>
        <span> *<?php echo $a?></span>
    </div>
    <br>
    <div>
        <div class='label'>Email</div> 
        <input type="email" name="email" class='ip'>
        <span> *<?php echo $b?></span>
    </div>
    <br>
    <div>
        <div class='label'>Password</div> 
        <input type="password" name="pw" class='ip'>
        <span> *<?php echo $c?></span>
    </div>
    <br>
    <div>
        <div class='label'>C Password</div> 
        <input type="password" name="cpw" class='ip'>
        <span> *<?php echo $d?></span>
    </div>
    <br>
    <div>
        <div class='label'>Gender</div> 
        <div class='ip'>
        <input type="radio" name="g" value="Male"> Male
        <input type="radio" name="g" value="Female"> Female
        <span> *<?php echo $e?></span>
        </div>
    </div>
    <br>
    <div>
        <div class='label'>Contact No</div> 
        <input type="text" name="num" class='ip'><span> *<?php echo $f?></span>
    </div>
    <br>
    <div>
        <div class='label'>Message</div> 
        <textarea name="msg" cols="30" rows="2"></textarea>
        <br>
        <span id='mem'><?php echo $u?></span>
    </div>
    <br><br>
    <div id="divi">
    <input type="submit" value="Submit" id='k'>
    <input type="reset"  value="Reset" id='k'>
    </div>
    </form>
</body>
</html>