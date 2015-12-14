<?php 
class ControllerCore{
	/*
     * VARS
     */
    var $vars = Array();
    var $layout = DEFAULT_LAYOUT;

    public function set($d)
    {
        $this->vars = array_merge($this->vars,$d);
    }

    public function setLayout($layout_name){
        $this->layout = $layout_name;
    }

    public function redirect($uri){
        header('Location: '.WEBROOT.$uri);
        exit;
    }

    public function render($filename)
    {
        extract($this->vars);

        $folder = strtolower( preg_replace('#Controller#', '', get_class($this)) );
        ob_start();
        require(ROOT.'views/'. $folder .'/'.$filename.'.php');
        $content_for_layout = ob_get_clean();
        if($this->layout == false)
        {
            echo $content_for_layout;
        }
        else
        {
            require(ROOT.'layouts/'.$this->layout.'.php');
        }
    }

}