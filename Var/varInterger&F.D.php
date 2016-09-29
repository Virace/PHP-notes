<?php
/**
 * Interger&Float(Double)
 * 整型有31个存储位+一个符号位
 * 0  0000000 00000000 00000000 00000000
 * 对于32位系统而言最大范围是：-2147483648~2147483647
 * PHP不支持无符号整数（意思就是整型最大就31个储存位，例如2147483648 就是float型）
 */

          $a=10;
          $b=077;
          $c=0xFF;
          echo $a."<br>".$ba."<br>".$c."<br>";//echo会以十进制方式输出

/**
 * 浮点型
 * 科学计数法
 * 浮点数是一个近似数(例如:js中0.1+0.2 结果是0.299999后面无限)，不能用等号判断两个数是否相等
 */
          $a=1.234;
          $a=12e3;//12的3次方
          $a=7e-10;//7的-10次方


 ?>
