<?php
//$q = intval($_GET[q]);
$con = mysqli_connect('localhost','root','','devtools');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"tools");

$q = 1;
//$sql="SELECT * FROM tools WHERE recid = '".$q."'";
$sql="SELECT * FROM tools";
$result = mysqli_query($con,$sql);

//$name = "hello";
echo  "{ ".'"records": [';
while($row = mysqli_fetch_array($result)) {   
     $name = $row['name'];
     $libtype = $row['libtype'];
     $libsrc = $row['libsrc'];
echo  '{ "name": "'.$name.'", "libtype": "'.$libtype.'", "libsrc": "'.$libsrc.'"},';
}
echo  ' ]' . ' } ';
mysqli_close($con);
?>


