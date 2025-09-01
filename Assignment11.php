<?php
interface Phone
{
    public function call();
    public function message();
}

class Android implements Phone {
    public function call() {
        echo "Calling using google dialer in android <br>";
    }

    public function message() {
        echo "sending messages in android <br>";
    }
}

class IOS implements Phone
{
    public function call()
    {
        echo "Calling using facetime in ios <br>";
    }

    public function message()
    {
        echo "sending imessages in ios <br>";
    }
}
