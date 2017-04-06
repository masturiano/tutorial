<?php
class Mydel{
	public $firstname;
	public $middlename;
	public $lastname;

	public static $id = 1;
	public function display(){
		return $this->firstname;
	}
	public function displayId(){
		static $bar = 1;
		$bar++;
		return $bar;
	}
}
$mydel = new Mydel();

$mydel->firstname = 'Mydel';

echo $mydel->display();
echo '<br/>';
echo $mydel->displayId();