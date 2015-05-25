<?php
/**
 * Created by Thiago Mallon
 */

/**
 * @package App\Lib\DA\Adapter
 */
namespace App\Lib\DA\Adapter;

use App\Lib\DA\Prototype\DAPrototype;
use App\Lib\XML\XMLConfigReader;

/**
 * Class MysqlAdapter
 * @author Thiago Mallon <thiagomallon@gmail.com>
 */
class MysqlAdapter extends DAAdapter implements DAPrototype
{
    protected static $daDetails;
    protected static $dbh;

    protected static function connect()
    {
        if (!self::$dbh) {
            /* Abaixo dependência não injetada, por questão de arquitetura do negócio,n
             * não se faz conveniente implementação de injeção da mesma. */
            $configsXML = new XMLConfigReader();
            $xmlElm = ['element'=>'database','attribute'=>'dbms','value'=>'mysql'];
            self::$daDetails = $configsXML->getElementDataByAttr($xmlElm);

            self::$dbh = new \PDO('mysql:host='.self::$daDetails->host.
                ';dbname='.self::$daDetails->name, self::$daDetails->user, self::$daDetails->pass);
            print_r(self::$daDetails);
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
