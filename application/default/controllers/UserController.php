<?php

class UserController extends Controller{

    public function __construct($params){
        parent::__construct($params);
        $this->template->setFolderTemplate("default/main/");
        $this->template->setFileTemplate("index.php");
        $this->template->setFileConfig("template.ini");
        $this->template->load();
    }

    public function indexAction(){
        $this->view->setTitle("Danh Sách User");
        $this->view->render("user/index");
    }


}