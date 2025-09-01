// class as final = Prevents from Inheritance
// method as final = prevents from overriding
<?php 
    final class WinodwsDriver {
        private $updateInstructions = "Instructions";

        final function runDriverUpdate() {
            echo "executing the update instructions <br>";
        }
    }
?>