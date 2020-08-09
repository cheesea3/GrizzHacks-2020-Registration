<?php
//extends the core controller ot access protected stuff
class Users extends Controller
{
    protected function Index(){
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->Index(), true);
    }
}

