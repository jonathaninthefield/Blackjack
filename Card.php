<?php
header('Content-Type: text/plain');
/*
Suit, number, value
*/
class Card {
	protected $suit; // string
	protected $number; // string
	protected $value; // int
	
	public function __construct($suit, $number) {
		$this->suit = strtoupper($suit);
		$this->number = strtoupper($number);
		$this->setValue($this->number);
	}
	
	protected function setValue($number) {
		switch ($number):
			case 'A':
				$this->value = 1;
				break;
				
			case 'J':
			case 'Q':
			case 'K':
				$this->value = 10;
				break;
				
			default:
				$this->value = $number;
		endswitch;
	}
	
	public function getValue() {
		return $this->value;
	}
	
	public function getSuit() {
		return $this->suit;
	}
	
	public function __toString() {
		return $this->number . $this->suit . ' (' . $this->value . ')';
	}
}

// $suits = array('h', 'S', 'D', 'C');
// $numbers = array('a', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K');
// $cards = array();

// foreach ($suits as $suit) {
	// foreach ($numbers as $number) {
		// $card = new Card($suit, $number);
		// echo "Card: " . $card . "\n";
	// }
// }



// echo "\n\n";



