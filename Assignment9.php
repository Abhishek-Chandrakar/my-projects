<?php
abstract class Phone
{
    abstract function makeCall($number);
    abstract function sendMessage($number, $message);
    abstract function powerOff();
}

class ios extends Phone
{
    function makeCall($number) {
        echo "Calling from iphone to $number <br>";
        return;
    }

    function sendMessage($number, $message) {
        echo " $message sends to $number";
        return;
    }

    function powerOff(){
        echo "the iphone power is off <br>";
        return;
    }
}

$iphone7 = new ios();
$iphone7->makeCall(4562153285);
$iphone7->sendMessage(4585659548, "hey! abhishek here");
