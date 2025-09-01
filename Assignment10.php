<?php
class FileOperation
{
    static function Wfile($filename, $data)
    {
        if (!file_exists($filename)) {
            echo "The file does not exist! <br>";
            return;
        } else {
            $file = fopen($filename, "a");
            fwrite($file, $data);
            fclose($file);
            echo "Data appended successfully! <br>";
        }
    }

    static function Rfile($filename)
    {
        if (!file_exists($filename)) {
            echo "The file does not exist! <br>";
            return;
        } else {
            $file = fopen($filename, "r");
            echo fgets($file);

            fclose($file);
        }
    }
}

FileOperation::Wfile("Test.txt", "this is a file!!!");
FileOperation::Rfile("Test.txt");
