<?php
//abstract class, other controllers will EXTEND from this.
abstract class Controller{
    protected $action = 'index';
    protected $request = [];

    public function __construct($action, $request)
    {
        //assign properties
        $this->action = $action;
        $this->request = $request;
    }

    public function executeAction(){
        return $this->{$this->action}();
    }

    //return view
    protected function returnView($viewmodel, $fullview){
        //so if we have a user class we want a user folder inside our view
    $view = '../app/views/'.get_class($this). '/'. $this->action.'.php';
    if($fullview) {
        //load main layout file that wraps around our view.

        require '../app/views/main.php';

    } else {
        require($view);
    }
    }
}
