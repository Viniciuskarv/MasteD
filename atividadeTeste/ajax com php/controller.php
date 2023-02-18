<?php
$name=filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
$arr=[
    'name'=>$name,
    'age'=>18,
    'city'=>'Belo Horizonte'
];
echo json_encode($arr);