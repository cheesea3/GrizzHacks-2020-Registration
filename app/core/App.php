<?php
//what we call in our instance


class App {

    //protected means that it can only be accessed if the class inherits it. it will result in an error outside of said
    //class.

    //default controller is home and default action is index

    private $controller;
    private $action;
    private $request;

    public function __construct($request)    {
        //testing if it's all working
        $this->request = $request;
        //if directory is empty then go home
        if ($this->request['controller'] == "") {
            $this->controller = 'home';
        } else {
            $this->controller = $this->request['controller'];
        }

        //handle action part of the url
        if ($this->request['action'] == "") {
            $this->action = 'index';
        } else {
            $this->action = $this->request['action'];
        }
    }

    public function createController(){
            //check class
            if (class_exists($this->controller)) {
                $parents = class_parents($this->controller);
                //check to see if class is extended
                if (in_array("Controller", $parents)) {
                    //check to see if controller includes the action thats passed in
                    if (method_exists($this->controller, $this->action)) {
                        //instantiate it
                        return new $this->controller($this->action, $this->request);
                    } else {
                        //inform the user the method doesn't exist
                        echo '<h1> Method does not exist</h1>';
                        return;
                    }
                } else {
                    // Core Controller does not exist
                    echo '<h1>Core Controller not exist</h1>';
                    return;
                }
            } else {
                // Controller class does not exist
                echo '<h1>Controller class  not exist</h1>';
                return;
            }
        }


    //explodes and trims the sanitized url
    //sanitizing basically removes unnecessary stuff, for example sanitize_int
    //if we sanitized 12314fasf then it would return 12314
    //explode helps split text for example if i had $roles = user,moderator,admin,owner and i wanted to split it
    //i would explode $roles on ',' and then it would print each role one by one
    //trim gets rid of random stuff so if i trimmed 12314fasf on f then it would return 12314as
    public function parseUrl(){
    //check if this url is set
//this has been taken care of .htaccess
    }

}
