<?
$mail = array(
  'to' => 'test@gmail.com',
  'subject' => 'Hi',
  'body' => 'Test message',
);


# Connect to Gearman server
$client = new GearmanClient();
$client->addServer();


# Send message
$client->doBackground('sendmail', json_encode($mail));
