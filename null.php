<?php

$abc = null;
$db = $abc ?? "default";
var_dump(
    null == null, 
    null == false, 
    null == 0,
    null == '', 
    null == [],
    $abc,
    isset($abc),
    !empty($abc),
    isset($efg),
    !empty($efg),
    $db
);