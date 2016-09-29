<?php
/**
 * 数组
 */
          $arr = array(1,2,3,4,5);
          var_dump($arr);
/**
 * 对象
 */
class Preson{
          var $name;
          var $age;
          var $sex;
          function eat(){
          }
}
          $person=new Preson();
          var_dump($person);
/**
 * 资源
 */
          $fileName="testTxt.txt";
          $file= fopen($fileName,"r");
          echo fread($file);
          fclose($file);


/**
 * NULL  ==unset()
 */


/**
 * 伪类型 number mixed(全部) callback(可以传入函数)
 * @param [number] $a [description]
 * @param [number] $b [description]
 */
          function add($a,$b){
                    return $a+$b;
          }

 ?>
