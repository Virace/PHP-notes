<?php
/**
 * 自加自减运算细节
 *
 * boolean、String自加自减 与 $a=$a+1 不同
 *
 * echo 输出boolean型 true为1 false为空
 * 布尔型不能自加自减~ 没变化
 *
 * String类型自加自减 字母顺序变化 如果单个字符超过z 则进一位变成aa。
 */
          $a=true;
          $a--;
          var_dump($a);
          $aa="y";
          $aa++;
          var_dump($aa);//z
          $aa++;
          var_dump($aa);//aa
          $aa++;
          var_dump($aa);//ab
          $aaa="a";
          $aaa--;
          var_dump($aaa);//a
 ?>
