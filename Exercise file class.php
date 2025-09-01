<?php 
    class File {
        public $fileHandler;
        public $fileName;
        public $fileSize;
        public $content;
        public $fileFound;

        function __construct($filename) {
            $this->fileHandler = null;
            $this->fileFound = false;

            if(file_exists($filename)) {
                if (is_file($filename)) {
                    $this->fileFound = true;
                }
            }

            if($this->fileFound){
                $this->fileHandler = fopen($filename, "r");
                $this->fileSize = filesize($filename);
            }
        }

        function getContent() {
            if($this->fileFound) {
                $content = fread($this->fileHandler, $this->fileSize);
                return $content;
            } else {
                return "No Files Found!";
            }
        }

        function __destruct(){
            if($this->fileFound){
                fclose($this->fileHandler);
                echo "File is closed from the Destructor";
            }
        }
    }

    $file1 = new File("Test.txt");
    echo $file1->getContent();
?>