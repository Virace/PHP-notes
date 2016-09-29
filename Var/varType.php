<?php
/**
 * 变量得类型
 * PHP支持巴中原始类型----var_dump().
 * --四种标量类型：布尔型(boolean)、整型(integer)、浮点型(float、浮点数 double)、字符串(String)
 * --两种复合类型：数组(Array)、对象(Object);
 * --两种特殊类型：资源(Resource)、NULL。
 *
 */
          echo "以下是四种标量类型：，<br>";
          $var=true;
          var_dump($var);
          $var=1;
          var_dump($var);
          $var=1.11111;
          var_dump($var);
          $var="Hello World!";
          var_dump($var);

          echo "以下是两种复合类型：，<br>";
          $var = Array(1,2,3,4 );
          var_dump($var);
          /**
           *
           */
          class Demo          {
                    var $a=1;
                    var $b=2;
                    var $c=3;
          }

          $var = new demo();
          var_dump($var);

          echo "以下是两种特殊类型：，<br>";
          $var=mysqli_connect("localhost","root","");//数据库连接语句
          var_dump($var);

          $var=NULL;
          var_dump($var);

 ?>
