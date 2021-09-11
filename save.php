<?php
//echo '<pre>';
//print_r($_GET);
/*debugger*/
//var_dump();
$studentName=$_POST['studentName'];
$roll=$_POST['roll'];
?>
<table border="1" style="border-collapse: collapse">
    <tr>
        <td>Student Name</td>
        <td>Roll</td>
    </tr>
    <tr>
        <td><?php echo $studentName ?></td>
        <td><?php echo $roll ?></td>
    </tr>
</table>

