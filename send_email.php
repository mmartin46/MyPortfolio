<!--John 3:5-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mitchell Martin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/mail.css">
        <style>

        </style>
    </head>
    <body>
        <div class="p-3 text-center" id="settings" onclick="redirectToOriginalPage()">
            <h6 class="click-section d-inline-block" id="about-me">About Me</h6>
            <select id="projectDropdown">
                <option selected disabled hidden id="projects-id">Projects</option>
                <option id="game-option">Games</option>
                <option id="mobile-option">Mobile Apps</option>
            </select>
            <h6 class="click-section d-inline-block ml-3">Contact</h6>
        </div>
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

            define('MESSAGE_SENT', '<h2 class="fade-text animate__animated animate__fadeInUp" id="mainMessage">Thank you, your message has been sent</h1>');
            define('MESSAGE_DIDNT_SEND', '<h2 class="fade-text animate__animated animate__fadeInUp" id="mainMessage">There was a problem sending your message.<br>Please try again</h1>');
            define('MESSAGE_ERROR', '<h2 class="fade-text animate__animated animate__fadeInUp" id="mainMessage">Sorry there is an issue with the server.<br>Thanks for your patience</h1>');


            
            function allowToSendMail($mail, $recipient) {
                try {
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = $_ENV['M_USERNAME'];
                    $mail->Password = $_ENV['M_PASSCODE'];
                    $mail->SMTPSecure = $_ENV['M_PORT'];
                    $mail->Port = $_ENV['M_PORT'];

                    if (empty($_POST['email']) || empty($_POST['message'])) {
                        return false;
                    }

                    $mail->setFrom($_POST['email']);
                    $mail->addAddress($recipient);
                    $mail->isHTML(true);

                    $mail->Subject = "From: " . $_POST["email"] . "   \"" . $_POST["subject"] . "\"";
                    $mail->Body = $_POST["message"];

                    $mail->send();
                    return true;
                } catch (Exception $e) {
                    return false;
                }
            }

            if (isset($_POST['submit'], $_POST["email"], $_POST["message"])) {
            
                $recipient = "mitchellbmartin00@gmail.com";

                $mail = new PHPMailer(true);
                
                if (allowToSendMail($mail, $recipient)) {
                    print MESSAGE_SENT;
                } else {
                    print MESSAGE_DIDNT_SEND;
                }
            } else {
                print MESSAGE_DIDNT_SEND;
            }
        ?>
        <!-- Bootstrap and jQuery Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
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

        <script>
            function redirectToOriginalPage() {
                window.location.href = "index.php"
            }
        </script>
    </body>
</html>