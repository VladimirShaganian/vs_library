//php/mysql INSERT pattern

<?php

/**
 * Function for prepare mysql insert statement
 * @param $data
 * @param $table
 * @return string
 */
function prepare_insert($data, $table) {
	// INSERT PATTERN
	$i = 1;
	$cols = '';
	$vals = '';
	foreach ($data as $key =>$value) {
		$value = mysql_real_escape_string($value);
		if (count($data) > $i) {
			$cols .= "`$key`".",";
			$vals .= "'{$value}'".",";
			$i++;
		} else {
			$cols .= "`$key`";
			$vals .= "'{$value}'";
		}
	}
	return  "INSERT INTO " . $table . " (" . $cols . ") VALUES (" . $vals . ")";
}
