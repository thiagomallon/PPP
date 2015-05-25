<?php
/**
 * Created by Thiago Mallon
 */

/**
 * @package App\Lib\DA\Prototype
 */
namespace App\Lib\DA\Prototype;

/**
 * Interface DAPrototype
 * @author Thiago Mallon <thiagomallon@gmail.com>
 */
interface DAPrototype
{
    public function __clone();
    public function getPrototype();
}
