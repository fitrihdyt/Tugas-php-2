<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>

<body>
<h1>Berlatih Function PHP</h1>
<?php

echo "<h3> Soal No 1 Greetings </h3>";

function greetings($nama) {
    echo "Halo $nama, Selamat Datang di jabar Coding Camp!";
  }
  
echo greetings("Bagas");

echo "<br>";
echo greetings("Wahyu");

echo "<br>";
echo greetings("Abdul");

echo "<br>";

echo "<h3>Soal No 2 Reverse String</h3>";
/* 
Soal No 2
Reverse String
Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
Function reverseString menerima satu parameter berupa string.
NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING!

reverseString("abdul");
Output: ludba

*/

// Code function di sini 


// Hapus komentar di bawah ini untuk jalankan Code
// reverseString("abduh");
// reverseString("Bootcamp");
// reverseString("We Are JCC Developers")

function reverse($string1) {
    $length = strlen($string1);
    $output = '';
    for ($i = ($length - 1); $i >= 0; $i--) {
        $output .= $string1[$i];
    }
    return $output;
}

function reverseString($string2) {
    $string = reverse($string2);
    echo $string ."<br>";
}

reverseString("abduh");
reverseString("Bootcamp");
reverseString("We Are JCC Developers");
echo "<br>";


echo "<h3>Soal No 3 Palindrome </h3>";

function palindrome($kalimat1) {
    $kalimat2 = reverse($kalimat1);
    if ($kalimat1 == $kalimat2) {
        echo 'palindrome(' . $kalimat1 . ') = true <br>';
    } else {
        echo 'palindrome(' . $kalimat1 . ') = false <br>';
    }
}

palindrome("civic") ;
palindrome("nababan") ;
palindrome("jambaban");
palindrome("racecar");

echo "<h3>Soal No 4 Tentukan Nilai </h3>";

function tentukan_nilai($val) {
    $output2 = 'tentukan_nilai(' . $val . ') = ';
    if ($val >= 85 && $val <= 100) {
        $output2 .= 'Sangat Baik';
    } else if ($val >= 70 && $val < 85) {
        $output2 .= 'Baik';
    } else if ($val >= 60 && $val < 70) {
            $output2 .= 'Cukup';
        } else {
            $output2 .= 'Kurang';
        }
        return $output2 ."<br>";
    }

echo tentukan_nilai(98); 
echo tentukan_nilai(76); 
echo tentukan_nilai(67); 
echo tentukan_nilai(43); 


?>

</body>

</html>