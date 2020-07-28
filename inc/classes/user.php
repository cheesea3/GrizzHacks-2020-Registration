<?php


class user
{
    private $name;
    private $email;
    private $password;


    function __construct($name, $email, $password, $date){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->date = $date;
    }

    /**
     * @return mixed
     */
     function getName()
    {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword(){
        return $this->password;
    }

    function getRegistrationDate(){
        return $this->date;
    }
}
