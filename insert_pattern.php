//php/mysql INSERT pattern

<?php
 // INSERT PATTERN
    $i = 1;
    $cols = '';
    $vals = '';
    foreach ($data as $key =>$value) {
        if (count($data) > $i) {
            $cols .= "`$key`".",";
            $vals .= "'{$value}'".",";
            $i++;
        } else {
            $cols .= "`$key`";
            $vals .= "'{$value}'";
        }

    }

    $pdo->query("INSERT INTO table (" . $cols . ") VALUES (" . $vals . ")");
