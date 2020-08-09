<?php
class UserModel extends Model{
    //where we make our queries
    public function Index(){
        $this->query('SELECT * FROM users');
        $rows = $this->resultSet();
        return $rows;
    }


    public function Register(){
        $this->query('SELECT * FROM users');
        $rows = $this->resultSet();
        return $rows;
    }

    public function Login(){
        $this->query('SELECT * FROM users');
        $rows = $this->resultSet();
        return $rows;
    }


}
