<?php
/**
 * Created by PhpStorm.
 * User: michaelnichols
 * Date: 2019-03-12
 * Time: 22:58
 */

class Record
{
    private $data = array();

    public function __construct(array $values, array $titles)
    {
        $i = 0;
        foreach($titles as $title)
        {
            $this->data[$title] = $values[$i];
            $i++;
        }
    }

    function getData(): array
    {
        return $this->data;
    }

}