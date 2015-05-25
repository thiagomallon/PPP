<?php
/**
 * Created by Thiago Mallon
 */

/**
 * @subpackage App\Lib\XML
 */
namespace App\Lib\XML;

/**
 * Class ConfigXMLReader
 * @author Thiago Mallon <thiagomallon@gmail.com>
 */
class XMLConfigReader implements XMLReader
{
    /**
     * Property stores
     * @var type $filePath description
     */
    protected $filePath;
    /**
     * Property stores
     * @var datatype $xmlContent description
     */
    protected $xmlContent;

    /**
     * The __construct method
     * @codeCoverageIgnore
     * @return datatype description
     */
    public function __construct($filePath = 'config/configs.xml')
    {
        $this->filePath = $filePath;
    }

    /**
     * The setFilePath method
     * @return datatype description
     * @param datatype $filePath description
     */
    public function setFilePath($filePath = 'config/configs.xml')
    {
        $this->filePath = $filePath;
    }

    /**
     * The getElementData method
     * @return datatype description
     * @param datatype $element description
     */
    public function getElementData($element)
    {
        $this->xmlContent = $this->getXMLData();
        return $this->xmlContent->{$this->xmlContent->stage}->{$element};
    }

    /**
     * The getElementDataByAttr method
     * @return datatype description
     * @param datatype $element description
     */
    public function getElementDataByAttr(array $elementDetails)
    {
        $this->xmlContent = $this->getXMLData();
        $element = $this->xmlContent->{$this->xmlContent->stage}->{$elementDetails['element']};
        for ($i = 0; $i < count($element); $i++) {
            if ($element[$i][$elementDetails['attribute']] == $elementDetails['value']) {
                return $element[$i];
            }
        }
        throw new \RangeException('Attributo não existe, para o elemento');
    }

    /**
     * The getXMLData method
     * @return datatype description
     */
    public function getXMLData()
    {
        return simplexml_load_file($this->filePath);
    }
}
