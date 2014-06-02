<?php
namespace Controller\Theme\Cloud;

class Index{
	function get(){
		include View('theme/cloud/index.html');
	}
}
class Css{
    function get(){
        include View('theme/cloud_css/index.html');
    }
}
class login{
    function get(){
        include View('theme/cloud_css/login.html');
    }
}

class Module{
    function get($name){
        $name = empty($name) ? "dashboard" : $name;
        include View('theme/cloud/module/'.$name);
    }
}
class Cssmodule{
    function get($name){
        $name = empty($name) ? "dashboard" : $name;
        include View('theme/cloud_css/module/'.str_replace("#","",$name));
    }
}

