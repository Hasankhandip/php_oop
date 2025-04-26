<?php

spl_autoload_register(function ($class_name) {
    include "classes/" . $class_name . ".php";
});

$user = new User();
$msg  = $user->getMsg();

switch ($msg) {
case 'email':
    $objmsg = new SendEmail();
    break;
case 'sms':
    $objmsg = new SendSms();
    break;
case 'fax':
    $objmsg = new SendFax();
    break;
}
$objmsg->notification();