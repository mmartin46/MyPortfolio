<!--John 3:5-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mitchell Martin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="mail.css">
        <style>

        </style>
    </head>
    <body>
        <div class="p-3 text-center" id="settings">
            <h6 class="click-section d-inline-block" id="about-me">About Me</h6>
            <select id="projectDropdown">
                <option selected disabled hidden id="projects-id">Projects</option>
                <option id="game-option">Games</option>
                <option id="mobile-option">Mobile Apps</option>
            </select>
            <h6 class="click-section d-inline-block ml-3">Contact</h6>
        </div>
        <h2 class="fade-text animate__animated animate__fadeInUp" id="mainMessage">Thank you, your message has been sent</h1>
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

            function allowToSendMail($mail, $recipient) {
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
            }

            if (isset($_POST['submit'])) {
            
                $recipient = "mitchellbmartin00@gmail.com";

                $mail = new PHPMailer(true);
                allowToSendMail($mail, $recipient);

            } else {
                echo "Nothing was used";
            }

        ?>
        <!-- Bootstrap and jQuery Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="script.js"></script>
        <script>
            $(document).ready(function () {

                $(".fade-text").animate({
                    opacity: 1
                }, {
                   duration: 1000,
                   easing: "swing"
                });
            })
        </script>


    </body>
</html>