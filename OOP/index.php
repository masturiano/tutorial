<html>
<head>
	<title>PHP Object Oriented Programming</title>
</head>	
<body>
	<?php 

	class Animal implements Singable{
		protected $pet_name;
		protected $favorite_food;
		protected $sound;
		protected $id;

		public static $number_of_animals = 0;

		const PI = "3.14159"; // value that cannot be change
		/* 
		* Encapsulate the data or protect the data
		*/
		function getName(){
			return $this->pet_name;
		}		
		/* 
		* Initialize attibute inside of it
		*/
		function __construct(){
			$this->id = rand(100,1000000); // Create random id
			echo $this->id . " has been assigned</br>";
			Animal::$number_of_animals++; // Access static attribute
		}
		/* 
		* Destroy or reset the attibute
		* Anything double underscore is magic setter
		*/
		public function __destruct(){
			echo $this->pet_name . " is being destroyed :( </br>";
		}
		/* 
		* Display the question for setting attribute
		*/
		function __get($name){
			echo " Asked for " . $name . "</br>";
			return $this->$name;
		}
		/* 
		* Display the setting of attibute
		*/
		function __set($name,$value){
			switch($name){
				case "pet_name":
					$this->pet_name = $value;
					break;
				case "favorite_food":
					$this->favorite_food = $value;
					break;
				case "sound":
					$this->sound = $value;
					break;
				default:
					echo $name . "Not Found";
			}
			echo "Set " . $name . " to " . $value . "</br>";
		}
		/* 
		* Display the run attribute
		*/
		function run(){
			echo $this->pet_name . " runs</br>";
		}

		final function what_is_good(){
			echo "Running is good</br>";
		}

		function __toString(){
			return $this->pet_name . " says " . 
			$this->sound . " give me some " . 
			$this->favorite_food . " my id is " . 
			$this->id . " total animals = " . 
			Animal::$number_of_animals . "</br></br>";
		}

		function sing(){
			echo $this->pet_name . " sings 'Boww woww woww woww' </br>";
		}

		static function add_these($num1,$num2){
			return ($num1+$num2) . "</br>";
		}
	}

	class Dog extends Animal implements Singable{
		function run(){
			echo $this->pet_name . " runs like crazy</br>";
		}

		function sing(){
			echo $this->pet_name . " sings 'Grrr grrr grrr grrr' </br>";
		}
	}

	interface Singable{
		public function sing();
	}

	$animal_one = new Animal();

	$animal_one->pet_name = "Spot";
	$animal_one->favorite_food = "Meat";
	$animal_one->sound = "Ruff";

	echo $animal_one->pet_name . " says " . 
	$animal_one->sound . " give me some " . 
	$animal_one->favorite_food . " my id is " . 
	$animal_one->id . " total animals = " . 
	Animal::$number_of_animals . "</br></br>";

	echo "Favorite Number " . Animal::PI . "</br></br>";

	$animal_two = new Dog();

	$animal_two->pet_name = "Grover";
	$animal_two->favorite_food = "Dog Food";
	$animal_two->sound = "Grrr";

	echo $animal_two->pet_name . " says " . 
	$animal_two->sound . " give me some " . 
	$animal_two->favorite_food . " my id is " . 
	$animal_two->id . " total animals = " . 
	Animal::$number_of_animals . "</br></br>";

	echo $animal_one->run();
	echo $animal_two->run();
	echo $animal_two->what_is_good();

	echo $animal_one;

	$animal_one->sing();

	function make_them_sing(Singable $singing_animal){
		$singing_animal->sing();
	}

	make_them_sing($animal_one);
	make_them_sing($animal_two);

	echo "</br>";

	function sing_animal(Animal $singing_animal){
		$singing_animal->sing();
	}

	sing_animal($animal_one);
	sing_animal($animal_two);

	echo "</br>";

	echo "3+5=" . Animal::add_these(3,5);

	$is_it_an_animal = ($animal_two instanceof Animal) ? "True" : "False";

	echo "It is " . $is_it_an_animal . ' that $animal_two is an Animal </br>';

	$animal_clone = clone $animal_one;

	
	?>
</body>
</html>