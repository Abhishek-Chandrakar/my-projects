<?php
interface Phone
{
    public function makeCall($number);
    public function sendMessage($number, $message);
}

class ios implements Phone
{
    public function makeCall($number) {
        echo "Making call to $number <br>";
    }
    public function sendMessage($number, $message) {
        echo "sending message to $number <br>";
    }
}

$iphone12 = new ios();
$iphone12->makeCall(6261370772);
