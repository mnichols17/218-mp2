<?php
/**
 * Created by PhpStorm.
 * User: nolan
 * Date: 3/14/2019
 * Time: 12:11 AM
 */
require ("RecordFactory.php");


class CreateTable
{
        public static function create_HTML_Table($rows, $titles): String
        {
            $html = "
                <table class='table table-striped'>
                  <thead class='thead-dark'>
                    <tr>
                        <th>#</th>";
            foreach($titles as $title)
            {
                $html .= ("<th>" . ucwords($title) . "</th>");
            }

            $html .= "</tr>
                    </thead>
                  <tbody>";


            $count = 1;
            foreach($rows as $row)
            {
                $obj = ($row -> getData());
                $html .= ("<td>" . $count . "</td>");
                foreach($titles as $title){
                    $html .= ("<td>" . $obj[$title] . "</td>");
                }

                $html .= "</tr>";
                $count++;
            }



            $html .= "
                  </tbody>
                </table>";

            return $html;
        }

        public static function createHTMLTable($records, $titles): String
        {
            $input_1 = self::createTableThead($records, $titles);

            $input_2 = self::createTableBody($records, $titles);

            $html = "<table class = 'table table-striped'>" . $input_1 . $input_2 . "</table>";

            return $html;
        }

        public static function createTableThead($records, $titles): String
        {
            $input = self::createTableRowHead($records, $titles);

            $html = "<thead class = 'thead-dark>" . $input . "</thead>";

            return $html;
        }

        public static function createTableBody($records, $titles): String
        {
            $input = self::createTableRowBody($records, $titles);

            $html = "<tbody>" . $input . "</tbody>";

            return $html;
        }

        public static function createTableRowHead($records, $titles): String
        {
            $input = self::createTableData($records, $titles);

            $html = "<tr>" . $input . "</tr>";

            return $html;
        }

        public static function createTableRowBody($records, $titles): String
        {
            $html = "";

            $count = 1;
            foreach($records as $row)
            {
                $obj = $row;
                $html .= ("<td>" . $count . "</td>");
                foreach($titles as $title)
                {
                    $html .= ("<td>" . $obj($title) . "</td>");
                };
                $count++;
            }


            return $html;
        }

        public static function createTableData($records, $titles): String
        {

            $html = '<th>#</th>';

            foreach($titles as $title)
            {
                $html.= ("<th>" . ucwords($title) . "</th>");
            }

            return $html;
        }
}
