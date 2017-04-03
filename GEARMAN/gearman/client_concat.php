<?php
$client= new GearmanClient();
$client->addServer();

$arguments = array(
      "string1" => "hey",
      "string2" => "there"
);
$data = serialize( $arguments );

// Send concat job
$client->addTask("string_concat", $data);
$client->runTasks();
//if ($client) {
//  echo "Success: $client\n";
//}

?>