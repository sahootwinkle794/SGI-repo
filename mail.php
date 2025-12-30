<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ==== SERVER-SIDE RATE LIMITING (max 5 submissions per IP per hour) ====
    $ip = $_SERVER['REMOTE_ADDR'];
    $limit = 3;          // Max submissions
    // $timeWindow = 3600;  // 1 hour
    $timeWindow = 60;  // 1 min

    $rateLimitFile = __DIR__ . "/rate_limit.json";

    // Create file if not exists
    if (!file_exists($rateLimitFile)) {
        file_put_contents($rateLimitFile, json_encode([]));
    }

    $data = json_decode(file_get_contents($rateLimitFile), true);

    // Initialize array for new IP
    if (!isset($data[$ip])) {
        $data[$ip] = [];
    }

    // Remove timestamps older than 1 hour
    $data[$ip] = array_filter($data[$ip], function ($timestamp) use ($timeWindow) {
        return ($timestamp > time() - $timeWindow);
    });

    // Check limit
    if (count($data[$ip]) >= $limit) {
        echo json_encode([
            "status" => "error",
            "message" => "Too many submissions. Please try again after 1 minute."
        ]);
        exit;
    }

    // Add current timestamp
    $data[$ip][] = time();

    // Save back to file
    file_put_contents($rateLimitFile, json_encode($data));


    // // === reCAPTCHA v2 BACKEND VALIDATION ===
    // $recaptchaSecret = "6LfgKiIsAAAAANda_vPPSP8NEVPBq9NM9Vawxxkx";   // secret key
    // $recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';

    // $verifyURL = "https://www.google.com/recaptcha/api/siteverify";

    // $response = file_get_contents($verifyURL . "?secret=" . $recaptchaSecret . "&response=" . $recaptchaResponse);
    // $responseData = json_decode($response, true);

    // if (!$responseData["success"]) {
    //     echo json_encode(["status" => "error", "message" => "reCAPTCHA verification failed. Please try again."]);
    //     exit;
    // }

    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $number  = trim($_POST['number'] ?? '');
    $company  = trim($_POST['company'] ?? '');
    $message = trim($_POST['message'] ?? '');    
    // $captcha_input = trim($_POST['captcha_input'] ?? '');

    // if (!isset($_SESSION['captcha_code'])) {
    //     echo json_encode(["status" => "error", "message" => "Captcha session expired"]);
    //     exit;
    // }

    // // if (strtolower($captcha_input) !== strtolower($_SESSION['captcha_code'])) {
    // if ($captcha_input != $_SESSION['captcha_code']) {
    //     echo json_encode(["status" => "invalid_captcha", "message" => "Invalid captcha entered"]);
    //     exit;
    // }
    
    if (!preg_match("/^[A-Za-z ]{3,80}$/", $name)) {
        echo json_encode(["status" => "error", "message" => "Invalid name. Only letters & spaces allowed."]);
        exit;
    }

    // if (!preg_match("/^[0-9]{10}$/", $number)) {
    //     echo json_encode(["status" => "error", "message" => "Mobile number must be exactly 10 digits"]);
    //     exit;
    // }
    // if (!preg_match("/^[6-9]/", $number)) {
    //     echo json_encode(["status" => "error", "message" => "Indian mobile numbers must start with 6, 7, 8, or 9"]);
    //     exit;
    // }
    
    if (!preg_match("/^[6-9][0-9]{9}$/", $number)) {
        echo json_encode(["status" => "error", "message" => "Invalid mobile number. Use 10 digits starting with 6, 7, 8, or 9."]);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "Invalid email address"]);
        exit;
    }

    if (!preg_match("/^[A-Za-z ]{3,80}$/", $company)) {
        echo json_encode(["status" => "error", "message" => "Invalid Company name. Only letters & spaces allowed."]);
        exit;
    }

    if (strlen($message) < 10 || strlen($message) > 1000) {
        echo json_encode(["status" => "error", "message" => "Message must be 10-1000 characters"]);
        exit;
    }

    if (!preg_match("/^[A-Za-z0-9 .,!?@#()\-_\r\n]{10,1000}$/s", $message)) {
        echo json_encode(["status" => "error", "message" => "Message contains invalid characters"]);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP Settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'dipshikhamishra30094@gmail.com';
        $mail->Password   = 'gwmezmobupccqpkc'; // Gmail App Password         
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // SEND MAIL TO ADMIN
        $mail->setFrom('dipshikhamishra30094@gmail.com', 'Website Contact Form');
        //$mail->addAddress('prabhas.khamari@stlindia.com');
        $mail->addAddress('ankita.sahoo@silicontechlab.com');

        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission - Sukshma Gamma";
        $mail->Body = "
            <p>Dear Sir/madam,</p>
            <p>You have received a new message via the website contact form.</p>

            <h3 style='margin-top:20px;'>User Details:</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Mobile:</strong> $number</p>
            <p><strong>Mobile:</strong> $company</p>

            <h3 style='margin-top:20px;'>Message:</h3>
            <p style='white-space:pre-line;'>$message</p>
        ";        
        // <hr><p style='font-size:12px;color:#777;'>This is an automated email from Prath Technologies Pvt Ltd.</p>

        $mail->send();

        // SEND CONFIRMATION MAIL TO USER
        $mail->clearAddresses();
        $mail->addAddress($email);
        
        $mail->Subject = "Thank You for Contacting Sukshma Gamma!";
        $mail->Body = "
            <h3>Dear $name,</h3>
            <p>Thank you for contacting us!</p>
            <p>Your message has been received successfully. Our team will get back to you shortly.</p>

            <h4>Your Message:</h4>
            <p style='white-space:pre-line;'>$message</p>

            <br>
            <p>Regards,<br><strong>Sukshma Gamma Team</strong></p>
        ";

        $mail->send();

        unset($_SESSION['captcha_code']);
        echo json_encode(["status" => "success", "message" => "Details sent successfully"]);
    } 
    catch (Exception $e) {
        unset($_SESSION['captcha_code']);
        echo json_encode(["status" => "error", "message" => "Mailer Error: ".$mail->ErrorInfo]);
    }
} else {
    unset($_SESSION['captcha_code']);
    echo json_encode(["status" => "error", "message" => "Invalid Request"]);
}
