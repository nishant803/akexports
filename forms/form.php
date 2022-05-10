<?php
      use PHPMailer\PHPMailer\PHPMailer;
      $name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$number = $_REQUEST['number'];
		$subject = $_REQUEST['subject'];
		$msg = $_REQUEST['msg'];
      if(isset($_POST['name']) && isset($_POST['email'])){
          $name = $_POST['name'];
          $email = $_POST['email'];
          $subject = $_POST['subject'];
          $body = '<table><tr><td>Name</td><td>'.$name.'</td></tr><tr><td>Email</td><td>'.$email.'</td></tr><tr><td>Phone</td><td>'.$number.'</td></tr><tr><td>Subject</td><td>'.$subject.'</td></tr><tr><td>Message</td><td>'.$msg.'</td></tr></table>';
          require_once "PHPMailer/PHPMailer.php";
          require_once "PHPMailer/SMTP.php";
          require_once "PHPMailer/Exception.php";
          $mail = new PHPMailer();
          //smtp settings
          $mail->isSMTP();
          $mail->Host = "smtp.gmail.com";
          $mail->SMTPAuth = true;
          $mail->Username = "testingphp92@gmail.com"; 
          $mail->Password = 'phptesting1234';           //   aayushagarwal.006@gmail.com
          $mail->Port = 465;
          $mail->SMTPSecure = "ssl";
          //email settings
          $mail->isHTML(true);
          $mail->setFrom($email, $name);
          $mail->addAddress("aayushagarwal.006@gmail.com");
          $mail->Subject = ("$subject");
          $mail->Body = $body;
          if($mail->send()){
            header("Location: http://akexport.in/");
          }
          else
          {
              $status = "failed";
              $response = "Something is wrong: <br>" . $mail->ErrorInfo;
          }
        
      }
		// $conn = mysqli_connect("localhost", "root", "", "staff");
	
		// if($conn === false){
		// 	die("ERROR: Could not connect. "
		// 		. mysqli_connect_error());
        // }
		// Performing insert query execution
		// here our table name is college
		// $sql = "INSERT INTO customer VALUES ('$name',
		// 	'$email','$number','$subject','$msg',now())";
		// if(mysqli_query($conn, $sql)){
		//       header("Location: http://akexport.in/");
		// } else{
		// 	echo "ERROR: Hush! Sorry $sql. "
		// 		. mysqli_error($conn);
		// }
		// Close connection
		// mysqli_close($conn);
        // $mail->Body='<table><tr><td>Name</td><td>'.$name.'</td></tr><tr><td>Email</td><td>'.$email.'</td></tr><tr><td>Phone</td><td>'.$number.'</td></tr><tr><td>Subject</td><td>'.$subject.'</td></tr><tr><td>Message</td><td>'.$msg.'</td></tr></table>';
		// $mail->Subject="A.K exports Mail";
		// $mail->AddAddress("agarwalnishant803@gmail.com");
        // if(!$mail->Send())
		// {
		// 	echo $mail->ErrorInfo;
		// }
        // else{
        //     header("Location: http://akexport.in/");
        // }
		// ?>
        <!-- servername => localhost
		 username => root
		 password => empty
		 database name => staff -->