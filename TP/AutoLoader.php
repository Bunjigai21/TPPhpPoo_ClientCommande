<?php

class AutoLoader {
  static function register(){
    spl_autoload_register(array(__CLASS__, 'autoLoad'));
  }

  static function autoLoad($class_name){
    require 'classes/' . $class_name . '.php';

  }
}?>