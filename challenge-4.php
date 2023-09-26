<?php 
    $array = [
        "insurance.txt" => "Company A", 
        "letter.docx" => "Company A", 
        "Contract.docx" => "Company B"
    ];
    $result = [];

    $counts = array_count_values($array);

    foreach ($array as $key => $value) {
        $result[$value][] = $key;
    }

    echo "<pre>"; print_r($result); echo "</pre>";
?>