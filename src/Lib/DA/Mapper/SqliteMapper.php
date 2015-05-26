<?php

/**
 * Created by Thiago Mallon
 */

/**
 * @subpackage App\Lib\DA\Mapper
 */
namespace App\Lib\DA\Mapper;

use App\Lib\DA\Strategy\SqliteStrategy;

/**
 * Abstract Class SqliteMapper
 * @author Thiago Mallon <thiagomallon@gmail.com>
 */
abstract class SqliteMapper extends SqliteStrategy
{
    protected $table;

    protected function fetchAll()
    {
        return self::connect();
    }

    protected function fetchRow()
    {

    }

    protected function insert()
    {

    }

    protected function update()
    {

    }
}
