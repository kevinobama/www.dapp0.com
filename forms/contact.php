<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  $data = file_get_contents('contact.log');
  file_put_contents('contact.log',$data.json_encode($_POST,JSON_PRETTY_PRINT));

  echo('你的信息提交交成功!');
?>
