<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: nolan
 * Date: 3/20/2019
 * Time: 7:40 PM
 */

use PHPUnit\Framework\TestCase;

final class CreateTableTest extends TestCase
{
    public function testCreateHTMLTable() {
        $this->assertTrue(
            method_exists(CreateTable::class, 'createHTMLTable')
        );
    }

    public function testCreateTableThead() {
        $this->assertTrue(
            method_exists(CreateTable::class, 'CreateTableThead')
        );
    }


    public function testCreateTableBody() {
        $this->assertTrue(
            method_exists(CreateTable::class, 'CreateTableBody')
        );
    }

    public function testCreateTableRowHead() {
        $this->assertTrue(
            method_exists(CreateTable::class, 'CreateTableRowHead')
        );
    }


    public function testCreateTableRowBody() {
        $this->assertTrue(
            method_exists(CreateTable::class, 'CreateTableBody')
        );
    }

    public function testCreateTableData() {
        $this->assertTrue(
            method_exists(CreateTable::class, 'CreateTableData')
        );
    }
}