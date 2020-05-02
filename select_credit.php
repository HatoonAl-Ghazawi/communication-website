<?php
//Mariam code and edited by Hatoon
require'config.php';

$table="<table style='width:40%' border='1' align='center'> <tr>
<th>Recharge Card</th>
<th>Price</th>
<th>Tax</th>
</tr>";
if(isset($_COOKIE['user'])){
    if($_COOKIE['login'] ==1){
    $subscribe_type =  $_COOKIE['subscribe_type'];
    $sql= "SELECT * FROM `subscriptions` WHERE `id` = '".$subscribe_type."'";
    $result= mysqli_query($conndb,$sql) or die(mysqli_error($result));
   
    if(mysqli_num_rows($result) > 0){
        $fetch_subscribe = mysqli_fetch_assoc($result);
            //create[recharge_card_price]cookie to store the price of the subscription card
            $name = "recharge_card_price";
            $value = $fetch_subscribe["recharge_card_price"];
            $expire = time()+ 60*60*24*7;
            setcookie($name, $value, $expire);

             //create[tax]cookie to store the tax added to price of the subscription card
             $name = "tax";
             $value = $fetch_subscribe["Tax"];
             $expire = time()+ 60*60*24*7;
             setcookie($name, $value, $expire);
            //create table
            $table=$table." <tr>
            <td>".$fetch_subscribe["recharge_card"]."</td>
            <td>".$fetch_subscribe["recharge_card_price"]."</td>
            <td>".$fetch_subscribe["Tax"]."</td>
            </tr></table>";
            echo $table;
            echo "<br>";
            $table= $table."</table>";
        }else
        {
            echo "<br>";
            echo "no data";
        }
    } 
}
else{
    echo"أنت غير مسجل لدخولك، الرجاء تسجيل الدخول<br/>";
    echo'<a href="login.php"> تسجيل الدخول </a>';
}

?>

<html dir="rtl">
    <head>
        <title>
        </title>
    </head>

    <body>
        <? echo $table;?>
        <br>
        <br>
        <center>
            <!-- <input type= "button" value= "Recharge" ></input> -->
            <?php if(($_COOKIE['login'] ==1)) 
            echo'
            <form action="payment.php">
                <input type="submit" value="Recharge" />
            </form>
            ';
            ?>
        </center>
    </body>
</html>


