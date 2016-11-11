<?php
	
class Bootstrap{

    private $params;
    private $controllerObject;

    public function init(){
        $this->setParams();
        $controllerName = ucfirst($this->params["controller"])."Controller";
        $filePath = APPLICATION_PATH.$this->params["module"].DS."controllers".DS.$controllerName.".php";
        if(file_exists($filePath)){
            $this->loadController($filePath,$controllerName);
            $this->callMethod();
        }
    }

    private function setParams(){
        $this->params = array_merge($_GET,$_POST);
        $this->params["module"] = isset($this->params["module"]) ? $this->params['module'] : DEFAULT_MODULE;
        $this->params["controller"] = isset($this->params["controller"]) ? $this->params["controller"] : DEFAULT_CONTROLLER;
        $this->params["action"] = isset($this->params["action"]) ? $this->params["action"] : DEFAULT_ACTION;
    }

    private function callMethod(){
        $actionName = $this->params["action"]."Action";
        if(method_exists($this->controllerObject,$actionName)){
            $this->controllerObject->$actionName();
        }else{
            $this->error();
        }
    }

    private function loadController($filePath,$controllerName){
        require_once $filePath;
        $this->controllerObject = new $controllerName($this->params);
    }

    public function error(){
        require_once(APPLICATION_PATH."default".DS."controllers".DS."ErrorController.php");
        $errorController = new ErrorController;
        $errorController->setView("default");
        $errorController->indexAction();
    }
		
}
	
?>