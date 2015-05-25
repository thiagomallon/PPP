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
    // seleciona tabela a qual serão realizadas operações
    protected $table = 'users';

    public function __construct()
    {
    }

    public function getUsers()
    {
        return $this->fetchAll();
    }
}
