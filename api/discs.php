<?php 

// prima includo in QUESTO file php il db..
include "../database/discsDb.php";

// var_dump($discs);

header("Content-Type: application/json");

// ..e poi trasformo il db php in array di oggetti json
echo json_encode($discs);

?>