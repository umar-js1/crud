
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile No</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($students as $student) { ?>
        <tr>
            <td><?php echo $student->id; ?></td>
            <td><?php echo $student->name; ?></td>
            <td><?php echo $student->email; ?></td>
            <td><?php echo $student->mobile_no; ?></td>
            <td>
                <a href="<?=base_url('student/edit/' . $student->id); ?>">Update</a>
                <a href="<?=base_url('student/delete/' . $student->id); ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>

</table>
<a href="<?=base_url('student')?>">
     <button>register form</button></a>












