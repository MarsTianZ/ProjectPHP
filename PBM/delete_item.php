<?php
  error_reporting (0);
  include ("Db_config.php");
$response=array();
if(isset($_GET['ID'] ) ) {
  $id=$_GET['ID'];
  $item=$_GET['Item'];

  $result = mysqli_query($db, "delete from myorder_210021 where ID='$id' "); 
  $row_count = mysqli_affected_rows();
  if ($row_count>0) {
    $response["success"] = 1;
    $response["message"] = "Deleted Sucessfully.";}
else{
  $response["success"] = 0; 
  $response["message"] ="Failed To Delete";
}
echo json_encode ($response);
}
?>
