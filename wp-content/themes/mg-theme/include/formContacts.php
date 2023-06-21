<?php

function formContacts(){

  $to = 'onyx18121990@gmail.com';
  $from = 'max.globa.1990@ya.ru';

  $subject = 'Eye health Contact us form';

  $message = '
    <p>Name: '.$_POST['name'].'</p>
    <p>Email: '.$_POST['email'].'</p>
    <p>Message: '.$_POST['msg'].'</p>
  ';

  $headers =  'From: '. $from . "\r\n" .
              'Reply-To: ' . $_POST['email'] . "\r\n";

  $send_email = wp_mail( $to, $subject, $message, $headers);

  if( $send_email ){
    $response = [
      'status' => 'success',
      'msg' => 'Thank you! Your message was sent, we will contact you shortly.'
    ];
  } else {
    $response = [
      'status' => 'error',
      'msg' => 'Oops, Error! Something went wrong, please reload page and try againe.',
      'data' => json_encode($send_email)
    ];
  }

  echo json_encode($response);

  wp_die();
}
add_action('wp_ajax_formContacts', 'formContacts');
add_action('wp_ajax_nopriv_formContacts', 'formContacts');
