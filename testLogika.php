<?php

// Soal Nomor 1
function countPairs($socks)
{
    $pairs = [];
    $count = 0;

    foreach ($socks as $sock) {
        if (isset($pairs[$sock]) && $pairs[$sock] > 0) {
            $count++;
            $pairs[$sock]--;
        } else {
            $pairs[$sock] = isset($pairs[$sock]) ? $pairs[$sock] + 1 : 1;
        }
    }

    return $count;
}


$input1 = [10, 20, 20, 10, 10, 30, 50, 10, 20];
$output1 = countPairs($input1);
echo "a. Output: $output1\n"; // Output yang diharapkan: 3

$input2 = [6, 5, 2, 3, 5, 2, 2, 1, 1, 5, 1, 3, 3, 3, 5];
$output2 = countPairs($input2);
echo "b. Output: $output2\n"; // Output yang diharapkan: 6

$input3 = [1, 1, 3, 1, 2, 1, 3, 3, 3, 3];
$output3 = countPairs($input3);
echo "c. Output: $output3\n"; // Output yang diharapkan: 4


// Soal Nomor 2
function countWords($sentence)
{
    $specialChars = ['[', ']', '*', '!', '=', '&', '.', ',', '?', ':', ';', '(', ')'];
    $sentence = str_replace($specialChars, ' ', $sentence);
    $words = preg_split('/\s+/', $sentence);
    $filteredWords = array_filter($words, function ($word) {
        return trim($word) !== '';
    });
    return count($filteredWords);
}

$input1 = "Saat meng*ecat tembok, Agung dib_antu oleh Raihan.";
$output1 = countWords($input1);
echo "a. Output: $output1\n"; // Output yang diharapkan: 5

$input2 = "Berapa u(mur minimal[ untuk !mengurus ktp?";
$output2 = countWords($input2);
echo "b. Output: $output2\n"; // Output yang diharapkan: 3

$input3 = "Masing-masing anak mendap(atkan uang jajan ya=ng be&rbeda.";
$output3 = countWords($input3);
echo "c. Output: $output3\n"; // Output yang diharapkan: 4
