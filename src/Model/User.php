<?php
/**
 * Created by Thiago Mallon
 */

/**
 * @subpackage App\Model
 */
namespace App\Model;

/**
 * Classe User. Model de usuários
 * @author Thiago Mallon <thiagomallon@gmail.com>
 */
class User
{
    /**
     * Property stores user id
     * @var int $id
     */
    protected $id;
    
    /**
     * Property stores username
     * @var string $username
     */
    protected $username;
    
    /**
     * Property stores user password
     * @var string $password
     */
    protected $password;

    /**
     * Property stores user email
     * @var string $email
     */
    protected $email;

    /**
     * The Constructor method. Could set property values, or keep them null.
     * @return null
     */
    public function __construct($id = null, $username = null, $password = null, $email = null)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }

    /**
     * The setId method
     * @return datatype description
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * The setId method
     * @return null description
     * @param datatype $id description
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The getUsername method
     * @return datatype description
     */
    public function getUsername()
    {
        return $this->username;
    }
    
    /**
     * The setUsername method
     * @return null description
     * @param datatype $username description
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * The getPassword method
     * @return datatype description
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * The setPassword method
     * @return null description
     * @param datatype $password description
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * The getEmail method
     * @return datatype description
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * The setEmail method
     * @return null description
     * @param datatype $email description
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}
