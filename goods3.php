<?php
$item1 = array(
    "catName" => "Peter",
	"breed" => "Abyssinian",
    "gender" => "M",
    "weight" => "8 kg",
    "cost" => "$199.00"
);
$item2 = array(
    "catName" => "Fila",
	"breed" => "Birman",
    "gender" => "F",
    "weight" => "5 kg",
    "cost" => "$1199.00"
);
$item3 = array(
    "catName" => "Kate",
	"breed" => "Chartreux",
    "gender" => "F",
    "weight" => "4 kg",
    "cost" => "$99.00"
);

$art = $_GET['art'];

if ($art ==1) {
    echo json_encode($item1);
}

if ($art ==2) {
    echo json_encode($item2);
}

if ($art ==3) {
    echo json_encode($item3);
}

