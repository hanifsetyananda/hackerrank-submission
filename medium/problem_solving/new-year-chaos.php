<?php

// Complete the minimumBribes function below.
function minimumBribes($q) {
    $count = 0;
    for ($i = count($q) - 1; $i >= 0; $i--) {
        if ($q[$i] - ($i + 1) > 2) {
            $count = "Too chaotic";
            break;
        }
        for ($j = max(0, $q[$i] - 2); $j < $i; $j++){
            if ($q[$j] > $q[$i]) $count++;
        }
        
    }
    echo $count.PHP_EOL;

}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%d\n", $n);

    fscanf($stdin, "%[^\n]", $q_temp);

    $q = array_map('intval', preg_split('/ /', $q_temp, -1, PREG_SPLIT_NO_EMPTY));

    minimumBribes($q);
}

fclose($stdin);

