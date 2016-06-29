<?php

/**
 * Function for prepare mysql update statement
 * @param $data
 * @param $table
 * @return string
 */
function prepare_update($data, $table, $where)
{
	$set_values = '';
	$i = 1;
	foreach ($data as $key => $value) {
		$value = mysql_real_escape_string($value);
		if (count($data) > $i) {
			$set_values .= "`$key`='{$value}',";
			$i++;
		} else {
			$set_values .= "`$key`='{$value}'";
		}
	}
	return "UPDATE ". $table ." SET " . $set_values . " WHERE " . $where ;
}
