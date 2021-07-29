<!DOCTYPE html>
<html>
<title>Web Page Design</title>
<head>
<script language="php">
<h3> Elon Musk is ______</h3>
<h3> Fill in a descriptive word in the input</h3>
<?php
$email_address = $_POST['email_address'];
$description = $_POST['description'];
$email_address  = filter_email_header($email_address);
$headers = "From: $email_addressn";
$sent = mail('you@domain.com', 'Feedback Form Submission', 
$description, $headers);

if ($sent){
   <head>
   <title>Thank You</title>
   </head>
   <body>
   <h1>Thank You</h1>
   <p>Thank you for your feedback.</p>
   </body>
   </html>
   
   <?php
} else {
?><html>
<head>
<title></title>
</head>
<?php>
<body>
if($sent==false){
<h1>Something went wrong</h1>
<p>We could not send your feedback. Please try again.</p>
}
</body>
</html>
?>
</script>
</head>
<body>
<form action="/feedback_form.php" method="post">

<label>Email Address</label>
<input type="text" name="email_address" size="40">

<label>Your Feedback</label>
<textarea name="feedback" cols="50" rows="10"></textarea>

<input type="submit" name="send" value="Submit">

</form>
</body>
</html>