<?php
    $array = [2, 3, 1, 2, 3, 3, 4, 4];
    $result = [];

    $counts = array_count_values($array);
    
    for ($i=0; $i < count($array); $i++) { 
        if ($counts[$array[$i]] > 1 && !in_array( $array[$i], $result )) {
            $result[] = $array[$i];
        }
    }

    echo "<pre>"; print_r($result); echo "</pre>";
?>