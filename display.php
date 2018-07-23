
<?php
 if(isset($_POST['submit'])){
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$birthDate= $year.'-'.$month.'-'.$day;

$dob = new DateTime($birthDate);

$interval = $dob->diff(new DateTime);
echo "<br />";
echo "Date of Birth (yyyy-mm-dd): ".$birthDate;
echo "<br />";
echo "Your Age: ".$interval->y;


}


?>
