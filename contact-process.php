<?php
/**
 * Created by PhpStorm.
 * User: Dhales
 * Date: 27/05/2017
 * Time: 12:17
 */

require 'lib/PHPMailer-master/PHPMailer-master/PHPMailerAutoload.php';

$form["nome"] = $_POST['nome'];
$form["email"] = $_POST['email'];
$form["tel"] = $_POST['tel'];
$form["assunto"] = $_POST['assunto'];
$form["menssage"] = $_POST['menssage'];


//$mail->SMTPDebug = 2;                               // Enable verbose debug output

$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';
$mail->isSMTP();

$mail->Host = 'smtp.imixle.com.br';                   // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'site@imixle.com.br';               // SMTP username
$mail->Password = 'DD9e58c368!';                      // SMTP password
$mail->Port = 587;                                    // TCP port to connect to
$mail->From = 'site@imixle.com.br';

$mail->addAddress('contato@imixle.com.br');   // Add a recipient
$mail->FromName = "WebSite";

$mail->isHTML(true);                           // Set email format to HTML

$mail->Subject = $form["assunto"];
$mail->Body    = <<<EOD

    <div class="panel panel-dct" style="margin-bottom: 20px;background-color:rgb(250, 250, 250);border: 1px solid transparent;border-radius: 4px;-webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);box-shadow: 0 1px 1px rgba(0,0,0,.05);border-color: #dddee0; box-shadow: 0px 1px 6px 1px rgba(176,176,176,1);">
    <div class="panel-heading" style="padding: 16px 24px;border-radius: 3px 3px 0 0; background-color: rgb(63,81,181); box-shadow: 0px 1px 6px 1px rgba(176,176,176,1);">
        <h3 class="panel-title dct-color" style="margin-top: 0;margin-bottom: 0;font-size: 24px;color: rgba(255,255,255,0.87)">Novo contato pelo site</h3>
    </div>
    <div class="panel-body" style="padding: 16px 24px;">
    
            <p>Olá,</p>
            <p>Recebemos um novo contato pelo site.</p>
            <p>O contato é de: <b style="font-weight: bold">$form[nome]</b> com assunto: <b style="font-weight: bold">$form[assunto]</b></p>
            <p>E a menssagem: <b style="font-weight: bold">$form[menssage]</b></p>
            <p>Fone: <b style="font-weight: bold">$form[tel]</b></p>
            <p>Contato: <b style="font-weight: bold">$form[email]</b></p>
           
    
            <p class="bold" style="font-weight: bold; color:rgb(93, 154, 1)">Grato, Equipe Imixle Serviços e Sistemas.</p>
    
        </div>
        <div class="panel-footer" style="padding: 16px 8px;background-color: rgb(0, 31, 69);border-radius: 0 0 3px 3px; border-top:4px solid; border-top-color: rgb(249, 169, 7);">
        </div>
    </div>

EOD;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header("Location: /obrigado.php");
}