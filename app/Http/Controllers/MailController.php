<?php

namespace App\Http\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

use Illuminate\Http\Request;



class MailController extends Controller
{
    public function reschedule()
    {
        if (isset($_POST["send"])) {
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'hello@elegancesalons.co.uk';
            $mail->Password = 'velisctubogyxtck';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            if (isset($_POST['g-recaptcha-response'])) {
                $secretkey = "6LfzS34iAAAAACpYu0L0FSiBMx78SmP_bQQLwgXh";
                $ip = $_SERVER['REMOTE_ADDR'];
                $response = $_POST['g-recaptcha-response'];
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
                $fire = file_get_contents($url);
                $data = json_decode($fire);
                if ($data->success == true) {
                    $firstname = $_POST['re-Fname'];
                    $lastname = $_POST['re-Lname'];
                    $email = $_POST['re-mail'];
                    $phone = $_POST['re-phone'];
                    $salon = $_POST['re-salon'];
                    $treatment = $_POST['re-treatment'];
                    $oldDate = $_POST['re-Odate'];
                    $oldTime = $_POST['re-Otime'];
                    $oldPeriod = $_POST['re-OtimePeriod'];
                    $newDate = $_POST['re-Ndate'];
                    $newTime = $_POST['re-Ntime'];
                    $newPeriod = $_POST['re-NtimePeriod'];
                    $message = $_POST['re-message'];

                    $mail->setFrom('hello@elegancesalons.co.uk');
                    $mail->addAddress('hello@elegancesalons.co.uk');
                    $mail->isHTML(true);
                    $mail->Subject = 'Elegance Salons - Reschedule Booking';

                    $htmlContent = '<img src="https://elegancesalons.co.uk/images/logo.png">
				<h3 style="color:#ecb3a0;">RESCHEDULE BOOKING REQUEST</h3>
				<table style="font-family: Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%;">
				<tr>
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">First Name</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $firstname . '</td>
				</tr>
				<tr style="background-color: #f2f2f2;">
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Last Name</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $lastname . '</td>
				</tr>
				<tr>
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Email</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $email . '</td>
				</tr>
				<tr style="background-color: #f2f2f2;">
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Phone</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $phone . '</td>
				</tr>
				<tr>
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Booked Salon</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $salon . '</td>
				</tr>
				<tr style="background-color: #f2f2f2;">
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Booked Treatment</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $treatment . '</td>
				</tr>
				<tr>
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Existing Date</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $oldDate . '</td>
				</tr>
				<tr style="background-color: #f2f2f2;">
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Existing Time</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $oldTime . $oldPeriod . '</td>
				</tr>
				<tr>
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">New Date</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $newDate . '</td>
				</tr>
				<tr style="background-color: #f2f2f2;">
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">New Time</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $newTime . $newPeriod . '</td>
				</tr>
				<tr>
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Message</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $message . '</td>
				</tr>
				</table>';

                    $mail->Body = $htmlContent;

                    $mail->send();
                    header('Location: https://elegancesalons.co.uk/thank-you.html');

                } else {
                    echo "Please check captcha";
                }
            } else {
                echo "reCaptcha error";
            }
        }
    }

    public function cancel()
    {
        if (isset($_POST["send"])) {
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'hello@elegancesalons.co.uk';
            $mail->Password = 'velisctubogyxtck';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            if (isset($_POST['g-recaptcha-response'])) {
                $secretkey = "6LfzS34iAAAAACpYu0L0FSiBMx78SmP_bQQLwgXh";
                $ip = $_SERVER['REMOTE_ADDR'];
                $response = $_POST['g-recaptcha-response'];
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
                $fire = file_get_contents($url);
                $data = json_decode($fire);
                if ($data->success == true) {
                    $firstname = $_POST['ca-Fname'];
                    $lastname = $_POST['ca-Lname'];
                    $email = $_POST['ca-mail'];
                    $phone = $_POST['ca-phone'];
                    $salon = $_POST['ca-salon'];
                    $treatment = $_POST['ca-treatment'];
                    $date = $_POST['ca-date'];
                    $time = $_POST['ca-time'];
                    $message = $_POST['ca-message'];

                    $mail->setFrom('hello@elegancesalons.co.uk');
                    $mail->addAddress('hello@elegancesalons.co.uk');
                    $mail->isHTML(true);
                    $mail->Subject = 'Elegance Salons - Cancel Booking';

                    $htmlContent = '<img src="https://elegancesalons.co.uk/images/logo.png">
				<h3 style="color:#ecb3a0;">CANCELLATION REQUEST</h3>
				<table style="font-family: Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%;">
				<tr>
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">First Name</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $firstname . '</td>
				</tr>
				<tr style="background-color: #f2f2f2;">
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Last Name</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $lastname . '</td>
				</tr>
				<tr>
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Email</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $email . '</td>
				</tr>
				<tr style="background-color: #f2f2f2;">
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Phone</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $phone . '</td>
				</tr>
				<tr>
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Booked Salon</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $salon . '</td>
				</tr>
				<tr style="background-color: #f2f2f2;">
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Booked Treatment</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $treatment . '</td>
				</tr>
				<tr>
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Booking Date</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $date . '</td>
				</tr>
				<tr style="background-color: #f2f2f2;">
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Booking Time</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $time . '</td>
				</tr>
				<tr>
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Message</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $message . '</td>
				</tr>
				</table>';

                    $mail->Body = $htmlContent;

                    $mail->send();
                    header('Location: https://elegancesalons.co.uk/thank-you.html');

                } else {
                    echo "Please check captcha";
                }
            } else {
                echo "reCaptcha error";
            }
        }
    }

    public function newbooking()
    {
        if (isset($_POST["send"])) {
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'hello@elegancesalons.co.uk';
            $mail->Password = 'velisctubogyxtck';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            if (isset($_POST['g-recaptcha-response'])) {
                $secretkey = "6LfzS34iAAAAACpYu0L0FSiBMx78SmP_bQQLwgXh";
                $ip = $_SERVER['REMOTE_ADDR'];
                $response = $_POST['g-recaptcha-response'];
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
                $fire = file_get_contents($url);
                $data = json_decode($fire);
                if ($data->success == true) {
                    $firstname = $_POST['nb-Fname'];
                    $lastname = $_POST['nb-Lname'];
                    $email = $_POST['nb-mail'];
                    $phone = $_POST['nb-phone'];
                    $salon = $_POST['nb-salon'];
                    $treatment = $_POST['nb-treatment'];
                    $date = $_POST['nb-date'];
                    $time = $_POST['nb-time'];
                    $message = $_POST['nb-message'];

                    $mail->setFrom('hello@elegancesalons.co.uk');
                    $mail->addAddress('hello@elegancesalons.co.uk');
                    $mail->isHTML(true);
                    $mail->Subject = 'Elegance Salons - New Booking';

                    $htmlContent = '<img src="https://elegancesalons.co.uk/images/logo.png">
				<h3 style="color:#ecb3a0;">NEW BOOKING REQUEST</h3>
				<table style="font-family: Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%;">
				<tr>
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">First Name</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $firstname . '</td>
				</tr>
				<tr style="background-color: #f2f2f2;">
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Last Name</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $lastname . '</td>
				</tr>
				<tr>
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Email</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $email . '</td>
				</tr>
				<tr style="background-color: #f2f2f2;">
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Phone</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $phone . '</td>
				</tr>
				<tr>
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Booked Salon</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $salon . '</td>
				</tr>
				<tr style="background-color: #f2f2f2;">
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Booked Treatment</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $treatment . '</td>
				</tr>
				<tr>
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Booking Date</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $date . '</td>
				</tr>
				<tr style="background-color: #f2f2f2;">
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Booking Time</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $time . '</td>
				</tr>
				<tr>
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Message</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $message . '</td>
				</tr>
				</table>';

                    $mail->Body = $htmlContent;

                    $mail->send();
                    header('Location: https://elegancesalons.co.uk/thank-you.html');

                } else {
                    echo "Please check captcha";
                }
            } else {
                echo "reCaptcha error";
            }
        }
    }

    public function enquiry()
    {
        if (isset($_POST["send"])) {
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'hello@elegancesalons.co.uk';
            $mail->Password = 'velisctubogyxtck';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            if (isset($_POST['g-recaptcha-response'])) {
                $secretkey = "6LfzS34iAAAAACpYu0L0FSiBMx78SmP_bQQLwgXh";
                $ip = $_SERVER['REMOTE_ADDR'];
                $response = $_POST['g-recaptcha-response'];
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
                $fire = file_get_contents($url);
                $data = json_decode($fire);
                if ($data->success == true) {
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
					<td style="border: 1px solid #ddd;padding: 8px;">' . $firstname . '</td>
				</tr>
				<tr style="background-color: #f2f2f2;">
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Last Name</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $lastname . '</td>
				</tr>
				<tr>
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Email</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $email . '</td>
				</tr>
				<tr style="background-color: #f2f2f2;">
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Phone</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $phone . '</td>
				</tr>
				<tr>
					<td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Message</td>
					<td style="border: 1px solid #ddd;padding: 8px;">' . $message . '</td>
				</tr>
				</table>';

                    $mail->Body = $htmlContent;

                    $mail->send();
                    header('Location: https://elegancesalons.co.uk/thank-you.html');

                } else {
                    echo "Please check captcha";
                }
            } else {
                echo "reCaptcha error";
            }
        }
    }

    public function feedback()
    {
        if (isset($_POST["send"])) {
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'hello@elegancesalons.co.uk';
            $mail->Password = 'velisctubogyxtck';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            if (isset($_POST['g-recaptcha-response'])) {
                $secretkey = "6LfzS34iAAAAACpYu0L0FSiBMx78SmP_bQQLwgXh";
                $ip = $_SERVER['REMOTE_ADDR'];
                $response = $_POST['g-recaptcha-response'];
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
                $fire = file_get_contents($url);
                $data = json_decode($fire);
                if ($data->success == true) {
                    $firstname = $_POST['fe-Fname'];
                    $lastname = $_POST['fe-Lname'];
                    $from = $_POST['fe-mail'];
                    $phone = $_POST['fe-phone'];
                    $salon = $_POST['fe-salon'];
                    $treatment = $_POST['fe-treatment'];
                    $date = $_POST['fe-date'];
                    $time = $_POST['fe-time'];
                    $message = $_POST['fe-message'];

                    $msg = '';
                    if (array_key_exists('fe-attachment', $_FILES)) {
                        for ($ct = 0, $ctMax = count($_FILES['fe-attachment']['tmp_name']); $ct < $ctMax; $ct++) {
                            //Extract an extension from the provided filename
                            $ext = PHPMailer::mb_pathinfo($_FILES['fe-attachment']['name'][$ct], PATHINFO_EXTENSION);
                            //Define a safe location to move the uploaded file to, preserving the extension
                            $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['fe-attachment']['name'][$ct])) . '.' . $ext;
                            $filename = $_FILES['fe-attachment']['name'][$ct];
                            if (move_uploaded_file($_FILES['fe-attachment']['tmp_name'][$ct], $uploadfile)) {
                                if (!$mail->addAttachment($uploadfile, $filename)) {
                                    $msg .= 'Failed to attach file ' . $filename;
                                }
                            } else {
                                $msg .= 'Failed to move file to ' . $uploadfile;
                            }
                        }
                    }

                    $mail->setFrom('hello@elegancesalons.co.uk');
                    $mail->addAddress('hello@elegancesalons.co.uk');
                    $mail->isHTML(true);
                    $mail->Subject = 'Elegance Salons - Feedback';

                    $htmlContent = '<img src="https://elegancesalons.co.uk/images/logo.png">
                <h3 style="color:#ecb3a0;">CUSTOMER FEEDBACK</h3>
                <table style="font-family: Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%;">
                <tr>
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">First Name</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $firstname . '</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Last Name</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $lastname . '</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Email</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $from . '</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Phone</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $phone . '</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Salon Booked</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $salon . '</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Treatment Booked</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $treatment . '</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Booking Date</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $date . '</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Booking Time</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $time . '</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Message</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $message . '</td>
                </tr>
                </table>';

                    $mail->Body = $htmlContent;

                    $mail->send();
                    header('Location: https://elegancesalons.co.uk/thank-you.html');

                } else {
                    echo "Please check captcha";
                }
            } else {
                echo "reCaptcha error";
            }
        }
    }

    public function giftcard()
    {
        if (isset($_POST["send"])) {
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'hello@elegancesalons.co.uk';
            $mail->Password = 'velisctubogyxtck';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            if (isset($_POST['g-recaptcha-response'])) {
                $secretkey = "6LfzS34iAAAAACpYu0L0FSiBMx78SmP_bQQLwgXh";
                $ip = $_SERVER['REMOTE_ADDR'];
                $response = $_POST['g-recaptcha-response'];
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
                $fire = file_get_contents($url);
                $data = json_decode($fire);
                if ($data->success == true) {
                    $firstname = $_POST['gi-Fname'];
                    $lastname = $_POST['gi-Lname'];
                    $from = $_POST['gi-mail'];
                    $phone = $_POST['gi-phone'];
                    $giftedby = $_POST['gi-giftedby'];
                    $cardno = $_POST['gi-cardno'];
                    $message = $_POST['gi-message'];

                    if (
                        isset($_FILES['gi-attachment'])
                        && $_FILES['gi-attachment']['error'] == UPLOAD_ERR_OK
                    ) {
                        $mail->addAttachment(
                            $_FILES['gi-attachment']['tmp_name'],
                            $_FILES['gi-attachment']['name']
                        );
                    }

                    $mail->setFrom('hello@elegancesalons.co.uk');
                    $mail->addAddress('hello@elegancesalons.co.uk');
                    $mail->isHTML(true);
                    $mail->Subject = 'Elegance Salons - Gift Card';

                    $htmlContent = '<img src="https://elegancesalons.co.uk/images/logo.png">
                <h3 style="color:#ecb3a0;">GIFT CARD</h3>
                <table style="font-family: Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%;">
                <tr>
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">First Name</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $firstname . '</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Last Name</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $lastname . '</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Email</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $from . '</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Phone</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $phone . '</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Gifted by</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $giftedby . '</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Card Number</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $cardno . '</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Message</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $message . '</td>
                </tr>
                </table>';

                    $mail->Body = $htmlContent;

                    $mail->send();
                    header('Location: https://elegancesalons.co.uk/thank-you.html');

                } else {
                    echo "Please check captcha";
                }
            } else {
                echo "reCaptcha error";
            }
        }
    }

    public function opportunity()
    {
        if (isset($_POST["send"])) {
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'hello@elegancesalons.co.uk';
            $mail->Password = 'velisctubogyxtck';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            if (isset($_POST['g-recaptcha-response'])) {
                $secretkey = "6LfzS34iAAAAACpYu0L0FSiBMx78SmP_bQQLwgXh";
                $ip = $_SERVER['REMOTE_ADDR'];
                $response = $_POST['g-recaptcha-response'];
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
                $fire = file_get_contents($url);
                $data = json_decode($fire);
                if ($data->success == true) {
                    $firstname = $_POST['bu-Fname'];
                    $lastname = $_POST['bu-Lname'];
                    $from = $_POST['bu-mail'];
                    $phone = $_POST['bu-phone'];
                    $company = $_POST['bu-company'];
                    $position = $_POST['bu-position'];
                    $opportunity = $_POST['bu-opportunity'];
                    $message = $_POST['bu-message'];

                    if (
                        isset($_FILES['bu-attachment'])
                        && $_FILES['bu-attachment']['error'] == UPLOAD_ERR_OK
                    ) {
                        $mail->addAttachment(
                            $_FILES['bu-attachment']['tmp_name'],
                            $_FILES['bu-attachment']['name']
                        );
                    }

                    $mail->setFrom('hello@elegancesalons.co.uk');
                    $mail->addAddress('hello@elegancesalons.co.uk');
                    $mail->isHTML(true);
                    $mail->Subject = 'Elegance Salons - Business Opportunity';

                    $htmlContent = '<img src="https://elegancesalons.co.uk/images/logo.png">
                <h3 style="color:#ecb3a0;">BUSINESS OPPORTUNITY</h3>
                <table style="font-family: Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%;">
                <tr>
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">First Name</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $firstname . '</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Last Name</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $lastname . '</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Email</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $from . '</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Phone</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $phone . '</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Company</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $company . '</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Position</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $position . '</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Opportunity</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $opportunity . '</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Message</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $message . '</td>
                </tr>
                </table';

                    $mail->Body = $htmlContent;

                    $mail->send();
                    header('Location: https://elegancesalons.co.uk/thank-you.html');

                } else {
                    echo "Please check captcha";
                }
            } else {
                echo "reCaptcha error";
            }
        }
    }
    
    public function jobvacancy()
    {
        if (isset($_POST["send"])) {
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'hello@elegancesalons.co.uk';
            $mail->Password = 'velisctubogyxtck';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            if (isset($_POST['g-recaptcha-response'])) {
                $secretkey = "6LfzS34iAAAAACpYu0L0FSiBMx78SmP_bQQLwgXh";
                $ip = $_SERVER['REMOTE_ADDR'];
                $response = $_POST['g-recaptcha-response'];
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
                $fire = file_get_contents($url);
                $data = json_decode($fire);
                if ($data->success == true) {
                    $firstname = $_POST['jo-Fname'];
                    $lastname = $_POST['jo-Lname'];
                    $from = $_POST['jo-mail'];
                    $phone = $_POST['jo-phone'];
                    $salon = $_POST['jo-salon'];
                    $position = $_POST['jo-position'];
                    $quali = $_POST['jo-quali'];
                    $country = $_POST['jo-country'];
                    $exp = $_POST['jo-exp'];
                    $eligibility = $_POST['jo-eligibility'];
                    $dob = $_POST['jo-dob'];
                    $treatment = $_POST['jo-treatment'];
                    $pref = $_POST['jo-pref'];
                    $message = $_POST['jo-message'];

                    if (
                        isset($_FILES['jo-attachment'])
                        && $_FILES['jo-attachment']['error'] == UPLOAD_ERR_OK
                    ) {
                        $mail->addAttachment(
                            $_FILES['jo-attachment']['tmp_name'],
                            $_FILES['jo-attachment']['name']
                        );
                    }

                    $mail->setFrom('hello@elegancesalons.co.uk');
                    $mail->addAddress('hello@elegancesalons.co.uk');
                    $mail->isHTML(true);
                    $mail->Subject = 'Elegance Salons - Business Opportunity';

                    $htmlContent = '<img src="https://elegancesalons.co.uk/images/logo.png">
                <h3 style="color:#ecb3a0;">JOB APPLICATION</h3>
                <table style="font-family: Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%;">
                <tr>
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">First Name</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $firstname . '</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Last Name</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $lastname . '</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Email</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $from . '</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Phone</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $phone . '</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Salon</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $salon . '</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Position</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $position . '</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Qualification</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $quali . '</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Qualified Country</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $country . '</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Experience after Qualification</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $exp . '</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Eligibility to work in UK</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $eligibility . '</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Date Of Birth</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $dob . '</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Treatments you are confident with</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $treatment . '</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Prefered Job</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $pref . '</td>
                </tr>
                <tr style="background-color: #f2f2f2;">
                    <td style="border: 1px solid #ddd;padding: 8px;font-weight: bold;">Additional Details</td>
                    <td style="border: 1px solid #ddd;padding: 8px;">' . $message . '</td>
                </tr>
                </table>';

                    $mail->Body = $htmlContent;

                    $mail->send();
                    header('Location: https://elegancesalons.co.uk/thank-you.html');

                } else {
                    echo "Please check captcha";
                }
            } else {
                echo "reCaptcha error";
            }
        }
    }
}