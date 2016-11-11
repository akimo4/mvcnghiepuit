<?php

class ErrorController extends Controller {

    public function indexAction(){
        $this->view->render("error/index");
    }

}