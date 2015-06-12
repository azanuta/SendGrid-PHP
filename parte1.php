<?php

require_once "sendgrid/newsletter.php";

$sg_user = '';
$sg_api_key = '';
$sendgrid = new sendgridNewsletter($sg_user, $sg_api_key, true, false);

$list = 'Teste3';
$sendgrid->newsletter_lists_add($list, '');

$data = array('email' => 'vitor.hugo@vlance.com.br', 'name' => 'Vitor');
$sendgrid->newsletter_lists_email_add($list, $data);
