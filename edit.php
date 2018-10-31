<?php
include ('Stripegateway.php');
$myStripe = new Stripegateway();
$data = array('id' => 'cus_DswNEYbp87uMIf', 'description' => 'reseptionis adalah dewa');
$result = $myStripe->editcustomer($data);
	echo "<pre>"; print_r($result);