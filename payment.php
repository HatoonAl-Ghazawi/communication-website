
<?php
//Hatoon & Mariam Code
  require'config.php';
  if(isset($_COOKIE['user'])){
    if(isset($_COOKIE['login']) == 1){
      //to show MOBILE NUMBER berfor post
      $mobile_number = $_COOKIE['mobile_number'];
      if($_POST){
        $price = $_COOKIE['recharge_card_price'];
        $tax = $_COOKIE['tax'];
        $customer_credit = $_COOKIE['customer_credit'];
        //echo $customer_credit.'<br/>';
        $card_total_price = $price + $tax;
        //echo $card_total_price;
        
        //if the total price for the subscription card less than the customer's credit
        // So, he can do recharge for his subscription sucessfully
        if(($card_total_price) <= $customer_credit)
        {
          echo "<script>alert('تمت عملية الشحن بنجاح!!')</script>";
        }
        else
        {
          echo "<script>alert('رصيدك الحالي لا يكفي لإعادة شحن خطك، الرجاء إعادة شحن الرصيد!!') </script>";
        }
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
      <?php if((isset($_COOKIE['user'])) ==1)
      echo"
        <div class ='container' style='width : 30%; margin-top : 5%'>
                <form method = 'POST' action = ''>
                    <div class = 'form-group'>
                        <label for = 'mobile_num'>رقم الموبايل :</label>
                        <input type ='text' id = 'mobile_num' name = 'mobile_num' class='form-control'
                         value = '".$mobile_number."'/>
                    </div>
                    
                    <input type = 'submit' name = 'submit' value ='إنهاء إعادة تعبئة الرصيد ' class='btn btn-primary'/>
                </form>
        </div>  
        ";
           
          else{
           
            echo"أنت غير مسجل لدخولك، الرجاء تسجيل الدخول<br/>";
            echo'<a href="login.php"> تسجيل الدخول </a>';
          }
          
           ?>
    </body>
</html>