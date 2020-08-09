<?php
class UserModel extends Model{
    //where we make our queries
    public function Index(){
        $this->query('SELECT * FROM users');
        $rows = $this->resultSet();
        print_r($rows);
    }
}
