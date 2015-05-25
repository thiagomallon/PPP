<?php
/**
 * Created by Thiago Mallon
 */

/**
 * @package Test\Model\Mapper
 */
namespace Test\Model\Mapper;

/**
 * Class UserDAOTest
 * @author Thiago Mallon <thiagomallon@gmail.com>
 * @group Model/Mapper
 * @group Model/Mapper/UserDAOTest
 */
class UserDAOTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Protected property stores object instance
     * @var object $_userDAO
     */
    protected $_userDAO;
    
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    public function setUp()
    {
        $this->_userDAO = new \App\Model\Mapper\UserDAO;
    }
    
    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    public function tearDown()
    {
        unset($this->_userDAO);
    }
    /**
     * The testGetUser method
     * @return void
     * @covers \App\Model\Mapper\UserDAO::getUser
     */
    public function testGetUser()
    {
        print_r($this->_userDAO->getUser());
    }
}
