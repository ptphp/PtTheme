<?php
class Html{
    static function get_version(){
        $version = isset(Pt::$config['version'])?Pt::$config['version']:"0.0.1";
        return $version;
    }
    static function get_host(){
        $host = isset(Pt::$config['static_url'])?Pt::$config['static_url']:"/static";
        return $host;
    }
    static function link_static($url){
        $host = self::get_host();
        $version =self::get_version();
        echo '<link rel="stylesheet" href="'.$host."/".$url."?v=".$version.'">'.PHP_EOL;
    }
    static function script_static($url){
        $host = self::get_host();
        $version =self::get_version();
        echo '<script src="'.$host."/".$url."?v=".$version.'"></script>'.PHP_EOL;
    }
    static function script_statics($theme,$files){
        foreach($files as $file){
            self::script_static($theme."/".$file);
        }
    }
    static function link_statics($theme,$files){
        foreach($files as $file){
            self::link_static($theme."/".$file);
        }
    }
}