<?php
// Zadanie 1: Petla sprawdzająca podzielność przez 4 w przedziale od 4 do 200
echo "Zadanie 1: Podzielność przez 4\n";
for ($i = 4; $i <= 200; $i++) {
    if ($i % 4 == 0) {
        echo $i . " ";
    }
}
echo "\n\n";

// Zadanie 2: Petla sprawdzająca podzielność przez 5 i 8 w przedziale od 4 do 200
echo "Zadanie 2: Podzielność przez 5 i 8\n";
for ($i = 4; $i <= 200; $i++) {
    if ($i % 5 == 0 && $i % 8 == 0) {
        echo $i . " ";
    }
}
echo "\n\n";

// Zadanie 3: Suma elementów ciągu od 11 do 17
echo "Zadanie 3: Suma elementów ciągu od 11 do 17\n";
$suma = 0;
for ($i = 11; $i <= 17; $i++) {
    $suma += $i;
}
echo "Suma: $suma\n\n";

// Zadanie 4: Elementy nieparzyste ciągu od 40 do 350
echo "Zadanie 4: Elementy nieparzyste ciągu od 40 do 350\n";
for ($i = 40; $i <= 350; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
echo "\n\n";

// Zadanie 5: Elementy parzyste ciągu od 40 do 250
echo "Zadanie 5: Elementy parzyste ciągu od 40 do 250\n";
for ($i = 40; $i <= 250; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>
