<?php

$name = !empty($argv[1])? $argv[1]:"task-name-ticket-id";

$file = date("Y_m_d_His")."_".$name.".sql";

$migration = fopen(__DIR__."/migrations/".$file, 'w') or die("Failed to open file for creation");

echo "Migration created: ".$file."\n";
