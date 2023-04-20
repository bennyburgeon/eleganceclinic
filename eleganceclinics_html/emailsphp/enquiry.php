<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';
    
    if(isset($_POST["send"])){
        $mail = new PHPMailer(true);
        
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'hello@elegancesalons.co.uk';
        $mail->Password = 'velisctubogyxtck';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        if(isset($_POST['g-recaptcha-response'])){
        	$secretkey = "6LfzS34iAAAAACpYu0L0FSiBMx78SmP_bQQLwgXh";
        	$ip = $_SERVER['REMOTE_ADDR'];
        	$response = $_POST['g-recaptcha-response'];
        	$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
        	$fire = file_get_contents($url);
        	$data = json_decode($fire);
        	if($data->success==true){
                $firstname = $_POST['en-Fname'];
				$lastname = $_POST['en-Lname'];
				$email = $_POST['en-mail'];
				$phone = $_POST['en-phone'];
				$message = $_POST['en-message'];
                
                $mail->setFrom('hello@elegancesalons.co.uk');
                $mail->addAddress('hello@elegancesalons.co.uk');
                $mail->isHTML(true);
                $mail->Subject = 'Elegance Salons - Enquiry';
        
                $htmlContent = '<img src="https://elegancesalons.co.uk/images/logo.png">
				<h3 style="color:#ecb3a0;">ENQUIRY</h3>
				<table style="font-family: Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%;">
				<tr>
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">First Name</td>
					<td style="border: 1px solid #ddd;padding: 8px;">'.$firstname.'</td>
				</tr>
				<tr style="background-color: #f2f2f2;">
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Last Name</td>
					<td style="border: 1px solid #ddd;padding: 8px;">'.$lastname.'</td>
				</tr>
				<tr>
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Email</td>
					<td style="border: 1px solid #ddd;padding: 8px;">'.$email.'</td>
				</tr>
				<tr style="background-color: #f2f2f2;">
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Phone</td>
					<td style="border: 1px solid #ddd;padding: 8px;">'.$phone.'</td>
				</tr>
				<tr>
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Message</td>
					<td style="border: 1px solid #ddd;padding: 8px;">'.$message.'</td>
				</tr>
				</table>';
                
                $mail->Body =  $htmlContent;
                
                $mail->send();
                header('Location: https://elegancesalons.co.uk/thank-you.html');
        		
        	}else{
        		echo "Please check captcha";
        	}
        }
        else{
        	echo "reCaptcha error";
        }
    }
?>