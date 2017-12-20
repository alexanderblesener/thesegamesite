<php?
if (empty($_POST['comments']))
{return false; }
$message = strip_tags(htmlspecialchars($_POST['comments']));
$to = "alexanderblesener@yahoo.com"; 
$email_subject = "comments and suggestions";
$email_body = "\n$message";
$headers = "From: THESEGAMES@suggestion.com\n";
mail($to,$email_subject, $email_body,$headers);
return true;
?>