<?php
class oop{
    public static $val;
     
    public static function init($var){
        static::$val=$var;
        return new static;      
    }
 
    public static function add($var){
        static::$val+=$var;
        return new static;
    }
 
    public static function sub($var){
        static::$val-=$var;
        return new static;
    }
 
    public static function out(){
        return static::$val;
    }
 
}
 
echo oop::init(10)->add(2)->sub(5)->out(); //Result: 10+2-5=7
echo "<br>"; 
echo oop::sub(2)->out(); //Result: 7-2=5;
?>