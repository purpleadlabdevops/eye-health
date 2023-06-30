<?php
function formApply(){

  $to = 'onyx18121990@gmail.com';

  $subject = 'Eye health Apply Now form';

  $message = '
    <p>Name: '.$_POST['name'].'</p>
    <p>Email: '.$_POST['email'].'</p>
    <p>Message: '.$_POST['msg'].'</p>
    <p>Position: '.$_POST['position'].'</p>
  ';

  // $attachments = array($_POST['attached_cv']);
  $attachments = array('http://theeyehealthgroup.com/wp-content/themes/mg-theme/uploads/test.pdf');

  $headers =  'Reply-To: ' . $_POST['email'] . "\r\n" .
              'Content-Type: text/html; charset=UTF-8';

  $send_email = wp_mail( $to, $subject, $message, $headers, $attachments);

  if( $send_email ){
    $response = [
      'status' => 'success',
      'msg' => 'Thank you! Your message was sent, we will contact you shortly.',
      'atm' => json_encode($attachments),
    ];
  } else {
    $response = [
      'status' => 'error',
      'msg' => 'Oops, Error! Something went wrong, please reload page and try againe.',
      'data' => json_encode($send_email),
      'atm' => json_encode($attachments),
    ];
  }

  echo json_encode($response);

  wp_die();
}
add_action('wp_ajax_formApply', 'formApply');
add_action('wp_ajax_nopriv_formApply', 'formApply');
