<!DOCTYPE html>
<head>
    <title>PHP Syntax</title>
</head>
<body>
    <?php
    echo "Hello World! <hr/>";
    $nev = "Mark"; //global variables

    //global variable and function
    function kiiratas(){
        echo "<p> Value of x is $nev</p>";
    }
    echo $nev;
    ?>
</body>
</html>