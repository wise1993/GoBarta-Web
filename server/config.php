<?php

require "Classes/Database.php";

use GoBarta\Server\Classes\Database as DB;

$email = $_POST['email'];

$db = new DB('localhost', 'gobarta', 'root', '');

$emailExists = $db->get("Select * from `subscribers` where email = (:email)", [
  'email' => $email
]);

if(!$emailExists){
  $db->insert("Insert into `subscribers` ( `email`, `created_at`, `updated_at`) values ( :email , :created_at, :updated_at )", [
        'email' => $email,
        'created_at' => date("Y-m-d H:i:s", time()),
        'updated_at' => date("Y-m-d H:i:s", time()),
  ]);
}

$_SESSION["flash"] = ["type" => "success", "message" => "Thanks for subscribing!"];

header("Location: http://127.0.0.1/gobarta/index.html");
exit();
