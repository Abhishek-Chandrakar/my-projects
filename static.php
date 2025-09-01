<?php
class FilesHelper
{
    static function hasData($filename): bool
    {
        if (!file_exists($filename)) {
            echo "$filename does not exits <br>";
            return false;
        }

        $content = file_get_contents($filename);

        if (empty($content)) {
            return false;
        } else {
            return true;
        }
    }
}

if (FilesHelper::hasData("Test.txt")) {
    echo "Data Found <br>";
} else {
    echo "Data Not Found <br>";
}
