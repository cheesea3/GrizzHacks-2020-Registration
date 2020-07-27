<?php


class user
{
    private $name;
    private $email;
    private $password;


    function __construct($name, $email, $password ){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
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
        $mydate=getdate(date("U"));
        return "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
    }
}
