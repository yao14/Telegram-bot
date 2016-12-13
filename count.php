<?php
session_start();

date_default_timezone_set("Africa/Accra");
$web = "https://api.telegram.org/bot273311630:AAFcQqlmIX8nJvW0cULCyaL-xgJmcFkC8Dw";
$update = file_get_contents($web."/getupdates");
//print_r($update);
$updateArray= json_decode($update, true);
//print_r($updateArray);
$length = count($updateArray["result"]);
 $chat_id=$updateArray["result"][0]["message"]["chat"]["id"];
$_SESSION["count"]=$length;


?>