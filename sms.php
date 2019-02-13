 <?php
 require 'textlocal.class.php';


 $userID="avisha9619@gmail.com";
 $apiKey="1Pv7UPiOczI-yKbXiqxyY8Snj5H3R5Yf9pgIK5eZgn";
 $textlocal = new textlocal(false,false,$apiKey);

 $mobile=array(918291178048);
 $message=" hello";
 $sender='TXTLCL';
 $response = $textlocal->sendSms($mobile,$message,$sender);
 print_r($response);
 ?>