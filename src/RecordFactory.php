<?php
//require ("Record.php");


class recordFactory {

    public static function create(Array $properties, Array $values) :object {

        return new Record($properties, $values);
    }

}