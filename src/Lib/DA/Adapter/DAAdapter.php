<?php
/**
 * Created by Thiago Mallon
 */

/**
 * @subpackage App\Lib\DA\Adapter
 */
namespace App\Lib\DA\Adapter;

/**
 * abstract class DAAdapter
 * @author Thiago Mallon <thiagomallon@gmail.com>
 */
abstract class DAAdapter
{
    abstract protected static function connect();
    abstract protected static function setDADetails(\StdClass $dbDetails);

    private function __construct()
    {

    }
}
