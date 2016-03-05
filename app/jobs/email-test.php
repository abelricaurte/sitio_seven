<?php

  require_once "../Mail-1.3.0/Mail.php";

  $from = 'info@seven4n.com';
  $to = 'jean@seven4n.com';
  $subject = 'Hi!';
  $body = "Hi,\n\nHow are you?";

  $headers = array(
      'From' => $from,
      'To' => $to,
      'Subject' => $subject
  );

  $smtp = Mail::factory('smtp', array(
          'host' => 'ssl://smtp.gmail.com',
          'port' => '465',
          'auth' => true,
          'username' => 'jean@seven4n.com',
          'password' => 'equ@12014'
      ));

  $mail = $smtp->send($to, $headers, $body);

  if (PEAR::isError($mail)) {
      echo('<p>' . $mail->getMessage() . '</p>');
  } else {
      echo('<p>Message successfully sent!</p>');
  }

?>