<?php
//Call center Automation System
//1. Receive POST from AT
  $isActive  = $_POST['isActive'];
  $callerNumber =$_POST['callerNumber'];
  $dtmfDigits = $_POST['dtmfDigits'];
  $sessionId = $_POST['sessionId'];

  //2. Check if isActive=1 to act on the call or isActive=='0' to store the result
  if($isActive=='1'){
    //2a. Switch through the DTMFDigits
    switch ($dtmfDigits) {
      case "0":
          //2b. Talk to secretary...
        $response  = '<?xml version="1.0" encoding="UTF-8"?>';
        $response .= '<Response>';
        $response .= '<Say voice="woman">Please wait on the line while we connect you to the Secretary. The call may be recorded for quality purposes. As a result, we may ask you a few questions regarding the quality of services offered</Say>'; 
       //$response .= '<Dial record="false" sequential="true" phoneNumbers="+254706792519,+254716338294,880.welovenerds@ke.sip.africastalking.com" ringbackTone="http://www.wiretechafrica.com/voice/media/kalimba.mp3"/>';
        $response .= '<Play url="http://www.wiretechafrica.com/voice/media/kalimba.mp3"/>';
        $response .= '</Response>';  
        
        // Print the response onto the page so that our gateway can read it
        header('Content-type: text/plain');
        echo $response;
          break;
          
      case "1":
          //2c. School services ...
        $response  = '<?xml version="1.0" encoding="UTF-8"?>';
        $response .= '<Response>';
        $response .= '<Say voice="woman">Welcome to Anzil Technologies. We are happy to serve you. When we come together, great things happen </Say>'; 
        $response .= '<Play url="http://www.wiretechafrica.com/voice/media/extreme.mp3"/>';
        $response .= '</Response>';
         
        // Print the response onto the page so that our gateway can read it
        header('Content-type: text/plain');
        echo $response;
          break;
          
      case "2":
          //2c. Check fee balance ...
            $balanceArr = array(
                 '+254728986084' => 12000,
                 '+254706792519' => 19000,
                 );
                 
         if ( array_key_exists($callerNumber, $balanceArr) ) {
            $balance = $balanceArr[$callerNumber];
            $text    = "Welcome Basil. Your fee balance is " . $balance . " shillings. Good bye.";
         } else {
            $text = "Sorry, your phone number is not registered for this service. Good Bye.";
         }
      
        $response  = '<?xml version="1.0" encoding="UTF-8"?>';
        $response .= '<Response>';
        $response .= '<Say voice="woman">'.$text.'</Say>';
        //$response .= '<Redirect>http://62.12.117.25/MF-Ussd-Live/voiceCall.php</Redirect>';
        $response .= '</Response>';

        // Print the response onto the page so that our gateway can read it
        header('Content-type: text/plain');
        echo $response;     
          break;
      default:
        //2e. By default talk to support
      $response  = '<?xml version="1.0" encoding="UTF-8"?>';
      $response .= '<Response>';
      $response .= '<GetDigits timeout="30" finishOnKey="#">';
      $response .= '<Say voice="woman">Welcome to Anzil Technologies Service, For school services, press 1. For queries with your fee balance, press 2. To speak to the secretary press 0 followed by hash</Say>';     
      $response .= '</GetDigits>';
      $response .='<Say>You have not responded. Good bye</Say>';
      $response .= '</Response>';
       
      // Print the response onto the page so that our gateway can read it
      header('Content-type: text/plain');
      echo $response;    
    }

  }else{
    //3. Store the data from the POST
      $durationInSeconds=$_POST['durationInSeconds'];
      $direction=$_POST['direction'];
      $amount=$_POST['amount'];
      $callerNumber=$_POST['callerNumber'];
      $destinationNumber=$_POST['destinationNumber'];
      $sessionId=$_POST['sessionId'];
      $callStartTime=$_POST['callStartTime'];
      $isActive=$_POST['isActive'];
      $currencyCode=$_POST['currencyCode'];
    $status=$_POST['status'];

    //3a. Store the data, write your SQL statements here...
  }

?>
