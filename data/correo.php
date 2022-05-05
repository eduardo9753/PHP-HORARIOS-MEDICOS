<?php

//PHP MEILER
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'lib/PHPMailer/src/Exception.php';
require 'lib/PHPMailer/src/PHPMailer.php';
require 'lib/PHPMailer/src/SMTP.php';


class Correo
{
    private $HOST;
    private $PORT;
    private $USERNAME;
    private $PASSWORD;
    private $DEBUG;
    private $AUTH;

    private $configuracion = [
        'host'     => 'mail.sanpablo.com.pe',
        'port'     => '587',
        'username' => 'aenunez@sanpablo.com.pe',
        'password' => '1n*0Fu6AeF!',
        'debug'    => '0',
        'auth'     => true,
    ];

    //constructor
    public function __construct()
    {
        $this->HOST     = $this->configuracion['host'];
        $this->PORT     = $this->configuracion['port'];
        $this->USERNAME = $this->configuracion['username'];
        $this->PASSWORD = $this->configuracion['password'];
        $this->DEBUG    = $this->configuracion['debug'];
        $this->AUTH     = $this->configuracion['auth'];
    }



    public function saveEmailSugerencia(Evento $evento)
    {
        //PHP MEILER
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug  = $this->DEBUG;                      //mensajes cliente-servidor
            $mail->isSMTP();                                       //Send using SMTP
            $mail->Host       = $this->HOST;
            $mail->SMTPAuth   = $this->AUTH;                       //Enable SMTP authentication
            $mail->Username   = $this->USERNAME;                   //SMTP username
            $mail->Password   = $this->PASSWORD;                   //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = $this->PORT;                       //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients 
            $mail->setFrom('aenunez@sanpablo.com.pe', " Area SISTEMAS");

            //Personas a las que se le enviara los correos
            $mail->addAddress('aenunez@sanpablo.com.pe');    //Add a recipient
            $mail->addAddress('dmori@sanpablo.com.pe');               //Name is optional
            $mail->addReplyTo('aenunez@sanpablo.com.pe', 'Information');
            $mail->addCC('aenunez@sanpablo.com.pe');
            $mail->addBCC('aenunez@sanpablo.com.pe');


            /*Attachments
            $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name*/

            //Content
            $mail->isHTML(true);                                   //Set email format to HTML
            $mail->Subject = "REGISTRO DE SUGERENCIAS";
            $mail->Body    = utf8_decode("<div class='card'>
            <div>
               <h1> CREACIÓN DE CORREO </h1>
               <p>Nombre : " . $evento->getpaciente() . "</p>
               <p>Area   : " . $evento->getpaciente() . "</p>
               <p>ESTADO : " . $evento->getpaciente() . "</p>
            </div>
            <table class='default'>

            <table border='1'>
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>DNI</th>
                    <th>AREA</th>
                    <th>JEFE</th>
                </tr>
            </thead>
            <tbody>
                    <tr class=''>
                        <td>" . $evento->getpaciente() . "</td>
                        <td>" . $evento->getpaciente() . "</td>
                        <td>" . $evento->getpaciente() . "</td>
                        <td>" . $evento->getpaciente() . "</td>
                    </tr>
            </tbody>
        </table>");
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            if ($mail->send()) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }


    public function saveEmailQuejas(Evento $evento)
    {
        //PHP MEILER
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug  = $this->DEBUG;                      //mensajes cliente-servidor
            $mail->isSMTP();                                       //Send using SMTP
            $mail->Host       = $this->HOST;
            $mail->SMTPAuth   = $this->AUTH;                       //Enable SMTP authentication
            $mail->Username   = $this->USERNAME;                   //SMTP username
            $mail->Password   = $this->PASSWORD;                   //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = $this->PORT;                       //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients 
            $mail->setFrom('aenunez@sanpablo.com.pe', " Area SISTEMAS");

            //Personas a las que se le enviara los correos
            $mail->addAddress('aenunez@sanpablo.com.pe');    //Add a recipient
            $mail->addAddress('dmori@sanpablo.com.pe');               //Name is optional
            $mail->addReplyTo('aenunez@sanpablo.com.pe', 'Information');
            $mail->addCC('aenunez@sanpablo.com.pe');
            $mail->addBCC('aenunez@sanpablo.com.pe');


            /*Attachments
            $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name*/

            //Content
            $mail->isHTML(true);                                   //Set email format to HTML
            $mail->Subject = "REGISTRO DE QUEJAS";
            $mail->Body    = utf8_decode("<div class='card'>
            <div>
               <h1> CREACIÓN DE CORREO </h1>
               <p>Nombre : " . $evento->getpaciente() . "</p>
               <p>Area   : " . $evento->getpaciente() . "</p>
               <p>ESTADO : " . $evento->getpaciente() . "</p>
            </div>
            <table class='default'>

            <table border='1'>
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>DNI</th>
                    <th>AREA</th>
                    <th>JEFE</th>
                </tr>
            </thead>
            <tbody>
                    <tr class=''>
                        <td>" . $evento->getpaciente() . "</td>
                        <td>" . $evento->getpaciente() . "</td>
                        <td>" . $evento->getpaciente() . "</td>
                        <td>" . $evento->getpaciente() . "</td>
                    </tr>
            </tbody>
        </table>");
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            if ($mail->send()) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
