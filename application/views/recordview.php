<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
if(isset ($res)){  
   print_r($data);
   
?>
    <?php  } else {
        ?>
    <h2>DISPLAY RECORDS</h2>
<table>
<th>id
  </th>
  <th>name
  </th> <th>
 email
  </th> <th>
  
pass
  </th>
    <?php
    foreach ($data as $key ) { ?>
         <tr>
         <td><?=$key->student_ID?></td>
    <td><?=$key->student_NAME?></td>
    <td><?=$key->student_EMAIL?></td>
    <td><?=$key->student_PASS?></td>
    <td> <a method="get" href  ="<?=base_url('myreg/edit/'.$key->student_ID)?>">edit</td>
   </tr>
   <?php }
    ?>
   </table> <?php
    }
    ?>
</body>
</html>