<?php

$jokes = json_decode(file_get_contents('../jokes.json'),true);

$joke = $jokes[rand(0,count($jokes)-1)];

header('Content-Type: application/json');

response(array("code"=>'200',"joke"=>$joke));

function response($data){
   echo json_encode($data,true);
}