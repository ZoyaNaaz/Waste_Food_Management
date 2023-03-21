
<?php
require 'connection.php';

if(isset($_POST["submit3"])){
  $fname = $_POST["fname"];
  $phone = $_POST["phone"];
  $address = $_POST["address"];
  $Quantity = $_POST["Quantity"];
  $note = $_POST["note"];

  $languages = $_POST["languages"];
  $language = "";
  foreach($languages as $row){
    $language .= $row . ",";
  }

  $query = "INSERT INTO tb_data2 VALUES('', '$fname', '$phone', '$address', '$Quantity', '$language', '$note')";
  mysqli_query($conn,$query);
$url = "home.php";
header("Location: $url");
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}
?>
