<pre>
          /**
           * 可变变量
           * 双$类似于C语言取值，看作于$($two)括号内先取值 后声明变量
           * $必须挨在一起可以无限叠加
           * @var string
           */
变量声明如下：
          $one="two";
          $$one="three";
          $$$one="four";
          $$$$one="five";
</pre>
<?php
/**
 * 可变变量
 * 双$类似于C语言取值，看作于$($two)括号内先取值 后声明变量
 * $必须挨在一起可以无限叠加
 * @var string
 */
          $one="two";
          $$one="three";
          echo $two;
          unset($one);
          unset($two);
          echo "<br>";
          #####################分隔符####################
                    $one="two";
                    $$one="three";
                    $$$one="four";
                    $$$$one="five";

                    echo '$one='.$one."<br>";
                    echo '$$one='.$$one."<br>";
                    echo '$$$one='.$$$one."<br>";
                    echo '$$$$one='.$$$$one."<br>";
                    echo '$two='.$two."<br>";
                    echo '$three='.$three."<br>";
                    echo '$four='.$four."<br>";
 ?>
<a href="http://www.shucunwang.com/RunCode/php/" target="_blank">php在线测试</a>
