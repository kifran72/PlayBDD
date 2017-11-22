<?php
class Controller{

    var $vars = array();
    var $layout_Client = 'Default_Client';
    var $layout_Employers = 'Default_Employers';

    function __construct(){
        if(isset($_POST)){
            $this->data = $_POST;
        }
        if(isset($this->models)){
            foreach($this->models as $v){
                $this->loadModel($v); 
            }
        }
    }

    function set($d){
        $this->vars = array_merge($this->vars,$d);
    }

    function render($filename){
        extract($this->vars);
        ob_start(); 
        require(ROOT.'vues/'.get_class($this).'/'.$filename.'.php');
        $content_for_layout = ob_get_clean();
        if($this->layout==false){
            echo $content_for_layout;
        }else{
            require(ROOT.'Vues/layout/'.$this->layout.'.php');
        }
    }

    function loadModel($name){
        require_once(ROOT.'Modeles/'.strtolower($name).'.php');
        $this->$name = new $name(); 
    }
}
?>