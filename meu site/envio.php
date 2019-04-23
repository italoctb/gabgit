<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];
$data = $_POST["data"];
$mensagem = $_POST["mensagem"];

if($email == "" || $email == "NULL" && $nome == "" || $nome == "NULL"){
	echo"<script language='javascript' type='text/javascript'>alert('Campo Email Obrigatório!');window.location.href='/'</script>";
}
if($nome == "" || $nome == "NULL"){
	echo"<script language='javascript' type='text/javascript'>alert('Campo Nome Obrigatório!');window.location.href='/'</script>";
}
if($mensagem == "" || $mensagem == "NULL"){
	echo"<script language='javascript' type='text/javascript'>alert('Digite uma Mensagem!');window.location.href='/'</script>";
}
else{
	
require 'phpmailer/PHPMailerAutoload.php';
	
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 'gabriel.labohou@gmail.com';
$mail->Password = 'gabrielqwe098';
$mail->Port = 587;

$mail->setFrom('gabriel.labohou@gmail.com');
$mail->addReplyTo('gabriel.labohou@gmail.com');
$mail->addAddress('gabriel.labohou@gmail.com', ‘Nome’);
$mail->addBCC('gabriel.labohou@gmail.com', 'Cópia Oculta');

$mail->isHTML(true);
$mail->Subject = "$assunto - $nome";
$texto = "<b>Nome:</b> $nome <br> <b>Email:</b> $email <br> <b>Data:</b> $data <br> <b>Mensagem:</b><br> $mensagem";
$mail->Body = "$texto";
	
if(!$mail->send()) {
    echo"<script language='javascript' type='text/javascript'>alert('Erro ao Enviar Mensagem!');window.location.href='/'</script>";
    echo 'Erro: ' . $mail->ErrorInfo;
} else {
    echo"<script language='javascript' type='text/javascript'>alert('Mesagem Enviada com Sucesso!');window.location.href='/'</script>";
}
}
?>