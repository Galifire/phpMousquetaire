<?php

require_once("./data.php");

$id = isset($_GET["id"]) ? intval($_GET["id"]) : null;
$int_min = isset($_GET["intelligence"]) ? intval($_GET["intelligence"]) : null;

function getMuskById(int $id, $data) : Array {
    return $data[$id];
}

function getAllMusks($data) : Array {
    $musks = null;
    for ($i = 1; $i < count($data)+1; $i++) {
        $musks[] = $data[$i];
    }
    return $musks;
}

function getMuskByIntelligence(int $int_min, $data) : Array|null {
    $musks = null;
    for ($i = 1; $i < count($data)+1; $i++) {
        if ($data[$i]["intelligence"] >= $int_min) {
            $musks[] = $data[$i];
        }
    }
    return $musks;
}

if ($id != null) {
    if (array_key_exists($id, $data)) {
        $musk = getMuskById($id,$data);
        foreach($musk as $m => $value) {
            echo $m . " : " . $value ."<br>";
        }
    }
    echo "Mousquetaire non trouvé";
} else if ($int_min != null) {
    $musks = getMuskByIntelligence($int_min,$data);
    if ($musks != null) {
        foreach($musks as $musk) {
            foreach($musk as $m => $value) {
                echo $m . " : " . $value ."<br>";
            }
        }
    } else {
        echo "Aucun Mousquetaire n'est aussi intelligent";
    }
} else {
    $musks = getAllMusks($data);
    foreach($musks as $musk) {
        foreach($musk as $m => $value) {
            echo $m . " : " . $value ."<br>";
        }
       
    }
}



?>