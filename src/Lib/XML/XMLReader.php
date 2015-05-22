<?php
/**
 * Created by Thiago Mallon
 */

/**
 * @package App\Lib\XML
 */
 namespace App\Lib\XML;

/**
 * Interface XMLReader
 * @author Thiago Mallon <thiagomallon@gmail.com>
 */
interface XMLReader
{
    /**
     * The setFilePath abstract method is used to set the xml file path
     * @return void
     * @param string $filePath The xml file path
     */
    public function setFilePath($filePath);
}
