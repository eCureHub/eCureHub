<?php
if(
    isset($_POST['name']) && $_POST['name'] &&
    isset($_POST['email']) && $_POST['email'] &&
    isset($_POST['subject']) && $_POST['subject'] &&
    isset($_POST['message']) && $_POST['message']
)
{

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://ar5vimy7rb.execute-api.us-east-1.amazonaws.com/test/contact_us',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>"{
  'Name': '".$_POST['name']."',
  'Email': '".$_POST['email']."',
  'Subject': '".$_POST['subject']."',
  'Message': '".$_POST['message']."'
}",
  CURLOPT_HTTPHEADER => array(
    'Accept: text/plain',
    'x-api-key: Hg4ojiEwH01ndqNOAY4BLa9lYOjYWjAn8K2zIwDe',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$message = "Thank you for contacting us. We will get back to you soon.";
}
else
$message = "Please complete the contact form correctly and try again";

return header("Location: " . "https://" . $_SERVER['HTTP_HOST'] . "/contact.php?message=".$message);