<?php
/**
 * Created by Thiago Mallon
 */

/**
 * @subpackage App\Lib\DA\Strategy
 */
namespace App\Lib\DA\Strategy;

/**
 * abstract class DAStrategy
 * @author Thiago Mallon <thiagomallon@gmail.com>
 */
abstract class DAStrategy
{
    abstract protected static function connect();
    abstract protected static function setDADetails(\StdClass $dbDetails);

    private function __construct()
    {

    }
}
