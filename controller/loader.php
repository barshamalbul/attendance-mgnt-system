<?php
$result=mysqli_query($con,$sql);
while($row= mysqli_fetch_array($result))
{
 ?>
 <tr class="odd gradeX">
<td>   <?php echo($row['Sid']); ?></td>
<td> <?php echo($row['Sname']); ?></td>
<td> <?php echo($row['classs']); ?></td>
<td> <?php echo($row['section']); ?></td>
<td> <?php echo($row['Sid']); ?></td>
<td> <?php echo($row['Scontact']); ?></td>
<td> <?php echo($row['Sdob']); ?></td>
<td> <?php echo($row['date']); ?></td>
<td> <?php echo($row['Sgender']); ?></td>

</tr>
<?php } ?>