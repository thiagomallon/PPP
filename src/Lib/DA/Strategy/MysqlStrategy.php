<?php
/**
 * Created by Thiago Mallon
 */

/**
 * @subpackage App\Lib\DA\Strategy
 */
namespace App\Lib\DA\Strategy;

use App\Lib\DA\Prototype\DAPrototype;
use App\Lib\XML\XMLConfigReader;

/**
 * Class MysqlStrategy
 * @author Thiago Mallon <thiagomallon@gmail.com>
 */
class MysqlStrategy extends DAStrategy implements DAPrototype
{
    protected static $daDetails;
    protected static $dbh;

    protected static function connect()
    {
        if (!self::$dbh) {
            /* Abaixo dependência não injetada, por questão de arquitetura do negócio,n
             * não se faz conveniente implementação de injeção da mesma. */
            $configsXML = new XMLConfigReader();
            self::$daDetails = $configsXML->getDatabaseCredentials('mysql');

            self::$dbh = new \PDO('mysql:host='.self::$daDetails->host.
                ';dbname='.self::$daDetails->name, self::$daDetails->user, self::$daDetails->pass);
            //print_r(self::$daDetails);
        }
    }

    protected static function setDADetails(\StdClass $dbDetails)
    {

    }

    public function getPrototype()
    {

    }

    public function __clone()
    {

    }
}
