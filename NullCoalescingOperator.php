<?php


$data = [];

//Ini yang tanpa coalescing
// if (isset($data['action'])) {
//     $action = $data['action'];
// } else {
//     $action = 'Nothing';
// }

$action = $data['action'] ?? "Nothing";

echo $action;




?>