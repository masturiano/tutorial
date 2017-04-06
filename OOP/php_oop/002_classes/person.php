<?php

class person{
	public $name;
	public $age;

	public function sentence(){
		return $this->name . ' is '. $this->age . ' years old.';
	}
}