<?php
header('Content-Type: text/plain');
include('Card.php');

class Hand {
	protected $cards = array();
	
	public function addCard(Card $card) {
		$this->cards[] = $card;
	}
	
	public function removeCard(Card $card) {
		foreach ($this->cards as $index => $handCard) {
			if ($handCard === $card) {
				unset($this->cards[$index]);
			}
		}
	}
	
	public function getValue() {
		$sum = 0;
		foreach ($this->cards as $card) {
			$sum += $card->getValue();
		}
		return $sum;
	}
	
	public function __toString() {
		return "Value: " . $this->getValue() . ' (' . implode(', ', $this->cards) . ')';
	}
}

$cards = array(
	new Card('s', 'a'),
	new Card('d', 8)
);

$hand = new Hand();
$hand->addCard($cards[0]);
$hand->addCard($cards[1]);
echo $hand . "\n\n";
$hand->removeCard($cards[0]);
echo $hand . "\n\n";


