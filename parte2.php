<?php

require_once "sendgrid/newsletter.php";

//Log in do Send Grid
$sg_user = '';
$sg_api_key = '';
$sendgrid = new sendgridNewsletter($sg_user, $sg_api_key, false, false);

//Corpo e html do email
$text = 'xxxxxxxxxxxxx';
$html = '<html><body><img src="http://vlance.com.br/leiloeiros/img/logo.png"></body></hmtl>';
//Assunto do Email
$subject = 'Sucesso';

//Entidade que controla o email
$identity = 'vLance';

//Nome do Email Marketing
$name = 'Teste9';

//Função para ADICIONAR um novo EMAIL MARKETING
$sendgrid->newsletter_add($identity, $name, $subject, $text, $html);

//Função para PEGAR todas as LISTAS DE EMAILS
$lista_sendgrid = $sendgrid->newsletter_lists_get('');
print "<pre>";
print_r($lista_sendgrid);

//Função para ASSOCIAR uma LISTA DE EMAILS ao NEWSLETTER
$sendgrid->newsletter_recipients_add($name, $lista_sendgrid[55]['list']);

//Horário em formato (YYYY-MM-DDTHH:MM:SS+-HH:MM)
//Função para DISPARAR EMAILS PROGRAMÁVEIS
$sendgrid->newsletter_schedule_add($name, $at = '', '');


?>