<?php
//Create entries in tables from config file
$json_string = file_get_contents("../config/config.json");
$config = json_decode($json_string, true);
$number_groups=$config['number_groups'];
$number_items=$config['numberItems'];
?>
