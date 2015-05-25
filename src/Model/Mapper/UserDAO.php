<?php

/**
 * Created by Thiago Mallon
 */

/**
 * @package App\Model\Mapper
 */
namespace App\Model\Mapper;

use App\Lib\DA\Mapper\MysqlMapper;

/**
 * Class UserDAO
 * @author Thiago Mallon <thiagomallon@gmail.com>
 */
class UserDAO extends MysqlMapper
{
    public function __construct()
    {
    }

    public function getUser()
    {
        return $this->fetchAll();
    }
}
