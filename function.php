
<?php
/* is called when eio_nop () fineshed */
 function my_nop_cb($data, $result) {
  echo "my_nop ", $data, "\n";
 }
/*
// This eio_nop() call will be cancelled
$req = eio_nop(EIO_PRI_DEFAULT, "my_nop_cb", "1");
var_dump($req);''
 // errro 
eio_cancel($req);
// This time eio_nop() will be processed
eio_nop(EIO_PRI_DEFAULT, "my_nop_cb", "2");
// Process requests
eio_event_loop();
function newname ()
{$response = "CON Please enter new name";
    return $response;
    */
// error
/*
/*

function whatsNew()
{
            $response ="CON Trainees center \n";
            $response .= "welcome to trainees center to continue in enlish press 1 to continue in kiswahili press 2 \n";
            $response .= "00.Main ";
            $response .= "0.Back";
  			return $response;
}
function products()
{
    $response = "CON";
    $response .= "1. Top up Airtime \n";
    $response .= "2. Add voice Option \n";
    $response .= "00.Main Menu";
    $response .= "0.Back";
    $response .= "00.Main Menu";
    $response .= "0.Back";
  	return $response;
}
function affliates()
{
    $response = "CON";
    $response .= "1. Register as an Affliate \n";
    $response .= "2. Invite your friends\n";
  	return $response;
}
function myNumber($phoneNumber)
{
    $response = "END Your phone number is $phoneNumber";
    return $response;
}

function editName()
{
    $response = "CON Please enter new name";
    return $response;
}
function faqs()
{
    $response = "END Follow us on our social media platforms or contact us on 0723880313\n";
    return $response;
}
function optout()

{
    $response="CON Are you sure you want to Opt Out \n";
    $response.= "1. Yes \n";
    $response.= "2.No \n";
    return $response;
}
function optoutSuccess()

{
    $response="END You have successfully opted out";
    return $response;
}
function AlternativeNumber()

{
    $response = "CON Please enter your alternative number \n";
    return $response;
}
*/
?>
