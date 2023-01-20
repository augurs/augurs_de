<?php
	class mail {
		public function __construct() {
			
		}

		public function contact_mail($email, $receiver_email, $subject, $message) {
			require("phpmail/class.phpmailer.php");

			$mail = new PHPMailer();

			//$mail->IsSMTP();                                      // Set mailer to use SMTP
			// $mail->Host = 'smtp.gmail.com';                 // Specify main and backup server
			// $mail->Port = 587;                                    // Set the SMTP port
			// $mail->SMTPAuth = true;                               // Enable SMTP authentication
			// $mail->Username = 'augursmail@gmail.com';                // SMTP username
			// $mail->Password = 'Augurs@321';                  // SMTP password
			// $mail->SMTPSecure = 'ssl';                          // Enable encryption, 'ssl' also accepted

			$mail->Host = 'mail.moogli.in';                 // Specify main and backup server
			$mail->Port = 465;                                    // Set the SMTP port
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'marine@moogli.in';                // SMTP username
			$mail->Password = 'Augurs@9848';                  // SMTP password
			$mail->SMTPSecure = 'ssl';  
			$mail->SMTPOptions = array(
				'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
				)
				);
			$mail->From = $email;
			$mail->SMTPDebug = 2;
			$mail->FromName = 'Augurs Website';
			$emails = explode(",", $receiver_email);
            foreach ($emails as $key => $value) {
                $mail->AddAddress(trim($value));
            }
			// $mail->AddAddress($receiver_email);  // Add a recipient
			// $mail->AddAddress('ahmaadraj@gmail.com');  // Add a recipient
			// $mail->AddAddress('ellen@example.com');               // Name is optional

            // $mail->addReplyTo('info@example.com', 'Information');
			// $mail->addCC('divya@augurs.in');
			$mail->addCC('abhishek@augurs.in');
			$mail->addCC('madhvendra@augurs.in');
			$mail->addCC('khalid@augurs.in');
			// $mail->addBCC('bcc@example.com');

			$mail->IsHTML(true);                                  // Set email format to HTML

			$mail->Subject = $subject;
			$mail->Body    = $message;
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			
			if (!$mail->Send()) {
                echo "Error: " . $mail->ErrorInfo;
             	// return $mail->ErrorInfo;
                
            } else {
            	// echo "success";die;
                return TRUE;
            }
		}

		public function send_newsletter($email, $receiver_email, $subject, $message) {
			require("phpmail/class.phpmailer.php");

			$mail = new PHPMailer();

			$mail->IsSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'mail.moogli.in';                 // Specify main and backup server
			$mail->Port = 465;                                    // Set the SMTP port
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'marine@moogli.in';                // SMTP username
			$mail->Password = 'Augurs@9848';                  // SMTP password
			$mail->SMTPSecure = 'ssl';                          // Enable encryption, 'ssl' also accepted

			$mail->From = $email;
			$mail->FromName = 'Augurs Website';
			$emails = explode(",", $receiver_email);
            foreach ($emails as $key => $value) {
                $mail->AddAddress(trim($value));
            }
			// $mail->AddAddress($receiver_email);  // Add a recipient
			// $mail->AddAddress('ahmaadraj@gmail.com');  // Add a recipient
			// $mail->AddAddress('ellen@example.com');               // Name is optional

            // $mail->addReplyTo('info@example.com', 'Information');
			// $mail->addCC('divya@augurs.in');
			$mail->addCC('madhvendra@augurs.in');

			$mail->IsHTML(true);                                  // Set email format to HTML

			$mail->Subject = $subject;
			$mail->Body    = $message;
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			if (!$mail->Send()) {
                echo "Error: " . $mail->ErrorInfo;
                // return FALSE;
                die;
            } else {
            	// echo "success";die;
                return TRUE;
            }
		}
		public function carrer_mail($email, $receiver_email, $subject, $message, $attachment, $attachment_name) {
			require("phpmail/class.phpmailer.php");

			$mail = new PHPMailer();

			$mail->IsSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'mail.moogli.in';                 // Specify main and backup server
			$mail->Port = 465;                                    // Set the SMTP port
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'marine@moogli.in';                // SMTP username
			$mail->Password = 'Augurs@9848';                  // SMTP password
			$mail->SMTPSecure = 'ssl';                          // Enable encryption, 'ssl' also accepted

			$mail->From = $email;
			$mail->FromName = 'Augurs Website';
			$emails = explode(",", $receiver_email);
            foreach ($emails as $key => $value) {
                $mail->AddAddress(trim($value));
            }
			// $mail->AddAddress($receiver_email);  // Add a recipient
			// $mail->AddAddress('ahmaadraj@gmail.com');  // Add a recipient
			// $mail->AddAddress('ellen@example.com');               // Name is optional

            // $mail->addReplyTo('info@example.com', 'Information');
			// $mail->addCC('divya@augurs.in');
			$mail->addCC('abhishek@augurs.in');
			// $mail->addCC('madhvendra@augurs.in');
			// $mail->addBCC('bcc@example.com');

			// $mail->addAttachment($attachment);         // Add attachments
			$mail->addAttachment($attachment, $attachment_name);    // Optional name

			$mail->IsHTML(true);                                  // Set email format to HTML

			$mail->Subject = $subject;
			$mail->Body    = $message;
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			if (!$mail->Send()) {
                echo "Error: " . $mail->ErrorInfo;
                return $mail;
               // die();
            } else {
            	// echo "success";die;
                return TRUE;
            }
		}
	}
?>
