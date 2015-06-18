<?php
    require_once('../PHPMailer/PHPMailerAutoload.php');
    require_once('recaptchalib.php');
    require_once('params.php');
    $resp = recaptcha_check_answer($params->captcha_key, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);

    if (!$resp->is_valid && false) {
        die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
        "(reCAPTCHA said: " . $resp->error . ")");
    } else {
        $realm = $_POST['realm'];
        $armory = 'http://' . $_POST['armory'];
        $character = $_POST['character'];
        $statement = $_POST['statement'];

        $email = <<<EOM
Character name: $character
Realm: $realm
Armory: $armory

Statement:
$statement
EOM;

        $subject = "Guild application: $character";

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = $params->mail['smtp_host'];
        $mail->SMTPAuth = true;
        $mail->Username = $params->mail['from'];
        $mail->Password = $params->mail['password'];
        $mail->SMTPSecure = 'tls';

        $mail->From = $params->mail['from'];
        $mail->FromName = $params->mail['from_name'];
        $mail->Subject = $subject;
        $mail->Body = $email;

        foreach ($params->mail['recipients'] as $recipient) {
            $mail->addAddress($recipient);
        }

        $mail->send();

        header('Location: /?success');
    }
