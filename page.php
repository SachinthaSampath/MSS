<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>my page</h1>
    <?php
    //to print multiple times use the same one over and over. 
    printname();
    doCal();
    echo "Return Value = $myreturn <br>";

    function printname()
    {
        echo "my name is Chathuranga.";
        echo "<br>my name is Shithari.<br>";
    }

    function doCal()
    {
        $val1 = 50;
        $val2 = 60;

        $total = $val1 + $val2;
        echo "Total:$total<br>";
    }
    ?>

</body>

</html>