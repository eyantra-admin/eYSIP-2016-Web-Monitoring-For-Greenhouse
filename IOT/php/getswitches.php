<?php
$dbc=mysqli_connect('localhost','root','ankitg444','IOT');
$query="SELECT * FROM switches";
$result=mysqli_query($dbc,$query);
$result_array=array();

while($row=mysqli_fetch_array($result)){
 $row_array['deviceId']=$row['deviceId'];
 $row_array['switchId']=$row['switchId'];
 $row_array['groupId']=$row['groupId'];
 $row_array['action']=$row['action'];
 array_push($result_array, $row_array);
}
echo json_encode($result_array);
?>