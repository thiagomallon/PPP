<?php
/**
 * Created by Thiago Mallon
 */

/**
 * @subpackage App\Lib\XML
 */
namespace App\Lib\XML;

/**
 * Interface XMLReader
 * @author Thiago Mallon <thiagomallon@gmail.com>
 */
interface XMLReader
{
    /**
     * The setFilePath abstract method
     * @return datatype description
     * @param datatype $filePath description
     */
    public function setFilePath($filePath);
    /**
     * The getElementArrayData abstract method
     * @return datatype description
     * @param datatype $element description
     */
    public function getElementData($element);
    /**
     * The getXMLData abstract method
     * @return datatype description
     */
    public function getXMLData();
}
