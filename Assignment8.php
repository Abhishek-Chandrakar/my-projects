<?php

interface Stock {
    public function addStock($item, $quantity);
    public function removeStock($item, $quantity);
    public function getStock(); 
}

class MyStock implements Stock {

    private $items = [];

    // Add stock
    public function addStock($item, $quantity) {
        if (isset($this->items[$item])) {
            $this->items[$item] += $quantity;  
        } else {
            $this->items[$item] = $quantity;   
        }
        echo "Added $quantity of $item<br>";
    }

    // Remove stock
    public function removeStock($item, $quantity) {
        if (!isset($this->items[$item])) {
            echo "❌ Item '$item' not found in stock<br>";
            return;
        }

        if ($this->items[$item] < $quantity) {
            echo "❌ Not enough $item in stock (Available: {$this->items[$item]})<br>";
            return;
        }

        $this->items[$item] -= $quantity;
        echo "Removed $quantity of $item<br>";
    }

    public function getStock() {
        return $this->items;
    }
}

$stock = new MyStock();

$stock->addStock("Apple", 10);
$stock->addStock("Banana", 5);
$stock->addStock("Apple", 3);

$stock->removeStock("Apple", 5);
$stock->removeStock("Banana", 10);
$stock->removeStock("Orange", 2);

print_r($stock->getStock());
