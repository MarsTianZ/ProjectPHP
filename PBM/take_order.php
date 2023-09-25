<?php
error_reporting (0);
include ("Db_config.php");
// array for JSON response
$response = array();

if(!(empty($_POST['item_name'])))
{
  $item_name=$_POST['item_name'];
  //echo $item_name;
  $result = mysqli_query($db, "INSERT INTO myorder_210021(Item) VALUES ('$item_name')");

  if ($result > 0) {
  $response["success"] = 1;
  }
  else{
  $response["success"] = 0;
  }
  // echoing JSON response
  echo json_encode ($response);
}
//else{
  //echo "Kosong";
//}
?>
