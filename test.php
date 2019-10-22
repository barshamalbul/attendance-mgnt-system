<form action="#" method="post">
<input type="date" name="date">
<input type="submit" value="send" name="send">
</form>


<?php
if(isset($_POST['send']))
{
 
$date=$_POST['date'];
    if((time()-(60*60*24*365*3))<strtotime($date))
    {
        echo "future date selected";
    }
    else
    {
        echo "past date selected";
    }

}
?>