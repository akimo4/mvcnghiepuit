<?php
	class Controller{

        protected $params;
        protected $view;
        protected $model;
        protected $template;

        public function __construct($params){
            $this->setModel($params["module"],$params["controller"]);
            $this->setView($params["module"]);
            $this->setTemplate();
            $this->setParams($params);
        }

        public function setModel($moduleName,$modelName){
            $modelName = ucfirst($modelName)."Model";
            $path = APPLICATION_PATH.$moduleName.DS."models".DS.$modelName.".php";
            if(file_exists($path)){
                require_once($path);
                $this->model = new $modelName();
            }
        }

        public function getModel(){
            return $this->model;
        }

        public function setParams($params){
            $this->params = $params;
        }

        public function getParams(){
            return $this->params;
        }

        public function getView(){
            return $this->view;
        }

        public function setView($module){
            $this->view = new View($module);
        }

        public function setTemplate(){
            $this->template = new Template($this);
        }

        public function getTemplate(){
            return $this->template;
        }
		
	}
?>