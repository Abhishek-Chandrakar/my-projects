<?php 
    class Files {
        function displayContent($filename){
            
            if(!file_exists($filename)) {
                echo "filename does not exist<br>";
                return;
            }

            echo file_get_contents($filename);
        }

        function getContent($filename): string{
            if(!file_exists($filename)) {
                echo "$filename does not exists <br>";
                return "";
            }

            $content = file_get_contents($filename);
            return $content;
        }
    }

    $file1 = new Files();
    $file1->displayContent("Test.txt");
    echo "<br>Here is your File Content: <br>";

?>