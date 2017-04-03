<?php

// Create our worker object
$worker = new GearmanWorker();

// Add a server (again, same defaults apply as a worker)
$worker->addServer();

// Inform the server that this worker can process "reverse" function calls
$worker->addFunction("string_concat", "String_Concat");

while (1) {
  print "Waiting for job...\n";
  $ret = $worker->work(); // work() will block execution until a job is delivered
  if ($worker->returnCode() != GEARMAN_SUCCESS) {
    break;
  }
}

function String_Concat(GearmanJob $job)
{
    $arguments = $job->workload();
    $data = unserialize($arguments);
    $concat = $data["string1"] . $data["string2"];
    echo "Result: $concat\n";
    return $concat;
}