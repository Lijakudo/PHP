<?php
$szam = 12;
$nev = "kecske";

echo "<!DOCTYPE html\n>";
echo "<html>";
echo "<body>";
echo "alag\nsor<br>";
echo "alag<br>sor";
echo "<br> Típus: " .gettype($szam);

echo <<<KISKUTYA
<ul>
    <li>alma</li>
    <li>körte</li>
</ul>
KISKUTYA;

echo "<br>PHP_OS: " . PHP_OS;
const MIN_KOR=18;
echo "<br>Jöhet: " . MIN_KOR;

printf("<br>|%20d|", 58);

echo "<br>";
echo sqrt(9);

echo "<br";
$szog = 1;
echo sin($szog *pi() / 180);

echo "<br>";
echo pow(2, 8);

echo "</body>";
echo "</html>";


