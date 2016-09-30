<?php
/**
 * PHP的数据类型之间的转换和检测
 *
 * 强制转换
 *
 * getType(变量);
 * setType(变量,类型);
 * 变量在使用时前面增加 (类型)
 * intval();floatval();strval();
 */
          $a=10;
          settype($a, "String");
          echo gettype($a);
          echo "<br>";
          echo gettype((double)$a);
          echo "<br>";
          echo gettype(intval($a));




/**
 * 自动转换
 *
 * 其他细节问题不再赘述和C相似
 */
          $a=10;
          $b=24.5;
          $a=$a+$b;
          echo var_dump($a);

 ?>
