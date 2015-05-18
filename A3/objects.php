<?php 

class owner {
	private $user='';
	private $score=0;
	private $city='';
	private $province='';
	private $postalcode='';
	private $price=0;
	private $date='';


	function __construct($user,$score,$city,$province,$postalcode,$price,$date){
		$this->user=$user;
		$this->score=$score;
		$this->city=$city;
		$this->province=$province;
		$this->postalcode=$postalcode;
		$this->price=$price;
		$this->date=$date;
	}

	public function getScore($cityT,$provinceT,$postalcodeT,$priceT,$date_enteredT){
		$score=0;

		if (strcasecmp($this->city,$cityT)==0) {
			$score++;
			// echo "Checking city." . "<br/>";			
		} 

		if (strcasecmp($this->province,$provinceT)==0) {
			$score++;
			// echo "Checking province." . "<br/>";			
		}

		if (strcasecmp($this->postalcode,$postalcodeT)==0) {
			$score++;
			// echo "Checking pCode." . "<br/>";			
		}

		if ($this->price<=$priceT) {
			$score++;
			// echo "Checking Price." . "<br/>";			
		}

		if (strcasecmp($date_enteredT,$this->date)>=0) {
			$score++;
			// echo "Checking date." . "<br/>";			
		}	

		return $score;
	}
	
	function getUser(){
		return $this->user;
	}

}

class tenant {
	private $pets='';
	private $smoking=0;
	private $age='';
	private $employed='';
	private $income='';

	function __construct($user,$pets,$smoking,$age,$employed,$income){
		$this->pets=$pets;
		$this->smoking=$smoking;
		$this->age=$age;
		$this->employed=$employed;
		$this->income=$income;
		$this->user=$user;
	}

	public function getScore($petsO,$smokingO,$incomeO,$ageO,$employedO){
		$score=0;

		if (strcasecmp($this->pets,$petsO)==0) {
			$score++;
			// echo    "Checking pets." . "<br/>";			
		} 

		if (strcasecmp($this->smoking,$smokingO)==0) {
			$score++;
			// echo "Checking smoking." . "<br/>";			
		}

		if ($this->income>=$incomeO) {
			$score++;
			// echo "Checking Income." . "<br/>";			
		}
		
		if ($this->age>=$ageO) {
			$score++;
			// echo "Checking age." . "<br/>";			
		}

		if (strcasecmp($employedO,$this->employed)==0) {
			$score++;
			// echo "Checking employed." . "<br/>";			
		}			
		return $score;
	}
	
	function getUser(){
		return $this->user;
	}

}


 ?>