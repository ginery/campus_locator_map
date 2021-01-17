<?php 
include '../config/connection.php';
session_start();
date_default_timezone_set('UTC');
$date = getCurrentDate();
$time = date('H:i:s');
$user_id = $_SESSION['user_id'];
$user_name = getUserName($_SESSION['user_id']);
$teacher = $_POST['teacher_name'];
$subject = $_POST['subject'];
$messages = $_POST['message'];
$text = strval($messages." | FROM VISITOR: ".$user_name);
$shortcode = "8707";
$access_token = "D3kL1sR67b0r5Kuqb1aueLvz4yruC_4E4j5HtN9dmmI";
$address = $teacher; // phone number
$clientCorrelator = "264801";
$message = $text;


$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://devapi.globelabs.com.ph/smsmessaging/v1/outbound/".$shortcode."/requests?access_token=".$access_token,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYPEER => false, 
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"outboundSMSMessageRequest\": { \"clientCorrelator\": \"".$clientCorrelator."\", \"senderAddress\": \"".$shortcode."\", \"outboundSMSTextMessage\": {\"message\": \"".$message."\"}, \"address\": \"".$address."\" } }",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json"
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
  echo "cURL Error #:" . $err;
}else{
  mysql_query("INSERT INTO `tbl_messages` ( `msg_subject`, `msg_status`, `msg_messages`, `msg_date`, `msg_time`, `msg_to`, `msg_user_id`) VALUES ( '$subject', 'S', '$messages', '$date', '$time', '$teacher', '$user_id')");
	echo 1;
}

?>