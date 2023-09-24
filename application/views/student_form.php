
<?php
if (isset($value)){
   ?>
   <form method="post" action="<?=base_url('student/update/' . $value->id); ?>">Update</a>
    <label for="name"   >Name</label>
    <input type="text" value="<?= $value->name ?>" name="name" required><br>
    <label for="email" >Email:</label>
    <input type="email" value="<?= $value->email ?>" name="email" required><br>
    <label for="mobile_no">Mobile No:</label>
    <input type="number"  value="<?= $value->mobile_no ?>" name="mobile_no" required><br>
    <button type="submit">Update</button>

</form>
<a href="<?= base_url('student/read') ?>">show rec6rd</a>
<?php
}else {
?>
<form method="post" action="<?=base_url('student/create'); ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" required><br>
    <label for="email">Email:</label>
    <input type="email" name="email" required><br>
    <label for="mobile_no">Mobile No:</label>
    <input type="text" name="mobile_no" required><br>
    <button type="submit">Register</button>

</form>
<a href="<?= base_url('student/read') ?>">show rec6rd</a>

<?php
}
?>
<?php

 if(isset($register)){
    ?>
    <h4>register success !!<h4>
        <?php
        $register =false;

}?>









