<?php

$url = 'https://api.dokume.net';
$profile_id = 42097;
$apikey = 'rRN2ittVk6L1k6tgdz4ZnB8swVTTBXPcFEgRv8eAVMcetoLWdV1HzWxlQ0Ah6D9b';
$accesstoken = '';

$cls = new DM_Public_Backend($url, $apikey, $profile_id, $accesstoken);
$cls->setApiType('public');
// setIncludeAttachment()
$param = new \stdClass();
// https://dokume.net/backend/src/public.php/object/76/7792?references=%5B%7B%22OBJECT%22%3A%22PUSH_APP_MESSAGE_ATTACHEMENT%22%7D%2C%7B%22OBJECT%22%3A%22PUSH_APP_MESSAGE_CATEGORY%22%2C%22REFERENCES%22%3A%5B%7B%22OBJECT%22%3A%22PUSH_APP_CATEGORY%22%7D%5D%7D%5D&include_data=true
// https://dokume.net/backend/src/public.php/object/76/7792?references=%5B%7B%22OBJECT%22%3A%22PUSH_APP_MESSAGE_ATTACHEMENT%22%7D%2C%7B%22OBJECT%22%3A%22PUSH_APP_MESSAGE_CATEGORY%22%2C%22REFERENCES%22%3A%7B%22OBJECT%22%3A%22PUSH_APP_CATEGORY%22%7D%7D%5Dinclude_data=true&

$param->references = [array('OBJECT' => 'USERINTERFACE'), array('OBJECT' => 'CREATOR'), array('OBJECT' => 'PUSH_APP_MESSAGE_ATTACHEMENT'), array('OBJECT' => 'PUSH_APP_MESSAGE_CATEGORY', 'REFERENCES' => array(array('OBJECT' => 'PUSH_APP_CATEGORY')))];
$res = $cls->getObject(76, $_GET['id'], $param);
//print_r($res);
$data = $res->MESSAGE;

$attachment = getMsgAttachements($data->PUSH_APP_MESSAGE_ATTACHEMENT);
//var_dump($attachment);
$firstImage = getFirstImage($data->PUSH_APP_MESSAGE_ATTACHEMENT, 1);
//print_r($attachment);
?>