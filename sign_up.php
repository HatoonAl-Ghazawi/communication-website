<?php
// Hatoon Code
require 'config.php';
if($_POST){
    $mobile_num = $_POST['mobile_num'];
    $email = $_POST['email'];
    $subscribe_type = $_POST['subscribe_type'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    // check all required fields has filled
    if(empty($mobile_num) || empty($email) 
    ||empty($username) || empty($password)){
        echo'<script> alert("الرجاء ملىء جميع الحقول!!")</script>';
    }
    else{
        //escapes all special characters from all the fields
        $mobile_num_escape = mysqli_real_escape_string($conndb,$mobile_num);
         //another way
         //$mobile_num_escape = strip_tags(trim($_POST['$mobile_num']));
        $email_escape = mysqli_real_escape_string($conndb,$email);
        $username_escape = mysqli_real_escape_string($conndb,$username);
        $password_escape = mysqli_real_escape_string($conndb,$password);
        $password_encode = md5($password_escape);
        $insert_query = 'INSERT INTO `customers`(`mobile_number`, `Email`,`subscribe_type`, `username`, `password`) 
        VALUES ("'.$mobile_num_escape.'","'.$email_escape.'","'.$subscribe_type.'","'.$username_escape.'","'.$password_encode.'")';
        $customer_insert = mysqli_query($conndb,$insert_query)
        or die(mysqli_error($customer_insert));
        if($customer_insert){
            echo' تسجيل حساب جديد ناجح!!';
            header("Location:/php course/php project/login.php");
        }
        else{
            echo'حدث خطأ في الإتصال';
        }
        
        

    }
}

?>

<html dir = "rtl">
    <head>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
    </head>
    <body>
        <div class ="container card" style="width:30%">
            <div class="card-body" >
                <form method="POST" action="">
                    <div class = 'form-group'>
                        <label for = 'mobile_num'>رقم الموبايل:</label>
                        <input type ='text' id = 'mobile_num' name ='mobile_num' class="form-control"/>
                    </div>
                    <div class = 'form-group'>
                        <label for = 'email'>البريد الألكتروني:</label>
                        <input type ='email'id = 'email' name ='email' class="form-control"/>
                    </div>
                    <div class = 'form-group'>
                        <select id ='subscribe_type' name='subscribe_type'>
                            <option value="1">Turbo mix</option>
                            <option value="2">Zain Mish Tabi3i</option>
                            <option value="3">Max Line</option>
                        </select>
                    </div> 
                    <div class = 'form-group'>
                        <label for = 'username'>إسم المستخدم:</label>
                        <input type ='test' id = 'username' name = 'username' class="form-control"/>
                    </div>
                    <div class = 'form-group'>
                        <label for = 'password'>كلمة المرور:</label>
                        <input type ='password' id = 'password' name = 'password' class="form-control"/>
                    </div>
                    <input type = 'submit' name = 'submit' value ='تسجيل جديد' class="btn btn-primary"/>
                </form>
            </div>
        </div>    
    </body>
</html>