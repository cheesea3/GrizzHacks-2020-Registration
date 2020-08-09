<?php
//extends the core controller ot access protected stuff
class Users extends Controller
{

    protected function Index(){
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->Index(), true);
    }


    public function register(){
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->Register(), true);
    }

    public function login(){
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->Login(), true);
    }

}

