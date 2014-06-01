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
class Module{
    function get(){
        $name = isset($_GET['name'])?$_GET['name']:"index";
        include View('theme/cleanzone/module/'.$name);
    }
}
