
    
<?php
	include('db.php');	
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['email'])){
        $email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$name = stripslashes($_REQUEST['name']);
		$name = mysqli_real_escape_string($con,$name);
		$subject = stripslashes($_REQUEST['subject']);
        $subject = mysqli_real_escape_string($con,$subject);
        $msg = stripslashes($_REQUEST['msg']);
		$msg = mysqli_real_escape_string($con,$msg);
		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `contact` (name, email, subject, msg, trn_date) VALUES ('$name', '$email', '$subject', '$msg', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
		
 echo "<div class='form'><h3 align='center' style='color:#009900'>Message Sent successfully.</h3><br/></div>";
          
 header('Location: contact.html'); 
        }
    }else{
       header('Location: contact.html');
    }
?>