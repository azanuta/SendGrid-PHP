<?php

require_once "sendgrid/newsletter.php";

$sg_user = 'vlance';
$sg_api_key = 'vlance2382';

//Creates a new SendGrid Newsletter API object to make calls with
/*
 * YOU CAN ALSO SET $debug to true for DEBUGGING and $curl_ssl_verify to false for disabling cert verification
 * ($user, $key , $debug = false , $curl_ssl_verify = true)
 *
 */
$sendgrid = new sendgridNewsletter($sg_user, $sg_api_key, false, false);

$text = 'xxxxxxxxxxxxx';
$html = '<html><body><img src="http://vlance.com.br/leiloeiros/img/logo.png"></body></hmtl>';
$subject = 'Sucesso';

/**
 * Create a new Newsletter...
 * @param string $identity - The Identity that will be used for the Newsletter being created.
 * @param string $name - The name that will be used for the Newsletter being created.
 * @param string $subject - The subject that will be used for the Newsletter being created.
 * @param string $text - The text portion of the Newsletter being created.
 * @param string $html - The html portion of the Newsletter being created.
 */
$identity = 'vLance';
$name = 'Teste9';

$sendgrid->newsletter_add($identity, $name, $subject, $text, $html);

/**
 * Create a new Recipient List...
 * @param string $list	- Create a Recipient List with this name.
 * @param string $name	- Specify the column name for the ‘name’ associated with email addresses..
 */
//$list = 'Teste1';

//$sendgrid->newsletter_lists_add($list, '');

/**
 * Add an email to an existing Recipient List.
 * @param string $list	- The list which you are adding email addresses too.
 * @param array $data	- Specify the name, email address, and additional fields to add to the specified Recipient List..
 * 	EX: $data = array(
 * 				'email'	=>	'test1@test.com',
 * 				'name'	=>	'John Doe',
 * 				'Address' => '1234 Cool St',
 * 				'Zip Code' => '90210',
 * 			);
 * must use email and name fields (other fileds are optional)
 */
//$data = array('email' => 'vitor.hugo@vlance.com.br', 'name' => 'Vitor');

//$sendgrid->newsletter_lists_email_add($list, $data);

/**
 * Get an Existing Recipient List...
 * @param string $list	- Check for this particular list. (To list all Recipient Lists on your account exclude this parameter);
 */

$lista_sendgrid = $sendgrid->newsletter_lists_get('');
print "<pre>";
print_r($lista_sendgrid);
//exit;
//$sendgrid->newsletter_lists_get($list)



/**
 * Add one or more Recipient List to a Newsletter.
 * @param string $name	- This is the Newsletter to which you are adding Recipients Lists.
 * @param string $name	- This is the Recipient List that will be added to the Newsletter
 */
$sendgrid->newsletter_recipients_add($name, $lista_sendgrid[55]['list']);

/**
 * Create a new schedule event.
 * @param string $name	- Newsletter to schedule delivery for. (If Newsletter should be sent now, include no additional parameters.);
 * @param string $at	- Date / Time to schedule newsletter Delivery.
 * 	Date / Time must be provided in ISO 8601 format (YYYY-MM-DD HH:MM:SS +-HH:MM);
 * @param string $after	- Number of minutes until delivery should occur. Must be a positive integer.
 */
$sendgrid->newsletter_schedule_add($name, '', '');

//echo "<meta HTTP-EQUIV='refresh' CONTENT='3;URL=sample-newsletter.php'>";
?>