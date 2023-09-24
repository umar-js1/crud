<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
   <h2>REGSTERATIIO  FORM</h2>
   <?php 
   if(isset($t1)){
    echo $t1;
   }
   if(isset($ms)){
    echo "<br>.$ms.<br><br>";
   }
   ?>
    <form action="<?= base_url('myReg/savedata')?>" method="post">
        <label for="name">NAME</label>
        <input type="text" name="name"> <br>
        <label for="maIl">mail</label>
        <input type="text" name="mail"> <br>
        <label for="password">PASSWORD</label>
        <input type="password" name="password"> <br>
        <input type="submit" value="proceed"></input>
    </form>
  <a href="<?=base_url('myreg/fetch')?>">
    <button>display</button>
   </a>
  
</body>
</html>














