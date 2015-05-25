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

    public function fetchAll(array $columns = array(), array $where = array(), $order = null, $limit = null)
    {
        self::connect();
        $statement = 'SELECT ';
        $statement .= $this->treatArrayColumns($columns);
        $statement .= ' FROM '.$this->table;
        
        $stmt = self::$dbh->prepare($statement);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function find($id)
    {
        self::connect();
    }

    public function insert(array $columns = array(), array $values = array())
    {
        self::connect();
    }

    public function update(array $where = array())
    {
        self::connect();
    }

    public function delete(array $where = array())
    {
        self::connect();
    }

    private function treatArrayColumns(array $columns)
    {
        if (count($columns)) {
            return implode(',', $columns);
        } else {
            return '*';
        }
    }

    private function treatArrayWhere(array $where)
    {

    }
}
