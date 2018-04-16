<?php
$params = $_GET;
$mail_body = '';
foreach ($params as $k => $param) {
 if (!is_array($param))
  $mail_body .= $k.' = '.$param."\n";
 else
  $mail_body .= $k.' = '.var_export($param, true)."\n";
}
mail("alev@1c-usoft.ru", "Webhooks Test", $mail_body);
?>
