<!-- this is just a rough page -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php 
        class animal {
            public $name;
            public $color;

            function __construct($name, $color) {
                echo "the animal name is <b>$name</b> and its color is <b>$color</b>";
            }
        }

        $animal1 = new animal("horse", "white");

        
    ?>
 </body>
 </html>