<?php
/**
 * 变量的引用
 * 相当于C语言的取地址，但是并不能输出准确地址。
 * 类似与指针
 * @var integer
 */
          $a=10;
          $c=&$a;

          $c=100;
          echo $c;
          echo "<br>";
          echo $a;
          echo "<br>";

          $a=200;
          echo $c;
          echo "<br>";
          echo $a;
 ?>
 <pre>
           /**
            * 变量的引用
            * 相当于C语言的取地址，但是并不能输出准确地址。
            * 类似与指针
            * @var integer
            */
           $a=10;
           $c=&$a;

           $c=100;
           echo $c;
           echo $a;

           $a=200;
           echo $c;
           echo $a;
 </pre>
<a href="http://www.shucunwang.com/RunCode/php/" target="_blank">php在线测试</a>
