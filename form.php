 <?php
 $fname=$_POST['fname'];
 $fname=$_POST['lname'];
 $fname=$_POST['email'];
 $fname=$_POST['message'];

 mail(to,subject,body,header)


 $from='forms.infysolution.com';
 $to='srupee06@gmail.com';
 $body="First Name:$fname.\n".
      "Last Name:$lname.\n".
      "Mail ID Name:$email.\n".
      "Message:$message.\n";
$header="From:".$from.
        "Reply-to:".$email;


mail($to,$subject,$body,$headers);
header("Location:contact.html");
?>
