<?php
//what we call in our instance


class App {

    //protected means that it can only be accessed if the class inherits it. it will result in an error outside of said
    //class.

    //default controller
    protected $controller = 'home';
    //default method
    protected $method = 'index';
    //default parameter
    protected $params = [];

    public function __construct(){
        //testing if it's all working
        echo 'test';
    }


    //explodes and trims the sanitized url
    //sanitizing basically removes unnecessary stuff, for example sanitize_int
    //if we sanitized 12314fasf then it would return 12314
    //explode helps split text for example if i had $roles = user,moderator,admin,owner and i wanted to split it
    //i would explode $roles on ',' and then it would print each role one by one
    //trim gets rid of random stuff so if i trimmed 12314fasf on f then it would return 12314as
    public function parseUrl(){
    //check if this url is set

    }

}
