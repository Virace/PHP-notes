<?php
          error_reporting( E_ALL & ~E_NOTICE);
    //Notice: Use of undefined constant ROOT - assumed 'ROOT'
/**
 * 常量：一单声明，这个常量的值就不会改变
 * 1.常量似乎用函数define()声明的
 * 2.如果常量没有声明，则常量名在使用时，会自动转为字符串 但效率低 (与正常字符串生成速度慢8倍)
 */
          define("ROOT", "localhost");
          echo ROOT;



 ?>
