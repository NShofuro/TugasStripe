<?php
include('Stripegateway.php');
$myStripe = new Stripegateway();
$data = array('ID' => 'cus_DswNEYbp87uMIf');
$result = $myStripe->delcustomer($data);
echo "<pre>"; print_r($result);
?>