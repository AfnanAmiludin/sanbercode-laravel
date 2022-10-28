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
        $lenght = strlen($input2);
        for ($i = $lenght - 1; $i >= 0; $i--) {
            echo $input2[$i];
        }
    }
    echo "<h3>Soal No 3 Palindrome </h3>";
    palindrome("katak");
    function palindrome($input3)
    {
        $lenght = strlen($input3);
        $simpan = "";
        for ($i = $lenght - 1; $i >= 0; $i--) {
            $simpan = $simpan . $input3[$i];
        }
        if ($input3 == $simpan) {
            echo "Output: true";
        } else {
            echo "Output: false";
        }
    }
    echo "<h3>Soal No 4 Tentukan Nilai </h3>";
    function tentukan_nilai($input4)
    {
        if ($input4 <= 100 && $input4 >= 85) {
            return "Sangat Baik";
        } else if ($input4 < 85 && $input4 >= 70) {
            return "Baik";
        } else if ($input4 < 70 && $input4 >= 60) {
            return "Cukup";
        } else {
            return "Kurang";
        }
    }

    echo  tentukan_nilai(80);

    ?>

</body>

</html>