<?php

$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];

if ($verify_token === 'CrossR0@ds123') {
  echo $challenge;
}

$input = json_decode(file_get_contents('php://input'), true, 512, JSON_BIGINT_AS_STRING);
error_log(print_r($input, true));

$leadgen_id = $input["entry"][0]["changes"][0]["value"]["leadgen_id"];

error_log(print_r($leadgen_id, true));
?>