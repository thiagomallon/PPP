<?php
/**
 * Created by Thiago Mallon
 */

/**
 * @subpackage App\Lib\DA\Mapper
 */
namespace App\Lib\DA\Mapper;

/**
 * Interface DAMapper
 * @author Thiago Mallon <thiagomallon@gmail.com>
 */
interface DAMapper
{
    public function fetchAll(array $columns = array(), array $where = array(), $order = null, $limit = null);
    public function find($id);
    public function insert(array $columns = array(), array $values = array());
    public function delete(array $where = array());
    public function update(array $where = array());
}
