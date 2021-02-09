<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
mb_internal_encoding('utf-8');

require_once __DIR__ . '/mailer/class.phpmailer.php';
require_once __DIR__ . '/mailer/class.smtp.php';

class EmailSender
{

    function sendMail($sender, $sender_name, $receiver, $cc, $bcc, $subject, $content, $user, $pwd, $att)
    {

        $mail = new PHPMailer(true);
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->Username = $user;
        $mail->Password = $pwd;
        $mail->SetFrom($sender, $sender_name);
        $mail->Subject = $subject;
        $mail->IsHTML(true);
        $mail->WordWrap = 0;
        $mail->Body = $content;
        $mail->CharSet = "utf-8";

        if ($att['string'])
            $mail->AddStringAttachment($att['string'], $att['filename'], $att['encoding'], $att['type']);

        if (is_array($receiver)) {
            foreach ($receiver as $data) {
                $mail->AddAddress($data);
            }
        } else
            $mail->AddAddress($receiver);

        if (sizeof($cc) > 0)
            foreach ($cc as $data)
                $mail->AddCC($data);

        if (sizeof($bcc) > 0)
            foreach ($bcc as $data)
                $mail->AddBCC($data);

        $mail->Send();
    }

}

?>