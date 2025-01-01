<?php 
class client
{
    private $id;
    private $name;
    private $email;
    private $pass;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setName($name)
    {
        if(!$name){
            echo "Name is required";
            return;
        }
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    // public function __construct($id, $name, $email, $pass)
    // {
    //     echo "Product object is created\n";
    //     $this->id = $id;
    //     $this->name = $name;
    //     $this->email = $email;
    //     $this->pass = $pass;
    // }

    // public function __destruct()
    // {
    //     echo "Product object is destroyed\n";
    // }
}


?>