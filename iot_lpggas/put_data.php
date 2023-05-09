<?php
////////////////////////////////////////////////////
$con = mysqli_connect('localhost','iotagri1_lpggas','BQNarp$SoKqt','iotagri1_lpggas');
////////////////////////////////////////////////////
if(!empty($_REQUEST))
{

$smk = @$_REQUEST['smk'];
$fir = @$_REQUEST['fir'];
$lpg = @$_REQUEST['lpg'];
$query = "INSERT INTO `sfl` (`smk`, `fir`, `lpg`)
 VALUES ('".$smk."', '".$fir."', '".$lpg."')";

//echo $query;
mysqli_query($con,$query);


////////////////////////////////////////////////////////////////////////
if($smk >= 200)
{
$to      = 'svskits@gmail.com';
$subject = 'LPG GAS ALERT';
$message = 'LPG- MQ2 SENSOR ='.$smk;
$message .= "Sensors Alert, High LPG GAS Alert."."\r\n";
$message .= "http://iotagriculture.in/iot_lpggas/index.php"."\r\n";
$headers = 'From: vidushiparashardn82@gmail.com' . "\r\n" .
    'Reply-To: vidushiparashardn82@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

$to      = 'tanyabhadouria16@gmail.com';
$subject = 'LPG GAS ALERT';
$message = 'LPG- MQ2 SENSOR ='.$smk;
$message .= "Sensors Alert, High LPG GAS Alert."."\r\n";
$message .= "http://iotagriculture.in/iot_lpggas/index.php"."\r\n";
$headers = 'From: vidushiparashardn82@gmail.com' . "\r\n" .
    'Reply-To: vidushiparashardn82@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

}

if($fir == 'Y')
{
$to      = 'svskits@gmail.com';
$subject = 'FIRE ALERT';
$message = 'Sensors Alert, Fire Alert';
$message .= "http://iotagriculture.in/iot_lpggas/index.php"."\r\n";
$headers = 'From: vidushiparashardn82@gmail.com' . "\r\n" .
    'Reply-To: vidushiparashardn82@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

$to      = 'tanyabhadouria16@gmail.com';
$subject = 'FIRE ALERT';
$message = 'Sensors Alert, Fire Alert';
$message .= "http://iotagriculture.in/iot_lpggas/index.php"."\r\n";
$headers = 'From: vidushiparashardn82@gmail.com' . "\r\n" .
    'Reply-To: vidushiparashardn82@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

}

if($lpg == 'E')
{
$to      = 'svskits@gmail.com';
$subject = 'LPG CYLENDER STATUS ALERT';
$message = 'LPG GAS CYLENDER IS GOING EMPTY PLZ BOOK';
$message .= "http://iotagriculture.in/iot_lpggas/index.php"."\r\n";
$headers = 'From: vidushiparashardn82@gmail.com' . "\r\n" .
    'Reply-To: vidushiparashardn82@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

$to      = 'tanyabhadouria16@gmail.com';
$subject = 'LPG CYLENDER STATUS ALERT';
$message = 'LPG GAS CYLENDER IS GOING EMPTY PLZ BOOK';
$message .= "http://iotagriculture.in/iot_lpggas/index.php"."\r\n";
$headers = 'From: vidushiparashardn82@gmail.com' . "\r\n" .
    'Reply-To: vidushiparashardn82@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

}





}
?>
