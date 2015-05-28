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
     * @param string $element description
     */
    public function getElementData($elementPath)
    {
        $this->xmlContent = $this->getXMLData();
        $element = array_shift($this->xmlContent->xpath($elementPath));
        if ($element) {
            return $element;
        } else {
            throw new \RangeException('Attributo não existe, para o elemento');
        }
    }

    /**
     * The getDatabaseCredentials method
     * @param datatype $dbms description
     * @return datatype description
     */
    public function getDatabaseCredentials($dbms)
    {
        $this->xmlContent = $this->getXMLData();
        $stage = $this->xmlContent->stage;
        $element = array_shift($this->xmlContent->xpath($stage.'/database[@dbms="'.$dbms.'"]'));
        if ($element) {
            return $element;
        } else {
            throw new \RangeException('Attributo não existe, para o elemento');
        }
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
