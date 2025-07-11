<?php
ini_set('max_execution_time', 9000); // Execution time
        $phone = $_POST['phone'];  // The Phone Number        
        $message = $_POST['message'];  // Your message
                
      
   

        $key="DdqfDN6jJIFAsBsXPwaPlRnm7";//your unique API key;
          $message = $message; //encode url;
        $sender_id = "TestSystem";//Name of sender
        $url="https://apps.mnotify.net/smsapi?key=$key&to=$phone&msg=$message&sender_id=$sender_id";
         $result=file_get_contents($url);
         echo "<br />";
        switch($result){                                           
case "1000":
echo "Message sent";
break;
case "1002":
echo "Message not sent";
break;
case "1003":
echo "You don't have enough balance";
break;
case "1004":
echo "Invalid API Key";
break;
case "1005":
echo "Phone number not valid";
break;
case "1006":
echo "Invalid Sender ID";
break;
case "1008":
echo "Empty message";
break;

    };
    
  
if($result=="1000"){
  echo "message sent";
}

     



?>