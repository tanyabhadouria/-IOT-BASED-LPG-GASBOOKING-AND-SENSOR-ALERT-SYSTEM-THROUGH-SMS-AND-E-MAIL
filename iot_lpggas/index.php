<?php
include('conn.php');
session_start();
$user=$_SESSION["user"];
if($user==""){
header("location:login.php");
}
$sth = mysqli_query($con, "SELECT * FROM sfl ORDER BY createdat DESC ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> IOT Based LPG GAS Booking & Sensor Alert System [ SMS / E-MAIL ] </title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/canvasjs.min.js"></script>
<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#smoke').load('smoke.php').fadeIn("slow");
}, 1000); // refresh every 10000 milliseconds
</script>

<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#fire').load('fire.php').fadeIn("slow");
}, 1000); // refresh every 10000 milliseconds
</script>

<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#lpg').load('lpg.php').fadeIn("slow");
}, 1000); // refresh every 10000 milliseconds
</script>

</head>

<body>
<div class="container">
<div class="row">
<table style="width:100%" border="1">
<tr>
<td colspan="5" valign="middle" width="100%" align="center">
<h3> IOT Based LPG GAS Booking & Sensor Alert System [ SMS / E-MAIL ] </h3></td>
</tr>
</table>
</div>
</div>


<td width="10%">
<div id="smoke"> </div>
</td>

<td width="10%">
<div id="fire"> </div>
</td>

<td width="10%">
<div id="lpg"> </div>
</td>
<br>

</br>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<a class="btn btn-primary btn-block" href="show_data.php">SHOW FULL DATA</a>
<br>


<a class="btn btn-primary btn-block" href="logout.php">Logout</a>
</td>
</tr>
</table>
</body>
</html>