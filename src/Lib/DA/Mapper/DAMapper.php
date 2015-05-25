<?php
/**
 * Created by Thiago Mallon
 */

/**
 * @package App\Lib\DA\Mapper
 */
namespace App\Lib\DA\Mapper;

/**
 * Interface DAMapper
 * @author Thiago Mallon <thiagomallon@gmail.com>
 */
interface DAMapper
{
    public function fetchAll();
    public function find();
    public function insert();
    public function delete();
    public function update();
}
