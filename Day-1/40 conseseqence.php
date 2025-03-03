<?php
$arr = [1, 2, 3, 5, 6]; // 4 is missing
$n = count($arr) + 1;
$missing = 0;

for ($i = 1; $i <= $n; $i++) {
    $found = false;
    for ($j = 0; $j < count($arr); $j++) {
        if ($arr[$j] == $i) {
            $found = true;
            break;
        }
    }
    if (!$found) {
        $missing = $i;
        break;
    }
}

echo "Missing number is: " . $missing . "<br>";
?>
