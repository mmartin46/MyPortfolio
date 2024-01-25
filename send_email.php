<?php

    require __DIR__ . '/vendor/autoload.php';

    use Dotenv\Dotenv;

    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'mailer/src/Exception.php';
    require 'mailer/src/PHPMailer.php';
    require 'mailer/src/SMTP.php';

    if (isset($_POST['submit'])) {
    
        $recipient = "mitchellbmartin00@gmail.com";

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = $_ENV['M_USERNAME'];
            $mail->Password = $_ENV['M_PASSCODE'];
            $mail->SMTPSecure = $_ENV['M_PORT'];
            $mail->Port = $_ENV['M_PORT'];

            $mail->setFrom($_POST['email']);
            $mail->addAddress($recipient);
            $mail->isHTML(true);

            $mail->Subject = "From: " . $_POST["email"] . "   \"" . $_POST["subject"] . "\"";
            $mail->Body = $_POST["message"];

            $mail->send();
        } catch (Exception $e) {
            echo "Didn't work {$mail->ErrorInfo}";
        }


    } else {
        echo "Nothing was used";
    }

?>