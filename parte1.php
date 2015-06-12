<?php

require_once "sendgrid/newsletter.php";

//Log in do Send Grid
$sg_user = '';
$sg_api_key = '';
$sendgrid = new sendgridNewsletter($sg_user, $sg_api_key, true, false);

//Nome da lista de Destinatários
$list = 'Teste3';
$sendgrid->newsletter_lists_add($list, '');

//Array para dados de um DESTINATÁRIO
$data = array('email' => 'vitor.hugo@vlance.com.br', 'name' => 'Vitor');

//Função para ADICIONAR um novo DESTINATÁRIO
$sendgrid->newsletter_lists_email_add($list, $data);
