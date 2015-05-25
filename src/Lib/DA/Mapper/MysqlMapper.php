<?php

/**
 * Created by Thiago Mallon
 */

/**
 * @package App\Lib\DA\Mapper
 */
namespace App\Lib\DA\Mapper;

use App\Lib\DA\Adapter\MysqlAdapter;

/**
 * Abstract Class MysqlMapper
 * @author Thiago Mallon <thiagomallon@gmail.com>
 */
abstract class MysqlMapper extends MysqlAdapter implements DAMapper
{
    protected $table;

    public function fetchAll()
    {
        self::connect();
    }

    public function find()
    {
        self::connect();
    }

    public function insert()
    {
        self::connect();
    }

    public function update()
    {
        self::connect();
    }

    public function delete()
    {
        self::connect();
    }
}
