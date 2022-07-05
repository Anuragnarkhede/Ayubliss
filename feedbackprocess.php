<?php
	include('db.php');	
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['email'])){
        $email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$name = stripslashes($_REQUEST['name']);
		$name = mysqli_real_escape_string($con,$name);
		$phone = stripslashes($_REQUEST['phone']);
        $phone = mysqli_real_escape_string($con,$phone);
        $msg = stripslashes($_REQUEST['msg']);
		$msg = mysqli_real_escape_string($con,$msg);
		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `feedback` (name, phone, email, trn_date,msg) VALUES ('$name', '$phone', '$email', '$trn_date','$msg')";
        $result = mysqli_query($con,$query);
        if($result){
		
 echo "<div class='form'><h3 align='center' style='color:#009900'>Message Sent successfully.</h3><br/></div>";
          
 header('Location: feedback.html'); 
        }
    }else{
       header('Location: feedback.html');
    }
?>

    
