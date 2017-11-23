
<?php

		class Person{

			public $name;
			public $surname;
			public $age;


			public function display($name,$surname,$age)
			{
					print_r($name . " " . $surname	. " " . $age);
			}	


			public function	setAmount($total)
			{
				$vat = 14/100;
				print_r($vat);
				print_r($total * $vat);

			}


			public function	printThis()
			{
				print_r($this);
			}

		}

?>