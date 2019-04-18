<?php

require 'Record.php';

class File
{
    public static function readCSVtoArray(String $filename):array
    {
        $titles = '';
        $records = array();
        $count = 0;

        if (($handle = fopen($filename, "r")) !== FALSE) {
            while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
                if($count == 0) {
                    $titles = $row;
                } else if (sizeof($row) > 1){
                    array_push($records, new Record($row, $titles));
                }
                $count++;
            }
            fclose($handle);
        }
        return array($records, $titles);
    }
}