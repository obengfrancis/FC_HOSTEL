<?php
ini_set('max_execution_time', 9000); // Execution time
        $phone = $_POST['phone'];  // The Phone Number        
        $message = $_POST['message'];  // Your message        
        
        $key="z8iD3AtLQcgBt7WxBqQlyNpzz";//your unique API key;
          $message = $message; //encode url;
        $sender_id = "fctc hotel";//Name of sender
        $url="https://apps.mnotify.net/smsapi?key=$key&to=$phone&msg=$message&sender_id=$sender_id";
         $result=file_get_contents($url);
         echo "<br />";
        switch($result){                                           
case "1000":
//echo "<script type='text/javascript'>alert('Message sent to customer')</script>";
//header("refresh:0.05; url=../ref/sms.html");
break;
case "1002":
echo "<script type='text/javascript'>alert('Message not sent ')</script>";
break;
case "1003":
echo "<script type='text/javascript'>alert('You don't have enough balance)</script>";
break;
case "1004":
echo "<script type='text/javascript'>alert('Invalid API')</script>";
break;
case "1005":
echo "<script type='text/javascript'>alert('Invalid phone number')</script>";
break;
case "1006":
echo "<script type='text/javascript'>alert('Invalid sender ID')</script>";
break;
case "1008":
echo "<script type='text/javascript'>alert('Empty message')</script>";
break;
        };        
    
if($result=="1000"){
    echo "<script type='text/javascript'>alert('Message sent to customer')</script>";
  
}
header("refresh:0.05; url=../sms.html");
?>