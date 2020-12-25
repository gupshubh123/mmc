<?php
	$toEmail = "info@irapso.com";
	
	$userName= $_POST['fullname'];
	$userEmail= $_POST['email'];
	$userContact= $_POST['userContact'];
	$userCompany= $_POST['userCompany'];
	$userMessage= $_POST['message'];
	
	
	$mailHeaders = "From: " . $userName . "<". $_POST["email"] .">\r\n";
	
    if(mail($toEmail, "Contacted Via IRAPSO Website", "<p> Name= ".$userName."</p> <p>Contact= ".$userContact."</p><p> Company= ".$userCompany."</p><p>Message= ".$userMessage."</p>", $mailHeaders)) {
        print "<p class='successEmail'>Thank you. We will get back to you shortly. </p>";
    } else {
        print "<p class='errorEmail'>Something went wrong. Please contact us over the provided address</p>";
    }
?>