<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-85c2e51c41eca78eda10be03eb40d125');
$domain = "sandbox8d42cdc05ec344f894a7a1de8a4b38c6.mailgun.org";
# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
    array('from'    => 'mailgun@sandbox8d42cdc05ec344f894a7a1de8a4b38c6.mailgun.org',
        'to'      => 'vankhaiht@gmail.com',
        'subject' => 'Hello',
        'text'    => 'Testing some Mailgun awesomeness!'));

