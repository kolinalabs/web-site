<?php

namespace Modules\Page\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use PHPMailer\PHPMailer\PHPMailer;

class FormController extends Controller
{

    public function sendEmail(Request $request)
    {
        // Success Mesasge
        $msgSuccess = "Nós recebemos com <strong>sucesso</strong> sua mensagem. Logo entraremos em contato.";

        $name = $request->request->get('contact-name');
        $email = $request->request->get('contact-email');
        $phone = $request->request->get('contact-phone') ? $request->request->get('contact-phone') : 'Sem telefone';
        $subject = $request->request->get('contact-phone') ? $request->request->get('contact-phone') : 'Sem assunto';
        $message = $request->request->get('contact-message');

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'mail.kolinalabs.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'contato@kolinalabs.com';                 // SMTP username
            $mail->Password = '2015@contact';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('contato@kolinalabs.com', 'Kolina Labs | Contato');
            //$mail->addAddress('si@kolinalabs.com', 'Kolina Labs | SI');               // Name is optional
            $mail->addAddress($email);

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = "Mensagem de Contato | {$name}";

            $body = "";
            $body .= "<p><b>Nome:</b> {$name}</p>";
            $body .= "<p><b>Email:</b> {$email}</p>";
            $body .= "<p><b>Telefone:</b> {$phone}</p>";
            $body .= "<p><b>Assunto:</b> {$subject}</p>";
            $body .= "<p><b>Mensagem:</b> {$message}</p>";

            $mail->Body = $body;

            $mail->send();

            $response = array ('result' => "success", 'message' => $msgSuccess);

            return (json_encode($response));
        } catch (\Exception $e) {
            $response = array ('result' => "error", 'message' => $mail->ErrorInfo);

            return (json_encode($response));
        }
    }
}
