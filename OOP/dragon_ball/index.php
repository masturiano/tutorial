<?php
class DragonBall{
	private $ballCount;

	public function __construct(){
		$this->ballCount = 0;
	}

	public function iFoundBall(){
		$this->ballCount++;
		if($this->ballCount===7){
			echo 'You can ask for your wish';
			$this->ballCount = 0;
		}
	}
}
$dragon_ball = new DragonBall();
$dragon_ball->iFoundBall();
?>