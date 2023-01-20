<?php
	include("mail.php");
	$mail_send = new mail;
	if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
		$secret = '6LfJ6kUbAAAAAK7KjUtM8b5cX97_gU3MCgL7a7dM';
		$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
		// echo "<pre>";print_r($verifyResponse);die;
		$responseData = json_decode($verifyResponse);
		if($responseData->success) {
			if($_POST['learn'] == "Learn") {
				$name = $_POST['name'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
				$message = '<html>
			        		<head>
			        			<title></title>
			     				<style>
								    table {
									    border-collapse: collapse;
									    width: 100%;
									}
									th, td {
									  border: 1px solid #ddd;
									    text-align: left;
									    padding: 8px;
									    color:black
									}
								</style>
							</head>
							<body>
								<table>
							      	<tbody>
								      	<tr>
								      		<th>Name</th>
							              	<td>'.$name.'</td>
							            </tr>
							            <tr>
							            	<th>Phone</th>
							              	<td>'.$phone.'</td>
							            </tr>
							            <tr>
							            	<th>Email</th>
							              	<td>'.$email.'</td>
							            </tr>
							      	</tbody>
						      	</table>
							<script src="//code.tidio.co/ushigqopw0jzdtuodnzsyo7zxfqy5ij0.js" async></script>
							</body>


						</html>';
				// $mail = $mail_send->send_newsletter($email, 'divya@augurs.in' ,'Learn How?', $message);
				$mail = $mail_send->send_newsletter($email, 'stening@augurs.de,info@augurs.de' ,'Learn How?', $message);
				if($mail) {
					echo 'Learn how form has been submitted successfully';
				} else {
					echo 'Some error occured!';
				}
			} else if($_POST['contact'] == "Contact") {
				$name = $_POST['name'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
				$msg = $_POST['message'];
				$message = '<html>
			        		<head>
			        			<title></title>
			     				<style>
								    table {
									    border-collapse: collapse;
									    width: 100%;
									}
									th, td {
									  border: 1px solid #ddd;
									    text-align: left;
									    padding: 8px;
									    color:black
									}
								</style>
							</head>
							<body>
								<table>
							      	<tbody>
								      	<tr>
								      		<th>Name</th>
							              	<td>'.$name.'</td>
							            </tr>
							            <tr>
							            	<th>Phone</th>
							              	<td>'.$phone.'</td>
							            </tr>
							            <tr>
							            	<th>Email</th>
							              	<td>'.$email.'</td>
							            </tr>
							           	<tr>
							           		<th>Message</th>
							              	<td>'.$msg.'</td>
							            </tr>
							      	</tbody>
						      	</table>
								<script src="//code.tidio.co/ushigqopw0jzdtuodnzsyo7zxfqy5ij0.js" async></script>
							</body>
						</html>';
				// $mail = $mail_send->contact_mail($email, 'divya@augurs.in' ,'Contact Form', $message);
				$mail = $mail_send->contact_mail($email, 'stening@augurs.de,info@augurs.de' ,'Contact Form', $message);
				if($mail) {
					// print_r($mail);	
					echo 'Thank You for contacting us, we will get back to you soonest possible';
				} else {
					echo 'Some error occured!';
				}
			} else if($_POST['newsletter'] == "Newsletter") {
				$email = $_POST['email'];
				$message = "Hello! please tell me something about your website. My email id is :". $email;
				// $mail = $mail_send->send_newsletter($email, 'divya@augurs.in' ,'NewsLetter', $message);
				$mail = $mail_send->send_newsletter($email, 'stening@augurs.de,info@augurs.de' ,'NewsLetter', $message);
				if($mail) {
					echo 'NewsLetter has been submitted successfully';
				} else {
					echo 'Some error occured!';
				}
			} else if($_POST['career'] == 'Career') {
				// print_r($_POST);die;
				// print_r($_FILES);die;
				$name = $_POST['name'];
				$phone = $_POST['phone'];
				$email = $_POST['email'];
				$profession = $_POST['profession'];
				$job_profile = $_POST['job_profile'];
				$page_name = $_POST['page_name'];
				// $path = 'upload/' . $_FILES["file"]["name"];
 				// 	move_uploaded_file($_FILES["file"]["tmp_name"], $path);
				$target_dir = "upload/"; // path to upload file
			    $target_file = $target_dir . time() . "_" . basename($_FILES['file']['name']); // image upload
			    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			    $uploadOk = 1;
			    if (!move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
			        $uploadOk = 0;
			  	}
			  	if($uploadOk) {
			  		if ($imageFileType == 'pdf' || $imageFileType == 'PDF' || $imageFileType == 'doc' || $imageFileType == 'DOC' || $imageFileType == 'docx' || $imageFileType == 'DOCX') {
			  			if($_FILES['size'] < 5 * 1024 * 1024) {
					  		$attachment_name = 'resume.'.$imageFileType; // basename($_FILES['file']['name']); name of file to be shown in email
							$message = '<html>
						        		<head>
						        			<title></title>
						     				<style>
											    table {
												    border-collapse: collapse;
												    width: 100%;
												}
												th, td {
												  border: 1px solid #ddd;
												    text-align: left;
												    padding: 8px;
												    color:black
												}
											</style>
										</head>
										<body>
											<table>
										      	<tbody>
											      	<tr>
											      		<th>Name</th>
										              	<td>'.$name.'</td>
										            </tr>
										            <tr>
										            	<th>Phone</th>
										              	<td>'.$phone.'</td>
										            </tr>
										            <tr>
										            	<th>Email</th>
										              	<td>'.$email.'</td>
										            </tr>
										           	<tr>
										           		<th>Profession</th>
										              	<td>'.$profession.'</td>
										            </tr>
										            <tr>
										           		<th>Job Profile</th>
										              	<td>'.$job_profile.'</td>
										            </tr>
										      	</tbody>
									      	</table>
											<script src="//code.tidio.co/ushigqopw0jzdtuodnzsyo7zxfqy5ij0.js" async></script>
										</body>


									</html>';
							// $mail = $mail_send->carrer_mail($email, 'divya@augurs.in' ,'Career Form', $message, $path);
							$mail = $mail_send->carrer_mail($email, 'stening@augurs.de,info@augurs.de' ,'Career Form', $message, $target_file, $attachment_name);
							if($mail) {
								// echo 'Career form has been submitted successfully';
								print('<script>alert("Career form for '.$job_profile.' has been submitted successfully");</script>');
								echo '<script>window.location="'.$page_name.'"</script>';
							} else {
								// echo 'Some error occured!';
								print('<script>alert("Some error occured!");</script>');
								echo '<script>window.location="'.$page_name.'"</script>';
							}
						} else {
							print('<script>alert("File size exceeded, Please upload only 5 mb file !");</script>');
							echo '<script>window.location="'.$page_name.'"</script>';
						}
					} else {
						print('<script>alert("Please upload only .pdf,.doc,.docx File!");</script>');
						echo '<script>window.location="'.$page_name.'"</script>';
					}
				} else {
					// echo 'Opps... Document not uploaded. Please try again';
					print('<script>alert("Opps... Document not uploaded. Please try again!");</script>');
					echo '<script>window.location="'.$page_name.'"</script>';
				}
			} else if($_POST['quotation'] == 'Quotation') { 
				$name = $_POST['name'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
				$type = $_POST['type'];
				$product_name = $_POST['product_name'];
				$msg = $_POST['message'];
				$message = '<html>
			        		<head>
			        			<title></title>
			     				<style>
								    table {
									    border-collapse: collapse;
									    width: 100%;
									}
									th, td {
									  border: 1px solid #ddd;
									    text-align: left;
									    padding: 8px;
									    color:black
									}
								</style>
							</head>
							<body>
								<table>
							      	<tbody>
								      	<tr>
								      		<th>Name</th>
							              	<td>'.$name.'</td>
							            </tr>
							            <tr>
							            	<th>Phone</th>
							              	<td>'.$phone.'</td>
							            </tr>
							            <tr>
							            	<th>Email</th>
							              	<td>'.$email.'</td>
							            </tr>
							            <tr>
							            	<th>Type</th>
							              	<td>'.$type.'</td>
							            </tr>
							            <tr>
							            	<th>Product Name</th>
							              	<td>'.$product_name.'</td>
							            </tr>
							           	<tr>
							           		<th>Message</th>
							              	<td>'.$msg.'</td>
							            </tr>
							      	</tbody>
						      	</table>
								<script src="//code.tidio.co/ushigqopw0jzdtuodnzsyo7zxfqy5ij0.js" async></script>
							</body>


						</html>';
				// $mail = $mail_send->send_newsletter($email, 'divya@augurs.in', $type, $message);
				$mail = $mail_send->send_newsletter($email, 'stening@augurs.de,info@augurs.de' , $type , $message);
				if($mail) {
					echo '<b>'.$type.'</b> form for <b>'.$product_name.'</b> has been submitted successfully';
				} else {
					echo 'Some error occured!';
				}
			}
		} else {
			echo "Some error occured!";
		}
	}else if($_POST['action'] == 'send_quiz') { 
		$name = $_POST['name'];
		$email = $_POST['email'];
		$dynmic_questions="";
		foreach($_POST['questions'] as $key=>$questions){
			if($questions!=''){
				$dynmic_questions.=" <tr>
				<th>".$questions."</th>
				<td>".$_POST['answers'][$key]."</td>
		  		</tr>		";
			}
		}
		$message = '<html>
					<head>
						<title></title>
						 <style>
							table {
								border-collapse: collapse;
								width: 100%;
							}
							th, td {
							  border: 1px solid #ddd;
								text-align: left;
								padding: 8px;
								color:black
							}
						</style>
					</head>
					<body>
						<table>
							  <tbody>
								  <tr>
									  <th>Name</th>
									  <td>'.$name.'</td>
								</tr>											
								<tr>
									<th>Email</th>
									  <td>'.$email.'</td>
								</tr>
								'.$dynmic_questions.'
							  </tbody>
						  </table>
						<script src="//code.tidio.co/ushigqopw0jzdtuodnzsyo7zxfqy5ij0.js" async></script>
					</body>


				</html>';
		// $mail = $mail_send->send_newsletter($email, 'divya@augurs.in', $type, $message);
		$mail = $mail_send->send_newsletter($email, 'stening@augurs.de,info@augurs.de' , "Quiz" , $message);
		if($mail) {
			echo '<b>'.$type.'</b> form for <b>'.$product_name.'</b> has been submitted successfully';
		} else {
			echo 'Some error occured!';
		}
	
	} else {
		echo "Please click on Re-captcha box!";
	}
?> 
