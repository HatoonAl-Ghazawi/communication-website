
<?php
//Haneen Code and edited by Hatoon
require 'config.php';
if(isset($_COOKIE['user'])){
    if(isset($_COOKIE['login']) ==1){
        echo'أهلاً في صفحة معلومات الزبون!!'."<br/>";
        //echo $_COOKIE['subscribe_type'];
        echo'<a href = "logout.php">تسجيل الخروج</a><br/>';

        $view_query = 'select * from subscriptions';
            $view = mysqli_query($conndb, $view_query) 
            or die(mysqli_error($view));
            if($view){
                $fetch_data = mysqli_fetch_assoc($view);
                $sub_type= $fetch_data['sub_type'];
                $call_min = $fetch_data['call_minutes'];
                $account_data = $fetch_data['account_data'];
                $recharge_card = $fetch_data['recharge_card'];

                echo'
                <html dir = "rtl">
                    <head></head>
                    <body>
                        <br/>
                        <center>
                        <table border =1px>
                                <tr>
                                    <th>Subscription type</th>
                                    <th>Call Minutes</th>
                                    <th>Account Data</th>
                                    <th>Recharge Card</th>
                                    <th>Add credit</th>

                                </tr>
                                <tr>
                                <td>'.$sub_type.'</td>
                                <td>'.$call_min.'</td>
                                <td>'.$account_data.'</td>
                                <td>'.$recharge_card.'</td>
                                <td><a href = "select_credit.php">إشحن خطك</a></td>
                                </tr>
                            </table>
                        </center>
                    </body>     
                ';

            }
    }
}

else{
    echo"أنت غير مسجل لدخولك، الرجاء تسجيل الدخول<br/>";
    echo'<a href="login.php"> تسجيل الدخول </a>';
}
?>