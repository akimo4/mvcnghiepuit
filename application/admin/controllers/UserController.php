<?php

class UserController extends Controller{

    public function __construct($params){
        parent::__construct($params);
        $this->template->setFolderTemplate("admin/main/");
        $this->template->setFileTemplate("index.php");
        $this->template->setFileConfig("template.ini");
        $this->template->load();
    }

    public function indexAction(){
        $this->view->setTitle("Quản Lý Người Dùng");
        $this->view->render("user/index");
    }

    public function addAction(){
        $this->view->setTitle("Thêm Người Dùng");
        $this->view->appendCSS(array("user/css/add.css"));
        $this->view->appendJS(array("user/js/add.js"));
        $this->view->render("user/add");
    }

}