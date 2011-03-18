<?php

	$queryName=    $_POST['name'];
	$email=    $_POST['email'];
	$queryPhone = $_POST['phone'];
	$queryAddress = $_POST['address'];
	$queryBudget =$_POST['budget'];
	$queryWorkLandConstruct =$_POST['work_landconstruct'];
	$queryWorkInstantTurf = $_POST['work_instantturf'];
	$queryWorkSynthTurf = $_POST['work_synthturf'];
	$queryWorkGardenBeds = $_POST['work_gardenbeds'];
	$queryWorkPaving = $_POST['work_paving'];
	$queryWorkRetaining = $_POST['work_retaining'];
	$queryWorkDecking = $_POST['work_decking'];
	$queryWorkLandDesign = $_POST['work_landdesign'];
	$queryWorkIrrigation = $_POST['work_irrigation'];
	$queryWorkPergolas = $_POST['work_pergolas'];
	$queryWorkMakeover =$_POST['work_makeover'];
	$queryWorkDigger = $_POST['work_digger'];
	$queryWorkTipper =$_POST['work_tipper'];
	$queryOther = $_POST['other'];
	
	
            
	$message = "\r\nContact Name: ";
	$message .= $queryName;
	$message .= "\r\nEmail Address: ";
	$message .= $email;
	$message .= "\r\nContact Phone Number: ";
	$message .= $queryPhone;
	$message .= "\r\nContact Address: ";
	$message .= $queryAddress;
	$message .= "\r\nBudget: ";
	$message .= $queryBudget;
	$message .= "\r\nLandscape construction: ";
	$message .= $queryWorkLandConstruct;
	$message .= "\r\nInstant turf: ";
	$message .= $queryWorkInstantTurf;
	$message .= "\r\nSynthetic turf: ";
	$message .= $queryWorkSynthTurf;
	$message .= "\r\nGarden beds: ";
	$message .= $queryWorkGardenBeds;
	$message .= "\r\nPaving: ";
	$message .= $queryWorkPaving;
	$message .= "\r\nRetaining walls: ";
	$message .= $queryWorkRetaining;
	$message .= "\r\nTimber decking: ";
	$message .= $queryWorkDecking;
	$message .= "\r\nLandscape design: ";
	$message .= $queryWorkLandDesign;
	$message .= "\r\nIrrigation: ";
	$message .= $queryWorkIrrigation;
	$message .= "\r\nPergolas: ";
	$message .= $queryWorkPergolas;
	$message .= "\r\nGarden makeover: ";
	$message .= $queryWorkMakeover;
	$message .= "\r\nMini digger hire: ";
	$message .= $queryWorkDigger;
	$message .= "\r\nTipper hire: ";
	$message .= $queryWorkTipper;
	$message .= "\r\nOther: ";
	$message .= $queryOther;
	
// make sure each line doesn't exceed 70 characters
$message = wordwrap($message, 70);
$subject = "Web query from ";
$subject .= $queryName;
$subject .= " - ";
$subject .= $email;
$headers = "From: info@affordablescapes.com.au\r\n" .
    "X-Mailer: php";

// send email
if(mail('info@affordablescapes.com.au', $subject, $message, $headers)){
//if(mail('alan@angrymonkeys.com.au', $subject , $message, $headers)){
	echo "{success:true}";
}
else
{
	echo "{success:false}";
}
?>