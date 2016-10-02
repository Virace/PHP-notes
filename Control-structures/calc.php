<!DOCTYPE html>
<?php if(isset($_POST['sub']))var_dump( $_POST) ?>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <title>简单计算器</title>
          <?php
                    $c="";
                    $flag=false;
                    if(isset($_POST['sub'])){
                              $a=$_POST['a'];
                              $b=$_POST['b'];
                              if ($_POST['a']!=""&&$_POST['b']!=""&& is_numeric($a)&& is_numeric($b)){$flag=true;}//错误可以细分
                              else $error='输入错误或未输入';
                      if($flag){
                                        switch($_POST['operator'])
                                        {         case '+' : $c=$a+$b;break;
                                                  case '-' : $c=$a-$b;break;
                                                  case 'x' : $c=$a*$b;break;
                                                  case '/' : $c=$a/$b;break;
                                                  case '%' : $c=$a%$b;break;
                                        }
                       }
                  }

           ?>
</head>
<body>
                    <form class="calc" action="" method="post">
                              <input type="text" name="a" value="<?php echo $a?>">
                              <select class="operator" name="operator" value="">
                                        <option value="+" <?php echo $_POST['operator']=='+'?'selected':'' ?>>+</option>
                                        <option value="-" <?php if($_POST['operator']=='-')echo "selected"?>>-</option>
                                        <option value="x"<?php if($_POST['operator']=='x')echo "selected"?>>x</option>
                                        <option value="/"<?php if($_POST['operator']=='/')echo "selected"?>>/</option>
                                        <option value="%"<?php if($_POST['operator']=='%')echo "selected"?>>%</option>
                              </select>
                              <input type="text" name="b" value="<?php echo $b?>">
                              <input type="submit" name="sub" value="计算">
                              <br>
                              <h1><?php if($flag)echo $c; else echo $error;?></h1>
                    </form>


</body>
</html>
