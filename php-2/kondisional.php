<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>

<body>
    <h1>Berlatih Function PHP</h1>

    <?php
    echo "<h3> Soal No 1 Greetings </h3>";
    greet("abduh");
    function greet($input)
    {
        echo "Hallo $input, Selamat datang di Sanbercode";
    }

    echo "<h3>Soal No 2 Reverse String</h3>";

    reverseFunction("abdul");
    function reverseFunction($input2)
    {
        for ($i = strlen($input2) - 1; $i >= 0; $i--) {
            echo $input2($i);
        }
    }

    ?>

</body>

</html>